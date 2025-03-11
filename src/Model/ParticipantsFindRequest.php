<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Model;

class ParticipantsFindRequest extends AbstractModel
{
    protected array $casts = [
        'id_entreprise' => 'int',
        'email' => 'string',
        'date_de_naissance' => 'string',
        'search' => 'string',
        'include' => 'string[]',
    ];

    /**
     * @param int $idEntreprise
     * @return self
     */
    public function setIdEntreprise(int $idEntreprise): self
    {
        return $this->set('id_entreprise', $idEntreprise);
    }

    /**
     * @param string $email
     * @return self
     */
    public function setEmail(string $email): self
    {
        return $this->set('email', $email);
    }

    /**
     * @param string $dateDeNaissance
     * @return self
     */
    public function setDateDeNaissance(string $dateDeNaissance): self
    {
        return $this->set('date_de_naissance', $dateDeNaissance);
    }

    /**
     * @param string $search
     * @return self
     */
    public function setSearch(string $search): self
    {
        return $this->set('search', $search);
    }

    /**
     * @param array<string> $include
     * @return self
     */
    public function setInclude(array $include): self
    {
        return $this->set('include', $include);
    }
}
