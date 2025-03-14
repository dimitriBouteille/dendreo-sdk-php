<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\HttpClient;

/**
 * Temporary class that allows you to easily create tests for the class CurlClient
 *
 * @internal
 * @codeCoverageIgnore
 */
class CurlRequest
{
    private \CurlHandle $handle;

    /**
     * @param string $url
     */
    public function __construct(
        string $url
    ) {
        $this->handle = curl_init($url);
    }

    /**
     * Set an option for a cURL transfer
     *
     * @param int $name
     * @param mixed $value
     * @return void
     */
    public function setOption(int $name, mixed $value): void
    {
        curl_setopt($this->handle, $name, $value);
    }

    /**
     * Perform a cURL session
     * @return bool|string
     */
    public function execute(): bool|string
    {
        return curl_exec($this->handle);
    }

    /**
     * Get information regarding a specific transfer
     *
     * @param ?int $name
     * @return mixed
     */
    public function getInfo(?int $name): mixed
    {
        return curl_getinfo($this->handle, $name);
    }

    /**
     * Close a cURL session
     * @return void
     */
    public function close(): void
    {
        curl_close($this->handle);
    }

    /**
     * Return the last error number
     *
     * @return int
     */
    public function getErrNo(): int
    {
        return curl_errno($this->handle);
    }

    /**
     * Return a string containing the last error for the current session
     *
     * @return string
     */
    public function getError(): string
    {
        return curl_error($this->handle);
    }
}
