<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Service;

use Dbout\DendreoSdk\Enum\Method;
use Dbout\DendreoSdk\Helper\ApiFormatter;
use Dbout\DendreoSdk\Helper\Formatter;
use Dbout\DendreoSdk\Model\Lap;
use Dbout\DendreoSdk\Model\LapsCreateRequest;
use Dbout\DendreoSdk\Model\LapsFindRequest;
use Dbout\DendreoSdk\Model\LapsUpdateRequest;

/**
 * @see https://developers.dendreo.com/#inscription-d-39-un-participant
 */
class Laps extends Service
{
    final public const ENDPOINT = 'laps.php';

    /**
     * @param LapsFindRequest $request
     * @throws \Exception
     * @return array<Lap>|null
     * @see https://developers.dendreo.com/#afficher-les-inscriptions-d-39-une-action-de-formation
     * @see https://developers.dendreo.com/#afficher-toutes-les-inscriptions-d-39-un-participant
     */
    public function find(LapsFindRequest $request): ?array
    {
        $result = $this->requestHttp(
            endpoint: self::ENDPOINT,
            method: Method::GET,
            queryParams: (array) $request->jsonSerialize(),
        );

        return $this->deserialize($result, Formatter::toArrayClass(Lap::class));
    }

    /**
     * @param int $id
     * @throws \Exception
     * @return Lap|null
     * @see https://developers.dendreo.com/#afficher-une-inscription
     */
    public function findById(int $id): ?Lap
    {
        $result = $this->requestHttp(
            endpoint: self::ENDPOINT,
            method: Method::GET,
            queryParams: [
                'id' => $id,
            ],
        );

        return $this->deserialize($result, Lap::class);
    }

    /**
     * @param LapsCreateRequest $request
     * @throws \Exception
     * @return Lap|null
     * @see https://developers.dendreo.com/#ajouter-editer-une-inscription
     */
    public function create(LapsCreateRequest $request): ?Lap
    {
        $result = $this->requestHttp(
            endpoint: self::ENDPOINT,
            method: Method::POST,
            bodyParams: (array) $request->jsonSerialize(),
        );

        return $this->deserialize($result, Lap::class);
    }

    /**
     * @param LapsUpdateRequest $request
     * @throws \Exception
     * @return Lap|null
     * @see https://developers.dendreo.com/#ajouter-editer-une-inscription
     */
    public function update(LapsUpdateRequest $request): ?Lap
    {
        $result = $this->requestHttp(
            endpoint: self::ENDPOINT,
            method: Method::POST,
            bodyParams: (array) $request->jsonSerialize(),
        );

        return $this->deserialize($result, Lap::class);
    }

    /**
     * @param array<int>|int $id
     * @throws \Exception
     * @return bool
     * @see https://developers.dendreo.com/#supprimer-une-inscription
     */
    public function delete(array|int $id): bool
    {
        $result = $this->requestHttp(
            endpoint: self::ENDPOINT,
            method: Method::DELETE,
            queryParams: [
                'id_lap' => ApiFormatter::format((array) $id, 'collection'),
            ],
        );

        return $result->isSuccess();
    }
}
