<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk;

class Config
{
    /**
     * @param array<string, mixed> $params
     */
    public function __construct(
        protected array $params = []
    ) {
    }

    /**
     * Get the username from the Dendreo customer area.
     *
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->get('username');
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
        return $this->set('username', $username);
    }

    /**
     * Get the API key from the Dendreo customer area.
     *
     * @return string|null
     */
    public function getApiKey(): ?string
    {
        return $this->get('api-key');
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
        return $this->set('api-key', $apiKey);
    }

    /**
     * Get the http timeout configuration
     *
     * @return int
     */
    public function getTimeout(): int
    {
        $value = $this->get('timeout');
        return is_numeric($value) ? (int) $value : 0;
    }

    /**
     * Get the http proxy configuration
     *
     * @return string|null
     */
    public function getHttpProxy(): ?string
    {
        return $this->get('http-proxy');
    }

    /**
     * Set a key value pair
     *
     * @param string $key
     * @param mixed $value
     * @return $this
     */
    public function set(string $key, mixed $value): self
    {
        $this->params[$key] = $value;
        return $this;
    }

    /**
     * Get a specific key value.
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public function get(string $key, mixed $default = null): mixed
    {
        return $this->params[$key] ?? $default;
    }
}
