<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Service;

use Dbout\DendreoSdk\Enum\Method;
use Dbout\DendreoSdk\Model\Particulier;
use Dbout\DendreoSdk\Model\ParticuliersCreateRequest;
use Dbout\DendreoSdk\Model\ParticuliersUpdateRequest;

class Particuliers extends Service
{
    final public const ENDPOINT = 'particuliers.php';

    /**
     * @param ParticuliersCreateRequest $request
     * @throws \Exception
     * @return Particulier|null
     * @see https://developers.dendreo.com/#ajouter-un-particulier
     */
    public function create(ParticuliersCreateRequest $request): ?Particulier
    {
        $request->set('particulier', true);
        $result = $this->requestHttp(
            endpoint: Contacts::ENDPOINT,
            method: Method::POST,
            bodyParams: (array) $request->jsonSerialize(),
        );

        return $this->deserialize($result, Particulier::class);
    }

    /**
     * @param ParticuliersUpdateRequest $request
     * @throws \Exception
     * @return Particulier|null
     * @see https://developers.dendreo.com/#editer-un-particulier
     */
    public function update(ParticuliersUpdateRequest $request): ?Particulier
    {
        $result = $this->requestHttp(
            endpoint: self::ENDPOINT,
            method: Method::POST,
            bodyParams: (array) $request->jsonSerialize(),
        );

        return $this->deserialize($result, Particulier::class);
    }
}
