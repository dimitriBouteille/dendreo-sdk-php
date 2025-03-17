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
class ParticuliersCreateRequest extends AbstractModel
{
    protected array $apiFormats = [
        'particulier' => 'boolean',
        'date_de_naissance' => 'date',
        'langues_secondaires' => 'collection',
    ];

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
     * @param string|null $telephone
     * @return self
     */
    public function setTelephoneDirect(?string $telephone): self
    {
        return $this->set('telephone_direct', $telephone);
    }

    /**
     * @return string|null
     */
    public function getTelephoneDirect(): ?string
    {
        return $this->get('telephone_direct');
    }

    /**
     * @param string|null $portable
     * @return self
     */
    public function setPortable(?string $portable): self
    {
        return $this->set('portable', $portable);
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
     * @return string|null
     */
    public function getIdExterne(): ?string
    {
        return $this->get('id_externe');
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
     * @param string|null $codePostal
     * @return self
     */
    public function setCodePostal(?string $codePostal): self
    {
        return $this->set('code_postal', $codePostal);
    }

    /**
     * @return string|null
     */
    public function getCodePostal(): ?string
    {
        return $this->get('code_postal');
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
     * @param string|null $paysAlpha2
     * @return self
     */
    public function setPaysAlpha2(?string $paysAlpha2): self
    {
        return $this->set('pays_alpha2', $paysAlpha2);
    }

    /**
     * @return string|null
     */
    public function getPaysAlpha2(): ?string
    {
        return $this->get('pays_alpha2');
    }

    /**
     * @param string|null $facturationPaysAlpha2
     * @return self
     */
    public function setFacturationPaysAlpha2(?string $facturationPaysAlpha2): self
    {
        return $this->set('facturation_pays_alpha2', $facturationPaysAlpha2);
    }

    /**
     * @return string|null
     */
    public function getFacturationPaysAlpha2(): ?string
    {
        return $this->get('facturation_pays_alpha2');
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
     * @return string|null
     */
    public function getCivilite(): ?string
    {
        return $this->get('civilite');
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
     * @return string|null
     */
    public function getFonction(): ?string
    {
        return $this->get('fonction');
    }

    /**
     * @param \DateTime|null $dateDeNaissance
     * @return self
     */
    public function setDateDeNaissance(?\DateTime $dateDeNaissance): self
    {
        return $this->set('date_de_naissance', $dateDeNaissance);
    }

    /**
     * @return \DateTime|null
     */
    public function getDateDeNaissance(): ?\DateTime
    {
        return $this->get('date_de_naissance');
    }

    /**
     * @param string|null $languePrincipale
     * @return self
     */
    public function setLanguePrincipale(?string $languePrincipale): self
    {
        return $this->set('langue_principale', $languePrincipale);
    }

    /**
     * @return string|null
     */
    public function getLanguePrincipale(): ?string
    {
        return $this->get('langue_principale');
    }

    /**
     * @param array<string> $langueSecondaires
     * @return self
     */
    public function setLanguesSecondaires(array $langueSecondaires): self
    {
        return $this->set('langues_secondaires', $langueSecondaires);
    }

    /**
     * @return array<string>|null
     */
    public function getLanguesSecondaires(): ?array
    {
        return $this->get('langues_secondaires');
    }
}
