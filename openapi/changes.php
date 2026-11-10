<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

declare(strict_types=1);

/**
 * Summarizes, in Markdown, the differences between two versions of the Dendreo spec:
 * operations, schemas and schema properties added or removed. Used as the description of the
 * pull request opened by the `.github/workflows/openapi-update.yml` workflow.
 *
 * Dendreo does not change `info.version` between versions, so the content is compared.
 *
 * Usage: php openapi/changes.php <previous-openapi.yaml> <openapi.yaml>
 */

require __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

[, $previousFile, $currentFile] = $argv + [null, null, null];
if ($previousFile === null || $currentFile === null) {
    fwrite(STDERR, "Usage: php openapi/changes.php <previous-openapi.yaml> <openapi.yaml>\n");
    exit(1);
}

$previous = Yaml::parseFile($previousFile);
$current = Yaml::parseFile($currentFile);

/**
 * @param array<string, mixed> $spec
 *
 * @return array<string, string> operationId => `GET /v2/participants`
 */
$operations = static function (array $spec): array {
    $result = [];
    foreach ($spec['paths'] ?? [] as $path => $pathItem) {
        foreach ($pathItem as $method => $operation) {
            if (is_array($operation) && isset($operation['operationId'])) {
                $result[$operation['operationId']] = strtoupper((string) $method) . ' ' . $path;
            }
        }
    }
    ksort($result);

    return $result;
};

/**
 * @param array<string, mixed> $spec
 *
 * @return array<string, list<string>> schema => property names
 */
$schemas = static function (array $spec): array {
    $result = [];
    foreach ($spec['components']['schemas'] ?? [] as $name => $schema) {
        $result[(string) $name] = array_map(strval(...), array_keys($schema['properties'] ?? []));
    }
    ksort($result);

    return $result;
};

$code = static fn (string $value): string => '`' . $value . '`';

$lines = [];
$breaking = false;

$previousOperations = $operations($previous);
$currentOperations = $operations($current);
foreach (array_diff_key($currentOperations, $previousOperations) as $id => $route) {
    $lines['operations'][] = sprintf('- ➕ %s (%s)', $code($id), $code($route));
}
foreach (array_diff_key($previousOperations, $currentOperations) as $id => $route) {
    $lines['operations'][] = sprintf('- ➖ %s (%s)', $code($id), $code($route));
    $breaking = true;
}

$previousSchemas = $schemas($previous);
$currentSchemas = $schemas($current);
foreach (array_diff_key($currentSchemas, $previousSchemas) as $name => $properties) {
    $lines['schemas'][] = '- ➕ ' . $code($name);
}
foreach (array_diff_key($previousSchemas, $currentSchemas) as $name => $properties) {
    $lines['schemas'][] = '- ➖ ' . $code($name);
    $breaking = true;
}
foreach (array_intersect_key($currentSchemas, $previousSchemas) as $name => $properties) {
    $added = array_diff($properties, $previousSchemas[$name]);
    $removed = array_diff($previousSchemas[$name], $properties);
    if ($added === [] && $removed === []) {
        continue;
    }
    $changes = array_merge(
        array_map(static fn (string $property) => '+' . $property, $added),
        array_map(static fn (string $property) => '-' . $property, $removed),
    );
    $lines['properties'][] = sprintf('- %s: %s', $code($name), implode(', ', array_map($code, $changes)));
    $breaking = $breaking || $removed !== [];
}

$titles = [
    'operations' => 'Operations',
    'schemas' => 'Schemas',
    'properties' => 'Properties',
];

$output = [];
if ($breaking) {
    $output[] = '> [!WARNING]';
    $output[] = '> Some operations, schemas or properties were removed: this update may break the compatibility of the SDK.';
    $output[] = '';
}
foreach ($titles as $key => $title) {
    if (isset($lines[$key])) {
        $output[] = '### ' . $title;
        $output[] = '';
        array_push($output, ...$lines[$key]);
        $output[] = '';
    }
}
if ($lines === []) {
    $output[] = 'No operation, schema or property was added or removed: descriptions, types or examples changed only.';
    $output[] = '';
}

echo implode("\n", $output);
