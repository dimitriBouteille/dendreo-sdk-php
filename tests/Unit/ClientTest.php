<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Tests\Unit;

use Dbout\DendreoSdk\Client;
use Dbout\DendreoSdk\Config;
use Dbout\DendreoSdk\Exception\DendreoException;
use PHPUnit\Framework\Attributes\CoversMethod;
use PHPUnit\Framework\Attributes\UsesClass;
use PHPUnit\Framework\TestCase;

#[CoversMethod(Client::class, 'getBaseEndpoint')]
#[CoversMethod(Client::class, 'setUsername')]
#[CoversMethod(Client::class, 'setApiKey')]
#[UsesClass(DendreoException::class)]
class ClientTest extends TestCase
{
    /**
     * @throws \PHPUnit\Framework\MockObject\Exception
     * @return void
     */
    public function testGetBaseEndpointThrowExceptionBecauseUsernameIsEmpty(): void
    {
        $mockConfig = $this->createConfiguredMock(Config::class, [
            'getUsername' => '',
        ]);

        $mockConfig->expects($this->once())->method('getUsername');
        $client = new Client($mockConfig);

        $this->expectException(DendreoException::class);
        $this->expectExceptionMessage('Username not set');

        $client->getBaseEndpoint();
    }

    /**
     * @throws DendreoException
     * @throws \PHPUnit\Framework\MockObject\Exception
     * @return void
     */
    public function testGetBaseEndpoint(): void
    {
        $configMock = $this->createConfiguredMock(Config::class, [
            'getUsername' => 'account_demo',
        ]);

        $configMock->expects($this->once())->method('getUsername');
        $client = new Client($configMock);
        $this->assertEquals('https://pro.dendreo.com/account_demo/api/', $client->getBaseEndpoint());
    }

    /**
     * @throws \PHPUnit\Framework\MockObject\Exception
     * @return void
     */
    public function testSetUsername(): void
    {
        $username = 'account_demo';

        $configMock = $this->createMock(Config::class);
        $configMock->expects($this->once())->method('setUsername')->with($username);
        $client = new Client($configMock);
        $client->setUsername($username);
    }

    /**
     * @throws \PHPUnit\Framework\MockObject\Exception
     * @return void
     */
    public function testSetApiKey(): void
    {
        $apiKey = 'my-123456';

        $configMock = $this->createMock(Config::class);
        $configMock->expects($this->once())->method('setApiKey')->with($apiKey);
        $client = new Client($configMock);
        $client->setApiKey($apiKey);
    }
}
