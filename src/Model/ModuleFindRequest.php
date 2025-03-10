<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Model;

class ModuleFindRequest extends AbstractModel
{
    protected array $casts = [
        'include' => 'string',
        'id_categorie_module' => 'int',
        'eligible_cpf' => 'boolean',
        'catalogue' => 'boolean',
        'numero_complet' => 'string',
    ];
}
