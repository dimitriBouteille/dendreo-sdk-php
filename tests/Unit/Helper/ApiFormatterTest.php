<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Tests\Unit\Helper;

use Dbout\DendreoSdk\Helper\ApiFormatter;
use PHPUnit\Framework\Attributes\CoversMethod;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

#[CoversMethod(ApiFormatter::class, 'format')]
class ApiFormatterTest extends TestCase
{
    /**
     * @throws \InvalidArgumentException
     * @return void
     */
    public function testFormatCollectionThrowsExceptionIfValueIsNotArray(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The value must be an array.');

        ApiFormatter::format('hello world', 'collection');
    }

    /**
     * @param mixed $value
     * @param string $format
     * @param mixed $expectedResult
     * @return void
     */
    #[TestWith([null, 'date',null])]
    #[TestWith(['15', 'int', 15])]
    #[TestWith(['10.85', 'float', 10.85])]
    #[TestWith([['photo', 'url'], 'collection', 'photo, url'])]
    public function testFormat(mixed $value, string $format, mixed $expectedResult): void
    {
        $this->assertEquals($expectedResult, ApiFormatter::format($value, $format));
    }

    /**
     * @param mixed $value
     * @param mixed $expectedResult
     * @return void
     */
    #[TestWith(['1', 'boolean', 1])]
    #[TestWith(['true', 'boolean', 1])]
    #[TestWith([true, 'boolean', 1])]
    #[TestWith(['0', 'boolean', 0])]
    #[TestWith(['false', 'boolean', 0])]
    #[TestWith([false, 'boolean', 0])]
    public function testFormatBoolean(mixed $value, mixed $expectedResult): void
    {
        $this->assertEquals($expectedResult, ApiFormatter::format($value, 'boolean'));
    }

    /**
     * @param string $format
     * @throws \InvalidArgumentException
     * @return void
     */
    #[TestWith(['date'])]
    #[TestWith(['datetime'])]
    public function testFormatDateThrowsExceptionIfValueIsNotDate(string $format): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The value must be an \DateTime object.');

        ApiFormatter::format('hello world', $format);
    }

    /**
     * @param \DateTime $value
     * @param mixed $expectedResult
     * @param string $format
     * @return void
     */
    #[DataProvider('providerFormatDate')]
    public function testFormatDate(\DateTime $value, mixed $expectedResult, string $format): void
    {
        $this->assertEquals($expectedResult, ApiFormatter::format($value, $format));
    }

    /**
     * @return \Generator
     */
    public static function providerFormatDate(): \Generator
    {
        yield [\DateTime::createFromFormat('d-m-Y', '15-02-2012'), '2012-02-15', 'date'];
        yield [\DateTime::createFromFormat('Y-m-d H:m:s', '2010-03-10 10:30:10'), '2010-03-10', 'date'];
        yield [\DateTime::createFromFormat('Y-m-d H:m:s', '2010-03-10 10:30:10'), '2010-03-10 10:30:10', 'datetime'];
    }
}
