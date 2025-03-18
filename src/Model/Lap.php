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
class Lap extends AbstractModel
{
    protected array $casts = [
        'id_lap' => 'int',
        'id_action_de_formation' => 'int',
        'id_entreprise' => 'int',
        'id_participant' => 'int',
        'source' => 'string',
        'id_groupe' => 'int',
        'participant' => Participant::class,
    ];

    /**
     * @param int|null $idGroupe
     * @return self
     */
    public function setIdGroupe(?int $idGroupe): self
    {
        return $this->set('id_groupe', $idGroupe);
    }

    /**
     * @return int|null
     */
    public function getIdGroupe(): ?int
    {
        return $this->get('id_groupe');
    }

    /**
     * @param string|null $source
     * @return self
     */
    public function setSource(?string $source): self
    {
        return $this->set('source', $source);
    }

    /**
     * @return string|null
     */
    public function getSources(): ?string
    {
        return $this->get('source');
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
     * @param int|null $idLap
     * @return self
     */
    public function setIdLap(?int $idLap): self
    {
        return $this->set('id_lap', $idLap);
    }

    /**
     * @return int|null
     */
    public function getIdLap(): ?int
    {
        return $this->get('id_lap');
    }

    /**
     * @return Participant|null
     */
    public function getParticipant(): ?Participant
    {
        return $this->get('participant');
    }

    /**
     * @param Participant|null $participant
     * @return self
     */
    public function setParticipant(?Participant $participant): self
    {
        return $this->set('participant', $participant);
    }
}
