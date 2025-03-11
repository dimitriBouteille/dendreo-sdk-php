<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Service;

use Dbout\DendreoSdk\Enum\Method;
use Dbout\DendreoSdk\Helper\Formatter;
use Dbout\DendreoSdk\Model\Participant;
use Dbout\DendreoSdk\Model\ParticipantsDeleteRequest;
use Dbout\DendreoSdk\Model\ParticipantsFindRequest;

/**
 * @see https://developers.dendreo.com/#participants
 */
class Participants extends Service
{
    final public const ENDPOINT = 'participants.php';

    /**
     * @param ParticipantsFindRequest|null $request
     * @throws \Exception
     * @return array<Participant>|null
     * @see https://developers.dendreo.com/#lister-tous-les-participants
     */
    public function find(?ParticipantsFindRequest $request = null): ?array
    {
        $result = $this->requestHttp(
            endpoint: self::ENDPOINT,
            method: Method::GET,
            queryParams: $request?->toArray(),
        );

        return $this->deserialize($result, Formatter::toArrayClass(Participant::class));
    }

    /**
     * @param int $id
     * @param ParticipantsFindRequest|null $request
     * @throws \Exception
     * @return Participant|null
     * @see https://developers.dendreo.com/#afficher-un-participant
     */
    public function findById(int $id, ?ParticipantsFindRequest $request = null): ?Participant
    {
        $request ??= new ParticipantsFindRequest();
        $request->set('id', $id);

        $result = $this->requestHttp(
            endpoint: self::ENDPOINT,
            method: Method::GET,
            queryParams: $request->toArray(),
        );

        return $this->deserialize($result, Participant::class);
    }

    /**
     * @param array<int>|int $id
     * @throws \Exception
     * @return bool
     * @see https://developers.dendreo.com/#supprimer-un-participant
     */
    public function delete(array|int $id): bool
    {
        $request = new ParticipantsDeleteRequest();
        $request->setId((array)$id);

        $result = $this->requestHttp(
            endpoint: self::ENDPOINT,
            method: Method::DELETE,
            queryParams: $request->toArray(),
        );

        return $result->isSuccess();
    }
}
