<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Tests\Unit\HttpClient;

use Dbout\DendreoSdk\Config;
use Dbout\DendreoSdk\Enum\Method;
use Dbout\DendreoSdk\Exception\ConnectionException;
use Dbout\DendreoSdk\Exception\DendreoException;
use Dbout\DendreoSdk\Exception\InvalidApiKeyException;
use Dbout\DendreoSdk\HttpClient\CurlClient;
use Dbout\DendreoSdk\HttpClient\CurlFactory;
use Dbout\DendreoSdk\HttpClient\CurlRequest;
use Dbout\DendreoSdk\Tests\Unit\JsonLoader;
use PHPUnit\Framework\Attributes\CoversMethod;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

#[CoversMethod(CurlClient::class, 'requestHttp')]
class CurlClientTest extends TestCase
{
    use JsonLoader;

    private CurlFactory&MockObject $curlFactoryMock;
    private CurlRequest&MockObject $curlRequestMock;
    private Config&MockObject $configMock;
    private CurlClient $curlClient;

    /**
     * @inheritDoc
     * @throws \Throwable
     */
    protected function setUp(): void
    {
        $this->curlRequestMock = $this->createMock(CurlRequest::class);
        $this->curlFactoryMock = $this->createConfiguredMock(CurlFactory::class, ['create' => $this->curlRequestMock]);
        $this->configMock = $this->createMock(Config::class);

        $this->curlClient = new CurlClient($this->curlFactoryMock);
    }

    /**
     * @param mixed $apiKey
     * @throws \Exception
     * @return void
     */
    #[TestWith([null])]
    #[TestWith([''])]
    public function testThrowExceptionWithEmptyApiKey(mixed $apiKey): void
    {
        $this->configMock
            ->expects($this->once())
            ->method('getApiKey')
            ->willReturn($apiKey);

        $this->curlFactoryMock->expects($this->never())->method($this->anything());

        $this->expectException(InvalidApiKeyException::class);
        $this->curlClient->requestHttp($this->configMock, 'https://api-test.com/api/v2/users.php', Method::GET, []);
    }

    /**
     * @throws \Exception
     * @return void
     */
    public function testSuccessRequestHttp(): void
    {
        $this->configMock
            ->expects($this->once())
            ->method('getApiKey')
            ->willReturn('my-api-key');

        $this->curlRequestMock
            ->expects($this->exactly(3))
            ->method('setOption')
            ->willReturnOnConsecutiveCalls(
                [CURLOPT_HTTPHEADER, ['Authorization: Token token="my-api-key"']],
                [CURLOPT_HTTPGET, 1],
                [CURLOPT_RETURNTRANSFER, 1]
            );

        $this->curlRequestMock
            ->expects($this->once())
            ->method('execute')
            ->willReturn($this->loadJsonAsString('tests/fixtures/http-client/success-request.json'));

        $this->curlRequestMock
            ->expects($this->once())
            ->method('getInfo')
            ->with(CURLINFO_HTTP_CODE)
            ->willReturn(200);

        $this->curlRequestMock
            ->expects($this->once())
            ->method('close');

        $result = $this->curlClient->requestHttp(
            $this->configMock,
            'https://api-test.com/api/v2/users.php',
            Method::GET,
            [],
        );

        $this->assertEquals(200, $result->getStatusCode());
        $this->assertEquals([
            'id_contact' => '15',
            'email' => 'test@gmail.com',
        ], $result->getResult());

        $this->assertTrue($result->isSuccess());
    }

    /**
     * @param string $jsonFile
     * @param string $expectedErrorMessage
     * @throws \Exception
     * @return void
     */
    #[TestWith(['tests/fixtures/http-client/empty-error.json', 'Something went wrong'])]
    #[TestWith(['tests/fixtures/http-client/error-with-errors.json', 'Un utilisateur ID est obligatoire'])]
    #[TestWith(['tests/fixtures/http-client/error-with-message.json', 'Invalid id_entreprise value'])]
    public function testRequestReturnError(string $jsonFile, string $expectedErrorMessage): void
    {
        $this->configMock
            ->expects($this->once())
            ->method('getApiKey')
            ->willReturn('my-api-key');

        $this->curlRequestMock
            ->expects($this->once())
            ->method('execute')
            ->willReturn($this->loadJsonAsString($jsonFile));

        $this->curlRequestMock
            ->expects($this->once())
            ->method('getInfo')
            ->with(CURLINFO_HTTP_CODE)
            ->willReturn(400);

        $this->curlRequestMock
            ->expects($this->once())
            ->method('getErrNo')
            ->willReturn(CURLE_OK);

        $this->expectException(DendreoException::class);
        $this->expectExceptionMessage($expectedErrorMessage);

        $this->curlClient->requestHttp(
            $this->configMock,
            'https://api-test.com/api/v2/users.php',
            Method::GET,
            [],
        );
    }

    /**
     * @throws \Exception
     * @return void
     */
    public function testCurlReturnError(): void
    {
        $this->configMock
            ->expects($this->once())
            ->method('getApiKey')
            ->willReturn('my-api-key');

        $this->curlRequestMock
            ->expects($this->once())
            ->method('execute')
            ->willReturn('{}');

        $this->curlRequestMock
            ->expects($this->once())
            ->method('getInfo')
            ->with(CURLINFO_HTTP_CODE)
            ->willReturn(400);

        $this->curlRequestMock
            ->expects($this->once())
            ->method('getErrNo')
            ->willReturn(CURLE_COULDNT_CONNECT);

        $this->expectException(ConnectionException::class);
        $this->expectExceptionMessage('Unexpected error communicating with Dendreo.');

        $this->curlClient->requestHttp(
            $this->configMock,
            'https://api-test.com/api/v2/users.php',
            Method::GET,
            [],
        );
    }
}
