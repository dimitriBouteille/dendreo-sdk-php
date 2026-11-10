<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Model;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use Dbout\DendreoSdk\ObjectSerializer;

/**
 * ActionDeFormation Class Doc Comment
 *
 * Generated from the Dendreo OpenAPI specification, do not edit manually.
 *
 * @description Les champs additionnels du compte sont ajoutés à la ressource, sous leur nom de champ.
 * @package  Dbout\DendreoSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ActionDeFormation implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ActionDeFormation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'numero' => 'string',
        'numero_complet' => 'string',
        'numero_perso' => 'string',
        'numero_comptable' => 'string',
        'type' => 'string',
        'formation' => 'bool',
        'intitule' => 'string',
        'intitule_court' => 'string',
        'color' => 'string',
        'description' => 'string',
        'id_centre_de_formation' => 'int',
        'id_salle_de_formation' => 'int',
        'id_entreprise' => 'int',
        'id_contact' => 'int',
        'id_contact_facturation' => 'int',
        'id_etape_process' => 'int',
        'date_debut' => 'string',
        'date_fin' => 'string',
        'date_effective_debut' => '\DateTime',
        'date_effective_fin' => '\DateTime',
        'date_edit_etape' => 'string',
        'has_dates_contractuelles' => 'bool',
        'nb_participants_min' => 'string',
        'nb_participants_max' => 'string',
        'objectif' => 'string',
        'objectif_pre_2017' => 'string',
        'nature' => 'string',
        'inscription_online' => 'bool',
        'include_in_bpf' => 'bool',
        'total_heures_participants' => 'float',
        'total_participants' => 'string',
        'satisfaction_disabled' => 'bool',
        'id_responsable' => 'int',
        'id_commercial' => 'int',
        'mode_pricing' => 'string',
        'mode_organisation' => 'string',
        'commentaires' => 'string',
        'commentaires_agenda' => 'string',
        'tva_formation' => 'float',
        'tva_hors_formation' => 'float',
        'tva_frais' => 'float',
        'id_externe' => 'string',
        'esignature' => 'bool',
        'remuneration_par_lmf' => 'bool',
        'categorie_module_id' => 'int',
        'code_analytique' => 'string',
        'objectif_pedagogique' => 'string',
        'modalites_pedagogiques' => 'string',
        'moyens_supports_pedagogiques' => 'string',
        'public_vise' => 'string',
        'pre_requis' => 'string',
        'infos_admission' => 'string',
        'modalites_devaluation' => 'string',
        'accessibilite' => 'string',
        'profil_formateurs' => 'string',
        'message_libre_exp' => 'string',
        'message_libre_exe' => 'string',
        'message_libre_exf' => 'string',
        'ical_url' => 'string',
        'created_at' => '\DateTime',
        'id_add' => 'int',
        'updated_at' => '\DateTime',
        'id_edit' => 'int',
        'deleted_at' => '\DateTime',
        'id_delete' => 'int',
        'etape_process' => '\Dbout\DendreoSdk\Model\EtapeProcess',
        'visuel' => 'string',
        'dokeos_learning_path_id' => 'int',
        'dokeos_group_id' => 'int',
        'tslearning_group_id' => 'string',
        'riseup_group_id' => 'int',
        'riseup_learning_path_id' => 'int',
        'num_session_dpc' => 'string',
        'ogdpc_orientation' => 'string',
        'ogdpc_orientation_ide' => 'int',
        'ogdpc_orientation_as' => 'int',
        'emargements_url' => 'string',
        'pourcentage_planification' => 'float',
        'duree_planification_restante_heures' => 'float',
        'nb_participants_inscrits' => 'int',
        'nb_participants_non_inscrits' => 'int',
        'nb_participants_en_attente' => 'int',
        'moyenne_satisfaction' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'numero' => null,
        'numero_complet' => null,
        'numero_perso' => null,
        'numero_comptable' => null,
        'type' => null,
        'formation' => null,
        'intitule' => null,
        'intitule_court' => null,
        'color' => null,
        'description' => null,
        'id_centre_de_formation' => null,
        'id_salle_de_formation' => null,
        'id_entreprise' => null,
        'id_contact' => null,
        'id_contact_facturation' => null,
        'id_etape_process' => null,
        'date_debut' => null,
        'date_fin' => null,
        'date_effective_debut' => 'date-time',
        'date_effective_fin' => 'date-time',
        'date_edit_etape' => null,
        'has_dates_contractuelles' => null,
        'nb_participants_min' => null,
        'nb_participants_max' => null,
        'objectif' => null,
        'objectif_pre_2017' => null,
        'nature' => null,
        'inscription_online' => null,
        'include_in_bpf' => null,
        'total_heures_participants' => null,
        'total_participants' => null,
        'satisfaction_disabled' => null,
        'id_responsable' => null,
        'id_commercial' => null,
        'mode_pricing' => null,
        'mode_organisation' => null,
        'commentaires' => null,
        'commentaires_agenda' => null,
        'tva_formation' => null,
        'tva_hors_formation' => null,
        'tva_frais' => null,
        'id_externe' => null,
        'esignature' => null,
        'remuneration_par_lmf' => null,
        'categorie_module_id' => null,
        'code_analytique' => null,
        'objectif_pedagogique' => null,
        'modalites_pedagogiques' => null,
        'moyens_supports_pedagogiques' => null,
        'public_vise' => null,
        'pre_requis' => null,
        'infos_admission' => null,
        'modalites_devaluation' => null,
        'accessibilite' => null,
        'profil_formateurs' => null,
        'message_libre_exp' => null,
        'message_libre_exe' => null,
        'message_libre_exf' => null,
        'ical_url' => null,
        'created_at' => 'date-time',
        'id_add' => null,
        'updated_at' => 'date-time',
        'id_edit' => null,
        'deleted_at' => 'date-time',
        'id_delete' => null,
        'etape_process' => null,
        'visuel' => null,
        'dokeos_learning_path_id' => null,
        'dokeos_group_id' => null,
        'tslearning_group_id' => null,
        'riseup_group_id' => null,
        'riseup_learning_path_id' => null,
        'num_session_dpc' => null,
        'ogdpc_orientation' => null,
        'ogdpc_orientation_ide' => null,
        'ogdpc_orientation_as' => null,
        'emargements_url' => null,
        'pourcentage_planification' => null,
        'duree_planification_restante_heures' => null,
        'nb_participants_inscrits' => null,
        'nb_participants_non_inscrits' => null,
        'nb_participants_en_attente' => null,
        'moyenne_satisfaction' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'numero' => true,
        'numero_complet' => false,
        'numero_perso' => true,
        'numero_comptable' => true,
        'type' => false,
        'formation' => false,
        'intitule' => false,
        'intitule_court' => true,
        'color' => true,
        'description' => true,
        'id_centre_de_formation' => false,
        'id_salle_de_formation' => true,
        'id_entreprise' => true,
        'id_contact' => true,
        'id_contact_facturation' => true,
        'id_etape_process' => false,
        'date_debut' => true,
        'date_fin' => true,
        'date_effective_debut' => true,
        'date_effective_fin' => true,
        'date_edit_etape' => true,
        'has_dates_contractuelles' => false,
        'nb_participants_min' => true,
        'nb_participants_max' => true,
        'objectif' => true,
        'objectif_pre_2017' => true,
        'nature' => true,
        'inscription_online' => false,
        'include_in_bpf' => false,
        'total_heures_participants' => true,
        'total_participants' => true,
        'satisfaction_disabled' => false,
        'id_responsable' => true,
        'id_commercial' => true,
        'mode_pricing' => false,
        'mode_organisation' => true,
        'commentaires' => true,
        'commentaires_agenda' => true,
        'tva_formation' => true,
        'tva_hors_formation' => true,
        'tva_frais' => true,
        'id_externe' => true,
        'esignature' => false,
        'remuneration_par_lmf' => false,
        'categorie_module_id' => true,
        'code_analytique' => true,
        'objectif_pedagogique' => true,
        'modalites_pedagogiques' => true,
        'moyens_supports_pedagogiques' => true,
        'public_vise' => true,
        'pre_requis' => true,
        'infos_admission' => true,
        'modalites_devaluation' => true,
        'accessibilite' => true,
        'profil_formateurs' => true,
        'message_libre_exp' => true,
        'message_libre_exe' => true,
        'message_libre_exf' => true,
        'ical_url' => false,
        'created_at' => true,
        'id_add' => true,
        'updated_at' => true,
        'id_edit' => true,
        'deleted_at' => true,
        'id_delete' => true,
        'etape_process' => true,
        'visuel' => true,
        'dokeos_learning_path_id' => true,
        'dokeos_group_id' => true,
        'tslearning_group_id' => true,
        'riseup_group_id' => true,
        'riseup_learning_path_id' => true,
        'num_session_dpc' => true,
        'ogdpc_orientation' => true,
        'ogdpc_orientation_ide' => true,
        'ogdpc_orientation_as' => true,
        'emargements_url' => true,
        'pourcentage_planification' => true,
        'duree_planification_restante_heures' => true,
        'nb_participants_inscrits' => true,
        'nb_participants_non_inscrits' => true,
        'nb_participants_en_attente' => true,
        'moyenne_satisfaction' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var array<string, bool>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array<string, bool>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param array<string, bool> $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var array<string, string>
     */
    protected static array $attributeMap = [
        'id' => 'id',
        'numero' => 'numero',
        'numero_complet' => 'numero_complet',
        'numero_perso' => 'numero_perso',
        'numero_comptable' => 'numero_comptable',
        'type' => 'type',
        'formation' => 'formation',
        'intitule' => 'intitule',
        'intitule_court' => 'intitule_court',
        'color' => 'color',
        'description' => 'description',
        'id_centre_de_formation' => 'id_centre_de_formation',
        'id_salle_de_formation' => 'id_salle_de_formation',
        'id_entreprise' => 'id_entreprise',
        'id_contact' => 'id_contact',
        'id_contact_facturation' => 'id_contact_facturation',
        'id_etape_process' => 'id_etape_process',
        'date_debut' => 'date_debut',
        'date_fin' => 'date_fin',
        'date_effective_debut' => 'date_effective_debut',
        'date_effective_fin' => 'date_effective_fin',
        'date_edit_etape' => 'date_edit_etape',
        'has_dates_contractuelles' => 'has_dates_contractuelles',
        'nb_participants_min' => 'nb_participants_min',
        'nb_participants_max' => 'nb_participants_max',
        'objectif' => 'objectif',
        'objectif_pre_2017' => 'objectif_pre_2017',
        'nature' => 'nature',
        'inscription_online' => 'inscription_online',
        'include_in_bpf' => 'include_in_bpf',
        'total_heures_participants' => 'total_heures_participants',
        'total_participants' => 'total_participants',
        'satisfaction_disabled' => 'satisfaction_disabled',
        'id_responsable' => 'id_responsable',
        'id_commercial' => 'id_commercial',
        'mode_pricing' => 'mode_pricing',
        'mode_organisation' => 'mode_organisation',
        'commentaires' => 'commentaires',
        'commentaires_agenda' => 'commentaires_agenda',
        'tva_formation' => 'tva_formation',
        'tva_hors_formation' => 'tva_hors_formation',
        'tva_frais' => 'tva_frais',
        'id_externe' => 'id_externe',
        'esignature' => 'esignature',
        'remuneration_par_lmf' => 'remuneration_par_lmf',
        'categorie_module_id' => 'categorie_module_id',
        'code_analytique' => 'code_analytique',
        'objectif_pedagogique' => 'objectif_pedagogique',
        'modalites_pedagogiques' => 'modalites_pedagogiques',
        'moyens_supports_pedagogiques' => 'moyens_supports_pedagogiques',
        'public_vise' => 'public_vise',
        'pre_requis' => 'pre_requis',
        'infos_admission' => 'infos_admission',
        'modalites_devaluation' => 'modalites_devaluation',
        'accessibilite' => 'accessibilite',
        'profil_formateurs' => 'profil_formateurs',
        'message_libre_exp' => 'message_libre_exp',
        'message_libre_exe' => 'message_libre_exe',
        'message_libre_exf' => 'message_libre_exf',
        'ical_url' => 'ical_url',
        'created_at' => 'created_at',
        'id_add' => 'id_add',
        'updated_at' => 'updated_at',
        'id_edit' => 'id_edit',
        'deleted_at' => 'deleted_at',
        'id_delete' => 'id_delete',
        'etape_process' => 'etape_process',
        'visuel' => 'visuel',
        'dokeos_learning_path_id' => 'dokeos_learning_path_id',
        'dokeos_group_id' => 'dokeos_group_id',
        'tslearning_group_id' => 'tslearning_group_id',
        'riseup_group_id' => 'riseup_group_id',
        'riseup_learning_path_id' => 'riseup_learning_path_id',
        'num_session_dpc' => 'num_session_dpc',
        'ogdpc_orientation' => 'ogdpc_orientation',
        'ogdpc_orientation_ide' => 'ogdpc_orientation_ide',
        'ogdpc_orientation_as' => 'ogdpc_orientation_as',
        'emargements_url' => 'emargements_url',
        'pourcentage_planification' => 'pourcentage_planification',
        'duree_planification_restante_heures' => 'duree_planification_restante_heures',
        'nb_participants_inscrits' => 'nb_participants_inscrits',
        'nb_participants_non_inscrits' => 'nb_participants_non_inscrits',
        'nb_participants_en_attente' => 'nb_participants_en_attente',
        'moyenne_satisfaction' => 'moyenne_satisfaction'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'numero' => 'setNumero',
        'numero_complet' => 'setNumeroComplet',
        'numero_perso' => 'setNumeroPerso',
        'numero_comptable' => 'setNumeroComptable',
        'type' => 'setType',
        'formation' => 'setFormation',
        'intitule' => 'setIntitule',
        'intitule_court' => 'setIntituleCourt',
        'color' => 'setColor',
        'description' => 'setDescription',
        'id_centre_de_formation' => 'setIdCentreDeFormation',
        'id_salle_de_formation' => 'setIdSalleDeFormation',
        'id_entreprise' => 'setIdEntreprise',
        'id_contact' => 'setIdContact',
        'id_contact_facturation' => 'setIdContactFacturation',
        'id_etape_process' => 'setIdEtapeProcess',
        'date_debut' => 'setDateDebut',
        'date_fin' => 'setDateFin',
        'date_effective_debut' => 'setDateEffectiveDebut',
        'date_effective_fin' => 'setDateEffectiveFin',
        'date_edit_etape' => 'setDateEditEtape',
        'has_dates_contractuelles' => 'setHasDatesContractuelles',
        'nb_participants_min' => 'setNbParticipantsMin',
        'nb_participants_max' => 'setNbParticipantsMax',
        'objectif' => 'setObjectif',
        'objectif_pre_2017' => 'setObjectifPre2017',
        'nature' => 'setNature',
        'inscription_online' => 'setInscriptionOnline',
        'include_in_bpf' => 'setIncludeInBpf',
        'total_heures_participants' => 'setTotalHeuresParticipants',
        'total_participants' => 'setTotalParticipants',
        'satisfaction_disabled' => 'setSatisfactionDisabled',
        'id_responsable' => 'setIdResponsable',
        'id_commercial' => 'setIdCommercial',
        'mode_pricing' => 'setModePricing',
        'mode_organisation' => 'setModeOrganisation',
        'commentaires' => 'setCommentaires',
        'commentaires_agenda' => 'setCommentairesAgenda',
        'tva_formation' => 'setTvaFormation',
        'tva_hors_formation' => 'setTvaHorsFormation',
        'tva_frais' => 'setTvaFrais',
        'id_externe' => 'setIdExterne',
        'esignature' => 'setEsignature',
        'remuneration_par_lmf' => 'setRemunerationParLmf',
        'categorie_module_id' => 'setCategorieModuleId',
        'code_analytique' => 'setCodeAnalytique',
        'objectif_pedagogique' => 'setObjectifPedagogique',
        'modalites_pedagogiques' => 'setModalitesPedagogiques',
        'moyens_supports_pedagogiques' => 'setMoyensSupportsPedagogiques',
        'public_vise' => 'setPublicVise',
        'pre_requis' => 'setPreRequis',
        'infos_admission' => 'setInfosAdmission',
        'modalites_devaluation' => 'setModalitesDevaluation',
        'accessibilite' => 'setAccessibilite',
        'profil_formateurs' => 'setProfilFormateurs',
        'message_libre_exp' => 'setMessageLibreExp',
        'message_libre_exe' => 'setMessageLibreExe',
        'message_libre_exf' => 'setMessageLibreExf',
        'ical_url' => 'setIcalUrl',
        'created_at' => 'setCreatedAt',
        'id_add' => 'setIdAdd',
        'updated_at' => 'setUpdatedAt',
        'id_edit' => 'setIdEdit',
        'deleted_at' => 'setDeletedAt',
        'id_delete' => 'setIdDelete',
        'etape_process' => 'setEtapeProcess',
        'visuel' => 'setVisuel',
        'dokeos_learning_path_id' => 'setDokeosLearningPathId',
        'dokeos_group_id' => 'setDokeosGroupId',
        'tslearning_group_id' => 'setTslearningGroupId',
        'riseup_group_id' => 'setRiseupGroupId',
        'riseup_learning_path_id' => 'setRiseupLearningPathId',
        'num_session_dpc' => 'setNumSessionDpc',
        'ogdpc_orientation' => 'setOgdpcOrientation',
        'ogdpc_orientation_ide' => 'setOgdpcOrientationIde',
        'ogdpc_orientation_as' => 'setOgdpcOrientationAs',
        'emargements_url' => 'setEmargementsUrl',
        'pourcentage_planification' => 'setPourcentagePlanification',
        'duree_planification_restante_heures' => 'setDureePlanificationRestanteHeures',
        'nb_participants_inscrits' => 'setNbParticipantsInscrits',
        'nb_participants_non_inscrits' => 'setNbParticipantsNonInscrits',
        'nb_participants_en_attente' => 'setNbParticipantsEnAttente',
        'moyenne_satisfaction' => 'setMoyenneSatisfaction'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'numero' => 'getNumero',
        'numero_complet' => 'getNumeroComplet',
        'numero_perso' => 'getNumeroPerso',
        'numero_comptable' => 'getNumeroComptable',
        'type' => 'getType',
        'formation' => 'getFormation',
        'intitule' => 'getIntitule',
        'intitule_court' => 'getIntituleCourt',
        'color' => 'getColor',
        'description' => 'getDescription',
        'id_centre_de_formation' => 'getIdCentreDeFormation',
        'id_salle_de_formation' => 'getIdSalleDeFormation',
        'id_entreprise' => 'getIdEntreprise',
        'id_contact' => 'getIdContact',
        'id_contact_facturation' => 'getIdContactFacturation',
        'id_etape_process' => 'getIdEtapeProcess',
        'date_debut' => 'getDateDebut',
        'date_fin' => 'getDateFin',
        'date_effective_debut' => 'getDateEffectiveDebut',
        'date_effective_fin' => 'getDateEffectiveFin',
        'date_edit_etape' => 'getDateEditEtape',
        'has_dates_contractuelles' => 'getHasDatesContractuelles',
        'nb_participants_min' => 'getNbParticipantsMin',
        'nb_participants_max' => 'getNbParticipantsMax',
        'objectif' => 'getObjectif',
        'objectif_pre_2017' => 'getObjectifPre2017',
        'nature' => 'getNature',
        'inscription_online' => 'getInscriptionOnline',
        'include_in_bpf' => 'getIncludeInBpf',
        'total_heures_participants' => 'getTotalHeuresParticipants',
        'total_participants' => 'getTotalParticipants',
        'satisfaction_disabled' => 'getSatisfactionDisabled',
        'id_responsable' => 'getIdResponsable',
        'id_commercial' => 'getIdCommercial',
        'mode_pricing' => 'getModePricing',
        'mode_organisation' => 'getModeOrganisation',
        'commentaires' => 'getCommentaires',
        'commentaires_agenda' => 'getCommentairesAgenda',
        'tva_formation' => 'getTvaFormation',
        'tva_hors_formation' => 'getTvaHorsFormation',
        'tva_frais' => 'getTvaFrais',
        'id_externe' => 'getIdExterne',
        'esignature' => 'getEsignature',
        'remuneration_par_lmf' => 'getRemunerationParLmf',
        'categorie_module_id' => 'getCategorieModuleId',
        'code_analytique' => 'getCodeAnalytique',
        'objectif_pedagogique' => 'getObjectifPedagogique',
        'modalites_pedagogiques' => 'getModalitesPedagogiques',
        'moyens_supports_pedagogiques' => 'getMoyensSupportsPedagogiques',
        'public_vise' => 'getPublicVise',
        'pre_requis' => 'getPreRequis',
        'infos_admission' => 'getInfosAdmission',
        'modalites_devaluation' => 'getModalitesDevaluation',
        'accessibilite' => 'getAccessibilite',
        'profil_formateurs' => 'getProfilFormateurs',
        'message_libre_exp' => 'getMessageLibreExp',
        'message_libre_exe' => 'getMessageLibreExe',
        'message_libre_exf' => 'getMessageLibreExf',
        'ical_url' => 'getIcalUrl',
        'created_at' => 'getCreatedAt',
        'id_add' => 'getIdAdd',
        'updated_at' => 'getUpdatedAt',
        'id_edit' => 'getIdEdit',
        'deleted_at' => 'getDeletedAt',
        'id_delete' => 'getIdDelete',
        'etape_process' => 'getEtapeProcess',
        'visuel' => 'getVisuel',
        'dokeos_learning_path_id' => 'getDokeosLearningPathId',
        'dokeos_group_id' => 'getDokeosGroupId',
        'tslearning_group_id' => 'getTslearningGroupId',
        'riseup_group_id' => 'getRiseupGroupId',
        'riseup_learning_path_id' => 'getRiseupLearningPathId',
        'num_session_dpc' => 'getNumSessionDpc',
        'ogdpc_orientation' => 'getOgdpcOrientation',
        'ogdpc_orientation_ide' => 'getOgdpcOrientationIde',
        'ogdpc_orientation_as' => 'getOgdpcOrientationAs',
        'emargements_url' => 'getEmargementsUrl',
        'pourcentage_planification' => 'getPourcentagePlanification',
        'duree_planification_restante_heures' => 'getDureePlanificationRestanteHeures',
        'nb_participants_inscrits' => 'getNbParticipantsInscrits',
        'nb_participants_non_inscrits' => 'getNbParticipantsNonInscrits',
        'nb_participants_en_attente' => 'getNbParticipantsEnAttente',
        'moyenne_satisfaction' => 'getMoyenneSatisfaction'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array $data Associated array of property values initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('numero', $data ?? [], null);
        $this->setIfExists('numero_complet', $data ?? [], null);
        $this->setIfExists('numero_perso', $data ?? [], null);
        $this->setIfExists('numero_comptable', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('formation', $data ?? [], null);
        $this->setIfExists('intitule', $data ?? [], null);
        $this->setIfExists('intitule_court', $data ?? [], null);
        $this->setIfExists('color', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('id_centre_de_formation', $data ?? [], null);
        $this->setIfExists('id_salle_de_formation', $data ?? [], null);
        $this->setIfExists('id_entreprise', $data ?? [], null);
        $this->setIfExists('id_contact', $data ?? [], null);
        $this->setIfExists('id_contact_facturation', $data ?? [], null);
        $this->setIfExists('id_etape_process', $data ?? [], null);
        $this->setIfExists('date_debut', $data ?? [], null);
        $this->setIfExists('date_fin', $data ?? [], null);
        $this->setIfExists('date_effective_debut', $data ?? [], null);
        $this->setIfExists('date_effective_fin', $data ?? [], null);
        $this->setIfExists('date_edit_etape', $data ?? [], null);
        $this->setIfExists('has_dates_contractuelles', $data ?? [], null);
        $this->setIfExists('nb_participants_min', $data ?? [], null);
        $this->setIfExists('nb_participants_max', $data ?? [], null);
        $this->setIfExists('objectif', $data ?? [], null);
        $this->setIfExists('objectif_pre_2017', $data ?? [], null);
        $this->setIfExists('nature', $data ?? [], null);
        $this->setIfExists('inscription_online', $data ?? [], null);
        $this->setIfExists('include_in_bpf', $data ?? [], null);
        $this->setIfExists('total_heures_participants', $data ?? [], null);
        $this->setIfExists('total_participants', $data ?? [], null);
        $this->setIfExists('satisfaction_disabled', $data ?? [], null);
        $this->setIfExists('id_responsable', $data ?? [], null);
        $this->setIfExists('id_commercial', $data ?? [], null);
        $this->setIfExists('mode_pricing', $data ?? [], null);
        $this->setIfExists('mode_organisation', $data ?? [], null);
        $this->setIfExists('commentaires', $data ?? [], null);
        $this->setIfExists('commentaires_agenda', $data ?? [], null);
        $this->setIfExists('tva_formation', $data ?? [], null);
        $this->setIfExists('tva_hors_formation', $data ?? [], null);
        $this->setIfExists('tva_frais', $data ?? [], null);
        $this->setIfExists('id_externe', $data ?? [], null);
        $this->setIfExists('esignature', $data ?? [], null);
        $this->setIfExists('remuneration_par_lmf', $data ?? [], null);
        $this->setIfExists('categorie_module_id', $data ?? [], null);
        $this->setIfExists('code_analytique', $data ?? [], null);
        $this->setIfExists('objectif_pedagogique', $data ?? [], null);
        $this->setIfExists('modalites_pedagogiques', $data ?? [], null);
        $this->setIfExists('moyens_supports_pedagogiques', $data ?? [], null);
        $this->setIfExists('public_vise', $data ?? [], null);
        $this->setIfExists('pre_requis', $data ?? [], null);
        $this->setIfExists('infos_admission', $data ?? [], null);
        $this->setIfExists('modalites_devaluation', $data ?? [], null);
        $this->setIfExists('accessibilite', $data ?? [], null);
        $this->setIfExists('profil_formateurs', $data ?? [], null);
        $this->setIfExists('message_libre_exp', $data ?? [], null);
        $this->setIfExists('message_libre_exe', $data ?? [], null);
        $this->setIfExists('message_libre_exf', $data ?? [], null);
        $this->setIfExists('ical_url', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('id_add', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('id_edit', $data ?? [], null);
        $this->setIfExists('deleted_at', $data ?? [], null);
        $this->setIfExists('id_delete', $data ?? [], null);
        $this->setIfExists('etape_process', $data ?? [], null);
        $this->setIfExists('visuel', $data ?? [], null);
        $this->setIfExists('dokeos_learning_path_id', $data ?? [], null);
        $this->setIfExists('dokeos_group_id', $data ?? [], null);
        $this->setIfExists('tslearning_group_id', $data ?? [], null);
        $this->setIfExists('riseup_group_id', $data ?? [], null);
        $this->setIfExists('riseup_learning_path_id', $data ?? [], null);
        $this->setIfExists('num_session_dpc', $data ?? [], null);
        $this->setIfExists('ogdpc_orientation', $data ?? [], null);
        $this->setIfExists('ogdpc_orientation_ide', $data ?? [], null);
        $this->setIfExists('ogdpc_orientation_as', $data ?? [], null);
        $this->setIfExists('emargements_url', $data ?? [], null);
        $this->setIfExists('pourcentage_planification', $data ?? [], null);
        $this->setIfExists('duree_planification_restante_heures', $data ?? [], null);
        $this->setIfExists('nb_participants_inscrits', $data ?? [], null);
        $this->setIfExists('nb_participants_non_inscrits', $data ?? [], null);
        $this->setIfExists('nb_participants_en_attente', $data ?? [], null);
        $this->setIfExists('moyenne_satisfaction', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['deleted_at'] === null) {
            $invalidProperties[] = "'deleted_at' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId(int $id): static
    {
        if (is_null($id)) {
            throw new InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets numero
     *
     * @return string|null
     */
    public function getNumero(): ?string
    {
        return $this->container['numero'];
    }

    /**
     * Sets numero
     *
     * @param string|null $numero numero
     *
     * @return $this
     */
    public function setNumero(?string $numero): static
    {
        if (is_null($numero)) {
            array_push($this->openAPINullablesSetToNull, 'numero');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('numero', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['numero'] = $numero;

        return $this;
    }

    /**
     * Gets numero_complet
     *
     * @return string|null
     */
    public function getNumeroComplet(): ?string
    {
        return $this->container['numero_complet'];
    }

    /**
     * Sets numero_complet
     *
     * @param string|null $numero_complet numero_complet
     *
     * @return $this
     */
    public function setNumeroComplet(?string $numero_complet): static
    {
        if (is_null($numero_complet)) {
            throw new InvalidArgumentException('non-nullable numero_complet cannot be null');
        }
        $this->container['numero_complet'] = $numero_complet;

        return $this;
    }

    /**
     * Gets numero_perso
     *
     * @return string|null
     */
    public function getNumeroPerso(): ?string
    {
        return $this->container['numero_perso'];
    }

    /**
     * Sets numero_perso
     *
     * @param string|null $numero_perso numero_perso
     *
     * @return $this
     */
    public function setNumeroPerso(?string $numero_perso): static
    {
        if (is_null($numero_perso)) {
            array_push($this->openAPINullablesSetToNull, 'numero_perso');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('numero_perso', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['numero_perso'] = $numero_perso;

        return $this;
    }

    /**
     * Gets numero_comptable
     *
     * @return string|null
     */
    public function getNumeroComptable(): ?string
    {
        return $this->container['numero_comptable'];
    }

    /**
     * Sets numero_comptable
     *
     * @param string|null $numero_comptable numero_comptable
     *
     * @return $this
     */
    public function setNumeroComptable(?string $numero_comptable): static
    {
        if (is_null($numero_comptable)) {
            array_push($this->openAPINullablesSetToNull, 'numero_comptable');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('numero_comptable', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['numero_comptable'] = $numero_comptable;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return $this
     */
    public function setType(?string $type): static
    {
        if (is_null($type)) {
            throw new InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets formation
     *
     * @return bool|null
     */
    public function getFormation(): ?bool
    {
        return $this->container['formation'];
    }

    /**
     * Sets formation
     *
     * @param bool|null $formation formation
     *
     * @return $this
     */
    public function setFormation(?bool $formation): static
    {
        if (is_null($formation)) {
            throw new InvalidArgumentException('non-nullable formation cannot be null');
        }
        $this->container['formation'] = $formation;

        return $this;
    }

    /**
     * Gets intitule
     *
     * @return string|null
     */
    public function getIntitule(): ?string
    {
        return $this->container['intitule'];
    }

    /**
     * Sets intitule
     *
     * @param string|null $intitule intitule
     *
     * @return $this
     */
    public function setIntitule(?string $intitule): static
    {
        if (is_null($intitule)) {
            throw new InvalidArgumentException('non-nullable intitule cannot be null');
        }
        $this->container['intitule'] = $intitule;

        return $this;
    }

    /**
     * Gets intitule_court
     *
     * @return string|null
     */
    public function getIntituleCourt(): ?string
    {
        return $this->container['intitule_court'];
    }

    /**
     * Sets intitule_court
     *
     * @param string|null $intitule_court intitule_court
     *
     * @return $this
     */
    public function setIntituleCourt(?string $intitule_court): static
    {
        if (is_null($intitule_court)) {
            array_push($this->openAPINullablesSetToNull, 'intitule_court');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('intitule_court', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['intitule_court'] = $intitule_court;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string|null
     */
    public function getColor(): ?string
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string|null $color color
     *
     * @return $this
     */
    public function setColor(?string $color): static
    {
        if (is_null($color)) {
            array_push($this->openAPINullablesSetToNull, 'color');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('color', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return $this
     */
    public function setDescription(?string $description): static
    {
        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets id_centre_de_formation
     *
     * @return int|null
     */
    public function getIdCentreDeFormation(): ?int
    {
        return $this->container['id_centre_de_formation'];
    }

    /**
     * Sets id_centre_de_formation
     *
     * @param int|null $id_centre_de_formation id_centre_de_formation
     *
     * @return $this
     */
    public function setIdCentreDeFormation(?int $id_centre_de_formation): static
    {
        if (is_null($id_centre_de_formation)) {
            throw new InvalidArgumentException('non-nullable id_centre_de_formation cannot be null');
        }
        $this->container['id_centre_de_formation'] = $id_centre_de_formation;

        return $this;
    }

    /**
     * Gets id_salle_de_formation
     *
     * @return int|null
     */
    public function getIdSalleDeFormation(): ?int
    {
        return $this->container['id_salle_de_formation'];
    }

    /**
     * Sets id_salle_de_formation
     *
     * @param int|null $id_salle_de_formation id_salle_de_formation
     *
     * @return $this
     */
    public function setIdSalleDeFormation(?int $id_salle_de_formation): static
    {
        if (is_null($id_salle_de_formation)) {
            array_push($this->openAPINullablesSetToNull, 'id_salle_de_formation');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_salle_de_formation', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id_salle_de_formation'] = $id_salle_de_formation;

        return $this;
    }

    /**
     * Gets id_entreprise
     *
     * @return int|null
     */
    public function getIdEntreprise(): ?int
    {
        return $this->container['id_entreprise'];
    }

    /**
     * Sets id_entreprise
     *
     * @param int|null $id_entreprise id_entreprise
     *
     * @return $this
     */
    public function setIdEntreprise(?int $id_entreprise): static
    {
        if (is_null($id_entreprise)) {
            array_push($this->openAPINullablesSetToNull, 'id_entreprise');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_entreprise', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id_entreprise'] = $id_entreprise;

        return $this;
    }

    /**
     * Gets id_contact
     *
     * @return int|null
     */
    public function getIdContact(): ?int
    {
        return $this->container['id_contact'];
    }

    /**
     * Sets id_contact
     *
     * @param int|null $id_contact id_contact
     *
     * @return $this
     */
    public function setIdContact(?int $id_contact): static
    {
        if (is_null($id_contact)) {
            array_push($this->openAPINullablesSetToNull, 'id_contact');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_contact', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id_contact'] = $id_contact;

        return $this;
    }

    /**
     * Gets id_contact_facturation
     *
     * @return int|null
     */
    public function getIdContactFacturation(): ?int
    {
        return $this->container['id_contact_facturation'];
    }

    /**
     * Sets id_contact_facturation
     *
     * @param int|null $id_contact_facturation id_contact_facturation
     *
     * @return $this
     */
    public function setIdContactFacturation(?int $id_contact_facturation): static
    {
        if (is_null($id_contact_facturation)) {
            array_push($this->openAPINullablesSetToNull, 'id_contact_facturation');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_contact_facturation', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id_contact_facturation'] = $id_contact_facturation;

        return $this;
    }

    /**
     * Gets id_etape_process
     *
     * @return int|null
     */
    public function getIdEtapeProcess(): ?int
    {
        return $this->container['id_etape_process'];
    }

    /**
     * Sets id_etape_process
     *
     * @param int|null $id_etape_process id_etape_process
     *
     * @return $this
     */
    public function setIdEtapeProcess(?int $id_etape_process): static
    {
        if (is_null($id_etape_process)) {
            throw new InvalidArgumentException('non-nullable id_etape_process cannot be null');
        }
        $this->container['id_etape_process'] = $id_etape_process;

        return $this;
    }

    /**
     * Gets date_debut
     *
     * @return string|null
     */
    public function getDateDebut(): ?string
    {
        return $this->container['date_debut'];
    }

    /**
     * Sets date_debut
     *
     * @param string|null $date_debut date_debut
     *
     * @return $this
     */
    public function setDateDebut(?string $date_debut): static
    {
        if (is_null($date_debut)) {
            array_push($this->openAPINullablesSetToNull, 'date_debut');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date_debut', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['date_debut'] = $date_debut;

        return $this;
    }

    /**
     * Gets date_fin
     *
     * @return string|null
     */
    public function getDateFin(): ?string
    {
        return $this->container['date_fin'];
    }

    /**
     * Sets date_fin
     *
     * @param string|null $date_fin date_fin
     *
     * @return $this
     */
    public function setDateFin(?string $date_fin): static
    {
        if (is_null($date_fin)) {
            array_push($this->openAPINullablesSetToNull, 'date_fin');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date_fin', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['date_fin'] = $date_fin;

        return $this;
    }

    /**
     * Gets date_effective_debut
     *
     * @return \DateTime|null
     */
    public function getDateEffectiveDebut(): ?\DateTime
    {
        return $this->container['date_effective_debut'];
    }

    /**
     * Sets date_effective_debut
     *
     * @param \DateTime|null $date_effective_debut date_effective_debut
     *
     * @return $this
     */
    public function setDateEffectiveDebut(?\DateTime $date_effective_debut): static
    {
        if (is_null($date_effective_debut)) {
            array_push($this->openAPINullablesSetToNull, 'date_effective_debut');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date_effective_debut', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['date_effective_debut'] = $date_effective_debut;

        return $this;
    }

    /**
     * Gets date_effective_fin
     *
     * @return \DateTime|null
     */
    public function getDateEffectiveFin(): ?\DateTime
    {
        return $this->container['date_effective_fin'];
    }

    /**
     * Sets date_effective_fin
     *
     * @param \DateTime|null $date_effective_fin date_effective_fin
     *
     * @return $this
     */
    public function setDateEffectiveFin(?\DateTime $date_effective_fin): static
    {
        if (is_null($date_effective_fin)) {
            array_push($this->openAPINullablesSetToNull, 'date_effective_fin');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date_effective_fin', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['date_effective_fin'] = $date_effective_fin;

        return $this;
    }

    /**
     * Gets date_edit_etape
     *
     * @return string|null
     */
    public function getDateEditEtape(): ?string
    {
        return $this->container['date_edit_etape'];
    }

    /**
     * Sets date_edit_etape
     *
     * @param string|null $date_edit_etape date_edit_etape
     *
     * @return $this
     */
    public function setDateEditEtape(?string $date_edit_etape): static
    {
        if (is_null($date_edit_etape)) {
            array_push($this->openAPINullablesSetToNull, 'date_edit_etape');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date_edit_etape', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['date_edit_etape'] = $date_edit_etape;

        return $this;
    }

    /**
     * Gets has_dates_contractuelles
     *
     * @return bool|null
     */
    public function getHasDatesContractuelles(): ?bool
    {
        return $this->container['has_dates_contractuelles'];
    }

    /**
     * Sets has_dates_contractuelles
     *
     * @param bool|null $has_dates_contractuelles has_dates_contractuelles
     *
     * @return $this
     */
    public function setHasDatesContractuelles(?bool $has_dates_contractuelles): static
    {
        if (is_null($has_dates_contractuelles)) {
            throw new InvalidArgumentException('non-nullable has_dates_contractuelles cannot be null');
        }
        $this->container['has_dates_contractuelles'] = $has_dates_contractuelles;

        return $this;
    }

    /**
     * Gets nb_participants_min
     *
     * @return string|null
     */
    public function getNbParticipantsMin(): ?string
    {
        return $this->container['nb_participants_min'];
    }

    /**
     * Sets nb_participants_min
     *
     * @param string|null $nb_participants_min nb_participants_min
     *
     * @return $this
     */
    public function setNbParticipantsMin(?string $nb_participants_min): static
    {
        if (is_null($nb_participants_min)) {
            array_push($this->openAPINullablesSetToNull, 'nb_participants_min');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nb_participants_min', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nb_participants_min'] = $nb_participants_min;

        return $this;
    }

    /**
     * Gets nb_participants_max
     *
     * @return string|null
     */
    public function getNbParticipantsMax(): ?string
    {
        return $this->container['nb_participants_max'];
    }

    /**
     * Sets nb_participants_max
     *
     * @param string|null $nb_participants_max nb_participants_max
     *
     * @return $this
     */
    public function setNbParticipantsMax(?string $nb_participants_max): static
    {
        if (is_null($nb_participants_max)) {
            array_push($this->openAPINullablesSetToNull, 'nb_participants_max');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nb_participants_max', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nb_participants_max'] = $nb_participants_max;

        return $this;
    }

    /**
     * Gets objectif
     *
     * @return string|null
     */
    public function getObjectif(): ?string
    {
        return $this->container['objectif'];
    }

    /**
     * Sets objectif
     *
     * @param string|null $objectif objectif
     *
     * @return $this
     */
    public function setObjectif(?string $objectif): static
    {
        if (is_null($objectif)) {
            array_push($this->openAPINullablesSetToNull, 'objectif');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('objectif', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['objectif'] = $objectif;

        return $this;
    }

    /**
     * Gets objectif_pre_2017
     *
     * @return string|null
     */
    public function getObjectifPre2017(): ?string
    {
        return $this->container['objectif_pre_2017'];
    }

    /**
     * Sets objectif_pre_2017
     *
     * @param string|null $objectif_pre_2017 objectif_pre_2017
     *
     * @return $this
     */
    public function setObjectifPre2017(?string $objectif_pre_2017): static
    {
        if (is_null($objectif_pre_2017)) {
            array_push($this->openAPINullablesSetToNull, 'objectif_pre_2017');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('objectif_pre_2017', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['objectif_pre_2017'] = $objectif_pre_2017;

        return $this;
    }

    /**
     * Gets nature
     *
     * @return string|null
     */
    public function getNature(): ?string
    {
        return $this->container['nature'];
    }

    /**
     * Sets nature
     *
     * @param string|null $nature nature
     *
     * @return $this
     */
    public function setNature(?string $nature): static
    {
        if (is_null($nature)) {
            array_push($this->openAPINullablesSetToNull, 'nature');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nature', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nature'] = $nature;

        return $this;
    }

    /**
     * Gets inscription_online
     *
     * @return bool|null
     */
    public function getInscriptionOnline(): ?bool
    {
        return $this->container['inscription_online'];
    }

    /**
     * Sets inscription_online
     *
     * @param bool|null $inscription_online inscription_online
     *
     * @return $this
     */
    public function setInscriptionOnline(?bool $inscription_online): static
    {
        if (is_null($inscription_online)) {
            throw new InvalidArgumentException('non-nullable inscription_online cannot be null');
        }
        $this->container['inscription_online'] = $inscription_online;

        return $this;
    }

    /**
     * Gets include_in_bpf
     *
     * @return bool|null
     */
    public function getIncludeInBpf(): ?bool
    {
        return $this->container['include_in_bpf'];
    }

    /**
     * Sets include_in_bpf
     *
     * @param bool|null $include_in_bpf include_in_bpf
     *
     * @return $this
     */
    public function setIncludeInBpf(?bool $include_in_bpf): static
    {
        if (is_null($include_in_bpf)) {
            throw new InvalidArgumentException('non-nullable include_in_bpf cannot be null');
        }
        $this->container['include_in_bpf'] = $include_in_bpf;

        return $this;
    }

    /**
     * Gets total_heures_participants
     *
     * @return float|null
     */
    public function getTotalHeuresParticipants(): ?float
    {
        return $this->container['total_heures_participants'];
    }

    /**
     * Sets total_heures_participants
     *
     * @param float|null $total_heures_participants total_heures_participants
     *
     * @return $this
     */
    public function setTotalHeuresParticipants(?float $total_heures_participants): static
    {
        if (is_null($total_heures_participants)) {
            array_push($this->openAPINullablesSetToNull, 'total_heures_participants');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('total_heures_participants', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['total_heures_participants'] = $total_heures_participants;

        return $this;
    }

    /**
     * Gets total_participants
     *
     * @return string|null
     */
    public function getTotalParticipants(): ?string
    {
        return $this->container['total_participants'];
    }

    /**
     * Sets total_participants
     *
     * @param string|null $total_participants total_participants
     *
     * @return $this
     */
    public function setTotalParticipants(?string $total_participants): static
    {
        if (is_null($total_participants)) {
            array_push($this->openAPINullablesSetToNull, 'total_participants');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('total_participants', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['total_participants'] = $total_participants;

        return $this;
    }

    /**
     * Gets satisfaction_disabled
     *
     * @return bool|null
     */
    public function getSatisfactionDisabled(): ?bool
    {
        return $this->container['satisfaction_disabled'];
    }

    /**
     * Sets satisfaction_disabled
     *
     * @param bool|null $satisfaction_disabled satisfaction_disabled
     *
     * @return $this
     */
    public function setSatisfactionDisabled(?bool $satisfaction_disabled): static
    {
        if (is_null($satisfaction_disabled)) {
            throw new InvalidArgumentException('non-nullable satisfaction_disabled cannot be null');
        }
        $this->container['satisfaction_disabled'] = $satisfaction_disabled;

        return $this;
    }

    /**
     * Gets id_responsable
     *
     * @return int|null
     */
    public function getIdResponsable(): ?int
    {
        return $this->container['id_responsable'];
    }

    /**
     * Sets id_responsable
     *
     * @param int|null $id_responsable id_responsable
     *
     * @return $this
     */
    public function setIdResponsable(?int $id_responsable): static
    {
        if (is_null($id_responsable)) {
            array_push($this->openAPINullablesSetToNull, 'id_responsable');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_responsable', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id_responsable'] = $id_responsable;

        return $this;
    }

    /**
     * Gets id_commercial
     *
     * @return int|null
     */
    public function getIdCommercial(): ?int
    {
        return $this->container['id_commercial'];
    }

    /**
     * Sets id_commercial
     *
     * @param int|null $id_commercial id_commercial
     *
     * @return $this
     */
    public function setIdCommercial(?int $id_commercial): static
    {
        if (is_null($id_commercial)) {
            array_push($this->openAPINullablesSetToNull, 'id_commercial');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_commercial', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id_commercial'] = $id_commercial;

        return $this;
    }

    /**
     * Gets mode_pricing
     *
     * @return string|null
     */
    public function getModePricing(): ?string
    {
        return $this->container['mode_pricing'];
    }

    /**
     * Sets mode_pricing
     *
     * @param string|null $mode_pricing mode_pricing
     *
     * @return $this
     */
    public function setModePricing(?string $mode_pricing): static
    {
        if (is_null($mode_pricing)) {
            throw new InvalidArgumentException('non-nullable mode_pricing cannot be null');
        }
        $this->container['mode_pricing'] = $mode_pricing;

        return $this;
    }

    /**
     * Gets mode_organisation
     *
     * @return string|null
     */
    public function getModeOrganisation(): ?string
    {
        return $this->container['mode_organisation'];
    }

    /**
     * Sets mode_organisation
     *
     * @param string|null $mode_organisation mode_organisation
     *
     * @return $this
     */
    public function setModeOrganisation(?string $mode_organisation): static
    {
        if (is_null($mode_organisation)) {
            array_push($this->openAPINullablesSetToNull, 'mode_organisation');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mode_organisation', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['mode_organisation'] = $mode_organisation;

        return $this;
    }

    /**
     * Gets commentaires
     *
     * @return string|null
     */
    public function getCommentaires(): ?string
    {
        return $this->container['commentaires'];
    }

    /**
     * Sets commentaires
     *
     * @param string|null $commentaires commentaires
     *
     * @return $this
     */
    public function setCommentaires(?string $commentaires): static
    {
        if (is_null($commentaires)) {
            array_push($this->openAPINullablesSetToNull, 'commentaires');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('commentaires', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['commentaires'] = $commentaires;

        return $this;
    }

    /**
     * Gets commentaires_agenda
     *
     * @return string|null
     */
    public function getCommentairesAgenda(): ?string
    {
        return $this->container['commentaires_agenda'];
    }

    /**
     * Sets commentaires_agenda
     *
     * @param string|null $commentaires_agenda commentaires_agenda
     *
     * @return $this
     */
    public function setCommentairesAgenda(?string $commentaires_agenda): static
    {
        if (is_null($commentaires_agenda)) {
            array_push($this->openAPINullablesSetToNull, 'commentaires_agenda');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('commentaires_agenda', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['commentaires_agenda'] = $commentaires_agenda;

        return $this;
    }

    /**
     * Gets tva_formation
     *
     * @return float|null
     */
    public function getTvaFormation(): ?float
    {
        return $this->container['tva_formation'];
    }

    /**
     * Sets tva_formation
     *
     * @param float|null $tva_formation tva_formation
     *
     * @return $this
     */
    public function setTvaFormation(?float $tva_formation): static
    {
        if (is_null($tva_formation)) {
            array_push($this->openAPINullablesSetToNull, 'tva_formation');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tva_formation', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tva_formation'] = $tva_formation;

        return $this;
    }

    /**
     * Gets tva_hors_formation
     *
     * @return float|null
     */
    public function getTvaHorsFormation(): ?float
    {
        return $this->container['tva_hors_formation'];
    }

    /**
     * Sets tva_hors_formation
     *
     * @param float|null $tva_hors_formation tva_hors_formation
     *
     * @return $this
     */
    public function setTvaHorsFormation(?float $tva_hors_formation): static
    {
        if (is_null($tva_hors_formation)) {
            array_push($this->openAPINullablesSetToNull, 'tva_hors_formation');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tva_hors_formation', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tva_hors_formation'] = $tva_hors_formation;

        return $this;
    }

    /**
     * Gets tva_frais
     *
     * @return float|null
     */
    public function getTvaFrais(): ?float
    {
        return $this->container['tva_frais'];
    }

    /**
     * Sets tva_frais
     *
     * @param float|null $tva_frais tva_frais
     *
     * @return $this
     */
    public function setTvaFrais(?float $tva_frais): static
    {
        if (is_null($tva_frais)) {
            array_push($this->openAPINullablesSetToNull, 'tva_frais');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tva_frais', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tva_frais'] = $tva_frais;

        return $this;
    }

    /**
     * Gets id_externe
     *
     * @return string|null
     */
    public function getIdExterne(): ?string
    {
        return $this->container['id_externe'];
    }

    /**
     * Sets id_externe
     *
     * @param string|null $id_externe id_externe
     *
     * @return $this
     */
    public function setIdExterne(?string $id_externe): static
    {
        if (is_null($id_externe)) {
            array_push($this->openAPINullablesSetToNull, 'id_externe');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_externe', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id_externe'] = $id_externe;

        return $this;
    }

    /**
     * Gets esignature
     *
     * @return bool|null
     */
    public function getEsignature(): ?bool
    {
        return $this->container['esignature'];
    }

    /**
     * Sets esignature
     *
     * @param bool|null $esignature esignature
     *
     * @return $this
     */
    public function setEsignature(?bool $esignature): static
    {
        if (is_null($esignature)) {
            throw new InvalidArgumentException('non-nullable esignature cannot be null');
        }
        $this->container['esignature'] = $esignature;

        return $this;
    }

    /**
     * Gets remuneration_par_lmf
     *
     * @return bool|null
     */
    public function getRemunerationParLmf(): ?bool
    {
        return $this->container['remuneration_par_lmf'];
    }

    /**
     * Sets remuneration_par_lmf
     *
     * @param bool|null $remuneration_par_lmf remuneration_par_lmf
     *
     * @return $this
     */
    public function setRemunerationParLmf(?bool $remuneration_par_lmf): static
    {
        if (is_null($remuneration_par_lmf)) {
            throw new InvalidArgumentException('non-nullable remuneration_par_lmf cannot be null');
        }
        $this->container['remuneration_par_lmf'] = $remuneration_par_lmf;

        return $this;
    }

    /**
     * Gets categorie_module_id
     *
     * @return int|null
     */
    public function getCategorieModuleId(): ?int
    {
        return $this->container['categorie_module_id'];
    }

    /**
     * Sets categorie_module_id
     *
     * @param int|null $categorie_module_id categorie_module_id
     *
     * @return $this
     */
    public function setCategorieModuleId(?int $categorie_module_id): static
    {
        if (is_null($categorie_module_id)) {
            array_push($this->openAPINullablesSetToNull, 'categorie_module_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('categorie_module_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['categorie_module_id'] = $categorie_module_id;

        return $this;
    }

    /**
     * Gets code_analytique
     *
     * @return string|null
     */
    public function getCodeAnalytique(): ?string
    {
        return $this->container['code_analytique'];
    }

    /**
     * Sets code_analytique
     *
     * @param string|null $code_analytique code_analytique
     *
     * @return $this
     */
    public function setCodeAnalytique(?string $code_analytique): static
    {
        if (is_null($code_analytique)) {
            array_push($this->openAPINullablesSetToNull, 'code_analytique');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('code_analytique', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['code_analytique'] = $code_analytique;

        return $this;
    }

    /**
     * Gets objectif_pedagogique
     *
     * @return string|null
     */
    public function getObjectifPedagogique(): ?string
    {
        return $this->container['objectif_pedagogique'];
    }

    /**
     * Sets objectif_pedagogique
     *
     * @param string|null $objectif_pedagogique objectif_pedagogique
     *
     * @return $this
     */
    public function setObjectifPedagogique(?string $objectif_pedagogique): static
    {
        if (is_null($objectif_pedagogique)) {
            array_push($this->openAPINullablesSetToNull, 'objectif_pedagogique');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('objectif_pedagogique', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['objectif_pedagogique'] = $objectif_pedagogique;

        return $this;
    }

    /**
     * Gets modalites_pedagogiques
     *
     * @return string|null
     */
    public function getModalitesPedagogiques(): ?string
    {
        return $this->container['modalites_pedagogiques'];
    }

    /**
     * Sets modalites_pedagogiques
     *
     * @param string|null $modalites_pedagogiques modalites_pedagogiques
     *
     * @return $this
     */
    public function setModalitesPedagogiques(?string $modalites_pedagogiques): static
    {
        if (is_null($modalites_pedagogiques)) {
            array_push($this->openAPINullablesSetToNull, 'modalites_pedagogiques');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('modalites_pedagogiques', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['modalites_pedagogiques'] = $modalites_pedagogiques;

        return $this;
    }

    /**
     * Gets moyens_supports_pedagogiques
     *
     * @return string|null
     */
    public function getMoyensSupportsPedagogiques(): ?string
    {
        return $this->container['moyens_supports_pedagogiques'];
    }

    /**
     * Sets moyens_supports_pedagogiques
     *
     * @param string|null $moyens_supports_pedagogiques moyens_supports_pedagogiques
     *
     * @return $this
     */
    public function setMoyensSupportsPedagogiques(?string $moyens_supports_pedagogiques): static
    {
        if (is_null($moyens_supports_pedagogiques)) {
            array_push($this->openAPINullablesSetToNull, 'moyens_supports_pedagogiques');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('moyens_supports_pedagogiques', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['moyens_supports_pedagogiques'] = $moyens_supports_pedagogiques;

        return $this;
    }

    /**
     * Gets public_vise
     *
     * @return string|null
     */
    public function getPublicVise(): ?string
    {
        return $this->container['public_vise'];
    }

    /**
     * Sets public_vise
     *
     * @param string|null $public_vise public_vise
     *
     * @return $this
     */
    public function setPublicVise(?string $public_vise): static
    {
        if (is_null($public_vise)) {
            array_push($this->openAPINullablesSetToNull, 'public_vise');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('public_vise', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['public_vise'] = $public_vise;

        return $this;
    }

    /**
     * Gets pre_requis
     *
     * @return string|null
     */
    public function getPreRequis(): ?string
    {
        return $this->container['pre_requis'];
    }

    /**
     * Sets pre_requis
     *
     * @param string|null $pre_requis pre_requis
     *
     * @return $this
     */
    public function setPreRequis(?string $pre_requis): static
    {
        if (is_null($pre_requis)) {
            array_push($this->openAPINullablesSetToNull, 'pre_requis');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pre_requis', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pre_requis'] = $pre_requis;

        return $this;
    }

    /**
     * Gets infos_admission
     *
     * @return string|null
     */
    public function getInfosAdmission(): ?string
    {
        return $this->container['infos_admission'];
    }

    /**
     * Sets infos_admission
     *
     * @param string|null $infos_admission infos_admission
     *
     * @return $this
     */
    public function setInfosAdmission(?string $infos_admission): static
    {
        if (is_null($infos_admission)) {
            array_push($this->openAPINullablesSetToNull, 'infos_admission');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('infos_admission', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['infos_admission'] = $infos_admission;

        return $this;
    }

    /**
     * Gets modalites_devaluation
     *
     * @return string|null
     */
    public function getModalitesDevaluation(): ?string
    {
        return $this->container['modalites_devaluation'];
    }

    /**
     * Sets modalites_devaluation
     *
     * @param string|null $modalites_devaluation modalites_devaluation
     *
     * @return $this
     */
    public function setModalitesDevaluation(?string $modalites_devaluation): static
    {
        if (is_null($modalites_devaluation)) {
            array_push($this->openAPINullablesSetToNull, 'modalites_devaluation');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('modalites_devaluation', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['modalites_devaluation'] = $modalites_devaluation;

        return $this;
    }

    /**
     * Gets accessibilite
     *
     * @return string|null
     */
    public function getAccessibilite(): ?string
    {
        return $this->container['accessibilite'];
    }

    /**
     * Sets accessibilite
     *
     * @param string|null $accessibilite accessibilite
     *
     * @return $this
     */
    public function setAccessibilite(?string $accessibilite): static
    {
        if (is_null($accessibilite)) {
            array_push($this->openAPINullablesSetToNull, 'accessibilite');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('accessibilite', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['accessibilite'] = $accessibilite;

        return $this;
    }

    /**
     * Gets profil_formateurs
     *
     * @return string|null
     */
    public function getProfilFormateurs(): ?string
    {
        return $this->container['profil_formateurs'];
    }

    /**
     * Sets profil_formateurs
     *
     * @param string|null $profil_formateurs profil_formateurs
     *
     * @return $this
     */
    public function setProfilFormateurs(?string $profil_formateurs): static
    {
        if (is_null($profil_formateurs)) {
            array_push($this->openAPINullablesSetToNull, 'profil_formateurs');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('profil_formateurs', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['profil_formateurs'] = $profil_formateurs;

        return $this;
    }

    /**
     * Gets message_libre_exp
     *
     * @return string|null
     */
    public function getMessageLibreExp(): ?string
    {
        return $this->container['message_libre_exp'];
    }

    /**
     * Sets message_libre_exp
     *
     * @param string|null $message_libre_exp message_libre_exp
     *
     * @return $this
     */
    public function setMessageLibreExp(?string $message_libre_exp): static
    {
        if (is_null($message_libre_exp)) {
            array_push($this->openAPINullablesSetToNull, 'message_libre_exp');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('message_libre_exp', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['message_libre_exp'] = $message_libre_exp;

        return $this;
    }

    /**
     * Gets message_libre_exe
     *
     * @return string|null
     */
    public function getMessageLibreExe(): ?string
    {
        return $this->container['message_libre_exe'];
    }

    /**
     * Sets message_libre_exe
     *
     * @param string|null $message_libre_exe message_libre_exe
     *
     * @return $this
     */
    public function setMessageLibreExe(?string $message_libre_exe): static
    {
        if (is_null($message_libre_exe)) {
            array_push($this->openAPINullablesSetToNull, 'message_libre_exe');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('message_libre_exe', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['message_libre_exe'] = $message_libre_exe;

        return $this;
    }

    /**
     * Gets message_libre_exf
     *
     * @return string|null
     */
    public function getMessageLibreExf(): ?string
    {
        return $this->container['message_libre_exf'];
    }

    /**
     * Sets message_libre_exf
     *
     * @param string|null $message_libre_exf message_libre_exf
     *
     * @return $this
     */
    public function setMessageLibreExf(?string $message_libre_exf): static
    {
        if (is_null($message_libre_exf)) {
            array_push($this->openAPINullablesSetToNull, 'message_libre_exf');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('message_libre_exf', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['message_libre_exf'] = $message_libre_exf;

        return $this;
    }

    /**
     * Gets ical_url
     *
     * @return string|null
     */
    public function getIcalUrl(): ?string
    {
        return $this->container['ical_url'];
    }

    /**
     * Sets ical_url
     *
     * @param string|null $ical_url ical_url
     *
     * @return $this
     */
    public function setIcalUrl(?string $ical_url): static
    {
        if (is_null($ical_url)) {
            throw new InvalidArgumentException('non-nullable ical_url cannot be null');
        }
        $this->container['ical_url'] = $ical_url;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at Heure de Paris (Europe/Paris), heure d'été comprise.
     *
     * @return $this
     */
    public function setCreatedAt(?\DateTime $created_at): static
    {
        if (is_null($created_at)) {
            array_push($this->openAPINullablesSetToNull, 'created_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('created_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets id_add
     *
     * @return int|null
     */
    public function getIdAdd(): ?int
    {
        return $this->container['id_add'];
    }

    /**
     * Sets id_add
     *
     * @param int|null $id_add id_add
     *
     * @return $this
     */
    public function setIdAdd(?int $id_add): static
    {
        if (is_null($id_add)) {
            array_push($this->openAPINullablesSetToNull, 'id_add');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_add', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id_add'] = $id_add;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at Heure de Paris (Europe/Paris), heure d'été comprise.
     *
     * @return $this
     */
    public function setUpdatedAt(?\DateTime $updated_at): static
    {
        if (is_null($updated_at)) {
            array_push($this->openAPINullablesSetToNull, 'updated_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('updated_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets id_edit
     *
     * @return int|null
     */
    public function getIdEdit(): ?int
    {
        return $this->container['id_edit'];
    }

    /**
     * Sets id_edit
     *
     * @param int|null $id_edit id_edit
     *
     * @return $this
     */
    public function setIdEdit(?int $id_edit): static
    {
        if (is_null($id_edit)) {
            array_push($this->openAPINullablesSetToNull, 'id_edit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_edit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id_edit'] = $id_edit;

        return $this;
    }

    /**
     * Gets deleted_at
     *
     * @return \DateTime
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->container['deleted_at'];
    }

    /**
     * Sets deleted_at
     *
     * @param \DateTime $deleted_at Heure de Paris (Europe/Paris), heure d'été comprise.
     *
     * @return $this
     */
    public function setDeletedAt(?\DateTime $deleted_at): static
    {
        if (is_null($deleted_at)) {
            array_push($this->openAPINullablesSetToNull, 'deleted_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('deleted_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['deleted_at'] = $deleted_at;

        return $this;
    }

    /**
     * Gets id_delete
     *
     * @return int|null
     */
    public function getIdDelete(): ?int
    {
        return $this->container['id_delete'];
    }

    /**
     * Sets id_delete
     *
     * @param int|null $id_delete id_delete
     *
     * @return $this
     */
    public function setIdDelete(?int $id_delete): static
    {
        if (is_null($id_delete)) {
            array_push($this->openAPINullablesSetToNull, 'id_delete');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_delete', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id_delete'] = $id_delete;

        return $this;
    }

    /**
     * Gets etape_process
     *
     * @return \Dbout\DendreoSdk\Model\EtapeProcess|null
     */
    public function getEtapeProcess(): ?\Dbout\DendreoSdk\Model\EtapeProcess
    {
        return $this->container['etape_process'];
    }

    /**
     * Sets etape_process
     *
     * @param \Dbout\DendreoSdk\Model\EtapeProcess|null $etape_process Présent uniquement avec `include=etapeProcess`.
     *
     * @return $this
     */
    public function setEtapeProcess(?\Dbout\DendreoSdk\Model\EtapeProcess $etape_process): static
    {
        if (is_null($etape_process)) {
            array_push($this->openAPINullablesSetToNull, 'etape_process');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('etape_process', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['etape_process'] = $etape_process;

        return $this;
    }

    /**
     * Gets visuel
     *
     * @return string|null
     */
    public function getVisuel(): ?string
    {
        return $this->container['visuel'];
    }

    /**
     * Sets visuel
     *
     * @param string|null $visuel Présent uniquement avec `include=visuel`. URL du visuel de l'action de formation.
     *
     * @return $this
     */
    public function setVisuel(?string $visuel): static
    {
        if (is_null($visuel)) {
            array_push($this->openAPINullablesSetToNull, 'visuel');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('visuel', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['visuel'] = $visuel;

        return $this;
    }

    /**
     * Gets dokeos_learning_path_id
     *
     * @return int|null
     */
    public function getDokeosLearningPathId(): ?int
    {
        return $this->container['dokeos_learning_path_id'];
    }

    /**
     * Sets dokeos_learning_path_id
     *
     * @param int|null $dokeos_learning_path_id Présent uniquement si l'intégration Dokeos est activée sur le compte.
     *
     * @return $this
     */
    public function setDokeosLearningPathId(?int $dokeos_learning_path_id): static
    {
        if (is_null($dokeos_learning_path_id)) {
            array_push($this->openAPINullablesSetToNull, 'dokeos_learning_path_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dokeos_learning_path_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dokeos_learning_path_id'] = $dokeos_learning_path_id;

        return $this;
    }

    /**
     * Gets dokeos_group_id
     *
     * @return int|null
     */
    public function getDokeosGroupId(): ?int
    {
        return $this->container['dokeos_group_id'];
    }

    /**
     * Sets dokeos_group_id
     *
     * @param int|null $dokeos_group_id Présent uniquement si l'intégration Dokeos est activée sur le compte.
     *
     * @return $this
     */
    public function setDokeosGroupId(?int $dokeos_group_id): static
    {
        if (is_null($dokeos_group_id)) {
            array_push($this->openAPINullablesSetToNull, 'dokeos_group_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dokeos_group_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dokeos_group_id'] = $dokeos_group_id;

        return $this;
    }

    /**
     * Gets tslearning_group_id
     *
     * @return string|null
     */
    public function getTslearningGroupId(): ?string
    {
        return $this->container['tslearning_group_id'];
    }

    /**
     * Sets tslearning_group_id
     *
     * @param string|null $tslearning_group_id Présent uniquement si l'intégration TSLearning est activée sur le compte.
     *
     * @return $this
     */
    public function setTslearningGroupId(?string $tslearning_group_id): static
    {
        if (is_null($tslearning_group_id)) {
            array_push($this->openAPINullablesSetToNull, 'tslearning_group_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tslearning_group_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tslearning_group_id'] = $tslearning_group_id;

        return $this;
    }

    /**
     * Gets riseup_group_id
     *
     * @return int|null
     */
    public function getRiseupGroupId(): ?int
    {
        return $this->container['riseup_group_id'];
    }

    /**
     * Sets riseup_group_id
     *
     * @param int|null $riseup_group_id Présent uniquement si l'intégration Rise Up est activée sur le compte.
     *
     * @return $this
     */
    public function setRiseupGroupId(?int $riseup_group_id): static
    {
        if (is_null($riseup_group_id)) {
            array_push($this->openAPINullablesSetToNull, 'riseup_group_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('riseup_group_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['riseup_group_id'] = $riseup_group_id;

        return $this;
    }

    /**
     * Gets riseup_learning_path_id
     *
     * @return int|null
     */
    public function getRiseupLearningPathId(): ?int
    {
        return $this->container['riseup_learning_path_id'];
    }

    /**
     * Sets riseup_learning_path_id
     *
     * @param int|null $riseup_learning_path_id Présent uniquement si l'intégration Rise Up est activée sur le compte.
     *
     * @return $this
     */
    public function setRiseupLearningPathId(?int $riseup_learning_path_id): static
    {
        if (is_null($riseup_learning_path_id)) {
            array_push($this->openAPINullablesSetToNull, 'riseup_learning_path_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('riseup_learning_path_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['riseup_learning_path_id'] = $riseup_learning_path_id;

        return $this;
    }

    /**
     * Gets num_session_dpc
     *
     * @return string|null
     */
    public function getNumSessionDpc(): ?string
    {
        return $this->container['num_session_dpc'];
    }

    /**
     * Sets num_session_dpc
     *
     * @param string|null $num_session_dpc Présent uniquement si l'option OGDPC est activée pour le centre de formation de l'action.
     *
     * @return $this
     */
    public function setNumSessionDpc(?string $num_session_dpc): static
    {
        if (is_null($num_session_dpc)) {
            array_push($this->openAPINullablesSetToNull, 'num_session_dpc');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('num_session_dpc', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['num_session_dpc'] = $num_session_dpc;

        return $this;
    }

    /**
     * Gets ogdpc_orientation
     *
     * @return string|null
     */
    public function getOgdpcOrientation(): ?string
    {
        return $this->container['ogdpc_orientation'];
    }

    /**
     * Sets ogdpc_orientation
     *
     * @param string|null $ogdpc_orientation Présent uniquement si l'option OGDPC est activée pour le centre de formation de l'action.
     *
     * @return $this
     */
    public function setOgdpcOrientation(?string $ogdpc_orientation): static
    {
        if (is_null($ogdpc_orientation)) {
            array_push($this->openAPINullablesSetToNull, 'ogdpc_orientation');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ogdpc_orientation', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ogdpc_orientation'] = $ogdpc_orientation;

        return $this;
    }

    /**
     * Gets ogdpc_orientation_ide
     *
     * @return int|null
     */
    public function getOgdpcOrientationIde(): ?int
    {
        return $this->container['ogdpc_orientation_ide'];
    }

    /**
     * Sets ogdpc_orientation_ide
     *
     * @param int|null $ogdpc_orientation_ide Présent uniquement si l'option OGDPC est activée pour le centre de formation de l'action.
     *
     * @return $this
     */
    public function setOgdpcOrientationIde(?int $ogdpc_orientation_ide): static
    {
        if (is_null($ogdpc_orientation_ide)) {
            array_push($this->openAPINullablesSetToNull, 'ogdpc_orientation_ide');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ogdpc_orientation_ide', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ogdpc_orientation_ide'] = $ogdpc_orientation_ide;

        return $this;
    }

    /**
     * Gets ogdpc_orientation_as
     *
     * @return int|null
     */
    public function getOgdpcOrientationAs(): ?int
    {
        return $this->container['ogdpc_orientation_as'];
    }

    /**
     * Sets ogdpc_orientation_as
     *
     * @param int|null $ogdpc_orientation_as Présent uniquement si l'option OGDPC est activée pour le centre de formation de l'action.
     *
     * @return $this
     */
    public function setOgdpcOrientationAs(?int $ogdpc_orientation_as): static
    {
        if (is_null($ogdpc_orientation_as)) {
            array_push($this->openAPINullablesSetToNull, 'ogdpc_orientation_as');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ogdpc_orientation_as', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ogdpc_orientation_as'] = $ogdpc_orientation_as;

        return $this;
    }

    /**
     * Gets emargements_url
     *
     * @return string|null
     */
    public function getEmargementsUrl(): ?string
    {
        return $this->container['emargements_url'];
    }

    /**
     * Sets emargements_url
     *
     * @param string|null $emargements_url URL publique des émargements de l'action de formation.
     *
     * @return $this
     */
    public function setEmargementsUrl(?string $emargements_url): static
    {
        if (is_null($emargements_url)) {
            array_push($this->openAPINullablesSetToNull, 'emargements_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('emargements_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['emargements_url'] = $emargements_url;

        return $this;
    }

    /**
     * Gets pourcentage_planification
     *
     * @return float|null
     */
    public function getPourcentagePlanification(): ?float
    {
        return $this->container['pourcentage_planification'];
    }

    /**
     * Sets pourcentage_planification
     *
     * @param float|null $pourcentage_planification Part de la durée de l'action déjà planifiée, en pourcentage.
     *
     * @return $this
     */
    public function setPourcentagePlanification(?float $pourcentage_planification): static
    {
        if (is_null($pourcentage_planification)) {
            array_push($this->openAPINullablesSetToNull, 'pourcentage_planification');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pourcentage_planification', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pourcentage_planification'] = $pourcentage_planification;

        return $this;
    }

    /**
     * Gets duree_planification_restante_heures
     *
     * @return float|null
     */
    public function getDureePlanificationRestanteHeures(): ?float
    {
        return $this->container['duree_planification_restante_heures'];
    }

    /**
     * Sets duree_planification_restante_heures
     *
     * @param float|null $duree_planification_restante_heures Durée restant à planifier, en heures.
     *
     * @return $this
     */
    public function setDureePlanificationRestanteHeures(?float $duree_planification_restante_heures): static
    {
        if (is_null($duree_planification_restante_heures)) {
            array_push($this->openAPINullablesSetToNull, 'duree_planification_restante_heures');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('duree_planification_restante_heures', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['duree_planification_restante_heures'] = $duree_planification_restante_heures;

        return $this;
    }

    /**
     * Gets nb_participants_inscrits
     *
     * @return int|null
     */
    public function getNbParticipantsInscrits(): ?int
    {
        return $this->container['nb_participants_inscrits'];
    }

    /**
     * Sets nb_participants_inscrits
     *
     * @param int|null $nb_participants_inscrits nb_participants_inscrits
     *
     * @return $this
     */
    public function setNbParticipantsInscrits(?int $nb_participants_inscrits): static
    {
        if (is_null($nb_participants_inscrits)) {
            array_push($this->openAPINullablesSetToNull, 'nb_participants_inscrits');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nb_participants_inscrits', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nb_participants_inscrits'] = $nb_participants_inscrits;

        return $this;
    }

    /**
     * Gets nb_participants_non_inscrits
     *
     * @return int|null
     */
    public function getNbParticipantsNonInscrits(): ?int
    {
        return $this->container['nb_participants_non_inscrits'];
    }

    /**
     * Sets nb_participants_non_inscrits
     *
     * @param int|null $nb_participants_non_inscrits nb_participants_non_inscrits
     *
     * @return $this
     */
    public function setNbParticipantsNonInscrits(?int $nb_participants_non_inscrits): static
    {
        if (is_null($nb_participants_non_inscrits)) {
            array_push($this->openAPINullablesSetToNull, 'nb_participants_non_inscrits');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nb_participants_non_inscrits', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nb_participants_non_inscrits'] = $nb_participants_non_inscrits;

        return $this;
    }

    /**
     * Gets nb_participants_en_attente
     *
     * @return int|null
     */
    public function getNbParticipantsEnAttente(): ?int
    {
        return $this->container['nb_participants_en_attente'];
    }

    /**
     * Sets nb_participants_en_attente
     *
     * @param int|null $nb_participants_en_attente nb_participants_en_attente
     *
     * @return $this
     */
    public function setNbParticipantsEnAttente(?int $nb_participants_en_attente): static
    {
        if (is_null($nb_participants_en_attente)) {
            array_push($this->openAPINullablesSetToNull, 'nb_participants_en_attente');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nb_participants_en_attente', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nb_participants_en_attente'] = $nb_participants_en_attente;

        return $this;
    }

    /**
     * Gets moyenne_satisfaction
     *
     * @return int|null
     */
    public function getMoyenneSatisfaction(): ?int
    {
        return $this->container['moyenne_satisfaction'];
    }

    /**
     * Sets moyenne_satisfaction
     *
     * @param int|null $moyenne_satisfaction Note moyenne des questionnaires de satisfaction, ramenée sur 100. `null` sans réponse.
     *
     * @return $this
     */
    public function setMoyenneSatisfaction(?int $moyenne_satisfaction): static
    {
        if (is_null($moyenne_satisfaction)) {
            array_push($this->openAPINullablesSetToNull, 'moyenne_satisfaction');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('moyenne_satisfaction', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['moyenne_satisfaction'] = $moyenne_satisfaction;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


