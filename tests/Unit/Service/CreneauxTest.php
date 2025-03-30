<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Tests\Unit\Service;

use Dbout\DendreoSdk\Enum\Method;
use Dbout\DendreoSdk\HttpClient\CurlClient;
use Dbout\DendreoSdk\Model\Creneau;
use Dbout\DendreoSdk\Model\CreneauxFindRequest;
use Dbout\DendreoSdk\Service\Creneaux;
use PHPUnit\Framework\Attributes\CoversMethod;
use PHPUnit\Framework\Attributes\UsesClass;

#[CoversMethod(Creneaux::class, 'find')]
#[CoversMethod(Creneaux::class, 'findById')]
#[CoversMethod(Creneau::class, 'getIdCreneau')]
#[CoversMethod(Creneau::class, 'getIdActionDeFormation')]
#[UsesClass(CreneauxFindRequest::class)]
class CreneauxTest extends ServiceTestCase
{
    /**
     * @throws \Throwable
     * @return void
     */
    public function testFindById(): void
    {
        $curlClient = $this->createPartialMock(CurlClient::class, ['requestHttp']);
        $curlClient
            ->expects($this->once())
            ->method('requestHttp')
            ->willReturnCallback($this->getJsonResponseCurlRequestCallback('tests/fixtures/creneaux/find-by-id.json'))
            ->with(
                $this->anything(),
                $this->stringEndsWith('creneaux.php?id=150'),
                Method::GET,
                null
            );

        $service = new Creneaux($this->createMockClient($curlClient));
        $result = $service->findById(150);
        $this->assertInstanceOf(Creneau::class, $result);
        $this->assertEquals(150, $result->getIdCreneau());
        $this->assertEquals(617, $result->getIdActionDeFormation());
    }

    /**
     * @throws \Throwable
     * @return void
     */
    public function testFinByWithRequest(): void
    {
        $curlClient = $this->createPartialMock(CurlClient::class, ['requestHttp']);
        $curlClient
            ->expects($this->once())
            ->method('requestHttp')
            ->willReturnCallback($this->getJsonResponseCurlRequestCallback('tests/fixtures/creneaux/find-by-id.json'))
            ->with(
                $this->anything(),
                $this->stringEndsWith('creneaux.php?id=150'),
                Method::GET,
                null
            );

        $request = $this->createPartialMock(CreneauxFindRequest::class, ['set', 'jsonSerialize']);
        $request
            ->expects($this->once())
            ->method('set')
            ->with('id', 150);

        $request->expects($this->once())
            ->method('jsonSerialize')
            ->willReturn([
                'id' => 150,
            ]);

        $service = new Creneaux($this->createMockClient($curlClient));
        $result = $service->findById(150, $request);
        $this->assertInstanceOf(Creneau::class, $result);
    }

    /**
     * @throws \Throwable
     * @return void
     */
    public function testFind(): void
    {
        $curlClient = $this->createPartialMock(CurlClient::class, ['requestHttp']);
        $curlClient
            ->expects($this->once())
            ->method('requestHttp')
            ->willReturnCallback($this->getJsonResponseCurlRequestCallback('tests/fixtures/creneaux/find-creneaux.json'))
            ->with(
                $this->anything(),
                $this->stringEndsWith('creneaux.php?include=formateurs'),
                Method::GET,
                null
            );

        $service = new Creneaux($this->createMockClient($curlClient));

        $request = new CreneauxFindRequest();
        $request->setInclude(['formateurs']);

        $result = $service->find($request);
        $this->assertIsArray($result);
        $this->assertCount(2, (array) $result);
    }
}
