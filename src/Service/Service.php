<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Service;

use Dbout\DendreoSdk\Client;
use Dbout\DendreoSdk\Enum\Method;
use Dbout\DendreoSdk\Exception\DendreoException;
use Dbout\DendreoSdk\ObjectSerializer;
use Dbout\DendreoSdk\Response;

class Service
{
    /**
     * @param Client $client
     */
    public function __construct(
        protected Client $client
    ) {
    }

    /**
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->client;
    }

    /**
     * @param string $endpoint
     * @param Method $method
     * @param array|null $bodyParams
     * @param array|null $queryParams
     * @throws \Exception
     * @return Response
     */
    protected function requestHttp(
        string $endpoint,
        Method $method,
        array $bodyParams = null,
        ?array $queryParams = null,
    ): Response {
        if ($endpoint === '') {
            throw new DendreoException('The endpoint is empty');
        }

        if (is_array($queryParams)) {
            $queryParams = array_map(
                fn ($val) => $val instanceof \DateTime ? $val->format('c') : $val,
                $queryParams
            );

            $endpoint .= '?' . http_build_query($queryParams);
        }

        $client = $this->getClient();
        $curlClient = $client->getHttpClient();
        return $curlClient->requestHttp(
            config: $client->getConfig(),
            requestUrl: $this->createUrl($endpoint),
            method: $method,
            params: $bodyParams,
        );
    }

    /**
     * @param string $endpoint
     * @throws DendreoException
     * @return string
     */
    public function createUrl(string $endpoint): string
    {
        $baseUrl = $this->getClient()->getBaseEndpoint();
        return trim($baseUrl, '/') . '/' . ltrim($endpoint, '/');
    }

    /**
     * @param Response $response
     * @param string $className
     * @throws \Exception
     * @return mixed
     */
    public function deserialize(Response $response, string $className): mixed
    {
        return (new ObjectSerializer())->deserialize($response->getResult(), $className);
    }
}
