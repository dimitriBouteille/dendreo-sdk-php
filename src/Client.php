<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

declare(strict_types=1);

namespace Dbout\DendreoSdk;

use Composer\InstalledVersions;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\RequestOptions;

/**
 * Entry point of the SDK: holds the credentials and the HTTP transport.
 * Services are instantiated with it, e.g. `new Api\ParticipantsApi($client)`.
 */
class Client
{
    final public const PACKAGE_NAME = 'dbout/dendreo-sdk-php';
    final public const USER_AGENT = 'dendreo-php-sdk';
    final public const DATE_TIME_FORMAT = 'Y-m-d H:i:s';
    final public const TIMEZONE = 'Europe/Paris';

    private readonly Configuration $configuration;
    private readonly ClientInterface $httpClient;

    public function __construct(
        Config $config,
        ?ClientInterface $httpClient = null,
    ) {
        if (in_array($config->getApiKey(), [null, ''], true) || in_array($config->getUsername(), [null, ''], true)) {
            throw new \InvalidArgumentException('Both the API key and the username (`of` header) are required.');
        }

        // Dendreo sends and expects date-times as `Y-m-d H:i:s` (no `T`, no timezone).
        ObjectSerializer::setDateTimeFormat(self::DATE_TIME_FORMAT);
        // Timestamps (`*_at`) are in Paris time, see the "Dates et fuseau horaire" documentation.
        ObjectSerializer::setTimezone(new \DateTimeZone(self::TIMEZONE));

        $this->configuration = (new Configuration())
            ->setHost($config->getHost())
            ->setAccessToken($config->getApiKey())
            ->setApiKey('of', $config->getUsername())
            ->setUserAgent(self::getUserAgent());

        $this->httpClient = $httpClient ?? new GuzzleClient(array_filter([
            RequestOptions::TIMEOUT => $config->getTimeout(),
            RequestOptions::PROXY => $config->getProxy(),
        ], static fn ($value) => $value !== null));
    }

    /**
     * Installed version of the SDK, as resolved by Composer (`dev` when unknown).
     */
    public static function getSdkVersion(): string
    {
        if (class_exists(InstalledVersions::class) && InstalledVersions::isInstalled(self::PACKAGE_NAME)) {
            return InstalledVersions::getPrettyVersion(self::PACKAGE_NAME) ?? 'dev';
        }

        return 'dev';
    }

    /**
     * e.g. `dendreo-php-sdk/2.0.0 PHP/8.3.31`
     */
    public static function getUserAgent(): string
    {
        return sprintf('%s/%s PHP/%s', self::USER_AGENT, self::getSdkVersion(), PHP_VERSION);
    }

    /**
     * @internal Used by the generated services.
     */
    public function getConfiguration(): Configuration
    {
        return $this->configuration;
    }

    /**
     * @internal Used by the generated services.
     */
    public function getHttpClient(): ClientInterface
    {
        return $this->httpClient;
    }
}
