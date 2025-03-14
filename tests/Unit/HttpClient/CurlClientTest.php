<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Tests\Unit\HttpClient;

use Dbout\DendreoSdk\Config;
use Dbout\DendreoSdk\HttpClient\CurlClient;
use PHPUnit\Framework\Attributes\CoversMethod;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

#[CoversMethod(CurlClient::class, 'requestHttp')]
class CurlClientTest extends TestCase
{
    private Config&MockObject $configMock;
    private CurlClient $client;

    /**
     * @inheritDoc
     * @throws \Exception|\PHPUnit\Framework\MockObject\Exception
     */
    protected function setUp(): void
    {
        $this->configMock = $this->createMock(Config::class);
        $this->client = new CurlClient();
    }
}
