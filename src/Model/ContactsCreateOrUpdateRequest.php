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
        'date_de_naissance' => 'DateTime',
        'adresse' => 'string',
        'code_postal' => 'string',
        'ville' => 'string',
        'langue_principale' => 'string',
        'nom_naissance' => 'string',
    ];

    protected array $apiFormats = [
        'date_de_naissance' => 'date',
        'particulier' => 'int',
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
     * @return string|null
     */
    public function getNom(): ?string
    {
        return $this->get('nom');
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
     * @return string|null
     */
    public function getPrenom(): ?string
    {
        return $this->get('prenom');
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
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->get('email');
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

    /**
     * @return bool|null
     */
    public function getParticulier(): ?bool
    {
        return $this->get('particulier');
    }

    /**
     * @param \DateTime|null $dateTime
     * @return self
     */
    public function setDateDeNaissance(?\DateTime $dateTime): self
    {
        return $this->set('date_de_naissance', $dateTime);
    }

    /**
     * @return \DateTime|null
     */
    public function getDateDeNaissance(): ?\DateTime
    {
        return $this->get('date_de_naissance');
    }

    /**
     * @param string|null $adresse
     * @return self
     */
    public function setAdresse(?string $adresse): self
    {
        return $this->set('adresse', $adresse);
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
     * @param string|null $codePostal
     * @return self
     */
    public function setCodePostal(?string $codePostal): self
    {
        return $this->set('code_postal', $codePostal);
    }

    /**
     * @param string|null $ville
     * @return self
     */
    public function setVille(?string $ville): self
    {
        return $this->set('ville', $ville);
    }

    /**
     * @return string|null
     */
    public function getVille(): ?string
    {
        return $this->get('ville');
    }

    /**
     * @param string|null $langue
     * @return self
     */
    public function setLanguePrincipale(?string $langue): self
    {
        return $this->set('langue_principale', $langue);
    }

    /**
     * @return string|null
     */
    public function getLanguePrincipale(): ?string
    {
        return $this->get('langue_principale');
    }

    /**
     * @param string|null $nomNaissance
     * @return self
     */
    public function seNomNaissance(?string $nomNaissance): self
    {
        return $this->set('nom_naissance', $nomNaissance);
    }

    /**
     * @return string|null
     */
    public function getNomNaissance(): ?string
    {
        return $this->get('nom_naissance');
    }
}
