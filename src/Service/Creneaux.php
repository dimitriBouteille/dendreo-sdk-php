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
use Dbout\DendreoSdk\Model\Creneau;
use Dbout\DendreoSdk\Model\CreneauxFindRequest;

/**
 * @see https://developers.dendreo.com/#creneaux
 */
class Creneaux extends Service
{
    final public const ENDPOINT = 'creneaux.php';

    /**
     * @param CreneauxFindRequest|null $request
     * @throws \Exception
     * @return array<Creneau>|null
     * @see https://developers.dendreo.com/#creneaux
     */
    public function find(CreneauxFindRequest $request = null): ?array
    {
        $result = $this->requestHttp(
            endpoint: self::ENDPOINT,
            method: Method::GET,
            queryParams: (array) $request?->jsonSerialize(),
        );

        return $this->deserialize($result, Formatter::toArrayClass(Creneau::class));
    }

    /**
     * @param int $id
     * @param CreneauxFindRequest|null $request
     * @throws \Exception
     * @return Creneau|null
     * @see https://developers.dendreo.com/#afficher-un-creneau
     */
    public function findById(int $id, CreneauxFindRequest $request = null): ?Creneau
    {
        $request ??= new CreneauxFindRequest();
        $request->set('id', $id);

        $result = $this->requestHttp(
            endpoint: self::ENDPOINT,
            method: Method::GET,
            queryParams: (array) $request->jsonSerialize(),
        );

        return $this->deserialize($result, Creneau::class);
    }
}
