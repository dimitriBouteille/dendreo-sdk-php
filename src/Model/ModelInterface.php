<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Model;

interface ModelInterface
{
    /**
     * The properties that should be cast.
     * Used for deserialization
     *
     * @return array<string, string>
     */
    public function getCasts(): array;

    /**
     * Array of property to API format mappings.
     * Used for serialization
     *
     * @return array<string, string>
     */
    public function getApiCasts(): array;

    /**
     * @return array<string, mixed>
     */
    public function getData(): array;
}
