<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Model;

use Dbout\DendreoSdk\Helper\Formatter;

/**
 * @codeCoverageIgnore
 */
class ActionDeFormation extends AbstractModel
{
    /**
     * @inheritDoc
     */
    public function getCasts(): array
    {
        return [
            'id_action_de_formation' => 'int',
            'id_centre_de_formation' => 'int',
            'id_salle_de_formation' => 'int',
            'date_add' => '\DateTime',
            'date_edit' => '\DateTime',
            'numero' => 'int',
            'numero_complet' => 'string',
            'numero_comptable' => 'string',
            'type' => 'string',
            'intitule' => 'string',
            'description' => 'string',
            'id_entreprise' => 'int',
            'id_contact' => 'int',
            'id_etape_process' => 'int',
            'date_debut' => '\DateTime',
            'date_fin' => '\DateTime',
            'date_etape_realisation' => '\DateTime',
            'date_etape_archivage' => '\DateTime',
            'date_etape_echec' => '\DateTime',
            'lieu' => 'string',
            'nb_participants_min' => 'int',
            'nb_participants_max' => 'int',
            'objectif' => 'string',
            'total_heures_participants' => 'int',
            'total_participants' => 'int',
            'nb_participants_inscrits' => 'int',
            'nb_participants_non_inscrits' => 'int',
            'nb_participants_en_attente' => 'int',
            'categorie_module_id' => 'int',
            'ical_url' => 'string',
            'pourcentage_planification' => 'float',
            'emargements_url' => 'string',
            'objectif_pedagogique' => 'string',
            'modalites_pedagogiques' => 'string',
            'moyens_supports_pedagogiques' => 'string',
            'modalites_devaluation' => 'string',
            'tva_frais' => 'float',
            'tva_hors_formation' => 'float',
            'tva_formation' => 'float',
            'satisfaction_disabled' => 'boolean',
            'pre_requis' => 'string',
            'esignature' => 'boolean',
            'nb_creneaux' => 'int',
            'creneaux' => Formatter::toArrayClass(Creneau::class),
        ];
    }

    /**
     * @return int|null
     */
    public function getIdActionDeFormation(): ?int
    {
        return $this->get('id_action_de_formation');
    }

    /**
     * @return int|null
     */
    public function getIdCentreDeFormation(): ?int
    {
        return $this->get('id_centre_de_formation');
    }

    /**
     * @return int|null
     */
    public function getIdSalleDeFormation(): ?int
    {
        return $this->get('id_salle_de_formation');
    }

    /**
     * @return string|null
     */
    public function getNumeroComplet(): ?string
    {
        return $this->get('numero_complet');
    }

    /**
     * @return string|null
     */
    public function getNumeroComptable(): ?string
    {
        return $this->get('numero_comptable');
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->get('type');
    }

    /**
     * @return string|null
     */
    public function getIntitule(): ?string
    {
        return $this->get('intitule');
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->get('description');
    }

    /**
     * @return int|null
     */
    public function getIdEntreprise(): ?int
    {
        return $this->get('id_entreprise');
    }

    /**
     * @return int|null
     */
    public function getIdContact(): ?int
    {
        return $this->get('id_contact');
    }

    /**
     * @return int|null
     */
    public function getIdEtapeProcess(): ?int
    {
        return $this->get('id_etape_process');
    }

    /**
     * @return \DateTime|null
     */
    public function getDateDebut(): ?\DateTime
    {
        return $this->get('date_debut');
    }

    /**
     * @return \DateTime|null
     */
    public function getDateFin(): ?\DateTime
    {
        return $this->get('date_fin');
    }

    /**
     * @return int|null
     */
    public function getNbParticipantsMin(): ?int
    {
        return $this->get('nb_participants_min');
    }

    /**
     * @return int|null
     */
    public function getNbParticipantsMax(): ?int
    {
        return $this->get('nb_participants_max');
    }

    /**
     * @return int|null
     */
    public function getTotalParticipants(): ?int
    {
        return $this->get('total_participants');
    }

    /**
     * @return int|null
     */
    public function getCategorieModuleId(): ?int
    {
        return $this->get('categorie_module_id');
    }

    /**
     * @return \DateTime|null
     */
    public function getDateAdd(): ?\DateTime
    {
        return $this->get('date_add');
    }

    /**
     * @return \DateTime|null
     */
    public function getDateEdit(): ?\DateTime
    {
        return $this->get('date_edit');
    }

    /**
     * @return string|null
     */
    public function getIcalUrl(): ?string
    {
        return $this->get('ical_url');
    }

    /**
     * @return int|null
     */
    public function getNbCreneaux(): ?int
    {
        return $this->get('nb_creneaux');
    }

    /**
     * @return string|null
     */
    public function getEmargementsUrl(): ?string
    {
        return $this->get('emargements_url');
    }

    /**
     * @return array<Creneau>|null
     */
    public function getCreneaux(): ?array
    {
        return $this->get('creneaux');
    }
}
