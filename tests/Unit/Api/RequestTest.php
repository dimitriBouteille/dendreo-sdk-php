<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

declare(strict_types=1);

namespace Dbout\DendreoSdk\Tests\Unit\Api;

use Dbout\DendreoSdk\Api\ParticipantsApi;
use Dbout\DendreoSdk\Api\SourcesApi;
use Dbout\DendreoSdk\Model\ParticipantFilter;
use Dbout\DendreoSdk\Model\ParticipantsStoreRequest;
use Dbout\DendreoSdk\Model\SourcesStoreRequest;
use Dbout\DendreoSdk\Tests\Unit\MockHttpTrait;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

/**
 * Requests built by the generated services, with the changes of openapi/templates/.
 */
final class RequestTest extends TestCase
{
    use MockHttpTrait;

    public function testIndexQuery(): void
    {
        $api = new ParticipantsApi($this->mockClient([self::jsonResponse(200, ['data' => [], 'meta' => [], 'links' => []])]));

        $api->index(
            filter: (new ParticipantFilter())
                ->setNom('Dupont')
                ->setId([12, 15])
                ->setCreatedAt('>=2026-01-01'),
            include: ['entreprise', 'centres'],
            sort: ['-created_at'],
            page: 2,
            per_page: 50,
        );

        self::assertSame('GET', $this->lastRequest()->getMethod());
        self::assertSame('/v2/participants', $this->lastRequest()->getUri()->getPath());
        self::assertSame([
            'filter[id]' => '12,15',
            'filter[nom]' => 'Dupont',
            'filter[created_at]' => '>=2026-01-01',
            'include' => 'entreprise,centres',
            'sort' => '-created_at',
            'page' => '2',
            'per_page' => '50',
        ], $this->lastQuery());
    }

    public function testFilterOnlySendsTheFieldsThatAreSet(): void
    {
        $api = new ParticipantsApi($this->mockClient([self::jsonResponse(200, ['data' => []])]));

        $api->index(filter: (new ParticipantFilter())->setTrashed('with'));

        $query = $this->lastQuery();
        self::assertSame('with', $query['filter[trashed]']);
        self::assertSame([], array_filter(
            array_keys($query),
            static fn (string $name) => str_starts_with($name, 'filter[') && $name !== 'filter[trashed]',
        ));
        self::assertStringNotContainsString('container', $this->lastRequest()->getUri()->getQuery());
    }

    public function testStoreSendsJsonBody(): void
    {
        $api = new SourcesApi($this->mockClient([self::jsonResponse(201, ['data' => ['id' => 9, 'name' => 'Salon']])]));

        $source = $api->store((new SourcesStoreRequest())->setName('Salon')->setStatus(true))->getData();

        $request = $this->lastRequest();
        self::assertSame('POST', $request->getMethod());
        self::assertSame('/v2/sources', $request->getUri()->getPath());
        self::assertSame('application/json', $request->getHeaderLine('Content-Type'));
        self::assertSame(['name' => 'Salon', 'status' => true], json_decode((string) $request->getBody(), true));
        self::assertSame(9, $source->getId());
    }

    public function testInvalidRequestIsNotSent(): void
    {
        $api = new ParticipantsApi($this->mockClient([]));

        try {
            $api->store((new ParticipantsStoreRequest())->setNom('Dupont'));
            self::fail('An InvalidArgumentException was expected.');
        } catch (\InvalidArgumentException $e) {
            self::assertStringContainsString("'prenom'", $e->getMessage());
        }

        self::assertSame([], $this->requests);
    }

    public function testDestroyReturnsNothing(): void
    {
        $api = new SourcesApi($this->mockClient([new Response(204)]));

        $api->destroy(9);

        self::assertSame('DELETE', $this->lastRequest()->getMethod());
        self::assertSame('/v2/sources/9', $this->lastRequest()->getUri()->getPath());
    }
}
