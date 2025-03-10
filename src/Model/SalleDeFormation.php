<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Model;

class SalleDeFormation extends AbstractModel
{
    /**
     * @inheritdoc
     */
    protected array $casts = [
        'id_salle_de_formation' => 'int',
        'intitule' => 'string',
        'color' => 'string',
        'status' => 'boolean',
        'capacite_max' => 'int',
        'adresse' => 'string',
        'code_postal' => 'string',
        'ville' => 'string',
        'pays_alpha2' => 'string',
        'pays' => 'string',
        'id_centre_de_formation' => 'int',
        'global_visible' => 'boolean',
        'lien_google_maps' => 'string',
        'acces' => 'string',
        'inside' => 'boolean',
        'telephone' => 'string',
        'email' => 'string',
        'nom_contact' => 'string',
        'commentaires_internes' => 'string',
        'elearning' => 'boolean',
        'url_connexion' => 'string',
        'emplacement_id' => 'int',
        'acces_handicapes' => 'boolean',
        'acces_handicapes_desc' => 'string',
        'ical_url' => 'string',
    ];

    /**
     * @param int|null $idSalleDeFormation
     * @return self
     */
    public function setIdSalleDeFormation(?int $idSalleDeFormation): self
    {
        return $this->set('id_salle_de_formation', $idSalleDeFormation);
    }

    /**
     * @param string|null $intitule
     * @return self
     */
    public function setIntitule(?string $intitule): self
    {
        return $this->set('intitule', $intitule);
    }

    /**
     * @param string|null $color
     * @return self
     */
    public function setColor(?string $color): self
    {
        return $this->set('color', $color);
    }

    /**
     * @param int|null $capaciteMax
     * @return self
     */
    public function setCapaciteMax(?int $capaciteMax): self
    {
        return $this->set('capacite_max', $capaciteMax);
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
     * @param string|null $paysAlpha2
     * @return self
     */
    public function setPaysAlpha2(?string $paysAlpha2): self
    {
        return $this->set('pays_alpha2', $paysAlpha2);
    }

    /**
     * @param int|null $idCentreDeFormation
     * @return self
     */
    public function setIdCentreDeFormation(?int $idCentreDeFormation): self
    {
        return $this->set('id_centre_de_formation', $idCentreDeFormation);
    }
}
