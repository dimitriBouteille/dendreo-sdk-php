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
class Creneau extends AbstractModel
{
    protected array $casts = [
        'id_creneau' => 'int',
        'date_add' => '\DateTime',
        'date_edit' => '\DateTime',
        'id_action_de_formation' => 'int',
        'id_lam' => 'int',
        'date_debut' => '\DateTime',
        'date_fin' => '\DateTime',
        'id_salle_de_formation' => 'int',
        'name' => 'string',
        'icon' => 'string',
        'formation' => ActionDeFormation::class,
        'duration' => 'float',
    ];

    /**
     * @return int|null
     */
    public function getIdCreneau(): ?int
    {
        return $this->get('id_creneau');
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
     * @return int|null
     */
    public function getIdActionDeFormation(): ?int
    {
        return $this->get('id_action_de_formation');
    }

    /**
     * @return int|null
     */
    public function getIdLam(): ?int
    {
        return $this->get('id_lam');
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
    public function getIdSalleDeFormation(): ?int
    {
        return $this->get('id_salle_de_formation');
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->get('name');
    }

    /**
     * @return string|null
     */
    public function getIcon(): ?string
    {
        return $this->get('icon');
    }

    /**
     * @return ActionDeFormation|null
     */
    public function getFormation(): ?ActionDeFormation
    {
        return $this->get('formation');
    }

    /**
     * @return float|null
     */
    public function getDuration(): ?float
    {
        return $this->get('duration');
    }
}
