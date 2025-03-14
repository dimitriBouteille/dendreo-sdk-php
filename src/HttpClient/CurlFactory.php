<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\HttpClient;

/**
 * @internal
 * @codeCoverageIgnore
 */
class CurlFactory
{
    /**
     * @param string $url
     * @return CurlRequest
     */
    public function create(string $url): CurlRequest
    {
        return new CurlRequest($url);
    }
}
