<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Tests\Unit;

use Dbout\DendreoSdk\Config;
use PHPUnit\Framework\Attributes\CoversMethod;
use PHPUnit\Framework\TestCase;

#[CoversMethod(Config::class, 'getUsername')]
#[CoversMethod(Config::class, 'setUsername')]
#[CoversMethod(Config::class, 'setApiKey')]
#[CoversMethod(Config::class, 'getApiKey')]
#[CoversMethod(Config::class, 'getTimeout')]
#[CoversMethod(Config::class, 'getHttpProxy')]
#[CoversMethod(Config::class, 'set')]
#[CoversMethod(Config::class, 'get')]
class ConfigTest extends TestCase
{
    /**
     * @return void
     */
    public function testSetGet(): void
    {
        $config = new Config();
        $config->set('my-account', 'yes');
        $this->assertEquals('yes', $config->get('my-account'));
    }

    /**
     * @return void
     */
    public function testGetWithDefaultValue(): void
    {
        $config = new Config();
        $this->assertEquals(123456, $config->get('my-account', 123456));
    }

    /**
     * @return void
     */
    public function testSetUsername(): void
    {
        $config = new Config();
        $config->setUsername('my-account');
        $this->assertEquals('my-account', $config->getUsername());
    }

    /**
     * @return void
     */
    public function testSetUsernameByPath(): void
    {
        $config = new Config(['username' => 'my-account']);
        $this->assertEquals('my-account', $config->getUsername());
    }

    /**
     * @return void
     */
    public function testSetApiKey(): void
    {
        $config = new Config();
        $config->setApiKey('my-api-key');
        $this->assertEquals('my-api-key', $config->getApiKey());
    }

    /**
     * @return void
     */
    public function testSetApiKeyByPath(): void
    {
        $config = new Config(['api-key' => 'my-api-key']);
        $this->assertEquals('my-api-key', $config->getApiKey());
    }

    /**
     * @return void
     */
    public function testGetTimeout(): void
    {
        $config = new Config(['timeout' => 1500]);
        $this->assertEquals(1500, $config->getTimeout());
    }

    /**
     * @return void
     */
    public function testGetDefaultTimeoutIfTimeoutIfInvalid(): void
    {
        $config = new Config(['timeout' => 'A1500']);
        $this->assertEquals(0, $config->getTimeout());
    }

    /**
     * @return void
     */
    public function testGetHttpProxy(): void
    {
        $config = new Config(['http-proxy' => 'user:pwd']);
        $this->assertEquals('user:pwd', $config->getHttpProxy());
    }
}
