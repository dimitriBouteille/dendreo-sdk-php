<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Model;

/**
 * @codeCoverageIgnore
 */
class LapsFindRequest extends AbstractModel
{
    protected array $apiFormats = [
        'id_entreprise' => 'int',
        'id_participant' => 'int',
        'id_action_de_formation' => 'int',
        'include' => 'collection',
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

    /**
     * @param array<string>|null $include
     * @return self
     */
    public function setInclude(?array $include): self
    {
        return $this->set('include', $include);
    }

    /**
     * @return array<string>|null
     */
    public function getInclude(): ?array
    {
        return $this->get('include');
    }

    /**
     * @param int|null $idActionDeFormation
     * @return self
     */
    public function setIdActionDeFormation(?int $idActionDeFormation): self
    {
        return $this->set('id_action_de_formation', $idActionDeFormation);
    }

    /**
     * @return int|null
     */
    public function getIdActionDeFormation(): ?int
    {
        return $this->get('id_action_de_formation');
    }
}
