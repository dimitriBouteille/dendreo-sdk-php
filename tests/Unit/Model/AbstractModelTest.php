<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Tests\Unit\Model;

use Dbout\DendreoSdk\Model\AbstractModel;
use PHPUnit\Framework\Attributes\CoversMethod;
use PHPUnit\Framework\TestCase;

#[CoversMethod(AbstractModel::class, 'getCasts')]
class AbstractModelTest extends TestCase
{
    /**
     * @return void
     */
    public function testGetCasts(): void
    {
        $object = new RootModel();
        $this->assertEquals([
            'id' => 'number',
            'account' => 'string',
        ], $object->getCasts());
    }

    /**
     * @return void
     */
    public function testGetCastsWithExtendedCasts(): void
    {
        $class = new class () extends RootModel {
            protected function casts(): array
            {
                return [
                    'id_customer' => 'int',
                    'created_at' => 'DateTime',
                ];
            }
        };

        $object = new $class();

        $this->assertEquals([
            'id' => 'number',
            'account' => 'string',
            'id_customer' => 'int',
            'created_at' => 'DateTime',
        ], $object->getCasts());
    }
}

class RootModel extends AbstractModel
{
    protected array $casts = [
        'id' => 'number',
        'account' => 'string',
    ];
}
