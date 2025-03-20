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
class LapsUpdateRequest extends LapsCreateRequest
{
    /**
     * @param int $idLap
     * @return self
     */
    public function setIdLap(int $idLap): self
    {
        return $this->set('id_lap', $idLap);
    }

    /**
     * @return int|null
     */
    public function getIdLap(): ?int
    {
        return $this->get('id_lap');
    }
}
