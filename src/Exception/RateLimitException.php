<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

declare(strict_types=1);

namespace Dbout\DendreoSdk\Exception;

use Dbout\DendreoSdk\ApiException;

/**
 * HTTP 429: rate limit exceeded (100 requests / 10 seconds, plus daily and monthly quotas).
 */
class RateLimitException extends ApiException
{
    /**
     * Number of seconds to wait before retrying, from the `Retry-After` header when the API sends it.
     */
    public function getRetryAfter(): ?int
    {
        foreach ($this->getResponseHeaders() ?? [] as $name => $values) {
            if (strcasecmp((string) $name, 'Retry-After') === 0) {
                $value = reset($values);

                return is_numeric($value) ? (int) $value : null;
            }
        }

        return null;
    }
}
