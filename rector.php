<?php
/**
 * Copyright (c) Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

use Rector\Config\RectorConfig;
use Rector\TypeDeclaration\Rector\Property\TypedPropertyFromStrictConstructorRector;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/src',
        __DIR__ . '/tests',
        __DIR__ . '/openapi',
    ])
    // Generated code (see openapi/generated-files.php): never modified.
    ->withSkip((require __DIR__ . '/openapi/generated-files.php')())
    ->withRules([
        TypedPropertyFromStrictConstructorRector::class,
    ])
    ->withPreparedSets(
        codeQuality: true,
    )
    ->withPhpSets(php82: true);
