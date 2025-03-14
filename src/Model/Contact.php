<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Model;

class Contact extends AbstractModel
{
    protected array $casts = [
        'id_contact' => 'int',
        'id_entreprise' => 'int',
        'civilite' => 'string',
        'nom' => 'string',
        'prenom' => 'string',
        'fonction' => 'string',
        'telephone_direct' => 'string',
        'portable' => 'string',
        'email' => 'string',
        'particulier' => 'boolean',
        'id_externe' => 'string',
        'langue_principale' => 'string',
        'langues_secondaires' => 'string',
        'photo' => 'string',
        'date_add' => 'DateTime',
        'date_edit' => 'DateTime',
    ];

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
    public function getIdEntreprise(): ?int
    {
        return $this->get('id_entreprise');
    }

    /**
     * @return string|null
     */
    public function getCivilite(): ?string
    {
        return $this->get('civilite');
    }

    /**
     * @return string|null
     */
    public function getNom(): ?string
    {
        return $this->get('nom');
    }

    /**
     * @return string|null
     */
    public function getPrenom(): ?string
    {
        return $this->get('prenom');
    }

    /**
     * @return string|null
     */
    public function getFonction(): ?string
    {
        return $this->get('fonction');
    }

    /**
     * @return string|null
     */
    public function getTelephoneDirect(): ?string
    {
        return $this->get('telephone_direct');
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->get('email');
    }

    /**
     * @return bool|null
     */
    public function getLanguePrincipale(): ?bool
    {
        return $this->get('langue_principale');
    }

    /**
     * @return array<string>|null
     */
    public function getLanguesSecondaires(): ?array
    {
        return $this->get('langues_secondaires');
    }

    /**
     * @return string|null
     */
    public function getPortable(): ?string
    {
        return $this->get('portable');
    }

    /**
     * @return bool|null
     */
    public function getParticulier(): ?bool
    {
        return $this->get('particulier');
    }

    /**
     * @return string|null
     */
    public function getPhoto(): ?string
    {
        return $this->get('photo');
    }

    /**
     * @return string|null
     */
    public function getIdExterne(): ?string
    {
        return $this->get('id_externe');
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
}
