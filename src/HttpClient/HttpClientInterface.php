<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\HttpClient;

use Dbout\DendreoSdk\Config;
use Dbout\DendreoSdk\Enum\Method;
use Dbout\DendreoSdk\Response;

interface HttpClientInterface
{
    /**
     * @param Config $config
     * @param string $requestUrl
     * @param Method $method
     * @param mixed $params
     * @param array<string, mixed>|null $requestOptions
     * @throws \Exception
     * @return Response
     */
    public function requestHttp(
        Config $config,
        string $requestUrl,
        Method $method,
        mixed $params,
        array $requestOptions = null
    ): Response;
}
