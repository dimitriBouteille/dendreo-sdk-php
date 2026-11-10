<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

declare(strict_types=1);

/**
 * Pre-processes the Dendreo OpenAPI spec before code generation.
 *
 * 1. Filters: groups every `filter[xxx]` query parameter of an operation into a single `filter`
 *    parameter (object, `style: deepObject`) backed by a schema such as `ParticipantFilter`.
 * 2. Inline schemas: extracts inline request bodies and responses into `components/schemas`
 *    with stable names (`AuthenticationError`, `BudgetsDestroy422Response`...).
 *    Must run before step 4: the generator names inline schemas after the operationId.
 * 3. Dates: date-time strings (`Y-m-d H:i:s`, described by a pattern) get `format: date-time`.
 * 4. Services: one service per resource, derived from the operationId prefix
 *    (`participants.index` -> tag `Participants` -> `ParticipantsApi`). This also removes the
 *    accents of the original tags (`Tâches` -> `TchesApi`). Combined with the
 *    `removeOperationIdPrefix` option (config.yaml), the method is `ParticipantsApi::index()`.
 *
 * The pre-processed spec is written to `<work-dir>/openapi.yaml`, and `<work-dir>/out` (the
 * generator output) is emptied so that no stale file survives a regeneration.
 *
 * Usage: php openapi/preprocess.php openapi/openapi.yaml var/openapi
 */

require __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

[, $input, $workDir] = $argv + [null, null, null];
if ($input === null || $workDir === null) {
    fwrite(STDERR, "Usage: php openapi/preprocess.php <openapi.yaml> <work-dir>\n");
    exit(1);
}
$output = rtrim($workDir, '/') . '/openapi.yaml';

const DATE_TIME_PATTERN = '^\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}$';
const HTTP_METHODS = ['get', 'put', 'post', 'delete', 'options', 'head', 'patch', 'trace'];

$spec = Yaml::parseFile($input);
$report = [];

$studly = static fn (string $value): string => str_replace(' ', '', ucwords(preg_replace('/[^a-zA-Z0-9]+/', ' ', $value)));

/**
 * @param callable(array $operation, string $path, string $method): array $callback
 */
$eachOperation = static function (array &$spec, callable $callback): void {
    foreach ($spec['paths'] as $path => &$pathItem) {
        foreach ($pathItem as $method => &$operation) {
            if (in_array($method, HTTP_METHODS, true)) {
                $operation = $callback($operation, $path, $method);
            }
        }
        unset($operation);
    }
    unset($pathItem);
};

$addSchema = static function (array &$spec, string $name, array $schema): string {
    if (isset($spec['components']['schemas'][$name]) && $spec['components']['schemas'][$name] !== $schema) {
        throw new \RuntimeException(sprintf('Schema "%s" already exists with a different definition.', $name));
    }
    $spec['components']['schemas'][$name] = $schema;

    return '#/components/schemas/' . $name;
};

// 1. Filters --------------------------------------------------------------------------------------

/**
 * `#/components/schemas/ParticipantCollection` -> `ParticipantFilter`, otherwise from the operationId.
 */
$filterSchemaName = static function (array $operation) use ($studly): string {
    foreach ($operation['responses'] ?? [] as $code => $response) {
        $ref = $response['content']['application/json']['schema']['$ref'] ?? null;
        if (str_starts_with((string) $code, '2') && is_string($ref) && str_ends_with($ref, 'Collection')) {
            return substr(basename($ref), 0, -strlen('Collection')) . 'Filter';
        }
    }

    return $studly($operation['operationId']) . 'Filter';
};

$eachOperation($spec, static function (array $operation, string $path, string $method) use (&$spec, &$report, $filterSchemaName, $addSchema): array {
    $properties = [];
    $parameters = [];
    $insertAt = null;
    foreach ($operation['parameters'] ?? [] as $parameter) {
        if (($parameter['in'] ?? null) === 'query' && preg_match('/^filter\[([^\]]+)\]$/', $parameter['name'] ?? '', $m)) {
            $schema = $parameter['schema'] ?? ['type' => 'string'];
            if (isset($parameter['description']) && !isset($schema['description'])) {
                $schema['description'] = $parameter['description'];
            }
            $properties[$m[1]] = $schema;
            $insertAt ??= count($parameters);
            continue;
        }
        $parameters[] = $parameter;
    }

    if ($properties === []) {
        return $operation;
    }

    $schemaName = $filterSchemaName($operation);
    $ref = $addSchema($spec, $schemaName, ['type' => 'object', 'properties' => $properties]);

    array_splice($parameters, $insertAt, 0, [[
        'in' => 'query',
        'name' => 'filter',
        'required' => false,
        'style' => 'deepObject',
        'explode' => true,
        'description' => 'Filtres de la liste.',
        'schema' => ['$ref' => $ref],
    ]]);
    $operation['parameters'] = $parameters;
    $report[] = sprintf('[filter] %s %s -> %s (%d filters)', strtoupper($method), $path, $schemaName, count($properties));

    return $operation;
});

