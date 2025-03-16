<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Tests\Unit;

trait JsonLoader
{
    /**
     * @param string|null $path
     * @return string|null
     */
    public function loadJsonAsString(?string $path): ?string
    {
        if ($path === null || $path === '') {
            return null;
        }

        try {
            $json = file_get_contents($path, true);
            return $json !== false ? $json : null;
        } catch (\Exception) {
            return null;
        }
    }
}
