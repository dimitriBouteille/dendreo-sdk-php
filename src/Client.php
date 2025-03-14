<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk;

use Dbout\DendreoSdk\Exception\DendreoException;
use Dbout\DendreoSdk\HttpClient\CurlClient;
use Dbout\DendreoSdk\HttpClient\HttpClientInterface;

class Client
{
    private const API_ENDPOINT = 'https://pro.dendreo.com/%s/api/';

    final public const SUCCESS_HTTP_CODES = [
        200,
        201,
        202,
        204,
    ];

    protected ?HttpClientInterface $httpClient = null;

    /**
     * @param Config $config
     */
    public function __construct(
        protected Config $config = new Config()
    ) {
    }

    /**
     * Set the username from the Dendreo customer area.
     *
     * - [How to find your username](https://developers.dendreo.com/#fonctionnement-general)
     *
     * @param string $username
     * @return $this
     */
    public function setUsername(string $username): self
    {
        $this->config->setUsername($username);
        return $this;
    }

    /**
     * Set the API key defined in your customer area.
     *
     * - [Find your api KEY](https://pro.dendreo.com/redirect/api)
     *
     * @param string $apiKey
     * @return $this
     */
    public function setApiKey(string $apiKey): self
    {
        $this->config->setApiKey($apiKey);
        return $this;
    }

    /**
     * Get formatted base endpoint based on username.
     *
     * @throws DendreoException
     * @return string
     */
    public function getBaseEndpoint(): string
    {
        $username = $this->config->getUsername();
        if ($username === null || $username === '') {
            throw new DendreoException('Username not set');
        }

        return sprintf(self::API_ENDPOINT, $username);
    }

    /**
     * @return Config
     */
    public function getConfig(): Config
    {
        return $this->config;
    }

    /**
     * @return HttpClientInterface
     */
    public function getHttpClient(): HttpClientInterface
    {
        if (!$this->httpClient instanceof HttpClientInterface) {
            $this->httpClient = $this->getDefaultHttpClient();
        }

        return $this->httpClient;
    }

    /**
     * @param HttpClientInterface $client
     * @return $this
     */
    public function setHttpClient(HttpClientInterface $client): self
    {
        $this->httpClient = $client;
        return $this;
    }

    /**
     * @return HttpClientInterface
     */
    protected function getDefaultHttpClient(): HttpClientInterface
    {
        return new CurlClient();
    }
}
