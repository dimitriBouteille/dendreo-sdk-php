<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

declare(strict_types=1);

namespace Dbout\DendreoSdk;

/**
 * Configuration of the SDK: credentials and HTTP options.
 *
 * @see https://api.dendreo.com/docs-api/v2/#authentification
 */
final class Config
{
    public const DEFAULT_HOST = 'https://api.dendreo.com';

    private ?string $apiKey = null;
    private ?string $username = null;
    private string $host = self::DEFAULT_HOST;
    private float $timeout = 30.0;
    private ?string $proxy = null;

    /**
     * API key, sent as `Authorization: Bearer {apiKey}`.
     */
    public function setApiKey(string $apiKey): self
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    public function getApiKey(): ?string
    {
        return $this->apiKey;
    }

    /**
     * Account identifier (what follows `pro.dendreo.com/` in your account URL), sent as the `of` header.
     */
    public function setUsername(string $username): self
    {
        $this->username = $username;
        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setHost(string $host): self
    {
        $this->host = rtrim($host, '/');
        return $this;
    }

    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * Request timeout, in seconds.
     */
    public function setTimeout(float $timeout): self
    {
        $this->timeout = $timeout;
        return $this;
    }

    public function getTimeout(): float
    {
        return $this->timeout;
    }

    public function setProxy(?string $proxy): self
    {
        $this->proxy = $proxy;
        return $this;
    }

    public function getProxy(): ?string
    {
        return $this->proxy;
    }
}
