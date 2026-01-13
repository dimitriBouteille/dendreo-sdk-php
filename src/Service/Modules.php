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
use Dbout\DendreoSdk\Model\Module;
use Dbout\DendreoSdk\Model\ModuleFindRequest;

/**
 * @see https://developers.dendreo.com/#modules-produits
 */
class Modules extends Service
{
    final public const ENDPOINT = 'modules.php';

    /**
     * @param ModuleFindRequest|null $request
     * @throws \Exception
     * @return array<Module>|null
     * @see https://developers.dendreo.com/#lister-tous-les-modules-de-formation
     */
    public function find(?ModuleFindRequest $request = null): ?array
    {
        $result = $this->requestHttp(
            endpoint: self::ENDPOINT,
            method: Method::GET,
            queryParams: (array) $request?->jsonSerialize(),
        );

        return $this->deserialize($result, Formatter::toArrayClass(Module::class));
    }

    /**
     * @param int $id
     * @param ModuleFindRequest|null $request
     * @throws \Exception
     * @return Module|null
     * @see https://developers.dendreo.com/#afficher-un-module-de-formation
     */
    public function findById(int $id, ?ModuleFindRequest $request = null): ?Module
    {
        $request ??= new ModuleFindRequest();
        $request->set('id', $id);

        $result = $this->requestHttp(
            endpoint: self::ENDPOINT,
            method: Method::GET,
            queryParams: (array) $request->jsonSerialize(),
        );

        return $this->deserialize($result, Module::class);
    }
}
