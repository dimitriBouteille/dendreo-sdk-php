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
use Dbout\DendreoSdk\Model\ActionDeFormation;
use Dbout\DendreoSdk\Model\ActionDeFormationFindRequest;

/**
 * @see https://developers.dendreo.com/#actions-de-formation
 */
class ActionsDeFormation extends Service
{
    final public const ENDPOINT = 'actions_de_formation.php';

    /**
     * @param ActionDeFormationFindRequest|null $request
     * @throws \Exception
     * @return array<ActionDeFormation>|null
     * @see https://developers.dendreo.com/#lister-toutes-les-actions-de-formation
     */
    public function find(ActionDeFormationFindRequest $request = null): ?array
    {
        $result = $this->requestHttp(
            endpoint: self::ENDPOINT,
            method: Method::GET,
            queryParams:(array) $request?->jsonSerialize(),
        );

        return $this->deserialize($result, Formatter::toArrayClass(ActionDeFormation::class));
    }

    /**
     * @param int $apiId
     * @param ActionDeFormationFindRequest|null $request
     * @throws \Exception
     * @return ActionDeFormation|null
     * @see https://developers.dendreo.com/#afficher-une-action-de-formation
     */
    public function findById(int $apiId, ?ActionDeFormationFindRequest $request = null): ?ActionDeFormation
    {
        $request ??= new ActionDeFormationFindRequest();
        $request->set('id', $apiId);

        $result = $this->requestHttp(
            endpoint: self::ENDPOINT,
            method: Method::GET,
            queryParams: (array) $request->jsonSerialize(),
        );

        return $this->deserialize($result, ActionDeFormation::class);
    }
}
