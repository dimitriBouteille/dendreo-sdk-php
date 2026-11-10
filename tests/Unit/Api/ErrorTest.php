<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

declare(strict_types=1);

namespace Dbout\DendreoSdk\Tests\Unit\Api;

use Dbout\DendreoSdk\Api\SourcesApi;
use Dbout\DendreoSdk\Exception\AuthenticationException;
use Dbout\DendreoSdk\Exception\BadRequestException;
use Dbout\DendreoSdk\Exception\ConnectionException;
use Dbout\DendreoSdk\Exception\NotFoundException;
use Dbout\DendreoSdk\Exception\RateLimitException;
use Dbout\DendreoSdk\Exception\ServerException;
use Dbout\DendreoSdk\Exception\ValidationException;
use Dbout\DendreoSdk\Model\SourcesStoreRequest;
use Dbout\DendreoSdk\Tests\Unit\MockHttpTrait;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

/**
 * Error responses are thrown as typed exceptions by the generated services.
 */
final class ErrorTest extends TestCase
{
    use MockHttpTrait;

    public function testNotFound(): void
    {
        $api = new SourcesApi($this->mockClient([self::jsonResponse(404, ['code' => 404, 'message' => 'Source introuvable.'])]));

        $this->expectException(NotFoundException::class);
        $this->expectExceptionCode(404);
        $this->expectExceptionMessage('[404] Source introuvable.');

        $api->show(999);
    }

    public function testAuthentication(): void
    {
        $api = new SourcesApi($this->mockClient([self::jsonResponse(401, ['error' => 'Unauthenticated.'])]));

        $this->expectException(AuthenticationException::class);
        $this->expectExceptionMessage('[401] Unauthenticated.');

        $api->show(1);
    }

    public function testBadRequest(): void
    {
        $api = new SourcesApi($this->mockClient([self::jsonResponse(400, ['message' => "L'include `modules` n'est plus supporté en V2."])]));

        $this->expectException(BadRequestException::class);
        $this->expectExceptionMessage("[400] L'include `modules` n'est plus supporté en V2.");

        $api->show(1, include: ['modules']);
    }

    public function testValidation(): void
    {
        $api = new SourcesApi($this->mockClient([self::jsonResponse(422, [
            'message' => 'Le nom est déjà utilisé.',
            'errors' => ['name' => ['Le nom est déjà utilisé.']],
        ])]));

        try {
            $api->store((new SourcesStoreRequest())->setName('Salon'));
            self::fail('A ValidationException was expected.');
        } catch (ValidationException $e) {
            self::assertSame(422, $e->getCode());
            self::assertSame('[422] Le nom est déjà utilisé.', $e->getMessage());
            self::assertSame(['name' => ['Le nom est déjà utilisé.']], $e->getErrors());
        }
    }

    public function testRateLimit(): void
    {
        $api = new SourcesApi($this->mockClient([self::jsonResponse(429, ['message' => 'Too Many Attempts.'], ['Retry-After' => '8'])]));

        try {
            $api->show(1);
            self::fail('A RateLimitException was expected.');
        } catch (RateLimitException $e) {
            self::assertSame(8, $e->getRetryAfter());
        }
    }

    public function testServerError(): void
    {
        $api = new SourcesApi($this->mockClient([new Response(503, [], 'Service Unavailable')]));

        $this->expectException(ServerException::class);
        $this->expectExceptionCode(503);

        $api->show(1);
    }

    public function testConnectionError(): void
    {
        $api = new SourcesApi($this->mockClient([
            new ConnectException('Could not resolve host', new Request('GET', 'https://api.dendreo.com/v2/sources/1')),
        ]));

        $this->expectException(ConnectionException::class);
        $this->expectExceptionCode(0);

        $api->show(1);
    }
}
