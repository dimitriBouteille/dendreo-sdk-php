<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Model;

class SallesDeFormationFindRequest extends AbstractModel
{
    protected array $casts = [
        'inside' => 'boolean',
        'emplacement_cible' => 'string',
    ];

    /**
     * @param bool $inside
     * @return self
     */
    public function setInside(bool $inside): self
    {
        return $this->set('inside', $inside);
    }

    /**
     * @return bool|null
     */
    public function getInside(): ?bool
    {
        return $this->get('inside');
    }

    /**
     * @param string|null $emplacementCible
     * @return self
     */
    public function setEmplacementCible(?string $emplacementCible): self
    {
        return $this->set('emplacement_cible', $emplacementCible);
    }

    /**
     * @return string|null
     */
    public function getEmplacementCible(): ?string
    {
        return $this->get('emplacement_cible');
    }
}
