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
 * Builds the exception matching an HTTP status code. Called by the generated services
 * instead of `new ApiException(...)`, with the same arguments.
 *
 * Every exception extends ApiException: `catch (ApiException $e)` still catches everything.
 */
final class ExceptionFactory
{
    /**
     * @var array<int, class-string<ApiException>>
     */
    private const BY_STATUS_CODE = [
        400 => BadRequestException::class,
        401 => AuthenticationException::class,
        403 => ForbiddenException::class,
        404 => NotFoundException::class,
        409 => ConflictException::class,
        422 => ValidationException::class,
        429 => RateLimitException::class,
    ];

    /**
     * @param string[][]|null $headers
     */
    public static function create(string $message, int $code, ?array $headers = null, \stdClass|string|null $body = null): ApiException
    {
        $class = match (true) {
            $code === 0 => ConnectionException::class,
            $code >= 500 => ServerException::class,
            default => self::BY_STATUS_CODE[$code] ?? ApiException::class,
        };

        return new $class(self::message($message, $code, $body), $code, $headers, $body);
    }

    /**
     * @return array<string, mixed>
     */
    public static function decodeBody(\stdClass|string|null $body): array
    {
        if ($body instanceof \stdClass) {
            $body = json_encode($body);
        }
        if (!is_string($body) || $body === '') {
            return [];
        }

        try {
            $decoded = json_decode($body, true, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException) {
            return [];
        }

        return is_array($decoded) ? $decoded : [];
    }

    /**
     * Prefers the message sent by Dendreo over the generic Guzzle one:
     * `{"message": "..."}`, `{"error": "Unauthenticated."}` or `{"errors": ["..."]}`.
     */
    private static function message(string $default, int $code, \stdClass|string|null $body): string
    {
        $data = self::decodeBody($body);

        $message = match (true) {
            is_string($data['message'] ?? null) => $data['message'],
            is_string($data['error'] ?? null) => $data['error'],
            is_array($data['errors'] ?? null) && array_is_list($data['errors']) => implode(' ', array_filter($data['errors'], is_string(...))),
            default => null,
        };

        return $message === null || $message === '' ? $default : sprintf('[%d] %s', $code, $message);
    }
}
