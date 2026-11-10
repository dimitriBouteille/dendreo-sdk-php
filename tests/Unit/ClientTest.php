<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

declare(strict_types=1);

namespace Dbout\DendreoSdk\Tests\Unit;

use Dbout\DendreoSdk\Api\SourcesApi;
use Dbout\DendreoSdk\Client;
use Dbout\DendreoSdk\Config;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class ClientTest extends TestCase
{
    use MockHttpTrait;

    /**
     * @return iterable<string, array{Config}>
     */
    public static function missingCredentialsProvider(): iterable
    {
        yield 'no api key' => [(new Config())->setUsername('my-account')];
        yield 'empty api key' => [(new Config())->setApiKey('')->setUsername('my-account')];
        yield 'no username' => [(new Config())->setApiKey('the-api-key')];
        yield 'empty username' => [(new Config())->setApiKey('the-api-key')->setUsername('')];
    }

    #[DataProvider('missingCredentialsProvider')]
    public function testCredentialsAreRequired(Config $config): void
    {
        $this->expectException(\InvalidArgumentException::class);

        new Client($config);
    }

    public function testConfiguration(): void
    {
        $client = new Client(
            (new Config())
                ->setApiKey('the-api-key')
                ->setUsername('my-account')
                ->setHost('https://sandbox.example.com/')
        );

        $configuration = $client->getConfiguration();
        self::assertSame('https://sandbox.example.com', $configuration->getHost());
        self::assertSame('the-api-key', $configuration->getAccessToken());
        self::assertSame('my-account', $configuration->getApiKey('of'));
        self::assertSame(Client::getUserAgent(), $configuration->getUserAgent());
    }

    public function testUserAgent(): void
    {
        self::assertNotSame('', Client::getSdkVersion());
        self::assertSame(
            sprintf('dendreo-php-sdk/%s PHP/%s', Client::getSdkVersion(), PHP_VERSION),
            Client::getUserAgent(),
        );
    }

    public function testCustomHttpClientIsUsed(): void
    {
        $client = $this->mockClient([self::jsonResponse(200, ['data' => ['id' => 3, 'name' => 'Salon']])]);

        (new SourcesApi($client))->show(3);

        self::assertCount(1, $this->requests);
    }

    public function testCredentialsAreSentInHeaders(): void
    {
        $client = $this->mockClient([self::jsonResponse(200, ['data' => ['id' => 3]])]);

        (new SourcesApi($client))->show(3);

        $request = $this->lastRequest();
        self::assertSame('GET', $request->getMethod());
        self::assertSame('https://api.dendreo.com/v2/sources/3', (string) $request->getUri()->withQuery(''));
        self::assertSame('Bearer the-api-key', $request->getHeaderLine('Authorization'));
        self::assertSame('my-account', $request->getHeaderLine('of'));
        self::assertSame(Client::getUserAgent(), $request->getHeaderLine('User-Agent'));
    }
}
