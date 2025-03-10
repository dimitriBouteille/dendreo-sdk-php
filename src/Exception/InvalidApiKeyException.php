<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Exception;

class InvalidApiKeyException extends DendreoException
{
    /**
     * @param int $code
     * @param \Throwable|null $previous
     */
    public function __construct(int $code = 0, ?\Throwable $previous = null)
    {
        parent::__construct('Invalid apiKey configuration.', $code, $previous);
    }
}
