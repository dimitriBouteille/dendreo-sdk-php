<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Model;

class ContactsFindRequest extends AbstractModel
{
    protected array $casts = [
        'id_entreprise' => 'int',
        'nom' => 'string',
        'email' => 'string',
        'include' => 'string[]',
    ];

    protected array $apiFormats = [
        'include' => 'collection',
    ];

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
