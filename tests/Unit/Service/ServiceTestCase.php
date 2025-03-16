<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Tests\Unit\Service;

use Dbout\DendreoSdk\Client;
use Dbout\DendreoSdk\Exception\ConnectionException;
use Dbout\DendreoSdk\HttpClient\CurlClient;
use Dbout\DendreoSdk\Response;
use Dbout\DendreoSdk\Tests\Unit\JsonLoader;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

abstract class ServiceTestCase extends TestCase
{
    use JsonLoader;

    /**
     * @param string|null $jsonFile
     * @param int $httpStatus
     * @param int|null $errno
     * @throws Exception
     * @return CurlClient&MockObject
     */
    protected function createMockCurlClient(?string $jsonFile, int $httpStatus, ?int $errno = null): CurlClient&MockObject
    {
        $json = $this->loadJsonAsString($jsonFile);

        $curlClient = $this->createPartialMock(CurlClient::class, ['requestHttp']);
        $curlClient->expects($this->once())
            ->method('requestHttp')
            ->willReturnCallback(function () use ($json, $errno, $httpStatus) {
                if (is_string($json) && $json !== '') {
                    $result = json_decode($json, true);
                } else {
                    $result = null;
                }

                if (!is_array($result)) {
                    $result = [];
                }

                if ($errno) {
                    throw new ConnectionException('', $errno);
                }

                return new Response(
                    $httpStatus,
                    $result
                );
            });

        return $curlClient;
    }

    /**
     * @param CurlClient $curlClient
     * @return Client
     */
    protected function createMockClient(CurlClient $curlClient): Client
    {
        $client = new Client();
        $client->setUsername('api-username');
        $client->setApiKey('api-key');
        $client->setHttpClient($curlClient);
        return $client;
    }
}
