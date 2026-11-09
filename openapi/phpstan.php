<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

declare(strict_types=1);

/**
 * PHPStan configuration included by phpstan.neon: the generated code is not analysed
 * (it is still read through the autoloader to know the types it declares).
 */
return [
    'parameters' => [
        'excludePaths' => [
            'analyse' => (require __DIR__ . '/generated-files.php')(),
        ],
    ],
];
