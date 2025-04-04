<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk;

class Response
{
    /**
     * @param int $statusCode
     * @param array<string, mixed>|array<int|mixed> $result
     */
    public function __construct(
        protected int $statusCode,
        protected array $result,
    ) {
    }

    /**
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    /**
     * @return array<string, mixed>|array<int|mixed>
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @return bool
     */
    public function isSuccess(): bool
    {
        return in_array($this->statusCode, Client::SUCCESS_HTTP_CODES, true);
    }
}
