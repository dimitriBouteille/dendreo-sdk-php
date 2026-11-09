<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

declare(strict_types=1);

/**
 * Post-processes the generated code and installs it in the package, next to the hand-written code.
 *
 * Each generated PHP file gets:
 * - the header used by the rest of the package (same text as the `header_comment` rule of
 *   .php-cs-fixer.php), instead of the comments the generator puts before `namespace`;
 * - a "do not edit" notice in the class docblock, before its tags.
 *
 * The notice is also how generated files are recognized in the target directory, so that:
 * - the files of the previous generation are removed before installing the new ones (a class
 *   removed from the spec also disappears from the package);
 * - a hand-written file (without the notice) is never overwritten: the script fails before
 *   changing anything.
 *
 * Usage: php openapi/postprocess.php var/openapi/out/src src
 */

const HEADER = <<<'TXT'
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */
TXT;

const GENERATED_NOTICE = 'Generated from the Dendreo OpenAPI specification, do not edit manually.';

[, $source, $target] = $argv + [null, null, null];
if ($source === null || $target === null) {
    fwrite(STDERR, "Usage: php openapi/postprocess.php <generator-src-dir> <target-dir>\n");
    exit(1);
}
if (!is_dir($source)) {
    fwrite(STDERR, sprintf("The generator output %s does not exist, did the generation run?\n", $source));
    exit(1);
}

// Transformations ---------------------------------------------------------------------------------

function replaceHeader(string $content, string $path): string
{
    // Everything between `<?php` and the first `declare` / `namespace` is header comments.
    $new = preg_replace(
        '~\A<\?php\s*(?:(?:/\*.*?\*/|//[^\n]*)\s*)*(?=declare|namespace)~s',
        "<?php\n" . HEADER . "\n\n",
        $content,
        1,
        $count,
    );
    if ($count !== 1) {
        throw new RuntimeException(sprintf('Unable to locate the header of %s', $path));
    }

    return $new;
}

function addGeneratedNotice(string $content, string $path): string
{
    // The class / interface / enum declaration, with its docblock if any.
    $pattern = '~^(?<doc>/\*\*(?:(?!\*/).)*\*/\n)?(?<decl>(?:(?:final|abstract|readonly) )*(?:class|interface|enum|trait) \w+)~ms';
    if (!preg_match($pattern, $content, $m, PREG_OFFSET_CAPTURE)) {
        throw new RuntimeException(sprintf('Unable to locate the class declaration of %s', $path));
    }

    $lines = [];
    foreach (explode("\n", $m['doc'][0] ?? '') as $line) {
        $line = rtrim(preg_replace('~^\s*(/\*\*|\*/|\*)\s?~', '', $line));
        if ($line !== GENERATED_NOTICE) {
            $lines[] = $line;
        }
    }

    // Description first, then the tags (`@package`, `@implements`...).
    $firstTag = null;
    foreach ($lines as $i => $line) {
        if (str_starts_with($line, '@')) {
            $firstTag = $i;
            break;
        }
    }
    $description = rtrimBlock(ltrimBlock($firstTag === null ? $lines : array_slice($lines, 0, $firstTag)));
    $tags = rtrimBlock($firstTag === null ? [] : array_slice($lines, $firstTag));

    $body = [...$description, ...($description === [] ? [] : ['']), GENERATED_NOTICE, ...($tags === [] ? [] : ['']), ...$tags];
    $doc = "/**\n" . implode("\n", array_map(static fn (string $line) => rtrim(' * ' . $line), $body)) . "\n */\n";

    $start = $m['doc'][1] >= 0 && $m['doc'][0] !== '' ? $m['doc'][1] : $m['decl'][1];
    $end = $m['decl'][1];

    return substr($content, 0, $start) . $doc . substr($content, $end);
}

/**
 * @param list<string> $lines
 * @return list<string>
 */
function ltrimBlock(array $lines): array
{
    while ($lines !== [] && $lines[0] === '') {
        array_shift($lines);
    }

    return $lines;
}

/**
 * @param list<string> $lines
 * @return list<string>
 */
function rtrimBlock(array $lines): array
{
    while ($lines !== [] && end($lines) === '') {
        array_pop($lines);
    }

    return array_values($lines);
}

/**
 * PHP files of the target directory that carry the generated notice.
 *
 * @return list<string> Paths relative to the target directory.
 */
function findGeneratedFiles(string $target): array
{
    if (!is_dir($target)) {
        return [];
    }

    $result = [];
    $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($target, FilesystemIterator::SKIP_DOTS));
    foreach ($files as $file) {
        if ($file->getExtension() === 'php' && str_contains(file_get_contents($file->getPathname()), GENERATED_NOTICE)) {
            $result[] = substr($file->getPathname(), strlen($target) + 1);
        }
    }
    sort($result);

    return $result;
}

/**
 * Removes the directories left empty by the removal of the previous generated files.
 */
function removeEmptyDirectories(string $target, array $relativeFiles): void
{
    $dirs = [];
    foreach ($relativeFiles as $relative) {
        for ($dir = dirname($relative); $dir !== '.' && $dir !== ''; $dir = dirname($dir)) {
            $dirs[$dir] = true;
        }
    }
    // Deepest first.
    $dirs = array_keys($dirs);
    usort($dirs, static fn (string $a, string $b) => substr_count($b, '/') <=> substr_count($a, '/'));

    foreach ($dirs as $dir) {
        $path = $target . '/' . $dir;
        if (is_dir($path) && (new FilesystemIterator($path))->valid() === false) {
            rmdir($path);
        }
    }
}

// Run ---------------------------------------------------------------------------------------------

$source = rtrim($source, '/');
$target = rtrim($target, '/');

$previous = findGeneratedFiles($target);
$previousIndex = array_flip($previous);

// 1. Generated files, with their final content.
$generated = [];
$files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source, FilesystemIterator::SKIP_DOTS));
foreach ($files as $file) {
    if ($file->getExtension() !== 'php') {
        continue;
    }

    $relative = substr($file->getPathname(), strlen($source) + 1);
    $content = file_get_contents($file->getPathname());
    $generated[$relative] = addGeneratedNotice(replaceHeader($content, $relative), $relative);
}
ksort($generated);

// 2. Never overwrite a hand-written file: check everything before changing anything.
$conflicts = array_filter(
    array_keys($generated),
    static fn (string $relative) => file_exists($target . '/' . $relative) && !isset($previousIndex[$relative]),
);
if ($conflicts !== []) {
    fwrite(STDERR, sprintf(
        "The following hand-written files of %s/ (without the generated notice) would be overwritten by generated code.\n"
        . "Rename or remove them:\n  - %s\n",
        $target,
        implode("\n  - ", $conflicts),
    ));
    exit(1);
}

// 3. Remove the files of the previous generation.
foreach ($previous as $relative) {
    if (is_file($target . '/' . $relative)) {
        unlink($target . '/' . $relative);
    }
}
removeEmptyDirectories($target, $previous);

// 4. Install the new files.
foreach ($generated as $relative => $content) {
    $destination = $target . '/' . $relative;
    if (!is_dir(dirname($destination))) {
        mkdir(dirname($destination), 0777, true);
    }
    file_put_contents($destination, $content);
}

$removed = array_diff($previous, array_keys($generated));
$added = array_diff(array_keys($generated), $previous);
printf(
    "[postprocess] %d file(s) written to %s/ (%d added, %d removed)\n",
    count($generated),
    $target,
    count($added),
    count($removed),
);
