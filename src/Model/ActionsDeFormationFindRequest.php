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
class ActionsDeFormationFindRequest extends AbstractModel
{
    protected array $apiFormats = [
        'nb_jours' => 'int',
        'type' => 'string',
        'id_entreprise' => 'int',
        'id_module' => 'int',
        'id_salle_de_formation' => 'int',
        'id_formateur' => 'int',
        'numero_complet' => 'string',
        'id_centre_de_formation' => 'int',
        'id_externe' => 'string',
        'include' => 'collection',
    ];

    /**
     * @param int|null $nbJours
     * @return self
     */
    public function setNbJours(?int $nbJours): self
    {
        return $this->set('nb_jours', $nbJours);
    }

    /**
     * @return int|null
     */
    public function getNbJours(): ?int
    {
        return $this->get('nb_jours');
    }

    /**
     * @param string|null $type
     * @return self
     */
    public function setType(?string $type): self
    {
        return $this->set('type', $type);
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->set('type', null);
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
     * @param int|null $idModule
     * @return self
     */
    public function setIdModule(?int $idModule): self
    {
        return $this->set('id_module', $idModule);
    }

    /**
     * @return int|null
     */
    public function getIdModule(): ?int
    {
        return $this->get('id_module');
    }

    /**
     * @param int|null $idSalleDeFormation
     * @return self
     */
    public function setIdSalleDeFormation(?int $idSalleDeFormation): self
    {
        return $this->set('id_salle_de_formation', $idSalleDeFormation);
    }

    /**
     * @return int|null
     */
    public function getIdSalleDeFormation(): ?int
    {
        return $this->get('id_salle_de_formation');
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
     * @param string|null $numeroComplet
     * @return self
     */
    public function setNumeroComplet(?string $numeroComplet): self
    {
        return $this->set('numero_complet', $numeroComplet);
    }

    /**
     * @return string|null
     */
    public function getNumeroComplet(): ?string
    {
        return $this->get('numero_complet');
    }

    /**
     * @param int|null $idCentreDeFormation
     * @return self
     */
    public function setIdCentreDeFormation(?int $idCentreDeFormation): self
    {
        return $this->set('id_centre_de_formation', $idCentreDeFormation);
    }

    /**
     * @return int|null
     */
    public function getIdCentreDeFormation(): ?int
    {
        return $this->get('id_centre_de_formation');
    }

    /**
     * @param int|null $idExterne
     * @return self
     */
    public function setIdExterne(?int $idExterne): self
    {
        return $this->set('id_externe', $idExterne);
    }

    /**
     * @return int|null
     */
    public function getIdExterne(): ?int
    {
        return $this->get('id_externe');
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
}
