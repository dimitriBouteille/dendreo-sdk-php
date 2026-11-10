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
 * ActionsDeFormationUpdateRequest Class Doc Comment
 *
 * Generated from the Dendreo OpenAPI specification, do not edit manually.
 *
 * @package  Dbout\DendreoSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ActionsDeFormationUpdateRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ActionsDeFormationUpdateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'type' => 'string',
        'id_centre_de_formation' => 'int',
        'id_externe' => 'string',
        'numero_complet' => 'string',
        'numero' => 'int',
        'id_entreprise' => 'int',
        'entreprise_raison_sociale' => 'string',
        'entreprise_id_externe' => 'string',
        'entreprise_siret' => 'string',
        'id_contact' => 'int',
        'salle_client' => 'string',
        'id_salle_de_formation' => 'int',
        'id_module' => 'int',
        'prix' => 'float',
        'duree' => 'float',
        'date_acces_debut' => 'string',
        'date_acces_fin' => 'string',
        'has_dates_contractuelles' => 'bool',
        'id_formateur' => 'string',
        'id_entreprise_formateur' => 'string',
        'id_etape_process' => 'int',
        'id_responsable' => 'int',
        'id_commercial' => 'int',
        'nb_participants_min' => 'int',
        'nb_participants_max' => 'int',
        'mode_pricing' => 'string',
        'tva_formation' => 'string',
        'tva_hors_formation' => 'string',
        'tva_frais' => 'string',
        'include_in_bpf' => 'bool',
        'objectif' => 'string',
        'nature' => 'string',
        'categorie_module_id' => 'int',
        'intitule' => 'string',
        'intitule_court' => 'string',
        'color' => 'string',
        'esignature' => 'bool',
        'remuneration_par_lmf' => 'bool',
        'inscription_online' => 'bool',
        'num_session_dpc' => 'string',
        'commentaires' => 'string',
        'commentaires_agenda' => 'string',
        'automations' => 'int[]',
        'date_debut' => 'string',
        'date_fin' => 'string',
        'description' => 'string',
        'message_libre_exp' => 'string',
        'message_libre_exf' => 'string',
        'message_libre_exe' => 'string',
        'objectif_pedagogique' => 'string',
        'modalites_pedagogiques' => 'string',
        'moyens_supports_pedagogiques' => 'string',
        'public_vise' => 'string',
        'pre_requis' => 'string',
        'infos_admission' => 'string',
        'modalites_devaluation' => 'string',
        'accessibilite' => 'string',
        'profil_formateurs' => 'string',
        'id_externe_formateur' => 'string',
        'formateur_id_externe' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'type' => null,
        'id_centre_de_formation' => null,
        'id_externe' => null,
        'numero_complet' => null,
        'numero' => null,
        'id_entreprise' => null,
        'entreprise_raison_sociale' => null,
        'entreprise_id_externe' => null,
        'entreprise_siret' => null,
        'id_contact' => null,
        'salle_client' => null,
        'id_salle_de_formation' => null,
        'id_module' => null,
        'prix' => null,
        'duree' => null,
        'date_acces_debut' => null,
        'date_acces_fin' => null,
        'has_dates_contractuelles' => null,
        'id_formateur' => null,
        'id_entreprise_formateur' => null,
        'id_etape_process' => null,
        'id_responsable' => null,
        'id_commercial' => null,
        'nb_participants_min' => null,
        'nb_participants_max' => null,
        'mode_pricing' => null,
        'tva_formation' => null,
        'tva_hors_formation' => null,
        'tva_frais' => null,
        'include_in_bpf' => null,
        'objectif' => null,
        'nature' => null,
        'categorie_module_id' => null,
        'intitule' => null,
        'intitule_court' => null,
        'color' => null,
        'esignature' => null,
        'remuneration_par_lmf' => null,
        'inscription_online' => null,
        'num_session_dpc' => null,
        'commentaires' => null,
        'commentaires_agenda' => null,
        'automations' => null,
        'date_debut' => null,
        'date_fin' => null,
        'description' => null,
        'message_libre_exp' => null,
        'message_libre_exf' => null,
        'message_libre_exe' => null,
        'objectif_pedagogique' => null,
        'modalites_pedagogiques' => null,
        'moyens_supports_pedagogiques' => null,
        'public_vise' => null,
        'pre_requis' => null,
        'infos_admission' => null,
        'modalites_devaluation' => null,
        'accessibilite' => null,
        'profil_formateurs' => null,
        'id_externe_formateur' => null,
        'formateur_id_externe' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'type' => false,
        'id_centre_de_formation' => true,
        'id_externe' => true,
        'numero_complet' => true,
        'numero' => true,
        'id_entreprise' => true,
        'entreprise_raison_sociale' => true,
        'entreprise_id_externe' => true,
        'entreprise_siret' => true,
        'id_contact' => true,
        'salle_client' => false,
        'id_salle_de_formation' => true,
        'id_module' => true,
        'prix' => true,
        'duree' => true,
        'date_acces_debut' => true,
        'date_acces_fin' => true,
        'has_dates_contractuelles' => true,
        'id_formateur' => false,
        'id_entreprise_formateur' => false,
        'id_etape_process' => true,
        'id_responsable' => true,
        'id_commercial' => true,
        'nb_participants_min' => true,
        'nb_participants_max' => true,
        'mode_pricing' => false,
        'tva_formation' => true,
        'tva_hors_formation' => true,
        'tva_frais' => true,
        'include_in_bpf' => true,
        'objectif' => true,
        'nature' => true,
        'categorie_module_id' => true,
        'intitule' => true,
        'intitule_court' => true,
        'color' => true,
        'esignature' => true,
        'remuneration_par_lmf' => true,
        'inscription_online' => true,
        'num_session_dpc' => true,
        'commentaires' => true,
        'commentaires_agenda' => true,
        'automations' => false,
        'date_debut' => false,
        'date_fin' => false,
        'description' => true,
        'message_libre_exp' => true,
        'message_libre_exf' => true,
        'message_libre_exe' => true,
        'objectif_pedagogique' => true,
        'modalites_pedagogiques' => true,
        'moyens_supports_pedagogiques' => true,
        'public_vise' => true,
        'pre_requis' => true,
        'infos_admission' => true,
        'modalites_devaluation' => true,
        'accessibilite' => true,
        'profil_formateurs' => true,
        'id_externe_formateur' => false,
        'formateur_id_externe' => false
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
        'type' => 'type',
        'id_centre_de_formation' => 'id_centre_de_formation',
        'id_externe' => 'id_externe',
        'numero_complet' => 'numero_complet',
        'numero' => 'numero',
        'id_entreprise' => 'id_entreprise',
        'entreprise_raison_sociale' => 'entreprise_raison_sociale',
        'entreprise_id_externe' => 'entreprise_id_externe',
        'entreprise_siret' => 'entreprise_siret',
        'id_contact' => 'id_contact',
        'salle_client' => 'salle_client',
        'id_salle_de_formation' => 'id_salle_de_formation',
        'id_module' => 'id_module',
        'prix' => 'prix',
        'duree' => 'duree',
        'date_acces_debut' => 'date_acces_debut',
        'date_acces_fin' => 'date_acces_fin',
        'has_dates_contractuelles' => 'has_dates_contractuelles',
        'id_formateur' => 'id_formateur',
        'id_entreprise_formateur' => 'id_entreprise_formateur',
        'id_etape_process' => 'id_etape_process',
        'id_responsable' => 'id_responsable',
        'id_commercial' => 'id_commercial',
        'nb_participants_min' => 'nb_participants_min',
        'nb_participants_max' => 'nb_participants_max',
        'mode_pricing' => 'mode_pricing',
        'tva_formation' => 'tva_formation',
        'tva_hors_formation' => 'tva_hors_formation',
        'tva_frais' => 'tva_frais',
        'include_in_bpf' => 'include_in_bpf',
        'objectif' => 'objectif',
        'nature' => 'nature',
        'categorie_module_id' => 'categorie_module_id',
        'intitule' => 'intitule',
        'intitule_court' => 'intitule_court',
        'color' => 'color',
        'esignature' => 'esignature',
        'remuneration_par_lmf' => 'remuneration_par_lmf',
        'inscription_online' => 'inscription_online',
        'num_session_dpc' => 'num_session_dpc',
        'commentaires' => 'commentaires',
        'commentaires_agenda' => 'commentaires_agenda',
        'automations' => 'automations',
        'date_debut' => 'date_debut',
        'date_fin' => 'date_fin',
        'description' => 'description',
        'message_libre_exp' => 'message_libre_exp',
        'message_libre_exf' => 'message_libre_exf',
        'message_libre_exe' => 'message_libre_exe',
        'objectif_pedagogique' => 'objectif_pedagogique',
        'modalites_pedagogiques' => 'modalites_pedagogiques',
        'moyens_supports_pedagogiques' => 'moyens_supports_pedagogiques',
        'public_vise' => 'public_vise',
        'pre_requis' => 'pre_requis',
        'infos_admission' => 'infos_admission',
        'modalites_devaluation' => 'modalites_devaluation',
        'accessibilite' => 'accessibilite',
        'profil_formateurs' => 'profil_formateurs',
        'id_externe_formateur' => 'id_externe_formateur',
        'formateur_id_externe' => 'formateur_id_externe'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'type' => 'setType',
        'id_centre_de_formation' => 'setIdCentreDeFormation',
        'id_externe' => 'setIdExterne',
        'numero_complet' => 'setNumeroComplet',
        'numero' => 'setNumero',
        'id_entreprise' => 'setIdEntreprise',
        'entreprise_raison_sociale' => 'setEntrepriseRaisonSociale',
        'entreprise_id_externe' => 'setEntrepriseIdExterne',
        'entreprise_siret' => 'setEntrepriseSiret',
        'id_contact' => 'setIdContact',
        'salle_client' => 'setSalleClient',
        'id_salle_de_formation' => 'setIdSalleDeFormation',
        'id_module' => 'setIdModule',
        'prix' => 'setPrix',
        'duree' => 'setDuree',
        'date_acces_debut' => 'setDateAccesDebut',
        'date_acces_fin' => 'setDateAccesFin',
        'has_dates_contractuelles' => 'setHasDatesContractuelles',
        'id_formateur' => 'setIdFormateur',
        'id_entreprise_formateur' => 'setIdEntrepriseFormateur',
        'id_etape_process' => 'setIdEtapeProcess',
        'id_responsable' => 'setIdResponsable',
        'id_commercial' => 'setIdCommercial',
        'nb_participants_min' => 'setNbParticipantsMin',
        'nb_participants_max' => 'setNbParticipantsMax',
        'mode_pricing' => 'setModePricing',
        'tva_formation' => 'setTvaFormation',
        'tva_hors_formation' => 'setTvaHorsFormation',
        'tva_frais' => 'setTvaFrais',
        'include_in_bpf' => 'setIncludeInBpf',
        'objectif' => 'setObjectif',
        'nature' => 'setNature',
        'categorie_module_id' => 'setCategorieModuleId',
        'intitule' => 'setIntitule',
        'intitule_court' => 'setIntituleCourt',
        'color' => 'setColor',
        'esignature' => 'setEsignature',
        'remuneration_par_lmf' => 'setRemunerationParLmf',
        'inscription_online' => 'setInscriptionOnline',
        'num_session_dpc' => 'setNumSessionDpc',
        'commentaires' => 'setCommentaires',
        'commentaires_agenda' => 'setCommentairesAgenda',
        'automations' => 'setAutomations',
        'date_debut' => 'setDateDebut',
        'date_fin' => 'setDateFin',
        'description' => 'setDescription',
        'message_libre_exp' => 'setMessageLibreExp',
        'message_libre_exf' => 'setMessageLibreExf',
        'message_libre_exe' => 'setMessageLibreExe',
        'objectif_pedagogique' => 'setObjectifPedagogique',
        'modalites_pedagogiques' => 'setModalitesPedagogiques',
        'moyens_supports_pedagogiques' => 'setMoyensSupportsPedagogiques',
        'public_vise' => 'setPublicVise',
        'pre_requis' => 'setPreRequis',
        'infos_admission' => 'setInfosAdmission',
        'modalites_devaluation' => 'setModalitesDevaluation',
        'accessibilite' => 'setAccessibilite',
        'profil_formateurs' => 'setProfilFormateurs',
        'id_externe_formateur' => 'setIdExterneFormateur',
        'formateur_id_externe' => 'setFormateurIdExterne'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'type' => 'getType',
        'id_centre_de_formation' => 'getIdCentreDeFormation',
        'id_externe' => 'getIdExterne',
        'numero_complet' => 'getNumeroComplet',
        'numero' => 'getNumero',
        'id_entreprise' => 'getIdEntreprise',
        'entreprise_raison_sociale' => 'getEntrepriseRaisonSociale',
        'entreprise_id_externe' => 'getEntrepriseIdExterne',
        'entreprise_siret' => 'getEntrepriseSiret',
        'id_contact' => 'getIdContact',
        'salle_client' => 'getSalleClient',
        'id_salle_de_formation' => 'getIdSalleDeFormation',
        'id_module' => 'getIdModule',
        'prix' => 'getPrix',
        'duree' => 'getDuree',
        'date_acces_debut' => 'getDateAccesDebut',
        'date_acces_fin' => 'getDateAccesFin',
        'has_dates_contractuelles' => 'getHasDatesContractuelles',
        'id_formateur' => 'getIdFormateur',
        'id_entreprise_formateur' => 'getIdEntrepriseFormateur',
        'id_etape_process' => 'getIdEtapeProcess',
        'id_responsable' => 'getIdResponsable',
        'id_commercial' => 'getIdCommercial',
        'nb_participants_min' => 'getNbParticipantsMin',
        'nb_participants_max' => 'getNbParticipantsMax',
        'mode_pricing' => 'getModePricing',
        'tva_formation' => 'getTvaFormation',
        'tva_hors_formation' => 'getTvaHorsFormation',
        'tva_frais' => 'getTvaFrais',
        'include_in_bpf' => 'getIncludeInBpf',
        'objectif' => 'getObjectif',
        'nature' => 'getNature',
        'categorie_module_id' => 'getCategorieModuleId',
        'intitule' => 'getIntitule',
        'intitule_court' => 'getIntituleCourt',
        'color' => 'getColor',
        'esignature' => 'getEsignature',
        'remuneration_par_lmf' => 'getRemunerationParLmf',
        'inscription_online' => 'getInscriptionOnline',
        'num_session_dpc' => 'getNumSessionDpc',
        'commentaires' => 'getCommentaires',
        'commentaires_agenda' => 'getCommentairesAgenda',
        'automations' => 'getAutomations',
        'date_debut' => 'getDateDebut',
        'date_fin' => 'getDateFin',
        'description' => 'getDescription',
        'message_libre_exp' => 'getMessageLibreExp',
        'message_libre_exf' => 'getMessageLibreExf',
        'message_libre_exe' => 'getMessageLibreExe',
        'objectif_pedagogique' => 'getObjectifPedagogique',
        'modalites_pedagogiques' => 'getModalitesPedagogiques',
        'moyens_supports_pedagogiques' => 'getMoyensSupportsPedagogiques',
        'public_vise' => 'getPublicVise',
        'pre_requis' => 'getPreRequis',
        'infos_admission' => 'getInfosAdmission',
        'modalites_devaluation' => 'getModalitesDevaluation',
        'accessibilite' => 'getAccessibilite',
        'profil_formateurs' => 'getProfilFormateurs',
        'id_externe_formateur' => 'getIdExterneFormateur',
        'formateur_id_externe' => 'getFormateurIdExterne'
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

    public const TVA_FORMATION__0_0 = '0.0';
    public const TVA_FORMATION__2_1 = '2.1';
    public const TVA_FORMATION__2_5 = '2.5';
    public const TVA_FORMATION__3_0 = '3.0';
    public const TVA_FORMATION__3_7 = '3.7';
    public const TVA_FORMATION__4_0 = '4.0';
    public const TVA_FORMATION__5_0 = '5.0';
    public const TVA_FORMATION__5_5 = '5.5';
    public const TVA_FORMATION__6_0 = '6.0';
    public const TVA_FORMATION__7_7 = '7.7';
    public const TVA_FORMATION__8_1 = '8.1';
    public const TVA_FORMATION__8_5 = '8.5';
    public const TVA_FORMATION__10_0 = '10.0';
    public const TVA_FORMATION__11_0 = '11.0';
    public const TVA_FORMATION__13_0 = '13.0';
    public const TVA_FORMATION__13_5 = '13.5';
    public const TVA_FORMATION__16_0 = '16.0';
    public const TVA_FORMATION__17_0 = '17.0';
    public const TVA_FORMATION__20_0 = '20.0';
    public const TVA_FORMATION__21_0 = '21.0';
    public const TVA_FORMATION__23_0 = '23.0';
    public const TVA_HORS_FORMATION__0_0 = '0.0';
    public const TVA_HORS_FORMATION__2_1 = '2.1';
    public const TVA_HORS_FORMATION__2_5 = '2.5';
    public const TVA_HORS_FORMATION__3_0 = '3.0';
    public const TVA_HORS_FORMATION__3_7 = '3.7';
    public const TVA_HORS_FORMATION__4_0 = '4.0';
    public const TVA_HORS_FORMATION__5_0 = '5.0';
    public const TVA_HORS_FORMATION__5_5 = '5.5';
    public const TVA_HORS_FORMATION__6_0 = '6.0';
    public const TVA_HORS_FORMATION__7_7 = '7.7';
    public const TVA_HORS_FORMATION__8_1 = '8.1';
    public const TVA_HORS_FORMATION__8_5 = '8.5';
    public const TVA_HORS_FORMATION__10_0 = '10.0';
    public const TVA_HORS_FORMATION__11_0 = '11.0';
    public const TVA_HORS_FORMATION__13_0 = '13.0';
    public const TVA_HORS_FORMATION__13_5 = '13.5';
    public const TVA_HORS_FORMATION__16_0 = '16.0';
    public const TVA_HORS_FORMATION__17_0 = '17.0';
    public const TVA_HORS_FORMATION__20_0 = '20.0';
    public const TVA_HORS_FORMATION__21_0 = '21.0';
    public const TVA_HORS_FORMATION__23_0 = '23.0';
    public const TVA_FRAIS__0_0 = '0.0';
    public const TVA_FRAIS__2_1 = '2.1';
    public const TVA_FRAIS__2_5 = '2.5';
    public const TVA_FRAIS__3_0 = '3.0';
    public const TVA_FRAIS__3_7 = '3.7';
    public const TVA_FRAIS__4_0 = '4.0';
    public const TVA_FRAIS__5_0 = '5.0';
    public const TVA_FRAIS__5_5 = '5.5';
    public const TVA_FRAIS__6_0 = '6.0';
    public const TVA_FRAIS__7_7 = '7.7';
    public const TVA_FRAIS__8_1 = '8.1';
    public const TVA_FRAIS__8_5 = '8.5';
    public const TVA_FRAIS__10_0 = '10.0';
    public const TVA_FRAIS__11_0 = '11.0';
    public const TVA_FRAIS__13_0 = '13.0';
    public const TVA_FRAIS__13_5 = '13.5';
    public const TVA_FRAIS__16_0 = '16.0';
    public const TVA_FRAIS__17_0 = '17.0';
    public const TVA_FRAIS__20_0 = '20.0';
    public const TVA_FRAIS__21_0 = '21.0';
    public const TVA_FRAIS__23_0 = '23.0';
    public const OBJECTIF_MINUS = '-';
    public const OBJECTIF_NIVEAU12 = 'niveau12';
    public const OBJECTIF_NIVEAU3 = 'niveau3';
    public const OBJECTIF_NIVEAU4 = 'niveau4';
    public const OBJECTIF_NIVEAU5 = 'niveau5';
    public const OBJECTIF_NIVEAU2 = 'niveau2';
    public const OBJECTIF_CQP_SANS = 'cqp_sans';
    public const OBJECTIF_CQP_RS = 'cqp_rs';
    public const OBJECTIF_CQP_NON_RS = 'cqp_non_rs';
    public const OBJECTIF_AUTRES = 'autres';
    public const OBJECTIF_BILAN = 'bilan';
    public const OBJECTIF_ACCOMPAGNEMENT = 'accompagnement';
    public const NATURE_MINUS = '-';
    public const NATURE__101 = '101';
    public const NATURE__102 = '102';
    public const NATURE__103 = '103';
    public const NATURE__104 = '104';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public static function getTvaFormationAllowableValues()
    {
        return [
            self::TVA_FORMATION__0_0,
            self::TVA_FORMATION__2_1,
            self::TVA_FORMATION__2_5,
            self::TVA_FORMATION__3_0,
            self::TVA_FORMATION__3_7,
            self::TVA_FORMATION__4_0,
            self::TVA_FORMATION__5_0,
            self::TVA_FORMATION__5_5,
            self::TVA_FORMATION__6_0,
            self::TVA_FORMATION__7_7,
            self::TVA_FORMATION__8_1,
            self::TVA_FORMATION__8_5,
            self::TVA_FORMATION__10_0,
            self::TVA_FORMATION__11_0,
            self::TVA_FORMATION__13_0,
            self::TVA_FORMATION__13_5,
            self::TVA_FORMATION__16_0,
            self::TVA_FORMATION__17_0,
            self::TVA_FORMATION__20_0,
            self::TVA_FORMATION__21_0,
            self::TVA_FORMATION__23_0,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public static function getTvaHorsFormationAllowableValues()
    {
        return [
            self::TVA_HORS_FORMATION__0_0,
            self::TVA_HORS_FORMATION__2_1,
            self::TVA_HORS_FORMATION__2_5,
            self::TVA_HORS_FORMATION__3_0,
            self::TVA_HORS_FORMATION__3_7,
            self::TVA_HORS_FORMATION__4_0,
            self::TVA_HORS_FORMATION__5_0,
            self::TVA_HORS_FORMATION__5_5,
            self::TVA_HORS_FORMATION__6_0,
            self::TVA_HORS_FORMATION__7_7,
            self::TVA_HORS_FORMATION__8_1,
            self::TVA_HORS_FORMATION__8_5,
            self::TVA_HORS_FORMATION__10_0,
            self::TVA_HORS_FORMATION__11_0,
            self::TVA_HORS_FORMATION__13_0,
            self::TVA_HORS_FORMATION__13_5,
            self::TVA_HORS_FORMATION__16_0,
            self::TVA_HORS_FORMATION__17_0,
            self::TVA_HORS_FORMATION__20_0,
            self::TVA_HORS_FORMATION__21_0,
            self::TVA_HORS_FORMATION__23_0,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public static function getTvaFraisAllowableValues()
    {
        return [
            self::TVA_FRAIS__0_0,
            self::TVA_FRAIS__2_1,
            self::TVA_FRAIS__2_5,
            self::TVA_FRAIS__3_0,
            self::TVA_FRAIS__3_7,
            self::TVA_FRAIS__4_0,
            self::TVA_FRAIS__5_0,
            self::TVA_FRAIS__5_5,
            self::TVA_FRAIS__6_0,
            self::TVA_FRAIS__7_7,
            self::TVA_FRAIS__8_1,
            self::TVA_FRAIS__8_5,
            self::TVA_FRAIS__10_0,
            self::TVA_FRAIS__11_0,
            self::TVA_FRAIS__13_0,
            self::TVA_FRAIS__13_5,
            self::TVA_FRAIS__16_0,
            self::TVA_FRAIS__17_0,
            self::TVA_FRAIS__20_0,
            self::TVA_FRAIS__21_0,
            self::TVA_FRAIS__23_0,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public static function getObjectifAllowableValues()
    {
        return [
            self::OBJECTIF_MINUS,
            self::OBJECTIF_NIVEAU12,
            self::OBJECTIF_NIVEAU3,
            self::OBJECTIF_NIVEAU4,
            self::OBJECTIF_NIVEAU5,
            self::OBJECTIF_NIVEAU2,
            self::OBJECTIF_CQP_SANS,
            self::OBJECTIF_CQP_RS,
            self::OBJECTIF_CQP_NON_RS,
            self::OBJECTIF_AUTRES,
            self::OBJECTIF_BILAN,
            self::OBJECTIF_ACCOMPAGNEMENT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public static function getNatureAllowableValues()
    {
        return [
            self::NATURE_MINUS,
            self::NATURE__101,
            self::NATURE__102,
            self::NATURE__103,
            self::NATURE__104,
        ];
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
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('id_centre_de_formation', $data ?? [], null);
        $this->setIfExists('id_externe', $data ?? [], null);
        $this->setIfExists('numero_complet', $data ?? [], null);
        $this->setIfExists('numero', $data ?? [], null);
        $this->setIfExists('id_entreprise', $data ?? [], null);
        $this->setIfExists('entreprise_raison_sociale', $data ?? [], null);
        $this->setIfExists('entreprise_id_externe', $data ?? [], null);
        $this->setIfExists('entreprise_siret', $data ?? [], null);
        $this->setIfExists('id_contact', $data ?? [], null);
        $this->setIfExists('salle_client', $data ?? [], null);
        $this->setIfExists('id_salle_de_formation', $data ?? [], null);
        $this->setIfExists('id_module', $data ?? [], null);
        $this->setIfExists('prix', $data ?? [], null);
        $this->setIfExists('duree', $data ?? [], null);
        $this->setIfExists('date_acces_debut', $data ?? [], null);
        $this->setIfExists('date_acces_fin', $data ?? [], null);
        $this->setIfExists('has_dates_contractuelles', $data ?? [], null);
        $this->setIfExists('id_formateur', $data ?? [], null);
        $this->setIfExists('id_entreprise_formateur', $data ?? [], null);
        $this->setIfExists('id_etape_process', $data ?? [], null);
        $this->setIfExists('id_responsable', $data ?? [], null);
        $this->setIfExists('id_commercial', $data ?? [], null);
        $this->setIfExists('nb_participants_min', $data ?? [], null);
        $this->setIfExists('nb_participants_max', $data ?? [], null);
        $this->setIfExists('mode_pricing', $data ?? [], null);
        $this->setIfExists('tva_formation', $data ?? [], null);
        $this->setIfExists('tva_hors_formation', $data ?? [], null);
        $this->setIfExists('tva_frais', $data ?? [], null);
        $this->setIfExists('include_in_bpf', $data ?? [], null);
        $this->setIfExists('objectif', $data ?? [], null);
        $this->setIfExists('nature', $data ?? [], null);
        $this->setIfExists('categorie_module_id', $data ?? [], null);
        $this->setIfExists('intitule', $data ?? [], null);
        $this->setIfExists('intitule_court', $data ?? [], null);
        $this->setIfExists('color', $data ?? [], null);
        $this->setIfExists('esignature', $data ?? [], null);
        $this->setIfExists('remuneration_par_lmf', $data ?? [], null);
        $this->setIfExists('inscription_online', $data ?? [], null);
        $this->setIfExists('num_session_dpc', $data ?? [], null);
        $this->setIfExists('commentaires', $data ?? [], null);
        $this->setIfExists('commentaires_agenda', $data ?? [], null);
        $this->setIfExists('automations', $data ?? [], null);
        $this->setIfExists('date_debut', $data ?? [], null);
        $this->setIfExists('date_fin', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('message_libre_exp', $data ?? [], null);
        $this->setIfExists('message_libre_exf', $data ?? [], null);
        $this->setIfExists('message_libre_exe', $data ?? [], null);
        $this->setIfExists('objectif_pedagogique', $data ?? [], null);
        $this->setIfExists('modalites_pedagogiques', $data ?? [], null);
        $this->setIfExists('moyens_supports_pedagogiques', $data ?? [], null);
        $this->setIfExists('public_vise', $data ?? [], null);
        $this->setIfExists('pre_requis', $data ?? [], null);
        $this->setIfExists('infos_admission', $data ?? [], null);
        $this->setIfExists('modalites_devaluation', $data ?? [], null);
        $this->setIfExists('accessibilite', $data ?? [], null);
        $this->setIfExists('profil_formateurs', $data ?? [], null);
        $this->setIfExists('id_externe_formateur', $data ?? [], null);
        $this->setIfExists('formateur_id_externe', $data ?? [], null);
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

        $allowedValues = self::getTvaFormationAllowableValues();
        if (!is_null($this->container['tva_formation']) && !in_array($this->container['tva_formation'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'tva_formation', must be one of '%s'",
                $this->container['tva_formation'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = self::getTvaHorsFormationAllowableValues();
        if (!is_null($this->container['tva_hors_formation']) && !in_array($this->container['tva_hors_formation'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'tva_hors_formation', must be one of '%s'",
                $this->container['tva_hors_formation'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = self::getTvaFraisAllowableValues();
        if (!is_null($this->container['tva_frais']) && !in_array($this->container['tva_frais'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'tva_frais', must be one of '%s'",
                $this->container['tva_frais'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = self::getObjectifAllowableValues();
        if (!is_null($this->container['objectif']) && !in_array($this->container['objectif'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'objectif', must be one of '%s'",
                $this->container['objectif'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = self::getNatureAllowableValues();
        if (!is_null($this->container['nature']) && !in_array($this->container['nature'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'nature', must be one of '%s'",
                $this->container['nature'],
                implode("', '", $allowedValues)
            );
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
     * @param string|null $type Non modifiable : refusé (422).
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
     * @param int|null $id_centre_de_formation Le centre de formation de l'ADF. Ne peut pas être vidé. Le changement est refusé dès qu'une facture a été émise sur l'ADF, ou si un module (y compris dans un module composé), une entreprise, un participant ou la salle de l'ADF n'est pas accessible dans le nouveau centre. Un participant hors centre se corrige en rattachant son entreprise au nouveau centre. Un changement de centre supprime les emails programmés par les automatismes, puis réévalue ces derniers.
     *
     * @return $this
     */
    public function setIdCentreDeFormation(?int $id_centre_de_formation): static
    {
        if (is_null($id_centre_de_formation)) {
            array_push($this->openAPINullablesSetToNull, 'id_centre_de_formation');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_centre_de_formation', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id_centre_de_formation'] = $id_centre_de_formation;

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
     * @param string|null $id_externe Identifiant externe libre (synchronisation avec un système tiers). Max : 36 caractères.
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
     * @param string|null $numero_complet Le numéro affiché de l'ADF. Incompatible avec `numero`. Max : 50 caractères.
     *
     * @return $this
     */
    public function setNumeroComplet(?string $numero_complet): static
    {
        if (is_null($numero_complet)) {
            array_push($this->openAPINullablesSetToNull, 'numero_complet');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('numero_complet', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['numero_complet'] = $numero_complet;

        return $this;
    }

    /**
     * Gets numero
     *
     * @return int|null
     */
    public function getNumero(): ?int
    {
        return $this->container['numero'];
    }

    /**
     * Sets numero
     *
     * @param int|null $numero Le numéro interne (entier > 0). Incompatible avec `numero_complet`. Min : 1. Max : 2147483647.
     *
     * @return $this
     */
    public function setNumero(?int $numero): static
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
     * @param int|null $id_entreprise L'entreprise cliente : obligatoire en INTRA et hors formation, où elle ne peut pas être vidée, et refusée en INTER. Doit être accessible dans le centre de formation de l'ADF. Si l'ADF a des participants inscrits, seule une entreprise du même groupe est acceptée. Sans `id_contact` dans la même requête, un contact qui n'appartient pas à la nouvelle entreprise est retiré de l'ADF, et l'ancienne entreprise est détachée si elle n'a plus de participant inscrit. Peut être désignée autrement par `entreprise_raison_sociale`, `entreprise_id_externe` ou `entreprise_siret`.
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
     * Gets entreprise_raison_sociale
     *
     * @return string|null
     */
    public function getEntrepriseRaisonSociale(): ?string
    {
        return $this->container['entreprise_raison_sociale'];
    }

    /**
     * Sets entreprise_raison_sociale
     *
     * @param string|null $entreprise_raison_sociale Désigne l'entreprise par sa raison sociale exacte ; si plusieurs entreprises la portent, la première est retenue. Max : 191 caractères.
     *
     * @return $this
     */
    public function setEntrepriseRaisonSociale(?string $entreprise_raison_sociale): static
    {
        if (is_null($entreprise_raison_sociale)) {
            array_push($this->openAPINullablesSetToNull, 'entreprise_raison_sociale');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('entreprise_raison_sociale', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['entreprise_raison_sociale'] = $entreprise_raison_sociale;

        return $this;
    }

    /**
     * Gets entreprise_id_externe
     *
     * @return string|null
     */
    public function getEntrepriseIdExterne(): ?string
    {
        return $this->container['entreprise_id_externe'];
    }

    /**
     * Sets entreprise_id_externe
     *
     * @param string|null $entreprise_id_externe Désigne l'entreprise par son identifiant externe exact. Alias V1 : `id_externe_entreprise`. Max : 36 caractères.
     *
     * @return $this
     */
    public function setEntrepriseIdExterne(?string $entreprise_id_externe): static
    {
        if (is_null($entreprise_id_externe)) {
            array_push($this->openAPINullablesSetToNull, 'entreprise_id_externe');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('entreprise_id_externe', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['entreprise_id_externe'] = $entreprise_id_externe;

        return $this;
    }

    /**
     * Gets entreprise_siret
     *
     * @return string|null
     */
    public function getEntrepriseSiret(): ?string
    {
        return $this->container['entreprise_siret'];
    }

    /**
     * Sets entreprise_siret
     *
     * @param string|null $entreprise_siret Désigne l'entreprise par son SIRET exact ; si plusieurs entreprises le portent, la première est retenue. Max : 30 caractères.
     *
     * @return $this
     */
    public function setEntrepriseSiret(?string $entreprise_siret): static
    {
        if (is_null($entreprise_siret)) {
            array_push($this->openAPINullablesSetToNull, 'entreprise_siret');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('entreprise_siret', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['entreprise_siret'] = $entreprise_siret;

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
     * @param int|null $id_contact Le contact de l'entreprise cliente. Refusé en INTER, s'il n'appartient pas à l'entreprise de l'ADF ou s'il est désactivé. En INTRA, il devient aussi l'interlocuteur de l'entreprise cliente, qui reçoit les emails côté entreprise.
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
     * Gets salle_client
     *
     * @return string|null
     */
    public function getSalleClient(): ?string
    {
        return $this->container['salle_client'];
    }

    /**
     * Sets salle_client
     *
     * @param string|null $salle_client Réservé à la création : refusé (422).
     *
     * @return $this
     */
    public function setSalleClient(?string $salle_client): static
    {
        if (is_null($salle_client)) {
            throw new InvalidArgumentException('non-nullable salle_client cannot be null');
        }
        $this->container['salle_client'] = $salle_client;

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
     * @param int|null $id_salle_de_formation La salle de formation. Refusée si elle n'est pas accessible dans le centre de formation de l'ADF, si elle est désactivée, ou avec `salle_client`.
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
     * Gets id_module
     *
     * @return int|null
     */
    public function getIdModule(): ?int
    {
        return $this->container['id_module'];
    }

    /**
     * Sets id_module
     *
     * @param int|null $id_module Le module à ajouter à l'ADF. Refusé s'il est désactivé ou s'il n'est pas accessible dans le centre de formation de l'ADF. Voir la rubrique « Ajouter un module ».
     *
     * @return $this
     */
    public function setIdModule(?int $id_module): static
    {
        if (is_null($id_module)) {
            array_push($this->openAPINullablesSetToNull, 'id_module');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_module', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id_module'] = $id_module;

        return $this;
    }

    /**
     * Gets prix
     *
     * @return float|null
     */
    public function getPrix(): ?float
    {
        return $this->container['prix'];
    }

    /**
     * Sets prix
     *
     * @param float|null $prix Le prix du module ajouté, à la place du prix du module. Refusé sans `id_module`. Min : 0. Max : 9999999999.
     *
     * @return $this
     */
    public function setPrix(?float $prix): static
    {
        if (is_null($prix)) {
            array_push($this->openAPINullablesSetToNull, 'prix');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('prix', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['prix'] = $prix;

        return $this;
    }

    /**
     * Gets duree
     *
     * @return float|null
     */
    public function getDuree(): ?float
    {
        return $this->container['duree'];
    }

    /**
     * Sets duree
     *
     * @param float|null $duree La durée du module ajouté, en heures. Refusée sans `id_module`. Prise en compte seulement si le module ne génère pas de séances (e-learning asynchrone, module hors formation, module sans planning type) ; sinon, la durée est calculée à partir des séances. Min : 0. Max : 999999.
     *
     * @return $this
     */
    public function setDuree(?float $duree): static
    {
        if (is_null($duree)) {
            array_push($this->openAPINullablesSetToNull, 'duree');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('duree', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['duree'] = $duree;

        return $this;
    }

    /**
     * Gets date_acces_debut
     *
     * @return string|null
     */
    public function getDateAccesDebut(): ?string
    {
        return $this->container['date_acces_debut'];
    }

    /**
     * Sets date_acces_debut
     *
     * @param string|null $date_acces_debut Le début d'accès (`YYYY-MM-DD`), à envoyer avec `date_acces_fin`. Refusé sans `id_module` désignant un module e-learning asynchrone. Ce champ est requis lorsque <code>date_acces_fin</code> est présent. Doit être une date valide au format <code>YYYY-MM-DD</code>.
     *
     * @return $this
     */
    public function setDateAccesDebut(?string $date_acces_debut): static
    {
        if (is_null($date_acces_debut)) {
            array_push($this->openAPINullablesSetToNull, 'date_acces_debut');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date_acces_debut', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['date_acces_debut'] = $date_acces_debut;

        return $this;
    }

    /**
     * Gets date_acces_fin
     *
     * @return string|null
     */
    public function getDateAccesFin(): ?string
    {
        return $this->container['date_acces_fin'];
    }

    /**
     * Sets date_acces_fin
     *
     * @param string|null $date_acces_fin La fin d'accès (`YYYY-MM-DD`), à envoyer avec `date_acces_debut` et postérieure ou égale à celle-ci. Refusée sans `id_module` désignant un module e-learning asynchrone. Ce champ est requis lorsque <code>date_acces_debut</code> est présent. Doit être une date valide au format <code>YYYY-MM-DD</code>.
     *
     * @return $this
     */
    public function setDateAccesFin(?string $date_acces_fin): static
    {
        if (is_null($date_acces_fin)) {
            array_push($this->openAPINullablesSetToNull, 'date_acces_fin');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date_acces_fin', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['date_acces_fin'] = $date_acces_fin;

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
     * @param bool|null $has_dates_contractuelles Le mode figé (dates contractuelles). Modifiable seul, sans module ; les dates de l'ADF sont alors recalculées.
     *
     * @return $this
     */
    public function setHasDatesContractuelles(?bool $has_dates_contractuelles): static
    {
        if (is_null($has_dates_contractuelles)) {
            array_push($this->openAPINullablesSetToNull, 'has_dates_contractuelles');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('has_dates_contractuelles', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['has_dates_contractuelles'] = $has_dates_contractuelles;

        return $this;
    }

    /**
     * Gets id_formateur
     *
     * @return string|null
     */
    public function getIdFormateur(): ?string
    {
        return $this->container['id_formateur'];
    }

    /**
     * Sets id_formateur
     *
     * @param string|null $id_formateur Réservé à la création : refusé (422).
     *
     * @return $this
     */
    public function setIdFormateur(?string $id_formateur): static
    {
        if (is_null($id_formateur)) {
            throw new InvalidArgumentException('non-nullable id_formateur cannot be null');
        }
        $this->container['id_formateur'] = $id_formateur;

        return $this;
    }

    /**
     * Gets id_entreprise_formateur
     *
     * @return string|null
     */
    public function getIdEntrepriseFormateur(): ?string
    {
        return $this->container['id_entreprise_formateur'];
    }

    /**
     * Sets id_entreprise_formateur
     *
     * @param string|null $id_entreprise_formateur Réservé à la création : refusé (422).
     *
     * @return $this
     */
    public function setIdEntrepriseFormateur(?string $id_entreprise_formateur): static
    {
        if (is_null($id_entreprise_formateur)) {
            throw new InvalidArgumentException('non-nullable id_entreprise_formateur cannot be null');
        }
        $this->container['id_entreprise_formateur'] = $id_entreprise_formateur;

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
     * @param int|null $id_etape_process L'étape du process. Doit être compatible avec le `type` de l'ADF ; une ADF hors formation prend les étapes INTRA. Ne peut pas être vidée.
     *
     * @return $this
     */
    public function setIdEtapeProcess(?int $id_etape_process): static
    {
        if (is_null($id_etape_process)) {
            array_push($this->openAPINullablesSetToNull, 'id_etape_process');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_etape_process', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id_etape_process'] = $id_etape_process;

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
     * @param int|null $id_responsable L'administrateur responsable. Refusé s'il est désactivé.
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
     * @param int|null $id_commercial L'administrateur commercial. Refusé s'il est désactivé.
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
     * Gets nb_participants_min
     *
     * @return int|null
     */
    public function getNbParticipantsMin(): ?int
    {
        return $this->container['nb_participants_min'];
    }

    /**
     * Sets nb_participants_min
     *
     * @param int|null $nb_participants_min Le nombre minimum de participants (entier > 0). Refusé sur une ADF hors formation. Min : 1. Max : 2147483647.
     *
     * @return $this
     */
    public function setNbParticipantsMin(?int $nb_participants_min): static
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
     * @return int|null
     */
    public function getNbParticipantsMax(): ?int
    {
        return $this->container['nb_participants_max'];
    }

    /**
     * Sets nb_participants_max
     *
     * @param int|null $nb_participants_max Le nombre maximum de participants (entier > 0). Refusé sur une ADF hors formation. Min : 1. Max : 2147483647.
     *
     * @return $this
     */
    public function setNbParticipantsMax(?int $nb_participants_max): static
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
     * @param string|null $mode_pricing Non modifiable : refusé (422).
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
     * Gets tva_formation
     *
     * @return string|null
     */
    public function getTvaFormation(): ?string
    {
        return $this->container['tva_formation'];
    }

    /**
     * Sets tva_formation
     *
     * @param string|null $tva_formation Le taux de TVA formation (clé de la configuration des taux de TVA).
     *
     * @return $this
     */
    public function setTvaFormation(?string $tva_formation): static
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
        $allowedValues = self::getTvaFormationAllowableValues();
        if (!is_null($tva_formation) && !in_array($tva_formation, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'tva_formation', must be one of '%s'",
                    $tva_formation,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tva_formation'] = $tva_formation;

        return $this;
    }

    /**
     * Gets tva_hors_formation
     *
     * @return string|null
     */
    public function getTvaHorsFormation(): ?string
    {
        return $this->container['tva_hors_formation'];
    }

    /**
     * Sets tva_hors_formation
     *
     * @param string|null $tva_hors_formation Le taux de TVA hors formation.
     *
     * @return $this
     */
    public function setTvaHorsFormation(?string $tva_hors_formation): static
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
        $allowedValues = self::getTvaHorsFormationAllowableValues();
        if (!is_null($tva_hors_formation) && !in_array($tva_hors_formation, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'tva_hors_formation', must be one of '%s'",
                    $tva_hors_formation,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tva_hors_formation'] = $tva_hors_formation;

        return $this;
    }

    /**
     * Gets tva_frais
     *
     * @return string|null
     */
    public function getTvaFrais(): ?string
    {
        return $this->container['tva_frais'];
    }

    /**
     * Sets tva_frais
     *
     * @param string|null $tva_frais Le taux de TVA frais.
     *
     * @return $this
     */
    public function setTvaFrais(?string $tva_frais): static
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
        $allowedValues = self::getTvaFraisAllowableValues();
        if (!is_null($tva_frais) && !in_array($tva_frais, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'tva_frais', must be one of '%s'",
                    $tva_frais,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tva_frais'] = $tva_frais;

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
     * @param bool|null $include_in_bpf Inclure l'ADF dans le BPF.
     *
     * @return $this
     */
    public function setIncludeInBpf(?bool $include_in_bpf): static
    {
        if (is_null($include_in_bpf)) {
            array_push($this->openAPINullablesSetToNull, 'include_in_bpf');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('include_in_bpf', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['include_in_bpf'] = $include_in_bpf;

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
     * @param string|null $objectif L'objectif. Refusé sur une ADF hors formation.
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
        $allowedValues = self::getObjectifAllowableValues();
        if (!is_null($objectif) && !in_array($objectif, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'objectif', must be one of '%s'",
                    $objectif,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['objectif'] = $objectif;

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
     * @param string|null $nature La nature. Refusée sur une ADF hors formation.
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
        $allowedValues = self::getNatureAllowableValues();
        if (!is_null($nature) && !in_array($nature, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'nature', must be one of '%s'",
                    $nature,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['nature'] = $nature;

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
     * @param int|null $categorie_module_id La catégorie de module.
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
     * @param string|null $intitule L'intitulé. Ne peut pas être vidé. Max : 255 caractères.
     *
     * @return $this
     */
    public function setIntitule(?string $intitule): static
    {
        if (is_null($intitule)) {
            array_push($this->openAPINullablesSetToNull, 'intitule');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('intitule', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param string|null $intitule_court L'intitulé court. Max : 255 caractères.
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
     * @param string|null $color La couleur, en hexadécimal de 3 ou 6 caractères, avec ou sans `#` (retiré à l'enregistrement). Doit respecter l'expression régulière <code>/^([0-9a-fA-F]{3}|[0-9a-fA-F]{6})$/</code>. Max : 6 caractères.
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
     * @param bool|null $esignature Émargement électronique.
     *
     * @return $this
     */
    public function setEsignature(?bool $esignature): static
    {
        if (is_null($esignature)) {
            array_push($this->openAPINullablesSetToNull, 'esignature');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('esignature', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param bool|null $remuneration_par_lmf Rémunération formateur par LMF.
     *
     * @return $this
     */
    public function setRemunerationParLmf(?bool $remuneration_par_lmf): static
    {
        if (is_null($remuneration_par_lmf)) {
            array_push($this->openAPINullablesSetToNull, 'remuneration_par_lmf');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('remuneration_par_lmf', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['remuneration_par_lmf'] = $remuneration_par_lmf;

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
     * @param bool|null $inscription_online Catalogue Public (+EDOF) : publier en ligne et accepter des inscriptions publiques.
     *
     * @return $this
     */
    public function setInscriptionOnline(?bool $inscription_online): static
    {
        if (is_null($inscription_online)) {
            array_push($this->openAPINullablesSetToNull, 'inscription_online');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('inscription_online', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['inscription_online'] = $inscription_online;

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
     * @param string|null $num_session_dpc Le numéro de session DPC (exploitable uniquement si la configuration OGDPC est activée). Max : 191 caractères.
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
     * @param string|null $commentaires Les commentaires internes, en texte brut : les balises HTML ne sont pas interprétées. Max : 65535 caractères.
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
     * @param string|null $commentaires_agenda Les commentaires affichés dans l'agenda, en texte brut : les balises HTML ne sont pas interprétées. Max : 65535 caractères.
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
     * Gets automations
     *
     * @return int[]|null
     */
    public function getAutomations(): ?array
    {
        return $this->container['automations'];
    }

    /**
     * Sets automations
     *
     * @param int[]|null $automations 
     *
     * @return $this
     */
    public function setAutomations(?array $automations): static
    {
        if (is_null($automations)) {
            throw new InvalidArgumentException('non-nullable automations cannot be null');
        }
        $this->container['automations'] = $automations;

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
     * @param string|null $date_debut Le début du module ajouté (`YYYY-MM-DD` ou `YYYY-MM-DD HH:MM:SS`). Refusé sans `id_module` dans la même requête, obligatoire avec, aux conditions de la création.
     *
     * @return $this
     */
    public function setDateDebut(?string $date_debut): static
    {
        if (is_null($date_debut)) {
            throw new InvalidArgumentException('non-nullable date_debut cannot be null');
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
     * @param string|null $date_fin La fin du module ajouté (`YYYY-MM-DD` ou `YYYY-MM-DD HH:MM:SS`), postérieure ou égale à `date_debut`. Refusée sans `id_module` dans la même requête, facultative avec, sauf exceptions de la création.
     *
     * @return $this
     */
    public function setDateFin(?string $date_fin): static
    {
        if (is_null($date_fin)) {
            throw new InvalidArgumentException('non-nullable date_fin cannot be null');
        }
        $this->container['date_fin'] = $date_fin;

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
     * @param string|null $description La description (HTML). Max : 65535 caractères.
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
     * @param string|null $message_libre_exp Message à afficher pour cette ADF sur les Extranets Participants (HTML). Max : 65535 caractères.
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
     * @param string|null $message_libre_exf Message à afficher pour cette ADF sur les Extranets Formateurs (HTML). Max : 65535 caractères.
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
     * @param string|null $message_libre_exe Message à afficher pour cette ADF sur les Extranets Entreprises (HTML). Max : 65535 caractères.
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
     * @param string|null $objectif_pedagogique L'objectif pédagogique (HTML). Max : 65535 caractères.
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
     * @param string|null $modalites_pedagogiques Les modalités pédagogiques (HTML). Max : 65535 caractères.
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
     * @param string|null $moyens_supports_pedagogiques Les moyens et supports pédagogiques (HTML). Max : 65535 caractères.
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
     * @param string|null $public_vise Le public visé (HTML). Max : 65535 caractères.
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
     * @param string|null $pre_requis Les prérequis (HTML). Max : 65535 caractères.
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
     * @param string|null $infos_admission Les informations d'admission (HTML). Max : 65535 caractères.
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
     * @param string|null $modalites_devaluation Les modalités d'évaluation (HTML). Max : 65535 caractères.
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
     * @param string|null $accessibilite L'accessibilité (HTML). Max : 65535 caractères.
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
     * @param string|null $profil_formateurs Le profil des formateurs (HTML). Max : 65535 caractères.
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
     * Gets id_externe_formateur
     *
     * @return string|null
     */
    public function getIdExterneFormateur(): ?string
    {
        return $this->container['id_externe_formateur'];
    }

    /**
     * Sets id_externe_formateur
     *
     * @param string|null $id_externe_formateur Réservé à la création : refusé (422).
     *
     * @return $this
     */
    public function setIdExterneFormateur(?string $id_externe_formateur): static
    {
        if (is_null($id_externe_formateur)) {
            throw new InvalidArgumentException('non-nullable id_externe_formateur cannot be null');
        }
        $this->container['id_externe_formateur'] = $id_externe_formateur;

        return $this;
    }

    /**
     * Gets formateur_id_externe
     *
     * @return string|null
     */
    public function getFormateurIdExterne(): ?string
    {
        return $this->container['formateur_id_externe'];
    }

    /**
     * Sets formateur_id_externe
     *
     * @param string|null $formateur_id_externe 
     *
     * @return $this
     */
    public function setFormateurIdExterne(?string $formateur_id_externe): static
    {
        if (is_null($formateur_id_externe)) {
            throw new InvalidArgumentException('non-nullable formateur_id_externe cannot be null');
        }
        $this->container['formateur_id_externe'] = $formateur_id_externe;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param string $offset Offset
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
     * @param string $offset Offset
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
     * @param string|null $offset Offset
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
     * @param string $offset Offset
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


