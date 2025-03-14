<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Model;

class ContactsDeleteRequest extends AbstractModel
{
    protected array $casts = [
        'id' => 'int[]',
    ];

    protected array $apiFormats = [
        'id' => 'collection',
    ];

    /**
     * @param array<int> $id
     * @return self
     */
    public function setId(array $id): self
    {
        return $this->set('id', $id);
    }

    /**
     * @return array<int>
     */
    public function getId(): array
    {
        return (array) $this->get('id');
    }
}
