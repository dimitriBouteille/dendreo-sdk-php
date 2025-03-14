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
use Dbout\DendreoSdk\Model\SalleDeFormation;
use Dbout\DendreoSdk\Model\SalleDeFormationCreateRequest;
use Dbout\DendreoSdk\Model\SallesDeFormationFindRequest;

/**
 * @see https://developers.dendreo.com/#salles-de-formation
 */
class SallesDeFormation extends Service
{
    final public const ENDPOINT = 'salles_de_formation.php';

    /**
     * @param SallesDeFormationFindRequest|null $request
     * @throws \Exception
     * @return array<SalleDeFormation>|null
     * @see https://developers.dendreo.com/#lister-toutes-les-salles-de-formation
     */
    public function find(?SallesDeFormationFindRequest $request = null): ?array
    {
        $result = $this->requestHttp(
            endpoint: self::ENDPOINT,
            method: Method::GET,
            queryParams: (array) $request?->jsonSerialize(),
        );

        return $this->deserialize($result, Formatter::toArrayClass(SalleDeFormation::class));
    }

    /**
     * @param int $id
     * @throws \Exception
     * @return SalleDeFormation|null
     * @see https://developers.dendreo.com/#afficher-une-salle-de-formation
     */
    public function findById(int $id): ?SalleDeFormation
    {
        $result = $this->requestHttp(
            endpoint: self::ENDPOINT,
            method: Method::GET,
            queryParams: ['id' => $id],
        );

        return $this->deserialize($result, SalleDeFormation::class);
    }

    /**
     * @param SalleDeFormationCreateRequest $request
     * @throws \Exception
     * @return SalleDeFormation|null
     * @see https://developers.dendreo.com/#ajouter-une-salle-de-formation
     */
    public function create(SalleDeFormationCreateRequest $request): ?SalleDeFormation
    {
        $result = $this->requestHttp(
            endpoint: self::ENDPOINT,
            method: Method::POST,
            bodyParams: (array) $request->jsonSerialize()
        );

        return $this->deserialize($result, SalleDeFormation::class);
    }
}
