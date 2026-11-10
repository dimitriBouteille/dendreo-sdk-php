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
 * EntrepriseFilter Class Doc Comment
 *
 * Generated from the Dendreo OpenAPI specification, do not edit manually.
 *
 * @package  Dbout\DendreoSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class EntrepriseFilter implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'EntrepriseFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'trashed' => 'string',
        'type' => 'string',
        'id' => 'int[]',
        'particulier' => 'string',
        'entreprise_parente_id' => 'int[]',
        'numero' => 'string',
        'numero_complet' => 'string',
        'numero_perso' => 'string',
        'numero_compte_client' => 'string',
        'numero_compte_client_auxiliaire' => 'string',
        'numero_compte_fournisseur' => 'string',
        'numero_compte_fournisseur_auxiliaire' => 'string',
        'numero_comptable_adf' => 'string',
        'numero_compte_charge_fp_formation' => 'string',
        'client_interne' => 'string',
        'legal_identifier' => 'string',
        'num_tva_intra' => 'string',
        'num_tva_intra_auto' => 'string',
        'raison_sociale' => 'string',
        'nom' => 'string',
        'prenom' => 'string',
        'appellation' => 'string',
        'sigle' => 'string',
        'statut_juridique' => 'string',
        'statut_bpf_participants_entreprise' => 'string',
        'id_code_naf' => 'string',
        'telephone' => 'string',
        'fax' => 'string',
        'site_internet' => 'string',
        'email_standard' => 'string',
        'adresse' => 'string',
        'code_postal' => 'string',
        'ville' => 'string',
        'pays_alpha2' => 'string',
        'facturation_raison_sociale' => 'string',
        'facturation_adresse' => 'string',
        'facturation_code_postal' => 'string',
        'facturation_ville' => 'string',
        'facturation_pays_alpha2' => 'string',
        'id_opca' => 'int[]',
        'id_opca_interlocuteur' => 'int[]',
        'mode_financement_par_defaut' => 'string',
        'nb_employes' => 'string',
        'enjeu' => 'string',
        'id_administrateur' => 'int[]',
        'client' => 'string',
        'fournisseur' => 'string',
        'id_contact' => 'int[]',
        'id_contact_secondaire' => 'int[]',
        'id_contact_facturation' => 'int[]',
        'commentaires' => 'string',
        'post_it_commercial' => 'string',
        'id_externe' => 'string',
        'moyen_paiement_par_defaut' => 'string',
        'delai_paiement' => 'string',
        'tva_formation' => 'string',
        'tva_frais' => 'string',
        'tva_hors_formation' => 'string',
        'global_visible' => 'string',
        'infos_adf' => 'string',
        'formateurs_mode_remu' => 'string',
        'message_extranet' => 'string',
        'industrie' => 'string',
        'category_id' => 'string',
        'has_chorus_pro_invoices' => 'string',
        'reference_acheteur' => 'string',
        'auto_validate_inscriptions' => 'string',
        'financeur_type' => 'string[]',
        'financeur_id' => 'int[]',
        'created_at' => 'string',
        'updated_at' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'trashed' => null,
        'type' => null,
        'id' => null,
        'particulier' => null,
        'entreprise_parente_id' => null,
        'numero' => null,
        'numero_complet' => null,
        'numero_perso' => null,
        'numero_compte_client' => null,
        'numero_compte_client_auxiliaire' => null,
        'numero_compte_fournisseur' => null,
        'numero_compte_fournisseur_auxiliaire' => null,
        'numero_comptable_adf' => null,
        'numero_compte_charge_fp_formation' => null,
        'client_interne' => null,
        'legal_identifier' => null,
        'num_tva_intra' => null,
        'num_tva_intra_auto' => null,
        'raison_sociale' => null,
        'nom' => null,
        'prenom' => null,
        'appellation' => null,
        'sigle' => null,
        'statut_juridique' => null,
        'statut_bpf_participants_entreprise' => null,
        'id_code_naf' => null,
        'telephone' => null,
        'fax' => null,
        'site_internet' => null,
        'email_standard' => null,
        'adresse' => null,
        'code_postal' => null,
        'ville' => null,
        'pays_alpha2' => null,
        'facturation_raison_sociale' => null,
        'facturation_adresse' => null,
        'facturation_code_postal' => null,
        'facturation_ville' => null,
        'facturation_pays_alpha2' => null,
        'id_opca' => null,
        'id_opca_interlocuteur' => null,
        'mode_financement_par_defaut' => null,
        'nb_employes' => null,
        'enjeu' => null,
        'id_administrateur' => null,
        'client' => null,
        'fournisseur' => null,
        'id_contact' => null,
        'id_contact_secondaire' => null,
        'id_contact_facturation' => null,
        'commentaires' => null,
        'post_it_commercial' => null,
        'id_externe' => null,
        'moyen_paiement_par_defaut' => null,
        'delai_paiement' => null,
        'tva_formation' => null,
        'tva_frais' => null,
        'tva_hors_formation' => null,
        'global_visible' => null,
        'infos_adf' => null,
        'formateurs_mode_remu' => null,
        'message_extranet' => null,
        'industrie' => null,
        'category_id' => null,
        'has_chorus_pro_invoices' => null,
        'reference_acheteur' => null,
        'auto_validate_inscriptions' => null,
        'financeur_type' => null,
        'financeur_id' => null,
        'created_at' => null,
        'updated_at' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'trashed' => false,
        'type' => false,
        'id' => false,
        'particulier' => false,
        'entreprise_parente_id' => false,
        'numero' => false,
        'numero_complet' => false,
        'numero_perso' => false,
        'numero_compte_client' => false,
        'numero_compte_client_auxiliaire' => false,
        'numero_compte_fournisseur' => false,
        'numero_compte_fournisseur_auxiliaire' => false,
        'numero_comptable_adf' => false,
        'numero_compte_charge_fp_formation' => false,
        'client_interne' => false,
        'legal_identifier' => false,
        'num_tva_intra' => false,
        'num_tva_intra_auto' => false,
        'raison_sociale' => false,
        'nom' => false,
        'prenom' => false,
        'appellation' => false,
        'sigle' => false,
        'statut_juridique' => false,
        'statut_bpf_participants_entreprise' => false,
        'id_code_naf' => false,
        'telephone' => false,
        'fax' => false,
        'site_internet' => false,
        'email_standard' => false,
        'adresse' => false,
        'code_postal' => false,
        'ville' => false,
        'pays_alpha2' => false,
        'facturation_raison_sociale' => false,
        'facturation_adresse' => false,
        'facturation_code_postal' => false,
        'facturation_ville' => false,
        'facturation_pays_alpha2' => false,
        'id_opca' => false,
        'id_opca_interlocuteur' => false,
        'mode_financement_par_defaut' => false,
        'nb_employes' => false,
        'enjeu' => false,
        'id_administrateur' => false,
        'client' => false,
        'fournisseur' => false,
        'id_contact' => false,
        'id_contact_secondaire' => false,
        'id_contact_facturation' => false,
        'commentaires' => false,
        'post_it_commercial' => false,
        'id_externe' => false,
        'moyen_paiement_par_defaut' => false,
        'delai_paiement' => false,
        'tva_formation' => false,
        'tva_frais' => false,
        'tva_hors_formation' => false,
        'global_visible' => false,
        'infos_adf' => false,
        'formateurs_mode_remu' => false,
        'message_extranet' => false,
        'industrie' => false,
        'category_id' => false,
        'has_chorus_pro_invoices' => false,
        'reference_acheteur' => false,
        'auto_validate_inscriptions' => false,
        'financeur_type' => false,
        'financeur_id' => false,
        'created_at' => false,
        'updated_at' => false
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
        'trashed' => 'trashed',
        'type' => 'type',
        'id' => 'id',
        'particulier' => 'particulier',
        'entreprise_parente_id' => 'entreprise_parente_id',
        'numero' => 'numero',
        'numero_complet' => 'numero_complet',
        'numero_perso' => 'numero_perso',
        'numero_compte_client' => 'numero_compte_client',
        'numero_compte_client_auxiliaire' => 'numero_compte_client_auxiliaire',
        'numero_compte_fournisseur' => 'numero_compte_fournisseur',
        'numero_compte_fournisseur_auxiliaire' => 'numero_compte_fournisseur_auxiliaire',
        'numero_comptable_adf' => 'numero_comptable_adf',
        'numero_compte_charge_fp_formation' => 'numero_compte_charge_fp_formation',
        'client_interne' => 'client_interne',
        'legal_identifier' => 'legal_identifier',
        'num_tva_intra' => 'num_tva_intra',
        'num_tva_intra_auto' => 'num_tva_intra_auto',
        'raison_sociale' => 'raison_sociale',
        'nom' => 'nom',
        'prenom' => 'prenom',
        'appellation' => 'appellation',
        'sigle' => 'sigle',
        'statut_juridique' => 'statut_juridique',
        'statut_bpf_participants_entreprise' => 'statut_bpf_participants_entreprise',
        'id_code_naf' => 'id_code_naf',
        'telephone' => 'telephone',
        'fax' => 'fax',
        'site_internet' => 'site_internet',
        'email_standard' => 'email_standard',
        'adresse' => 'adresse',
        'code_postal' => 'code_postal',
        'ville' => 'ville',
        'pays_alpha2' => 'pays_alpha2',
        'facturation_raison_sociale' => 'facturation_raison_sociale',
        'facturation_adresse' => 'facturation_adresse',
        'facturation_code_postal' => 'facturation_code_postal',
        'facturation_ville' => 'facturation_ville',
        'facturation_pays_alpha2' => 'facturation_pays_alpha2',
        'id_opca' => 'id_opca',
        'id_opca_interlocuteur' => 'id_opca_interlocuteur',
        'mode_financement_par_defaut' => 'mode_financement_par_defaut',
        'nb_employes' => 'nb_employes',
        'enjeu' => 'enjeu',
        'id_administrateur' => 'id_administrateur',
        'client' => 'client',
        'fournisseur' => 'fournisseur',
        'id_contact' => 'id_contact',
        'id_contact_secondaire' => 'id_contact_secondaire',
        'id_contact_facturation' => 'id_contact_facturation',
        'commentaires' => 'commentaires',
        'post_it_commercial' => 'post_it_commercial',
        'id_externe' => 'id_externe',
        'moyen_paiement_par_defaut' => 'moyen_paiement_par_defaut',
        'delai_paiement' => 'delai_paiement',
        'tva_formation' => 'tva_formation',
        'tva_frais' => 'tva_frais',
        'tva_hors_formation' => 'tva_hors_formation',
        'global_visible' => 'global_visible',
        'infos_adf' => 'infos_adf',
        'formateurs_mode_remu' => 'formateurs_mode_remu',
        'message_extranet' => 'message_extranet',
        'industrie' => 'industrie',
        'category_id' => 'category_id',
        'has_chorus_pro_invoices' => 'has_chorus_pro_invoices',
        'reference_acheteur' => 'reference_acheteur',
        'auto_validate_inscriptions' => 'auto_validate_inscriptions',
        'financeur_type' => 'financeur_type',
        'financeur_id' => 'financeur_id',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'trashed' => 'setTrashed',
        'type' => 'setType',
        'id' => 'setId',
        'particulier' => 'setParticulier',
        'entreprise_parente_id' => 'setEntrepriseParenteId',
        'numero' => 'setNumero',
        'numero_complet' => 'setNumeroComplet',
        'numero_perso' => 'setNumeroPerso',
        'numero_compte_client' => 'setNumeroCompteClient',
        'numero_compte_client_auxiliaire' => 'setNumeroCompteClientAuxiliaire',
        'numero_compte_fournisseur' => 'setNumeroCompteFournisseur',
        'numero_compte_fournisseur_auxiliaire' => 'setNumeroCompteFournisseurAuxiliaire',
        'numero_comptable_adf' => 'setNumeroComptableAdf',
        'numero_compte_charge_fp_formation' => 'setNumeroCompteChargeFpFormation',
        'client_interne' => 'setClientInterne',
        'legal_identifier' => 'setLegalIdentifier',
        'num_tva_intra' => 'setNumTvaIntra',
        'num_tva_intra_auto' => 'setNumTvaIntraAuto',
        'raison_sociale' => 'setRaisonSociale',
        'nom' => 'setNom',
        'prenom' => 'setPrenom',
        'appellation' => 'setAppellation',
        'sigle' => 'setSigle',
        'statut_juridique' => 'setStatutJuridique',
        'statut_bpf_participants_entreprise' => 'setStatutBpfParticipantsEntreprise',
        'id_code_naf' => 'setIdCodeNaf',
        'telephone' => 'setTelephone',
        'fax' => 'setFax',
        'site_internet' => 'setSiteInternet',
        'email_standard' => 'setEmailStandard',
        'adresse' => 'setAdresse',
        'code_postal' => 'setCodePostal',
        'ville' => 'setVille',
        'pays_alpha2' => 'setPaysAlpha2',
        'facturation_raison_sociale' => 'setFacturationRaisonSociale',
        'facturation_adresse' => 'setFacturationAdresse',
        'facturation_code_postal' => 'setFacturationCodePostal',
        'facturation_ville' => 'setFacturationVille',
        'facturation_pays_alpha2' => 'setFacturationPaysAlpha2',
        'id_opca' => 'setIdOpca',
        'id_opca_interlocuteur' => 'setIdOpcaInterlocuteur',
        'mode_financement_par_defaut' => 'setModeFinancementParDefaut',
        'nb_employes' => 'setNbEmployes',
        'enjeu' => 'setEnjeu',
        'id_administrateur' => 'setIdAdministrateur',
        'client' => 'setClient',
        'fournisseur' => 'setFournisseur',
        'id_contact' => 'setIdContact',
        'id_contact_secondaire' => 'setIdContactSecondaire',
        'id_contact_facturation' => 'setIdContactFacturation',
        'commentaires' => 'setCommentaires',
        'post_it_commercial' => 'setPostItCommercial',
        'id_externe' => 'setIdExterne',
        'moyen_paiement_par_defaut' => 'setMoyenPaiementParDefaut',
        'delai_paiement' => 'setDelaiPaiement',
        'tva_formation' => 'setTvaFormation',
        'tva_frais' => 'setTvaFrais',
        'tva_hors_formation' => 'setTvaHorsFormation',
        'global_visible' => 'setGlobalVisible',
        'infos_adf' => 'setInfosAdf',
        'formateurs_mode_remu' => 'setFormateursModeRemu',
        'message_extranet' => 'setMessageExtranet',
        'industrie' => 'setIndustrie',
        'category_id' => 'setCategoryId',
        'has_chorus_pro_invoices' => 'setHasChorusProInvoices',
        'reference_acheteur' => 'setReferenceAcheteur',
        'auto_validate_inscriptions' => 'setAutoValidateInscriptions',
        'financeur_type' => 'setFinanceurType',
        'financeur_id' => 'setFinanceurId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'trashed' => 'getTrashed',
        'type' => 'getType',
        'id' => 'getId',
        'particulier' => 'getParticulier',
        'entreprise_parente_id' => 'getEntrepriseParenteId',
        'numero' => 'getNumero',
        'numero_complet' => 'getNumeroComplet',
        'numero_perso' => 'getNumeroPerso',
        'numero_compte_client' => 'getNumeroCompteClient',
        'numero_compte_client_auxiliaire' => 'getNumeroCompteClientAuxiliaire',
        'numero_compte_fournisseur' => 'getNumeroCompteFournisseur',
        'numero_compte_fournisseur_auxiliaire' => 'getNumeroCompteFournisseurAuxiliaire',
        'numero_comptable_adf' => 'getNumeroComptableAdf',
        'numero_compte_charge_fp_formation' => 'getNumeroCompteChargeFpFormation',
        'client_interne' => 'getClientInterne',
        'legal_identifier' => 'getLegalIdentifier',
        'num_tva_intra' => 'getNumTvaIntra',
        'num_tva_intra_auto' => 'getNumTvaIntraAuto',
        'raison_sociale' => 'getRaisonSociale',
        'nom' => 'getNom',
        'prenom' => 'getPrenom',
        'appellation' => 'getAppellation',
        'sigle' => 'getSigle',
        'statut_juridique' => 'getStatutJuridique',
        'statut_bpf_participants_entreprise' => 'getStatutBpfParticipantsEntreprise',
        'id_code_naf' => 'getIdCodeNaf',
        'telephone' => 'getTelephone',
        'fax' => 'getFax',
        'site_internet' => 'getSiteInternet',
        'email_standard' => 'getEmailStandard',
        'adresse' => 'getAdresse',
        'code_postal' => 'getCodePostal',
        'ville' => 'getVille',
        'pays_alpha2' => 'getPaysAlpha2',
        'facturation_raison_sociale' => 'getFacturationRaisonSociale',
        'facturation_adresse' => 'getFacturationAdresse',
        'facturation_code_postal' => 'getFacturationCodePostal',
        'facturation_ville' => 'getFacturationVille',
        'facturation_pays_alpha2' => 'getFacturationPaysAlpha2',
        'id_opca' => 'getIdOpca',
        'id_opca_interlocuteur' => 'getIdOpcaInterlocuteur',
        'mode_financement_par_defaut' => 'getModeFinancementParDefaut',
        'nb_employes' => 'getNbEmployes',
        'enjeu' => 'getEnjeu',
        'id_administrateur' => 'getIdAdministrateur',
        'client' => 'getClient',
        'fournisseur' => 'getFournisseur',
        'id_contact' => 'getIdContact',
        'id_contact_secondaire' => 'getIdContactSecondaire',
        'id_contact_facturation' => 'getIdContactFacturation',
        'commentaires' => 'getCommentaires',
        'post_it_commercial' => 'getPostItCommercial',
        'id_externe' => 'getIdExterne',
        'moyen_paiement_par_defaut' => 'getMoyenPaiementParDefaut',
        'delai_paiement' => 'getDelaiPaiement',
        'tva_formation' => 'getTvaFormation',
        'tva_frais' => 'getTvaFrais',
        'tva_hors_formation' => 'getTvaHorsFormation',
        'global_visible' => 'getGlobalVisible',
        'infos_adf' => 'getInfosAdf',
        'formateurs_mode_remu' => 'getFormateursModeRemu',
        'message_extranet' => 'getMessageExtranet',
        'industrie' => 'getIndustrie',
        'category_id' => 'getCategoryId',
        'has_chorus_pro_invoices' => 'getHasChorusProInvoices',
        'reference_acheteur' => 'getReferenceAcheteur',
        'auto_validate_inscriptions' => 'getAutoValidateInscriptions',
        'financeur_type' => 'getFinanceurType',
        'financeur_id' => 'getFinanceurId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
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

    public const TRASHED_WITH = 'with';
    public const TRASHED_ONLY = 'only';
    public const TYPE_CLIENTS = 'clients';
    public const TYPE_FOURNISSEURS = 'fournisseurs';
    public const TYPE_NONCLIENTS = 'nonclients';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public static function getTrashedAllowableValues()
    {
        return [
            self::TRASHED_WITH,
            self::TRASHED_ONLY,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public static function getTypeAllowableValues()
    {
        return [
            self::TYPE_CLIENTS,
            self::TYPE_FOURNISSEURS,
            self::TYPE_NONCLIENTS,
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
        $this->setIfExists('trashed', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('particulier', $data ?? [], null);
        $this->setIfExists('entreprise_parente_id', $data ?? [], null);
        $this->setIfExists('numero', $data ?? [], null);
        $this->setIfExists('numero_complet', $data ?? [], null);
        $this->setIfExists('numero_perso', $data ?? [], null);
        $this->setIfExists('numero_compte_client', $data ?? [], null);
        $this->setIfExists('numero_compte_client_auxiliaire', $data ?? [], null);
        $this->setIfExists('numero_compte_fournisseur', $data ?? [], null);
        $this->setIfExists('numero_compte_fournisseur_auxiliaire', $data ?? [], null);
        $this->setIfExists('numero_comptable_adf', $data ?? [], null);
        $this->setIfExists('numero_compte_charge_fp_formation', $data ?? [], null);
        $this->setIfExists('client_interne', $data ?? [], null);
        $this->setIfExists('legal_identifier', $data ?? [], null);
        $this->setIfExists('num_tva_intra', $data ?? [], null);
        $this->setIfExists('num_tva_intra_auto', $data ?? [], null);
        $this->setIfExists('raison_sociale', $data ?? [], null);
        $this->setIfExists('nom', $data ?? [], null);
        $this->setIfExists('prenom', $data ?? [], null);
        $this->setIfExists('appellation', $data ?? [], null);
        $this->setIfExists('sigle', $data ?? [], null);
        $this->setIfExists('statut_juridique', $data ?? [], null);
        $this->setIfExists('statut_bpf_participants_entreprise', $data ?? [], null);
        $this->setIfExists('id_code_naf', $data ?? [], null);
        $this->setIfExists('telephone', $data ?? [], null);
        $this->setIfExists('fax', $data ?? [], null);
        $this->setIfExists('site_internet', $data ?? [], null);
        $this->setIfExists('email_standard', $data ?? [], null);
        $this->setIfExists('adresse', $data ?? [], null);
        $this->setIfExists('code_postal', $data ?? [], null);
        $this->setIfExists('ville', $data ?? [], null);
        $this->setIfExists('pays_alpha2', $data ?? [], null);
        $this->setIfExists('facturation_raison_sociale', $data ?? [], null);
        $this->setIfExists('facturation_adresse', $data ?? [], null);
        $this->setIfExists('facturation_code_postal', $data ?? [], null);
        $this->setIfExists('facturation_ville', $data ?? [], null);
        $this->setIfExists('facturation_pays_alpha2', $data ?? [], null);
        $this->setIfExists('id_opca', $data ?? [], null);
        $this->setIfExists('id_opca_interlocuteur', $data ?? [], null);
        $this->setIfExists('mode_financement_par_defaut', $data ?? [], null);
        $this->setIfExists('nb_employes', $data ?? [], null);
        $this->setIfExists('enjeu', $data ?? [], null);
        $this->setIfExists('id_administrateur', $data ?? [], null);
        $this->setIfExists('client', $data ?? [], null);
        $this->setIfExists('fournisseur', $data ?? [], null);
        $this->setIfExists('id_contact', $data ?? [], null);
        $this->setIfExists('id_contact_secondaire', $data ?? [], null);
        $this->setIfExists('id_contact_facturation', $data ?? [], null);
        $this->setIfExists('commentaires', $data ?? [], null);
        $this->setIfExists('post_it_commercial', $data ?? [], null);
        $this->setIfExists('id_externe', $data ?? [], null);
        $this->setIfExists('moyen_paiement_par_defaut', $data ?? [], null);
        $this->setIfExists('delai_paiement', $data ?? [], null);
        $this->setIfExists('tva_formation', $data ?? [], null);
        $this->setIfExists('tva_frais', $data ?? [], null);
        $this->setIfExists('tva_hors_formation', $data ?? [], null);
        $this->setIfExists('global_visible', $data ?? [], null);
        $this->setIfExists('infos_adf', $data ?? [], null);
        $this->setIfExists('formateurs_mode_remu', $data ?? [], null);
        $this->setIfExists('message_extranet', $data ?? [], null);
        $this->setIfExists('industrie', $data ?? [], null);
        $this->setIfExists('category_id', $data ?? [], null);
        $this->setIfExists('has_chorus_pro_invoices', $data ?? [], null);
        $this->setIfExists('reference_acheteur', $data ?? [], null);
        $this->setIfExists('auto_validate_inscriptions', $data ?? [], null);
        $this->setIfExists('financeur_type', $data ?? [], null);
        $this->setIfExists('financeur_id', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
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

        $allowedValues = self::getTrashedAllowableValues();
        if (!is_null($this->container['trashed']) && !in_array($this->container['trashed'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'trashed', must be one of '%s'",
                $this->container['trashed'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = self::getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
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
     * Gets trashed
     *
     * @return string|null
     */
    public function getTrashed(): ?string
    {
        return $this->container['trashed'];
    }

    /**
     * Sets trashed
     *
     * @param string|null $trashed Sans ce filtre, les fiches supprimées sont exclues : `with` les inclut, `only` ne renvoie qu'elles.
     *
     * @return $this
     */
    public function setTrashed(?string $trashed): static
    {
        if (is_null($trashed)) {
            throw new InvalidArgumentException('non-nullable trashed cannot be null');
        }
        $allowedValues = self::getTrashedAllowableValues();
        if (!in_array($trashed, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'trashed', must be one of '%s'",
                    $trashed,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['trashed'] = $trashed;

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
     * @param string|null $type Clients, fournisseurs, ou ni l'un ni l'autre. Une autre valeur ne filtre rien.
     *
     * @return $this
     */
    public function setType(?string $type): static
    {
        if (is_null($type)) {
            throw new InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = self::getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int[]|null
     */
    public function getId(): ?array
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int[]|null $id Valeur exacte. Plusieurs valeurs séparées par des virgules.
     *
     * @return $this
     */
    public function setId(?array $id): static
    {
        if (is_null($id)) {
            throw new InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets particulier
     *
     * @return string|null
     */
    public function getParticulier(): ?string
    {
        return $this->container['particulier'];
    }

    /**
     * Sets particulier
     *
     * @param string|null $particulier Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setParticulier(?string $particulier): static
    {
        if (is_null($particulier)) {
            throw new InvalidArgumentException('non-nullable particulier cannot be null');
        }
        $this->container['particulier'] = $particulier;

        return $this;
    }

    /**
     * Gets entreprise_parente_id
     *
     * @return int[]|null
     */
    public function getEntrepriseParenteId(): ?array
    {
        return $this->container['entreprise_parente_id'];
    }

    /**
     * Sets entreprise_parente_id
     *
     * @param int[]|null $entreprise_parente_id Valeur exacte. Plusieurs valeurs séparées par des virgules.
     *
     * @return $this
     */
    public function setEntrepriseParenteId(?array $entreprise_parente_id): static
    {
        if (is_null($entreprise_parente_id)) {
            throw new InvalidArgumentException('non-nullable entreprise_parente_id cannot be null');
        }
        $this->container['entreprise_parente_id'] = $entreprise_parente_id;

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
     * @param string|null $numero Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setNumero(?string $numero): static
    {
        if (is_null($numero)) {
            throw new InvalidArgumentException('non-nullable numero cannot be null');
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
     * @param string|null $numero_complet Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
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
     * @param string|null $numero_perso Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setNumeroPerso(?string $numero_perso): static
    {
        if (is_null($numero_perso)) {
            throw new InvalidArgumentException('non-nullable numero_perso cannot be null');
        }
        $this->container['numero_perso'] = $numero_perso;

        return $this;
    }

    /**
     * Gets numero_compte_client
     *
     * @return string|null
     */
    public function getNumeroCompteClient(): ?string
    {
        return $this->container['numero_compte_client'];
    }

    /**
     * Sets numero_compte_client
     *
     * @param string|null $numero_compte_client Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setNumeroCompteClient(?string $numero_compte_client): static
    {
        if (is_null($numero_compte_client)) {
            throw new InvalidArgumentException('non-nullable numero_compte_client cannot be null');
        }
        $this->container['numero_compte_client'] = $numero_compte_client;

        return $this;
    }

    /**
     * Gets numero_compte_client_auxiliaire
     *
     * @return string|null
     */
    public function getNumeroCompteClientAuxiliaire(): ?string
    {
        return $this->container['numero_compte_client_auxiliaire'];
    }

    /**
     * Sets numero_compte_client_auxiliaire
     *
     * @param string|null $numero_compte_client_auxiliaire Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setNumeroCompteClientAuxiliaire(?string $numero_compte_client_auxiliaire): static
    {
        if (is_null($numero_compte_client_auxiliaire)) {
            throw new InvalidArgumentException('non-nullable numero_compte_client_auxiliaire cannot be null');
        }
        $this->container['numero_compte_client_auxiliaire'] = $numero_compte_client_auxiliaire;

        return $this;
    }

    /**
     * Gets numero_compte_fournisseur
     *
     * @return string|null
     */
    public function getNumeroCompteFournisseur(): ?string
    {
        return $this->container['numero_compte_fournisseur'];
    }

    /**
     * Sets numero_compte_fournisseur
     *
     * @param string|null $numero_compte_fournisseur Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setNumeroCompteFournisseur(?string $numero_compte_fournisseur): static
    {
        if (is_null($numero_compte_fournisseur)) {
            throw new InvalidArgumentException('non-nullable numero_compte_fournisseur cannot be null');
        }
        $this->container['numero_compte_fournisseur'] = $numero_compte_fournisseur;

        return $this;
    }

    /**
     * Gets numero_compte_fournisseur_auxiliaire
     *
     * @return string|null
     */
    public function getNumeroCompteFournisseurAuxiliaire(): ?string
    {
        return $this->container['numero_compte_fournisseur_auxiliaire'];
    }

    /**
     * Sets numero_compte_fournisseur_auxiliaire
     *
     * @param string|null $numero_compte_fournisseur_auxiliaire Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setNumeroCompteFournisseurAuxiliaire(?string $numero_compte_fournisseur_auxiliaire): static
    {
        if (is_null($numero_compte_fournisseur_auxiliaire)) {
            throw new InvalidArgumentException('non-nullable numero_compte_fournisseur_auxiliaire cannot be null');
        }
        $this->container['numero_compte_fournisseur_auxiliaire'] = $numero_compte_fournisseur_auxiliaire;

        return $this;
    }

    /**
     * Gets numero_comptable_adf
     *
     * @return string|null
     */
    public function getNumeroComptableAdf(): ?string
    {
        return $this->container['numero_comptable_adf'];
    }

    /**
     * Sets numero_comptable_adf
     *
     * @param string|null $numero_comptable_adf Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setNumeroComptableAdf(?string $numero_comptable_adf): static
    {
        if (is_null($numero_comptable_adf)) {
            throw new InvalidArgumentException('non-nullable numero_comptable_adf cannot be null');
        }
        $this->container['numero_comptable_adf'] = $numero_comptable_adf;

        return $this;
    }

    /**
     * Gets numero_compte_charge_fp_formation
     *
     * @return string|null
     */
    public function getNumeroCompteChargeFpFormation(): ?string
    {
        return $this->container['numero_compte_charge_fp_formation'];
    }

    /**
     * Sets numero_compte_charge_fp_formation
     *
     * @param string|null $numero_compte_charge_fp_formation Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setNumeroCompteChargeFpFormation(?string $numero_compte_charge_fp_formation): static
    {
        if (is_null($numero_compte_charge_fp_formation)) {
            throw new InvalidArgumentException('non-nullable numero_compte_charge_fp_formation cannot be null');
        }
        $this->container['numero_compte_charge_fp_formation'] = $numero_compte_charge_fp_formation;

        return $this;
    }

    /**
     * Gets client_interne
     *
     * @return string|null
     */
    public function getClientInterne(): ?string
    {
        return $this->container['client_interne'];
    }

    /**
     * Sets client_interne
     *
     * @param string|null $client_interne Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setClientInterne(?string $client_interne): static
    {
        if (is_null($client_interne)) {
            throw new InvalidArgumentException('non-nullable client_interne cannot be null');
        }
        $this->container['client_interne'] = $client_interne;

        return $this;
    }

    /**
     * Gets legal_identifier
     *
     * @return string|null
     */
    public function getLegalIdentifier(): ?string
    {
        return $this->container['legal_identifier'];
    }

    /**
     * Sets legal_identifier
     *
     * @param string|null $legal_identifier Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre. Numéro d'identification de l'entreprise.
     *
     * @return $this
     */
    public function setLegalIdentifier(?string $legal_identifier): static
    {
        if (is_null($legal_identifier)) {
            throw new InvalidArgumentException('non-nullable legal_identifier cannot be null');
        }
        $this->container['legal_identifier'] = $legal_identifier;

        return $this;
    }

    /**
     * Gets num_tva_intra
     *
     * @return string|null
     */
    public function getNumTvaIntra(): ?string
    {
        return $this->container['num_tva_intra'];
    }

    /**
     * Sets num_tva_intra
     *
     * @param string|null $num_tva_intra Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setNumTvaIntra(?string $num_tva_intra): static
    {
        if (is_null($num_tva_intra)) {
            throw new InvalidArgumentException('non-nullable num_tva_intra cannot be null');
        }
        $this->container['num_tva_intra'] = $num_tva_intra;

        return $this;
    }

    /**
     * Gets num_tva_intra_auto
     *
     * @return string|null
     */
    public function getNumTvaIntraAuto(): ?string
    {
        return $this->container['num_tva_intra_auto'];
    }

    /**
     * Sets num_tva_intra_auto
     *
     * @param string|null $num_tva_intra_auto Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setNumTvaIntraAuto(?string $num_tva_intra_auto): static
    {
        if (is_null($num_tva_intra_auto)) {
            throw new InvalidArgumentException('non-nullable num_tva_intra_auto cannot be null');
        }
        $this->container['num_tva_intra_auto'] = $num_tva_intra_auto;

        return $this;
    }

    /**
     * Gets raison_sociale
     *
     * @return string|null
     */
    public function getRaisonSociale(): ?string
    {
        return $this->container['raison_sociale'];
    }

    /**
     * Sets raison_sociale
     *
     * @param string|null $raison_sociale Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setRaisonSociale(?string $raison_sociale): static
    {
        if (is_null($raison_sociale)) {
            throw new InvalidArgumentException('non-nullable raison_sociale cannot be null');
        }
        $this->container['raison_sociale'] = $raison_sociale;

        return $this;
    }

    /**
     * Gets nom
     *
     * @return string|null
     */
    public function getNom(): ?string
    {
        return $this->container['nom'];
    }

    /**
     * Sets nom
     *
     * @param string|null $nom Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setNom(?string $nom): static
    {
        if (is_null($nom)) {
            throw new InvalidArgumentException('non-nullable nom cannot be null');
        }
        $this->container['nom'] = $nom;

        return $this;
    }

    /**
     * Gets prenom
     *
     * @return string|null
     */
    public function getPrenom(): ?string
    {
        return $this->container['prenom'];
    }

    /**
     * Sets prenom
     *
     * @param string|null $prenom Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setPrenom(?string $prenom): static
    {
        if (is_null($prenom)) {
            throw new InvalidArgumentException('non-nullable prenom cannot be null');
        }
        $this->container['prenom'] = $prenom;

        return $this;
    }

    /**
     * Gets appellation
     *
     * @return string|null
     */
    public function getAppellation(): ?string
    {
        return $this->container['appellation'];
    }

    /**
     * Sets appellation
     *
     * @param string|null $appellation Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setAppellation(?string $appellation): static
    {
        if (is_null($appellation)) {
            throw new InvalidArgumentException('non-nullable appellation cannot be null');
        }
        $this->container['appellation'] = $appellation;

        return $this;
    }

    /**
     * Gets sigle
     *
     * @return string|null
     */
    public function getSigle(): ?string
    {
        return $this->container['sigle'];
    }

    /**
     * Sets sigle
     *
     * @param string|null $sigle Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setSigle(?string $sigle): static
    {
        if (is_null($sigle)) {
            throw new InvalidArgumentException('non-nullable sigle cannot be null');
        }
        $this->container['sigle'] = $sigle;

        return $this;
    }

    /**
     * Gets statut_juridique
     *
     * @return string|null
     */
    public function getStatutJuridique(): ?string
    {
        return $this->container['statut_juridique'];
    }

    /**
     * Sets statut_juridique
     *
     * @param string|null $statut_juridique Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setStatutJuridique(?string $statut_juridique): static
    {
        if (is_null($statut_juridique)) {
            throw new InvalidArgumentException('non-nullable statut_juridique cannot be null');
        }
        $this->container['statut_juridique'] = $statut_juridique;

        return $this;
    }

    /**
     * Gets statut_bpf_participants_entreprise
     *
     * @return string|null
     */
    public function getStatutBpfParticipantsEntreprise(): ?string
    {
        return $this->container['statut_bpf_participants_entreprise'];
    }

    /**
     * Sets statut_bpf_participants_entreprise
     *
     * @param string|null $statut_bpf_participants_entreprise Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setStatutBpfParticipantsEntreprise(?string $statut_bpf_participants_entreprise): static
    {
        if (is_null($statut_bpf_participants_entreprise)) {
            throw new InvalidArgumentException('non-nullable statut_bpf_participants_entreprise cannot be null');
        }
        $this->container['statut_bpf_participants_entreprise'] = $statut_bpf_participants_entreprise;

        return $this;
    }

    /**
     * Gets id_code_naf
     *
     * @return string|null
     */
    public function getIdCodeNaf(): ?string
    {
        return $this->container['id_code_naf'];
    }

    /**
     * Sets id_code_naf
     *
     * @param string|null $id_code_naf Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setIdCodeNaf(?string $id_code_naf): static
    {
        if (is_null($id_code_naf)) {
            throw new InvalidArgumentException('non-nullable id_code_naf cannot be null');
        }
        $this->container['id_code_naf'] = $id_code_naf;

        return $this;
    }

    /**
     * Gets telephone
     *
     * @return string|null
     */
    public function getTelephone(): ?string
    {
        return $this->container['telephone'];
    }

    /**
     * Sets telephone
     *
     * @param string|null $telephone Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setTelephone(?string $telephone): static
    {
        if (is_null($telephone)) {
            throw new InvalidArgumentException('non-nullable telephone cannot be null');
        }
        $this->container['telephone'] = $telephone;

        return $this;
    }

    /**
     * Gets fax
     *
     * @return string|null
     */
    public function getFax(): ?string
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     *
     * @param string|null $fax Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setFax(?string $fax): static
    {
        if (is_null($fax)) {
            throw new InvalidArgumentException('non-nullable fax cannot be null');
        }
        $this->container['fax'] = $fax;

        return $this;
    }

    /**
     * Gets site_internet
     *
     * @return string|null
     */
    public function getSiteInternet(): ?string
    {
        return $this->container['site_internet'];
    }

    /**
     * Sets site_internet
     *
     * @param string|null $site_internet Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setSiteInternet(?string $site_internet): static
    {
        if (is_null($site_internet)) {
            throw new InvalidArgumentException('non-nullable site_internet cannot be null');
        }
        $this->container['site_internet'] = $site_internet;

        return $this;
    }

    /**
     * Gets email_standard
     *
     * @return string|null
     */
    public function getEmailStandard(): ?string
    {
        return $this->container['email_standard'];
    }

    /**
     * Sets email_standard
     *
     * @param string|null $email_standard Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setEmailStandard(?string $email_standard): static
    {
        if (is_null($email_standard)) {
            throw new InvalidArgumentException('non-nullable email_standard cannot be null');
        }
        $this->container['email_standard'] = $email_standard;

        return $this;
    }

    /**
     * Gets adresse
     *
     * @return string|null
     */
    public function getAdresse(): ?string
    {
        return $this->container['adresse'];
    }

    /**
     * Sets adresse
     *
     * @param string|null $adresse Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setAdresse(?string $adresse): static
    {
        if (is_null($adresse)) {
            throw new InvalidArgumentException('non-nullable adresse cannot be null');
        }
        $this->container['adresse'] = $adresse;

        return $this;
    }

    /**
     * Gets code_postal
     *
     * @return string|null
     */
    public function getCodePostal(): ?string
    {
        return $this->container['code_postal'];
    }

    /**
     * Sets code_postal
     *
     * @param string|null $code_postal Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setCodePostal(?string $code_postal): static
    {
        if (is_null($code_postal)) {
            throw new InvalidArgumentException('non-nullable code_postal cannot be null');
        }
        $this->container['code_postal'] = $code_postal;

        return $this;
    }

    /**
     * Gets ville
     *
     * @return string|null
     */
    public function getVille(): ?string
    {
        return $this->container['ville'];
    }

    /**
     * Sets ville
     *
     * @param string|null $ville Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setVille(?string $ville): static
    {
        if (is_null($ville)) {
            throw new InvalidArgumentException('non-nullable ville cannot be null');
        }
        $this->container['ville'] = $ville;

        return $this;
    }

    /**
     * Gets pays_alpha2
     *
     * @return string|null
     */
    public function getPaysAlpha2(): ?string
    {
        return $this->container['pays_alpha2'];
    }

    /**
     * Sets pays_alpha2
     *
     * @param string|null $pays_alpha2 Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setPaysAlpha2(?string $pays_alpha2): static
    {
        if (is_null($pays_alpha2)) {
            throw new InvalidArgumentException('non-nullable pays_alpha2 cannot be null');
        }
        $this->container['pays_alpha2'] = $pays_alpha2;

        return $this;
    }

    /**
     * Gets facturation_raison_sociale
     *
     * @return string|null
     */
    public function getFacturationRaisonSociale(): ?string
    {
        return $this->container['facturation_raison_sociale'];
    }

    /**
     * Sets facturation_raison_sociale
     *
     * @param string|null $facturation_raison_sociale Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setFacturationRaisonSociale(?string $facturation_raison_sociale): static
    {
        if (is_null($facturation_raison_sociale)) {
            throw new InvalidArgumentException('non-nullable facturation_raison_sociale cannot be null');
        }
        $this->container['facturation_raison_sociale'] = $facturation_raison_sociale;

        return $this;
    }

    /**
     * Gets facturation_adresse
     *
     * @return string|null
     */
    public function getFacturationAdresse(): ?string
    {
        return $this->container['facturation_adresse'];
    }

    /**
     * Sets facturation_adresse
     *
     * @param string|null $facturation_adresse Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setFacturationAdresse(?string $facturation_adresse): static
    {
        if (is_null($facturation_adresse)) {
            throw new InvalidArgumentException('non-nullable facturation_adresse cannot be null');
        }
        $this->container['facturation_adresse'] = $facturation_adresse;

        return $this;
    }

    /**
     * Gets facturation_code_postal
     *
     * @return string|null
     */
    public function getFacturationCodePostal(): ?string
    {
        return $this->container['facturation_code_postal'];
    }

    /**
     * Sets facturation_code_postal
     *
     * @param string|null $facturation_code_postal Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setFacturationCodePostal(?string $facturation_code_postal): static
    {
        if (is_null($facturation_code_postal)) {
            throw new InvalidArgumentException('non-nullable facturation_code_postal cannot be null');
        }
        $this->container['facturation_code_postal'] = $facturation_code_postal;

        return $this;
    }

    /**
     * Gets facturation_ville
     *
     * @return string|null
     */
    public function getFacturationVille(): ?string
    {
        return $this->container['facturation_ville'];
    }

    /**
     * Sets facturation_ville
     *
     * @param string|null $facturation_ville Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setFacturationVille(?string $facturation_ville): static
    {
        if (is_null($facturation_ville)) {
            throw new InvalidArgumentException('non-nullable facturation_ville cannot be null');
        }
        $this->container['facturation_ville'] = $facturation_ville;

        return $this;
    }

    /**
     * Gets facturation_pays_alpha2
     *
     * @return string|null
     */
    public function getFacturationPaysAlpha2(): ?string
    {
        return $this->container['facturation_pays_alpha2'];
    }

    /**
     * Sets facturation_pays_alpha2
     *
     * @param string|null $facturation_pays_alpha2 Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setFacturationPaysAlpha2(?string $facturation_pays_alpha2): static
    {
        if (is_null($facturation_pays_alpha2)) {
            throw new InvalidArgumentException('non-nullable facturation_pays_alpha2 cannot be null');
        }
        $this->container['facturation_pays_alpha2'] = $facturation_pays_alpha2;

        return $this;
    }

    /**
     * Gets id_opca
     *
     * @return int[]|null
     */
    public function getIdOpca(): ?array
    {
        return $this->container['id_opca'];
    }

    /**
     * Sets id_opca
     *
     * @param int[]|null $id_opca Valeur exacte. Plusieurs valeurs séparées par des virgules.
     *
     * @return $this
     */
    public function setIdOpca(?array $id_opca): static
    {
        if (is_null($id_opca)) {
            throw new InvalidArgumentException('non-nullable id_opca cannot be null');
        }
        $this->container['id_opca'] = $id_opca;

        return $this;
    }

    /**
     * Gets id_opca_interlocuteur
     *
     * @return int[]|null
     */
    public function getIdOpcaInterlocuteur(): ?array
    {
        return $this->container['id_opca_interlocuteur'];
    }

    /**
     * Sets id_opca_interlocuteur
     *
     * @param int[]|null $id_opca_interlocuteur Valeur exacte. Plusieurs valeurs séparées par des virgules.
     *
     * @return $this
     */
    public function setIdOpcaInterlocuteur(?array $id_opca_interlocuteur): static
    {
        if (is_null($id_opca_interlocuteur)) {
            throw new InvalidArgumentException('non-nullable id_opca_interlocuteur cannot be null');
        }
        $this->container['id_opca_interlocuteur'] = $id_opca_interlocuteur;

        return $this;
    }

    /**
     * Gets mode_financement_par_defaut
     *
     * @return string|null
     */
    public function getModeFinancementParDefaut(): ?string
    {
        return $this->container['mode_financement_par_defaut'];
    }

    /**
     * Sets mode_financement_par_defaut
     *
     * @param string|null $mode_financement_par_defaut Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setModeFinancementParDefaut(?string $mode_financement_par_defaut): static
    {
        if (is_null($mode_financement_par_defaut)) {
            throw new InvalidArgumentException('non-nullable mode_financement_par_defaut cannot be null');
        }
        $this->container['mode_financement_par_defaut'] = $mode_financement_par_defaut;

        return $this;
    }

    /**
     * Gets nb_employes
     *
     * @return string|null
     */
    public function getNbEmployes(): ?string
    {
        return $this->container['nb_employes'];
    }

    /**
     * Sets nb_employes
     *
     * @param string|null $nb_employes Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setNbEmployes(?string $nb_employes): static
    {
        if (is_null($nb_employes)) {
            throw new InvalidArgumentException('non-nullable nb_employes cannot be null');
        }
        $this->container['nb_employes'] = $nb_employes;

        return $this;
    }

    /**
     * Gets enjeu
     *
     * @return string|null
     */
    public function getEnjeu(): ?string
    {
        return $this->container['enjeu'];
    }

    /**
     * Sets enjeu
     *
     * @param string|null $enjeu Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setEnjeu(?string $enjeu): static
    {
        if (is_null($enjeu)) {
            throw new InvalidArgumentException('non-nullable enjeu cannot be null');
        }
        $this->container['enjeu'] = $enjeu;

        return $this;
    }

    /**
     * Gets id_administrateur
     *
     * @return int[]|null
     */
    public function getIdAdministrateur(): ?array
    {
        return $this->container['id_administrateur'];
    }

    /**
     * Sets id_administrateur
     *
     * @param int[]|null $id_administrateur Valeur exacte. Plusieurs valeurs séparées par des virgules.
     *
     * @return $this
     */
    public function setIdAdministrateur(?array $id_administrateur): static
    {
        if (is_null($id_administrateur)) {
            throw new InvalidArgumentException('non-nullable id_administrateur cannot be null');
        }
        $this->container['id_administrateur'] = $id_administrateur;

        return $this;
    }

    /**
     * Gets client
     *
     * @return string|null
     */
    public function getClient(): ?string
    {
        return $this->container['client'];
    }

    /**
     * Sets client
     *
     * @param string|null $client Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setClient(?string $client): static
    {
        if (is_null($client)) {
            throw new InvalidArgumentException('non-nullable client cannot be null');
        }
        $this->container['client'] = $client;

        return $this;
    }

    /**
     * Gets fournisseur
     *
     * @return string|null
     */
    public function getFournisseur(): ?string
    {
        return $this->container['fournisseur'];
    }

    /**
     * Sets fournisseur
     *
     * @param string|null $fournisseur Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setFournisseur(?string $fournisseur): static
    {
        if (is_null($fournisseur)) {
            throw new InvalidArgumentException('non-nullable fournisseur cannot be null');
        }
        $this->container['fournisseur'] = $fournisseur;

        return $this;
    }

    /**
     * Gets id_contact
     *
     * @return int[]|null
     */
    public function getIdContact(): ?array
    {
        return $this->container['id_contact'];
    }

    /**
     * Sets id_contact
     *
     * @param int[]|null $id_contact Valeur exacte. Plusieurs valeurs séparées par des virgules.
     *
     * @return $this
     */
    public function setIdContact(?array $id_contact): static
    {
        if (is_null($id_contact)) {
            throw new InvalidArgumentException('non-nullable id_contact cannot be null');
        }
        $this->container['id_contact'] = $id_contact;

        return $this;
    }

    /**
     * Gets id_contact_secondaire
     *
     * @return int[]|null
     */
    public function getIdContactSecondaire(): ?array
    {
        return $this->container['id_contact_secondaire'];
    }

    /**
     * Sets id_contact_secondaire
     *
     * @param int[]|null $id_contact_secondaire Valeur exacte. Plusieurs valeurs séparées par des virgules.
     *
     * @return $this
     */
    public function setIdContactSecondaire(?array $id_contact_secondaire): static
    {
        if (is_null($id_contact_secondaire)) {
            throw new InvalidArgumentException('non-nullable id_contact_secondaire cannot be null');
        }
        $this->container['id_contact_secondaire'] = $id_contact_secondaire;

        return $this;
    }

    /**
     * Gets id_contact_facturation
     *
     * @return int[]|null
     */
    public function getIdContactFacturation(): ?array
    {
        return $this->container['id_contact_facturation'];
    }

    /**
     * Sets id_contact_facturation
     *
     * @param int[]|null $id_contact_facturation Valeur exacte. Plusieurs valeurs séparées par des virgules.
     *
     * @return $this
     */
    public function setIdContactFacturation(?array $id_contact_facturation): static
    {
        if (is_null($id_contact_facturation)) {
            throw new InvalidArgumentException('non-nullable id_contact_facturation cannot be null');
        }
        $this->container['id_contact_facturation'] = $id_contact_facturation;

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
     * @param string|null $commentaires Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setCommentaires(?string $commentaires): static
    {
        if (is_null($commentaires)) {
            throw new InvalidArgumentException('non-nullable commentaires cannot be null');
        }
        $this->container['commentaires'] = $commentaires;

        return $this;
    }

    /**
     * Gets post_it_commercial
     *
     * @return string|null
     */
    public function getPostItCommercial(): ?string
    {
        return $this->container['post_it_commercial'];
    }

    /**
     * Sets post_it_commercial
     *
     * @param string|null $post_it_commercial Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setPostItCommercial(?string $post_it_commercial): static
    {
        if (is_null($post_it_commercial)) {
            throw new InvalidArgumentException('non-nullable post_it_commercial cannot be null');
        }
        $this->container['post_it_commercial'] = $post_it_commercial;

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
     * @param string|null $id_externe Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setIdExterne(?string $id_externe): static
    {
        if (is_null($id_externe)) {
            throw new InvalidArgumentException('non-nullable id_externe cannot be null');
        }
        $this->container['id_externe'] = $id_externe;

        return $this;
    }

    /**
     * Gets moyen_paiement_par_defaut
     *
     * @return string|null
     */
    public function getMoyenPaiementParDefaut(): ?string
    {
        return $this->container['moyen_paiement_par_defaut'];
    }

    /**
     * Sets moyen_paiement_par_defaut
     *
     * @param string|null $moyen_paiement_par_defaut Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setMoyenPaiementParDefaut(?string $moyen_paiement_par_defaut): static
    {
        if (is_null($moyen_paiement_par_defaut)) {
            throw new InvalidArgumentException('non-nullable moyen_paiement_par_defaut cannot be null');
        }
        $this->container['moyen_paiement_par_defaut'] = $moyen_paiement_par_defaut;

        return $this;
    }

    /**
     * Gets delai_paiement
     *
     * @return string|null
     */
    public function getDelaiPaiement(): ?string
    {
        return $this->container['delai_paiement'];
    }

    /**
     * Sets delai_paiement
     *
     * @param string|null $delai_paiement Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setDelaiPaiement(?string $delai_paiement): static
    {
        if (is_null($delai_paiement)) {
            throw new InvalidArgumentException('non-nullable delai_paiement cannot be null');
        }
        $this->container['delai_paiement'] = $delai_paiement;

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
     * @param string|null $tva_formation Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setTvaFormation(?string $tva_formation): static
    {
        if (is_null($tva_formation)) {
            throw new InvalidArgumentException('non-nullable tva_formation cannot be null');
        }
        $this->container['tva_formation'] = $tva_formation;

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
     * @param string|null $tva_frais Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setTvaFrais(?string $tva_frais): static
    {
        if (is_null($tva_frais)) {
            throw new InvalidArgumentException('non-nullable tva_frais cannot be null');
        }
        $this->container['tva_frais'] = $tva_frais;

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
     * @param string|null $tva_hors_formation Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setTvaHorsFormation(?string $tva_hors_formation): static
    {
        if (is_null($tva_hors_formation)) {
            throw new InvalidArgumentException('non-nullable tva_hors_formation cannot be null');
        }
        $this->container['tva_hors_formation'] = $tva_hors_formation;

        return $this;
    }

    /**
     * Gets global_visible
     *
     * @return string|null
     */
    public function getGlobalVisible(): ?string
    {
        return $this->container['global_visible'];
    }

    /**
     * Sets global_visible
     *
     * @param string|null $global_visible Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setGlobalVisible(?string $global_visible): static
    {
        if (is_null($global_visible)) {
            throw new InvalidArgumentException('non-nullable global_visible cannot be null');
        }
        $this->container['global_visible'] = $global_visible;

        return $this;
    }

    /**
     * Gets infos_adf
     *
     * @return string|null
     */
    public function getInfosAdf(): ?string
    {
        return $this->container['infos_adf'];
    }

    /**
     * Sets infos_adf
     *
     * @param string|null $infos_adf Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setInfosAdf(?string $infos_adf): static
    {
        if (is_null($infos_adf)) {
            throw new InvalidArgumentException('non-nullable infos_adf cannot be null');
        }
        $this->container['infos_adf'] = $infos_adf;

        return $this;
    }

    /**
     * Gets formateurs_mode_remu
     *
     * @return string|null
     */
    public function getFormateursModeRemu(): ?string
    {
        return $this->container['formateurs_mode_remu'];
    }

    /**
     * Sets formateurs_mode_remu
     *
     * @param string|null $formateurs_mode_remu Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setFormateursModeRemu(?string $formateurs_mode_remu): static
    {
        if (is_null($formateurs_mode_remu)) {
            throw new InvalidArgumentException('non-nullable formateurs_mode_remu cannot be null');
        }
        $this->container['formateurs_mode_remu'] = $formateurs_mode_remu;

        return $this;
    }

    /**
     * Gets message_extranet
     *
     * @return string|null
     */
    public function getMessageExtranet(): ?string
    {
        return $this->container['message_extranet'];
    }

    /**
     * Sets message_extranet
     *
     * @param string|null $message_extranet Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setMessageExtranet(?string $message_extranet): static
    {
        if (is_null($message_extranet)) {
            throw new InvalidArgumentException('non-nullable message_extranet cannot be null');
        }
        $this->container['message_extranet'] = $message_extranet;

        return $this;
    }

    /**
     * Gets industrie
     *
     * @return string|null
     */
    public function getIndustrie(): ?string
    {
        return $this->container['industrie'];
    }

    /**
     * Sets industrie
     *
     * @param string|null $industrie Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setIndustrie(?string $industrie): static
    {
        if (is_null($industrie)) {
            throw new InvalidArgumentException('non-nullable industrie cannot be null');
        }
        $this->container['industrie'] = $industrie;

        return $this;
    }

    /**
     * Gets category_id
     *
     * @return string|null
     */
    public function getCategoryId(): ?string
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param string|null $category_id Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setCategoryId(?string $category_id): static
    {
        if (is_null($category_id)) {
            throw new InvalidArgumentException('non-nullable category_id cannot be null');
        }
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets has_chorus_pro_invoices
     *
     * @return string|null
     */
    public function getHasChorusProInvoices(): ?string
    {
        return $this->container['has_chorus_pro_invoices'];
    }

    /**
     * Sets has_chorus_pro_invoices
     *
     * @param string|null $has_chorus_pro_invoices Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setHasChorusProInvoices(?string $has_chorus_pro_invoices): static
    {
        if (is_null($has_chorus_pro_invoices)) {
            throw new InvalidArgumentException('non-nullable has_chorus_pro_invoices cannot be null');
        }
        $this->container['has_chorus_pro_invoices'] = $has_chorus_pro_invoices;

        return $this;
    }

    /**
     * Gets reference_acheteur
     *
     * @return string|null
     */
    public function getReferenceAcheteur(): ?string
    {
        return $this->container['reference_acheteur'];
    }

    /**
     * Sets reference_acheteur
     *
     * @param string|null $reference_acheteur Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setReferenceAcheteur(?string $reference_acheteur): static
    {
        if (is_null($reference_acheteur)) {
            throw new InvalidArgumentException('non-nullable reference_acheteur cannot be null');
        }
        $this->container['reference_acheteur'] = $reference_acheteur;

        return $this;
    }

    /**
     * Gets auto_validate_inscriptions
     *
     * @return string|null
     */
    public function getAutoValidateInscriptions(): ?string
    {
        return $this->container['auto_validate_inscriptions'];
    }

    /**
     * Sets auto_validate_inscriptions
     *
     * @param string|null $auto_validate_inscriptions Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setAutoValidateInscriptions(?string $auto_validate_inscriptions): static
    {
        if (is_null($auto_validate_inscriptions)) {
            throw new InvalidArgumentException('non-nullable auto_validate_inscriptions cannot be null');
        }
        $this->container['auto_validate_inscriptions'] = $auto_validate_inscriptions;

        return $this;
    }

    /**
     * Gets financeur_type
     *
     * @return string[]|null
     */
    public function getFinanceurType(): ?array
    {
        return $this->container['financeur_type'];
    }

    /**
     * Sets financeur_type
     *
     * @param string[]|null $financeur_type Valeur exacte. Plusieurs valeurs séparées par des virgules.
     *
     * @return $this
     */
    public function setFinanceurType(?array $financeur_type): static
    {
        if (is_null($financeur_type)) {
            throw new InvalidArgumentException('non-nullable financeur_type cannot be null');
        }
        $this->container['financeur_type'] = $financeur_type;

        return $this;
    }

    /**
     * Gets financeur_id
     *
     * @return int[]|null
     */
    public function getFinanceurId(): ?array
    {
        return $this->container['financeur_id'];
    }

    /**
     * Sets financeur_id
     *
     * @param int[]|null $financeur_id Valeur exacte. Plusieurs valeurs séparées par des virgules.
     *
     * @return $this
     */
    public function setFinanceurId(?array $financeur_id): static
    {
        if (is_null($financeur_id)) {
            throw new InvalidArgumentException('non-nullable financeur_id cannot be null');
        }
        $this->container['financeur_id'] = $financeur_id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at Date (`2026-01-31`) ou date et heure (`2026-01-31 09:00:00`), précédée d'un opérateur `>=`, `<=`, `>`, `<`, `=` ou `<>`. Sans opérateur, recherche par préfixe (`2026`, `2026-01`). Une valeur qui n'est pas une date ne renvoie rien. Pour encadrer une période, passer le filtre en tableau : `filter[created_at][]=>=2026-01-01&filter[created_at][]=<=2026-12-31`.
     *
     * @return $this
     */
    public function setCreatedAt(?string $created_at): static
    {
        if (is_null($created_at)) {
            throw new InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string|null $updated_at Date (`2026-01-31`) ou date et heure (`2026-01-31 09:00:00`), précédée d'un opérateur `>=`, `<=`, `>`, `<`, `=` ou `<>`. Sans opérateur, recherche par préfixe (`2026`, `2026-01`). Une valeur qui n'est pas une date ne renvoie rien. Pour encadrer une période, passer le filtre en tableau : `filter[updated_at][]=>=2026-01-01&filter[updated_at][]=<=2026-12-31`.
     *
     * @return $this
     */
    public function setUpdatedAt(?string $updated_at): static
    {
        if (is_null($updated_at)) {
            throw new InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

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


