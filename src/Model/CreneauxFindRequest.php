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
class CreneauxFindRequest extends AbstractModel
{
    protected array $apiFormats = [
        'include' => 'collection',
        'id_lam' => 'int',
        'id_action_de_formation' => 'int',
        'id_participant' => 'int',
        'participant_id_externe' => 'string',
        'id_formateur' => 'int',
        'formateur_id_externe' => 'string',
    ];

    /**
     * @param array<string> $include
     * @return self
     */
    public function setInclude(array $include): self
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
     * @param int|null $idLam
     * @return self
     */
    public function setIdLam(?int $idLam): self
    {
        return $this->set('id_lam', $idLam);
    }

    /**
     * @return int|null
     */
    public function getIdLam(): ?int
    {
        return $this->get('id_lam');
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
     * @param string|null $participantIdExterne
     * @return self
     */
    public function setParticipantIdExterne(?string $participantIdExterne): self
    {
        return $this->set('participant_id_externe', $participantIdExterne);
    }

    /**
     * @return string|null
     */
    public function getParticipantIdExterne(): ?string
    {
        return $this->get('participant_id_externe');
    }

    /**
     * @param int|null $idFormateur
     * @return self
     */
    public function setIdFormateur(?int $idFormateur): self
    {
        return $this->set('id_formateur', $idFormateur);
    }

    /**
     * @return int|null
     */
    public function getIdFormateur(): ?int
    {
        return $this->get('id_formateur');
    }

    /**
     * @param string|null $formateurIdExterne
     * @return self
     */
    public function setFormateurIdExterne(?string $formateurIdExterne): self
    {
        return $this->set('formateur_id_externe', $formateurIdExterne);
    }

    /**
     * @return string|null
     */
    public function getFormateurIdExterne(): ?string
    {
        return $this->get('formateur_id_externe');
    }
}
