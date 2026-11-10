<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

declare(strict_types=1);

/**
 * Lists the generated files of src/, recognized by the notice added by openapi/postprocess.php.
 *
 * Used by the quality tools (rector.php, phpstan.neon via openapi/phpstan.php) to skip the
 * generated code, which is not hand-written and must not be modified.
 *
 * @return list<string> Absolute paths.
 */
return static function (): array {
    $notice = 'Generated from the Dendreo OpenAPI specification, do not edit manually.';
    $src = (string) realpath(__DIR__ . '/../src');

    $result = [];
    $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($src, FilesystemIterator::SKIP_DOTS));
    foreach ($files as $file) {
        if ($file->getExtension() === 'php' && str_contains((string) file_get_contents($file->getPathname()), $notice)) {
            $result[] = $file->getPathname();
        }
    }
    sort($result);

    return $result;
};
