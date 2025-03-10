<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Tests\Unit\Helper;

use Dbout\DendreoSdk\Helper\Formatter;
use PHPUnit\Framework\Attributes\CoversMethod;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

#[CoversMethod(Formatter::class, 'studly')]
#[CoversMethod(Formatter::class, 'toArrayClass')]
class FormatterTest extends TestCase
{
    /**
     * @param string $value
     * @param string $expectedValue
     * @return void
     */
    #[TestWith(['id_module', 'IdModule'])]
    #[TestWith(['id_action_de_formation', 'IdActionDeFormation'])]
    #[TestWith(['user', 'User'])]
    public function testStudly(string $value, string $expectedValue): void
    {
        $this->assertEquals($expectedValue, Formatter::studly($value));
    }

    /**
     * @param string $value
     * @param string $expectedValue
     * @return void
     */
    #[TestWith(['\MyPackage\Model\Customer', '\MyPackage\Model\Customer[]'])]
    public function testToArrayClass(string $value, string $expectedValue): void
    {
        $this->assertEquals($expectedValue, Formatter::toArrayClass($value));
    }
}
