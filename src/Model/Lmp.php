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
class Lmp extends AbstractModel
{
    protected array $casts = [
        'id_lmp' => 'number',
        'date_add' => 'DateTime',
        'date_edit' => 'DateTime',
        'prix' => 'float',
    ];


    /**
     * @param float|null $prix
     * @return self
     */
    public function setPrix(?float $prix): self
    {
        return $this->set('prix', $prix);
    }

    /**
     * @return float|null
     */
    public function getPrix(): ?float
    {
        return $this->get('prix');
    }

    /**
     * @param int|null $idLmp
     * @return self
     */
    public function setIdLmp(?int $idLmp): self
    {
        return $this->set('id_lmp', $idLmp);
    }

    /**
     * @return int|null
     */
    public function getIdLmp(): ?int
    {
        return $this->get('id_lmp');
    }


    /**
     * @return \DateTime|null
     */
    public function getDateAdd(): ?\DateTime
    {
        return $this->get('date_add');
    }

    /**
     * @param \DateTime|null $dateAdd
     * @return self
     */
    public function setDateAdd(?\DateTime $dateAdd): self
    {
        return $this->set('date_add', $dateAdd);
    }

    /**
     * @return \DateTime|null
     */
    public function getDateEdit(): ?\DateTime
    {
        return $this->get('date_edit');
    }

    /**
     * @param \DateTime|null $dateEdit
     * @return self
     */
    public function setDateEdit(?\DateTime $dateEdit): self
    {
        return $this->set('date_edit', $dateEdit);
    }
}
