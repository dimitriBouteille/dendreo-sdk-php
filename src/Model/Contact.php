<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Model;

class Contact extends AbstractModel
{
    protected array $casts = [
        'id_contact' => 'int',
        'id_entreprise' => 'int',
        'civilite' => 'string',
        'nom' => 'string',
        'prenom' => 'string',
        'fonction' => 'string',
        'telephone_direct' => 'string',
        'portable' => 'string',
        'email' => 'string',
        'particulier' => 'boolean',
        'id_externe' => 'string',
        'langue_principale' => 'string',
        'langues_secondaires' => 'string',
    ];
}
