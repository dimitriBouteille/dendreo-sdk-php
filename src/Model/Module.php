<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Model;

class Module extends AbstractModel
{
    protected array $casts = [
        'id_module' => 'int',
        'id_externe' => 'string',
        'id_categorie_produit' => 'int',
        'intitule' =>  'string',
        'intitule_court' => 'string',
        'slug' => 'string',
        'color' => 'string',
        'numero_complet' => 'string',
        'numero_comptable' => 'string',
        'description' => 'string',
        'description_meta' => 'string',
        'prix' => 'float',
        'prix_intra' => 'float',
        'prix_edof' => 'float',
        'prix_achat' => 'float',
        'duree_heures' => 'int',
        'duree_jours' => 'int',
        'moyenne_satisfaction' => 'float',
        'satisfaction_nb_avis' => 'int',
        'satisfaction_nb_total' => 'int',
        'document_presentation_url' => 'string',
        'visuel_url' => 'string',
        'competences_list' => 'string[]',
        'public_url_catalogue' => 'string',
        'mention_a_partir_de' => 'boolean',
        'langue' => 'string',
        'date_add' => '\DateTime',
        'date_edit' => '\DateTime',
        'id_formateur' => 'int',
        'nb_participants_min' => 'int',
        'nb_participants' => 'int',
        'id_categorie_module' => 'int',
        'eligible_cpf' => 'boolean',
    ];

    /**
     * @return int
     */
    public function getIdModule(): int
    {
        return $this->get('id_module');
    }

    /**
     * @return string|null
     */
    public function getIdExterne(): ?string
    {
        return $this->get('id_externe');
    }

    /**
     * @return string
     */
    public function getIntitule(): string
    {
        return $this->get('intitule');
    }

    /**
     * @return string
     */
    public function getNumeroComplet(): string
    {
        return $this->get('numero_complet');
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->get('description');
    }
}
