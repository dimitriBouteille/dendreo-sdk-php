<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Model;

class ParticuliersUpdateRequest extends ParticuliersCreateRequest
{
    protected array $casts = [
        'id_entreprise' => 'int',
        'id_contact' => 'int',
        'id_participant' => 'int',
    ];

    /**
     * @param int|null $idEntreprise
     * @return self
     */
    public function setIdEntreprise(?int $idEntreprise): self
    {
        return $this->set('id_entreprise', $idEntreprise);
    }

    /**
     * @return int|null
     */
    public function getIdEntreprise(): ?int
    {
        return $this->get('id_entreprise');
    }

    /**
     * @param int|null $idContact
     * @return self
     */
    public function setIdContact(?int $idContact): self
    {
        return $this->set('id_contact', $idContact);
    }

    /**
     * @return int|null
     */
    public function getIdContact(): ?int
    {
        return $this->get('id_contact');
    }

    /**
     * @param int|null $idParticipant
     * @return self
     */
    public function setIdParticipant(?int $idParticipant): self
    {
        return $this->set('id_participant', $idParticipant);
    }

    /**
     * @return int|null
     */
    public function getIdParticipant(): ?int
    {
        return $this->get('id_participant');
    }
}
