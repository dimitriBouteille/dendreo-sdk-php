<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Model;

class Participant extends AbstractModel
{
    protected array $casts = [
        'id_participant' => 'int',
        'date_add' => 'DateTime',
        'date_edit' => 'DateTime',
        'nom' => 'string',
        'prenom' => 'string',
        'email' => 'string',
        'portable' => 'string',
        'adresse' => 'string',
        'code_postal' => 'string',
        'ville' => 'string',
        'pays_alpha2' => 'string',
        'id_entreprise' => 'int',
        'id_externe' => 'string',
        'commentaires' => 'string',
        'id_contact' => 'int',
    ];

    /**
     * @return int|null
     */
    public function getIdParticipant(): ?int
    {
        return $this->get('id_participant');
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
    public function getEmail(): ?string
    {
        return $this->get('email');
    }

    /**
     * @return string|null
     */
    public function getPortable(): ?string
    {
        return $this->get('portable');
    }

    /**
     * @return string|null
     */
    public function getAdresse(): ?string
    {
        return $this->get('adresse');
    }

    /**
     * @return string|null
     */
    public function getCodePostal(): ?string
    {
        return $this->get('code_postal');
    }

    /**
     * @return string|null
     */
    public function getVille(): ?string
    {
        return $this->get('ville');
    }

    /**
     * @return string|null
     */
    public function getPaysAlpha2(): ?string
    {
        return $this->get('pays_alpha2');
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
    public function getIdExterne(): ?int
    {
        return $this->get('id_externe');
    }

    /**
     * @return string|null
     */
    public function getCommentaires(): ?string
    {
        return $this->get('commentaires');
    }

    /**
     * @return int|null
     */
    public function getIdContact(): ?int
    {
        return $this->get('id_contact');
    }
}
