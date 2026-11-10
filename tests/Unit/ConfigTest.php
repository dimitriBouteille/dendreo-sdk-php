<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

declare(strict_types=1);

namespace Dbout\DendreoSdk\Tests\Unit;

use Dbout\DendreoSdk\Config;
use PHPUnit\Framework\TestCase;

final class ConfigTest extends TestCase
{
    public function testDefaults(): void
    {
        $config = new Config();

        self::assertNull($config->getApiKey());
        self::assertNull($config->getUsername());
        self::assertSame('https://api.dendreo.com', $config->getHost());
        self::assertSame(30.0, $config->getTimeout());
        self::assertNull($config->getProxy());
    }

    public function testSetters(): void
    {
        $config = (new Config())
            ->setApiKey('the-api-key')
            ->setUsername('my-account')
            ->setHost('https://sandbox.example.com')
            ->setTimeout(5.5)
            ->setProxy('http://my-proxy:3128');

        self::assertSame('the-api-key', $config->getApiKey());
        self::assertSame('my-account', $config->getUsername());
        self::assertSame('https://sandbox.example.com', $config->getHost());
        self::assertSame(5.5, $config->getTimeout());
        self::assertSame('http://my-proxy:3128', $config->getProxy());
    }

    public function testHostTrailingSlashIsRemoved(): void
    {
        self::assertSame('https://api.dendreo.com', (new Config())->setHost('https://api.dendreo.com/')->getHost());
    }
}
