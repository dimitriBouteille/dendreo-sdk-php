<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Model;

class ContactsCreateOrUpdateRequest extends AbstractModel
{
    protected array $casts = [
        'id_contact' => 'int',
        'id_entreprise' => 'int',
        'nom' => 'string',
        'prenom' => 'string',
        'civilite' => 'string',
        'fonction' => 'string',
        'telephone_direct' => 'string',
        'portable' => 'string',
        'email' => 'string',
        'id_externe' => 'string',
        'entreprise_raison_sociale' => 'string',
        'entreprise_id_externe' => 'string',
        'particulier' => 'boolean',
    ];

    /**
     * @param int|null $idContact
     * @return self
     */
    public function setIdContact(?int $idContact): self
    {
        return $this->set('id_contact', $idContact);
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
     * @param string|null $nom
     * @return self
     */
    public function setNom(?string $nom): self
    {
        return $this->set('nom', $nom);
    }

    /**
     * @param string|null $prenom
     * @return self
     */
    public function setPrenom(?string $prenom): self
    {
        return $this->set('prenom', $prenom);
    }

    /**
     * @param string|null $civilite
     * @return self
     */
    public function setCivilite(?string $civilite): self
    {
        return $this->set('civilite', $civilite);
    }

    /**
     * @param string|null $fonction
     * @return self
     */
    public function setFonction(?string $fonction): self
    {
        return $this->set('fonction', $fonction);
    }

    /**
     * @param string|null $telephoneDirect
     * @return self
     */
    public function setTelephoneDirect(?string $telephoneDirect): self
    {
        return $this->set('telephone_direct', $telephoneDirect);
    }

    /**
     * @param string|null $email
     * @return self
     */
    public function setEmail(?string $email): self
    {
        return $this->set('email', $email);
    }

    /**
     * @param string|null $idExterne
     * @return self
     */
    public function setIdExterne(?string $idExterne): self
    {
        return $this->set('id_externe', $idExterne);
    }

    /**
     * @param string|null $entrepriseRaisonSociale
     * @return self
     */
    public function setEntrepriseRaisonSociale(?string $entrepriseRaisonSociale): self
    {
        return $this->set('entreprise_raison_sociale', $entrepriseRaisonSociale);
    }

    /**
     * @param string|null $entrepriseIdExterne
     * @return self
     */
    public function setEntrepriseIdExterne(?string $entrepriseIdExterne): self
    {
        return $this->set('entreprise_id_externe', $entrepriseIdExterne);
    }

    /**
     * @param bool|null $particulier
     * @return self
     */
    public function setParticulier(?bool $particulier): self
    {
        return $this->set('particulier', $particulier);
    }
}
