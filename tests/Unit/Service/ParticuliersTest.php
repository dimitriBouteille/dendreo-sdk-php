<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Tests\Unit\Service;

use Dbout\DendreoSdk\Model\Particulier;
use Dbout\DendreoSdk\Model\ParticuliersCreateRequest;
use Dbout\DendreoSdk\Model\ParticuliersUpdateRequest;
use Dbout\DendreoSdk\Service\Particuliers;
use PHPUnit\Framework\Attributes\CoversMethod;
use PHPUnit\Framework\Attributes\UsesClass;

#[CoversMethod(Particuliers::class, 'create')]
#[CoversMethod(Particuliers::class, 'update')]
#[CoversMethod(Particulier::class, 'getEmail')]
#[CoversMethod(Particulier::class, 'getPrenom')]
#[CoversMethod(Particulier::class, 'getNom')]
#[CoversMethod(Particulier::class, 'getIdExterne')]
#[CoversMethod(Particulier::class, 'getIdEntreprise')]
#[CoversMethod(Particulier::class, 'getIdContact')]
#[CoversMethod(Particulier::class, 'getIdParticipant')]
#[UsesClass(ParticuliersCreateRequest::class)]
#[UsesClass(ParticuliersUpdateRequest::class)]
class ParticuliersTest extends ServiceTestCase
{
    /**
     * @throws \Throwable
     * @return void
     */
    public function testCreate(): void
    {
        $curlClient = $this->createMockCurlClient('tests/fixtures/particuliers/create.json', 201);
        $service = new Particuliers($this->createMockClient($curlClient));

        $requestMock = $this->createMock(ParticuliersCreateRequest::class);
        $requestMock
            ->expects($this->once())
            ->method('set')
            ->with('particulier', true);

        $requestMock
            ->expects($this->once())
            ->method('jsonSerialize')
            ->willReturn([
                'particulier' => true,
                'email' => 'test@gmail.com',
            ]);

        $service->create($requestMock);
    }

    /**
     * @throws \Throwable
     * @return void
     */
    public function testUpdate(): void
    {
        $curlClient = $this->createMockCurlClient('tests/fixtures/particuliers/create.json', 201);
        $service = new Particuliers($this->createMockClient($curlClient));

        $request = new ParticuliersUpdateRequest();
        $request->setIdParticipant(601);
        $request->setEmail('test@gmail.com');
        $request->setPrenom('Zaha');
        $request->setNom('Hadid');

        $object = $service->update($request);
        $this->assertInstanceOf(Particulier::class, $object);
        $this->assertEquals(601, $object->getIdParticipant());
        $this->assertEquals(1001, $object->getIdEntreprise());
        $this->assertEquals(55, $object->getIdContact());
        $this->assertEquals('test@gmail.com', $object->getEmail());
        $this->assertEquals('Hadid', $object->getNom());
        $this->assertEquals('Zaha', $object->getPrenom());
    }
}
