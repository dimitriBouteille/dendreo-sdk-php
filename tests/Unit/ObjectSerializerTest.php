<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Tests\Unit;

use Dbout\DendreoSdk\Exception\DendreoException;
use Dbout\DendreoSdk\Model\AbstractModel;
use Dbout\DendreoSdk\ObjectSerializer;
use PHPUnit\Framework\Attributes\CoversMethod;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

#[CoversMethod(ObjectSerializer::class, 'serialize')]
#[CoversMethod(ObjectSerializer::class, 'deserialize')]
class ObjectSerializerTest extends TestCase
{
    private ObjectSerializer $objectSerializer;

    /**
     * @inheritDoc
     */
    protected function setUp(): void
    {
        $this->objectSerializer = new ObjectSerializer();
    }

    #[TestWith([null])]
    #[TestWith([''])]
    public function testSerializeWithInvalidData(mixed $data): void
    {
        $this->assertEquals($data, $this->objectSerializer->serialize($data));
    }

    /**
     * @throws DendreoException
     * @return void
     */
    public function testSerializeThrowExceptionWithInvalidObject(): void
    {
        $this->expectException(DendreoException::class);
        $this->expectExceptionMessage('Invalid data type');

        $this->objectSerializer->serialize(new \DateTime());
    }

    /**
     * @throws \Exception
     * @return void
     */
    public function testSerializeWithArray(): void
    {
        $input = [
            'id' => '185',
            'email' => 'test@test.fr',
            'include' => ['photo', 'url'],
            'username' => null,
        ];

        $this->assertEquals($input, $this->objectSerializer->serialize($input));
    }

    /**
     * @throws \Exception
     * @return void
     */
    public function testSerializeSimpleModel(): void
    {
        $mode = $this->getMockBuilder(SerializeSimpleModel::class)
            ->onlyMethods(['getData', 'getInclude', 'getIsActive'])
            ->getMock();

        $mode->expects($this->once())->method('getData')->willReturn([
            'id' => '185',
            'include' => ['email', 'photo'],
            'email' => 'test@test.fr',
            'is_active' => true,
            'created_at' => \DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:00:00'),
        ]);

        $mode->expects($this->once())->method('getInclude')->willReturn(['email', 'photo']);
        $mode->expects($this->once())->method('getIsActive')->willReturn(true);

        $expected =  [
            'id' => 185,
            'include' => 'email,photo',
            'email' => 'test@test.fr',
            'is_active' => '1',
            'created_at' => '2020-01-01',
        ];

        $this->assertEquals($expected, (array) $this->objectSerializer->serialize($mode));
    }

    /**
     * @throws \Exception
     * @return void
     */
    public function testDeserializeThrowExceptionWithFormatArrayAndInvalidData(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid array int[]');
        $this->objectSerializer->deserialize('[bad_json,8556,4252', 'int[]');
    }

    /**
     * @param mixed $inputArray
     * @throws \Exception
     * @return void
     */
    #[TestWith(['[1856,8556,4252]'])]
    #[TestWith([['1856', '8556', '4252']])]
    public function testDeserializeArray(mixed $inputArray): void
    {
        $result = $this->objectSerializer->deserialize($inputArray, 'int[]');
        $this->assertEquals([1856, 8556, 4252], $result);
    }

    /**
     * @param mixed $inputArray
     * @throws \Exception
     * @return void
     */
    #[TestWith(['{"user_id": "52", "client_id":"8952"}'])]
    #[TestWith([['user_id' => '52', 'client_id' => '8952']])]
    public function testDeserializeAssociatedArray(mixed $inputArray): void
    {
        $result = $this->objectSerializer->deserialize($inputArray, 'array<string,int>');
        $this->assertEquals(['user_id' => 52, 'client_id' => 8952], $result);
    }

    #[TestWith([true, 'boolean'])]
    #[TestWith([false, 'boolean'])]
    #[TestWith([85, 'integer'])]
    #[TestWith([58.625, 'double'])]
    #[TestWith(['152', 'string'])]
    public function testDeserializeAutoCastWithMixedClass(mixed $value, mixed $expectedType): void
    {
        $result = $this->objectSerializer->deserialize($value, 'mixed');
        $this->assertEquals($expectedType, gettype($result));
    }
}

class SerializeSimpleModel extends AbstractModel
{
    protected array $apiFormats = [
        'id' => 'int',
        'include' => 'collection',
        'is_active' => 'boolean',
        'created_at' => 'date',
    ];

    /**
     * @return array<string>|null
     */
    public function getInclude(): ?array
    {
        return $this->get('include');
    }

    /**
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->get('is_active');
    }
}
