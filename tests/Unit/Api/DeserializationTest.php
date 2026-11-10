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
use Dbout\DendreoSdk\Model\Entreprise;
use Dbout\DendreoSdk\ObjectSerializer;
use Dbout\DendreoSdk\Tests\Unit\MockHttpTrait;
use PHPUnit\Framework\TestCase;

/**
 * Dates and additional fields, handled by the changes of openapi/templates/ObjectSerializer.mustache.
 */
final class DeserializationTest extends TestCase
{
    use MockHttpTrait;

    private string $defaultTimezone;

    protected function setUp(): void
    {
        // A server in UTC must still read the dates in Paris time.
        $this->defaultTimezone = date_default_timezone_get();
        date_default_timezone_set('UTC');
    }

    protected function tearDown(): void
    {
        date_default_timezone_set($this->defaultTimezone);
    }

    public function testDatesAreReadInParisTime(): void
    {
        $participant = $this->showParticipant([
            'created_at' => '2026-07-01 10:00:00',
            'updated_at' => '2026-01-15 10:00:00',
        ]);

        self::assertSame('2026-07-01T10:00:00+02:00', $participant->getCreatedAt()?->format(DATE_ATOM));
        self::assertSame('2026-01-15T10:00:00+01:00', $participant->getUpdatedAt()?->format(DATE_ATOM));
        self::assertNull($participant->getDeletedAt());
    }

    public function testDatesAreSentInParisTime(): void
    {
        $this->mockClient([]);

        self::assertSame(
            '2026-07-01 10:00:00',
            ObjectSerializer::sanitizeForSerialization(new \DateTime('2026-07-01 08:00:00', new \DateTimeZone('UTC'))),
        );
        self::assertSame(
            '2026-07-01',
            ObjectSerializer::sanitizeForSerialization(new \DateTime('2026-07-01 23:30:00', new \DateTimeZone('UTC')), null, 'date'),
        );
    }

    public function testIncludedRelationIsTyped(): void
    {
        $participant = $this->showParticipant([
            'entreprise' => ['id' => 7, 'raison_sociale' => 'ACME', 'created_at' => '2026-01-01 00:00:00', 'updated_at' => null, 'deleted_at' => null],
        ]);

        self::assertInstanceOf(Entreprise::class, $participant->getEntreprise());
        self::assertSame('ACME', $participant->getEntreprise()->getRaisonSociale());
        self::assertNull($participant->getContact());
    }

    public function testAdditionalFieldsAreKept(): void
    {
        $participant = $this->showParticipant([
            'champ_couleur' => 'bleu',
            'champ_liste' => ['a' => 1, 'b' => [2, 3]],
            'entreprise' => ['id' => 7, 'created_at' => null, 'updated_at' => null, 'deleted_at' => null, 'champ_secteur' => 'BTP'],
        ]);

        self::assertSame('bleu', $participant['champ_couleur']);
        self::assertSame(['a' => 1, 'b' => [2, 3]], $participant['champ_liste']);
        self::assertSame('BTP', $participant->getEntreprise()['champ_secteur'] ?? null);
        self::assertFalse(isset($participant['champ_absent']));
        self::assertSame('Durand', $participant->getNom());
    }

    /**
     * @param array<string, mixed> $fields
     */
    private function showParticipant(array $fields): \Dbout\DendreoSdk\Model\Participant
    {
        $api = new ParticipantsApi($this->mockClient([self::jsonResponse(200, ['data' => $fields + [
            'id' => 42,
            'nom' => 'Durand',
            'created_at' => '2026-07-01 10:00:00',
            'updated_at' => '2026-07-01 10:00:00',
            'deleted_at' => null,
        ]])]));

        return $api->show(42)->getData();
    }
}
