<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Model;

class ActionDeFormationCreateRequest extends AbstractModel
{
    protected array $casts = [
        'include' => 'collection',
        'id' => 'number',
        'id_entreprise' => 'number',
        'id_module' => 'number',
        'id_salle_de_formation' => 'number',
        'id_externe' => 'number',
        'nb_jours' => 'number',
    ];

    /**
     * @param int $id
     * @return self
     */
    public function setId(int $id): self
    {
        return $this->set('id', $id);
    }

    /**
     * @param string|array<string> $include
     * @return self
     */
    public function setInclude(string|array $include): self
    {
        return $this->set('include', (array) $include);
    }

    /**
     * Les actions de formation de type `inter` ou `intra`
     *
     * @param string $type
     * @return self
     */
    public function setType(string $type): self
    {
        return $this->set('type', $type);
    }

    /**
     * Les actions de formation INTRA liées à l'entreprise sélectionnée
     *
     * @param int $idEntreprise
     * @return self
     */
    public function setIdEntreprise(int $idEntreprise): self
    {
        return $this->set('id_entreprise', $idEntreprise);
    }

    /**
     * Les actions de formation qui contiennent le module sélectionné
     *
     * @param int $idModule
     * @return self
     */
    public function setIdModule(int $idModule): self
    {
        return $this->set('id_module', $idModule);
    }

    /**
     * Les actions de formation qui ont au moins un lieu correspondant à cette salle
     *
     * @param int $idSalleDeFormation
     * @return self
     */
    public function setIdSalleDeFormation(int $idSalleDeFormation): self
    {
        return $this->set('id_salle_de_formation', $idSalleDeFormation);
    }

    /**
     * Les actions de formation qui ont ce formateur staffé à au moins 1 créneau
     *
     * @param int $idFormateur
     * @return self
     */
    public function setIdFormateur(int $idFormateur): self
    {
        return $this->set('id_formateur', $idFormateur);
    }

    /**
     * L'action de formation portant ce numero complet
     *
     * @param string $numeroComplet
     * @return self
     */
    public function setNumeroComplet(string $numeroComplet): self
    {
        return $this->set('numero_complet', $numeroComplet);
    }

    /**
     * Les actions de formation qui sont rattachées à ce centre de formation
     *
     * @param int $idCentreDeFormation
     * @return self
     */
    public function setIdCentreDeFormation(int $idCentreDeFormation): self
    {
        return $this->set('id_centre_de_formation', $idCentreDeFormation);
    }

    /**
     * L'action de formation portant cet id externe
     *
     * @param int $idExterne
     * @return self
     */
    public function setIdExterne(int $idExterne): self
    {
        return $this->set('id_externe', $idExterne);
    }

    /**
     * @param int $nbJours
     * @return self
     */
    public function setNbJours(int $nbJours): self
    {
        return $this->set('nb_jours', $nbJours);
    }
}
