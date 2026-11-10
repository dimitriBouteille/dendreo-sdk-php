<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

declare(strict_types=1);

namespace Dbout\DendreoSdk\Tests\Unit\Exception;

use Dbout\DendreoSdk\Exception\RateLimitException;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class RateLimitExceptionTest extends TestCase
{
    /**
     * @return iterable<string, array{array<string, string[]>|null, int|null}>
     */
    public static function retryAfterProvider(): iterable
    {
        yield 'seconds' => [['Retry-After' => ['10']], 10];
        yield 'header name is case-insensitive' => [['retry-after' => ['7']], 7];
        yield 'HTTP date is not supported' => [['Retry-After' => ['Wed, 21 Oct 2026 07:28:00 GMT']], null];
        yield 'no header' => [['Content-Type' => ['application/json']], null];
        yield 'no headers' => [null, null];
    }

    /**
     * @param array<string, string[]>|null $headers
     */
    #[DataProvider('retryAfterProvider')]
    public function testRetryAfter(?array $headers, ?int $expected): void
    {
        self::assertSame($expected, (new RateLimitException('', 429, $headers))->getRetryAfter());
    }
}
