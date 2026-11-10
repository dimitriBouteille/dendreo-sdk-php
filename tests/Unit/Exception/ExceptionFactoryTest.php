<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

declare(strict_types=1);

namespace Dbout\DendreoSdk\Tests\Unit\Exception;

use Dbout\DendreoSdk\ApiException;
use Dbout\DendreoSdk\Exception\AuthenticationException;
use Dbout\DendreoSdk\Exception\BadRequestException;
use Dbout\DendreoSdk\Exception\ConflictException;
use Dbout\DendreoSdk\Exception\ConnectionException;
use Dbout\DendreoSdk\Exception\ExceptionFactory;
use Dbout\DendreoSdk\Exception\ForbiddenException;
use Dbout\DendreoSdk\Exception\NotFoundException;
use Dbout\DendreoSdk\Exception\RateLimitException;
use Dbout\DendreoSdk\Exception\ServerException;
use Dbout\DendreoSdk\Exception\ValidationException;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class ExceptionFactoryTest extends TestCase
{
    /**
     * @return iterable<string, array{int, class-string<ApiException>}>
     */
    public static function statusCodeProvider(): iterable
    {
        yield 'no response' => [0, ConnectionException::class];
        yield '400' => [400, BadRequestException::class];
        yield '401' => [401, AuthenticationException::class];
        yield '403' => [403, ForbiddenException::class];
        yield '404' => [404, NotFoundException::class];
        yield '409' => [409, ConflictException::class];
        yield '422' => [422, ValidationException::class];
        yield '429' => [429, RateLimitException::class];
        yield '500' => [500, ServerException::class];
        yield '503' => [503, ServerException::class];
        yield 'other 4xx' => [418, ApiException::class];
    }

    /**
     * @param class-string<ApiException> $expectedClass
     */
    #[DataProvider('statusCodeProvider')]
    public function testClassMatchesStatusCode(int $code, string $expectedClass): void
    {
        $exception = ExceptionFactory::create('Generic message', $code, ['X-Test' => ['1']], '{}');

        self::assertSame($expectedClass, $exception::class);
        self::assertInstanceOf(ApiException::class, $exception);
        self::assertSame($code, $exception->getCode());
        self::assertSame(['X-Test' => ['1']], $exception->getResponseHeaders());
        self::assertSame('{}', $exception->getResponseBody());
    }

    /**
     * @return iterable<string, array{\stdClass|string|null, string}>
     */
    public static function messageProvider(): iterable
    {
        yield '"message" key' => ['{"code": 404, "message": "Participant introuvable."}', '[404] Participant introuvable.'];
        yield '"error" key' => ['{"error": "Unauthenticated."}', '[404] Unauthenticated.'];
        yield '"errors" list' => ['{"status": "failure", "errors": ["Clé invalide.", "Clé révoquée."]}', '[404] Clé invalide. Clé révoquée.'];
        yield 'stdClass body' => [(object) ['message' => 'Depuis un objet.'], '[404] Depuis un objet.'];
        yield '"message" preferred to "errors"' => ['{"message": "Erreur.", "errors": {"email": ["Invalide."]}}', '[404] Erreur.'];
        yield '"errors" by field' => ['{"errors": {"email": ["Invalide."]}}', 'Generic message'];
        yield 'empty message' => ['{"message": ""}', 'Generic message'];
        yield 'invalid JSON' => ['<html>Bad gateway</html>', 'Generic message'];
        yield 'no body' => [null, 'Generic message'];
    }

    #[DataProvider('messageProvider')]
    public function testMessageComesFromTheBody(\stdClass|string|null $body, string $expectedMessage): void
    {
        self::assertSame($expectedMessage, ExceptionFactory::create('Generic message', 404, null, $body)->getMessage());
    }

    public function testDecodeBody(): void
    {
        self::assertSame(['a' => 1], ExceptionFactory::decodeBody('{"a": 1}'));
        self::assertSame(['a' => 1], ExceptionFactory::decodeBody((object) ['a' => 1]));
        self::assertSame([], ExceptionFactory::decodeBody('"a string"'));
        self::assertSame([], ExceptionFactory::decodeBody('not json'));
        self::assertSame([], ExceptionFactory::decodeBody(''));
        self::assertSame([], ExceptionFactory::decodeBody(null));
    }
}
