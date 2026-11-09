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
 * HTTP 422: the request was rejected by the API validation rules.
 */
class ValidationException extends ApiException
{
    /**
     * Validation errors by field, e.g. `['email' => ['Cet email est déjà utilisé.']]`.
     *
     * @return array<string, list<string>>
     */
    public function getErrors(): array
    {
        $errors = ExceptionFactory::decodeBody($this->getResponseBody())['errors'] ?? null;
        if (!is_array($errors)) {
            return [];
        }

        $result = [];
        foreach ($errors as $field => $messages) {
            $result[(string) $field] = array_values(array_map('strval', (array) $messages));
        }

        return $result;
    }
}