// 2. Inline schemas -------------------------------------------------------------------------------

/**
 * Same inline schema used by several operations -> one shared component.
 */
$sharedResponseNames = [
    '401' => 'AuthenticationError',
];

$eachOperation($spec, static function (array $operation) use (&$spec, &$report, $studly, $addSchema, $sharedResponseNames): array {
    $prefix = $studly($operation['operationId']);

    $body = $operation['requestBody']['content']['application/json']['schema'] ?? null;
    if (is_array($body) && !isset($body['$ref'])) {
        $name = $prefix . 'Request';
        $operation['requestBody']['content']['application/json']['schema'] = ['$ref' => $addSchema($spec, $name, $body)];
        $report[] = sprintf('[inline] %s request body -> %s', $operation['operationId'], $name);
    }

    foreach ($operation['responses'] ?? [] as $code => $response) {
        $schema = $response['content']['application/json']['schema'] ?? null;
        if (!is_array($schema) || isset($schema['$ref'])) {
            continue;
        }

        // `204 No Content` is documented with an empty nullable object: drop it, the method returns void.
        if ((string) $code === '204') {
            unset($operation['responses'][$code]['content']);
            continue;
        }

        $name = $sharedResponseNames[(string) $code] ?? $prefix . $code . 'Response';
        $isNew = !isset($spec['components']['schemas'][$name]);
        $operation['responses'][$code]['content']['application/json']['schema'] = ['$ref' => $addSchema($spec, $name, $schema)];
        if ($isNew) {
            $report[] = sprintf('[inline] %s response %s -> %s', $operation['operationId'], $code, $name);
        }
    }

    return $operation;
});

// 3. Dates ----------------------------------------------------------------------------------------

$dateTimeCount = 0;
$addDateTimeFormat = static function (array $node) use (&$addDateTimeFormat, &$dateTimeCount): array {
    if (($node['type'] ?? null) === 'string' && ($node['pattern'] ?? null) === DATE_TIME_PATTERN && !isset($node['format'])) {
        $node['format'] = 'date-time';
        unset($node['pattern']);
        $dateTimeCount++;
    }
    foreach ($node as $key => $value) {
        if (is_array($value)) {
            $node[$key] = $addDateTimeFormat($value);
        }
    }

    return $node;
};
$spec = $addDateTimeFormat($spec);
$report[] = sprintf('[date-time] %d fields', $dateTimeCount);

// 4. Services & methods ---------------------------------------------------------------------------

$tags = [];
$methodsByTag = [];
$eachOperation($spec, static function (array $operation) use (&$tags, &$methodsByTag, $studly): array {
    [$resource, $action] = explode('.', $operation['operationId'], 2) + [1 => null];
    if ($action === null) {
        throw new \RuntimeException(sprintf('Unexpected operationId "%s" (expected "resource.action").', $operation['operationId']));
    }

    $tag = $studly($resource);
    $method = lcfirst($studly($action));
    if (isset($methodsByTag[$tag][$method])) {
        throw new \RuntimeException(sprintf('Duplicate method %s::%s()', $tag, $method));
    }
    $methodsByTag[$tag][$method] = true;
    $tags[$tag] = ['name' => $tag];

    // The operationId must stay unique in the spec: the `resource.` prefix is removed at generation
    // time by the `removeOperationIdPrefix` option (see config.yaml).
    $operation['tags'] = [$tag];

    return $operation;
});
ksort($tags);
$spec['tags'] = array_values($tags);
foreach ($methodsByTag as $tag => $methods) {
    $report[] = sprintf('[service] %sApi: %s', $tag, implode(', ', array_keys($methods)));
}

// Dump --------------------------------------------------------------------------------------------

/**
 * PHP cannot tell `{}` from `[]` once parsed: restore empty maps where OpenAPI expects an object.
 */
$restoreEmptyMaps = static function (array $node) use (&$restoreEmptyMaps): array {
    foreach ($node as $key => $value) {
        if (!is_array($value)) {
            continue;
        }
        if ($value === [] && in_array($key, ['items', 'properties', 'schema', 'content', 'headers', 'additionalProperties'], true)) {
            $node[$key] = new \stdClass();
            continue;
        }
        $node[$key] = $restoreEmptyMaps($value);
    }

    return $node;
};

// Reset the work directory.
$outDir = rtrim($workDir, '/') . '/out';
if (is_dir($outDir)) {
    $files = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($outDir, FilesystemIterator::SKIP_DOTS),
        RecursiveIteratorIterator::CHILD_FIRST,
    );
    foreach ($files as $file) {
        $file->isDir() && !$file->isLink() ? rmdir($file->getPathname()) : unlink($file->getPathname());
    }
} else {
    mkdir($outDir, 0777, true);
}

file_put_contents($output, Yaml::dump($restoreEmptyMaps($spec), 20, 2, Yaml::DUMP_OBJECT_AS_MAP | Yaml::DUMP_EMPTY_ARRAY_AS_SEQUENCE));

echo implode("\n", $report), "\n";
