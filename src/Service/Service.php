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
     * @return array
     */
    protected function requestHttp(
        string $endpoint,
        Method $method,
        array $bodyParams = null,
        ?array $queryParams = null,
    ): array {
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
        $response = $curlClient->requestHttp(
            config: $client->getConfig(),
            requestUrl: $this->createUrl($endpoint),
            method: $method,
            params: $bodyParams,
        );

        return $response->getResult();
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
     * @template T
     *
     * @param array $response
     * @param class-string<T> $className
     * @throws \Exception
     * @return T|null
     */
    public function deserialize(array $response, string $className)
    {
        return (new ObjectSerializer())->deserialize($response, $className);
    }
}
