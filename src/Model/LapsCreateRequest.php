<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Model;

class LapsCreateRequest extends AbstractModel
{
    protected array $apiFormats = [
        'id_action_de_formation' => 'number',
        'id_participant' => 'number',
        'id_entreprise' => 'number',
        'id_groupe' => 'number',
        'prix' => 'float',
        'marquer_present' => 'boolean',
        'disable_inscription_auto' => 'boolean',
        'force_sync_lms' => 'boolean',
        'nb_participants_anonymes' => 'number',
    ];

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
     * @param float|null $prix
     * @return self
     */
    public function setPrix(?float $prix): self
    {
        return $this->set('prix', $prix);
    }

    /**
     * @return float|null
     */
    public function getPrix(): ?float
    {
        return $this->get('prix');
    }

    /**
     * @param bool|null $marquerPresent
     * @return self
     */
    public function setMarquerPresent(?bool $marquerPresent): self
    {
        return $this->set('marquer_present', $marquerPresent);
    }

    /**
     * @return bool|null
     */
    public function getMarquerPresent(): ?bool
    {
        return $this->get('marquer_present');
    }

    /**
     * @param bool|null $disableInscriptionAuto
     * @return self
     */
    public function setDisableInscriptionAuto(?bool $disableInscriptionAuto): self
    {
        return $this->set('disable_inscription_auto', $disableInscriptionAuto);
    }

    /**
     * @return bool|null
     */
    public function getDisableInscriptionAuto(): ?bool
    {
        return $this->get('disable_inscription_auto');
    }

    /**
     * @param bool|null $forceSyncLms
     * @return self
     */
    public function setForceSyncLms(?bool $forceSyncLms): self
    {
        return $this->set('force_sync_lms', $forceSyncLms);
    }

    /**
     * @return bool|null
     */
    public function getForceSyncLms(): ?bool
    {
        return $this->get('force_sync_lms');
    }

    /**
     * @param bool|null $nbParticipantsAnonymes
     * @return self
     */
    public function setNbParticipantsAnonymes(?bool $nbParticipantsAnonymes): self
    {
        return $this->set('nb_participants_anonymes', $nbParticipantsAnonymes);
    }

    /**
     * @return bool|null
     */
    public function getNbParticipantsAnonymes(): ?bool
    {
        return $this->get('nb_participants_anonymes');
    }
}
