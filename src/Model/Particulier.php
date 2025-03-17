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
class Particulier extends AbstractModel
{
    protected array $casts = [
        'id_participant' => 'int',
        'date_add' => 'DateTime',
        'date_edit' => 'DateTime',
        'particulier' => 'boolean',
        'id_contact' => 'int',
        'responsable_id' => 'int',
        'newsletter_optin' => 'boolean',
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
    public function getEmail(): ?string
    {
        return $this->get('email');
    }

    /**
     * @return string|null
     */
    public function getCommentaire(): ?string
    {
        return $this->get('commentaires');
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
    public function getFonction(): ?string
    {
        return $this->get('fonction');
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
     * @return bool|null
     */
    public function getParticulier(): ?bool
    {
        return $this->get('particulier');
    }

    /**
     * @return string|null
     */
    public function getIdExterne(): ?string
    {
        return $this->get('id_externe');
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
    public function getResponsableId(): ?int
    {
        return $this->get('responsable_id');
    }

    /**
     * @return bool|null
     */
    public function getNewsletterOptin(): ?bool
    {
        return $this->get('newsletter_optin');
    }

    /**
     * @return string|null
     */
    public function getLanguePrincipale(): ?string
    {
        return $this->get('langue_principale');
    }

    /**
     * @return string|null
     */
    public function getTelephoneDirect(): ?string
    {
        return $this->get('telephone_direct');
    }
}
