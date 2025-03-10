<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Model;

class ActionDeFormation extends AbstractModel
{
    protected array $casts = [
        'id_action_de_formation' => 'int',
        'id_centre_de_formation' => 'int',
        'id_salle_de_formation' => 'int',
        'numero' => 'int',
        'numero_complet' => 'string',
        'numero_comptable' => 'string',
        'type' => 'string',
        'intitule' => 'string',
        'description' => 'string',
        'id_entreprise' => 'int',
        'id_contact' => 'int',
        'id_etape_process' => 'int',
        'date_debut' => 'DateTime',
        'date_fin' => 'DateTime',
        'date_etape_realisation' => 'DateTime',
        'date_etape_archivage' => 'DateTime',
        'date_etape_echec' => 'DateTime',
        'lieu' => 'string',
        'nb_participants_min' => 'int',
        'nb_participants_max' => 'int',
        'objectif' => 'string',
        'total_heures_participants' => 'int',
        'total_participants' => 'int',
        'nb_participants_inscrits' => 'int',
        'nb_participants_non_inscrits' => 'int',
        'nb_participants_en_attente' => 'int',
        'categorie_module_id' => 'int',
        'ical_url' => 'string',
        'pourcentage_planification' => 'float',
        'emargements_url' => 'string',
        'objectif_pedagogique' => 'string',
        'modalites_pedagogiques' => 'string',
        'moyens_supports_pedagogiques' => 'string',
        'modalites_devaluation' => 'string',
        'tva_frais' => 'float',
        'tva_hors_formation' => 'float',
        'tva_formation' => 'float',
        'satisfaction_disabled' => 'boolean',
        'pre_requis' => 'string',
        'esignature' => 'boolean',
    ];
}
