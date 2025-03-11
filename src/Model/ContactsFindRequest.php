<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Model;

class ContactsFindRequest extends AbstractModel
{
    protected array $casts = [
        'id_entreprise' => 'int',
        'nom' => 'string',
        'email' => 'string',
        'include' => 'string[]',
    ];
}
