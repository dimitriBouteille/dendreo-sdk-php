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
use Dbout\DendreoSdk\Model\Lap;
use Dbout\DendreoSdk\Model\LapsFindRequest;
use Dbout\DendreoSdk\Model\Participant;
use Dbout\DendreoSdk\Response;
use Dbout\DendreoSdk\Service\Laps;
use PHPUnit\Framework\Attributes\CoversMethod;
use PHPUnit\Framework\Attributes\TestWith;

#[CoversMethod(Laps::class, 'delete')]
#[CoversMethod(Laps::class, 'findById')]
#[CoversMethod(Laps::class, 'find')]
#[CoversMethod(Lap::class, 'getSources')]
#[CoversMethod(Lap::class, 'getIdParticipant')]
#[CoversMethod(Lap::class, 'getParticipant')]
class LapsTest extends ServiceTestCase
{
    /**
     * @param int|array<int> $id
     * @param non-empty-string $expectedRequestUrl
     * @throws \Throwable
     * @return void
     */
    #[TestWith([[20,525], 'laps.php?id_lap=20%2C525'])]
    #[TestWith([15, 'laps.php?id_lap=15'])]
    public function testDelete(int|array $id, string $expectedRequestUrl): void
    {
        $curlClient = $this->createPartialMock(CurlClient::class, ['requestHttp']);
        $curlClient->expects($this->once())->method('requestHttp')
            ->willReturnCallback(function () {
                return new Response(200, []);
            })
            ->with(
                $this->anything(),
                $this->stringEndsWith($expectedRequestUrl),
                Method::DELETE,
                null
            );

        $client = $this->createMockClient($curlClient);
        $service = new Laps($client);
        $this->assertTrue($service->delete($id));
    }

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
            ->willReturnCallback($this->getJsonResponseCurlRequestCallback('tests/fixtures/laps/find-by-id.json'))
            ->with(
                $this->anything(),
                $this->stringEndsWith('id=150'),
                Method::GET,
                null
            );

        $client = $this->createMockClient($curlClient);
        $service = new Laps($client);
        $result = $service->findById(150);

        $this->assertInstanceOf(Lap::class, $result);
        $this->assertInstanceOf(Participant::class, $result->getParticipant());
        $this->assertEquals('dendreo', $result->getSources());
        $this->assertEquals(15, $result->getIdParticipant());
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
            ->willReturnCallback($this->getJsonResponseCurlRequestCallback('tests/fixtures/laps/find.json'))
            ->with(
                $this->anything(),
                $this->stringEndsWith('id_action_de_formation=15'),
                Method::GET,
                null
            );

        $request = $this->createMock(LapsFindRequest::class);
        $request->expects($this->once())
            ->method('jsonSerialize')
            ->willReturn(['id_action_de_formation' => 15]);

        $client = $this->createMockClient($curlClient);
        $service = new Laps($client);
        $result = $service->find($request);

        $this->assertCount(3, (array) $result);
    }
}
