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
 * SalleDeFormationEmplacement Class Doc Comment
 *
 * Generated from the Dendreo OpenAPI specification, do not edit manually.
 *
 * @description Présent uniquement avec &#x60;include&#x3D;emplacement&#x60;. Fiche désignée par &#x60;emplacement_type&#x60;.
 * @package  Dbout\DendreoSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class SalleDeFormationEmplacement implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'SalleDeFormation_emplacement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'entreprise_parente_id' => 'int',
        'numero' => 'string',
        'numero_complet' => 'string',
        'numero_perso' => 'string',
        'client' => 'bool',
        'numero_compte_client' => 'string',
        'numero_compte_client_auxiliaire' => 'string',
        'numero_comptable_adf' => 'string',
        'category_id' => 'int',
        'id_externe' => 'int',
        'particulier' => 'bool',
        'nom' => 'string',
        'prenom' => 'string',
        'raison_sociale' => 'string',
        'appellation' => 'string',
        'sigle' => 'string',
        'statut_juridique' => 'string',
        'nb_employes' => 'int',
        'telephone' => 'string',
        'fax' => 'string',
        'site_internet' => 'string',
        'email_standard' => 'string',
        'adresse' => 'string',
        'code_postal' => 'string',
        'ville' => 'string',
        'pays' => 'string',
        'pays_alpha2' => 'string',
        'legal_scheme' => 'string',
        'legal_scheme_label' => 'string',
        'legal_identifier' => 'string',
        'peppol_scheme' => 'string',
        'peppol_identifier' => 'string',
        'num_tva_intra_auto' => 'string',
        'tva_formation' => 'float',
        'tva_frais' => 'float',
        'tva_hors_formation' => 'float',
        'has_chorus_pro_invoices' => 'bool',
        'reference_acheteur' => 'string',
        'moyen_paiement_par_defaut' => 'string',
        'delai_paiement' => 'string',
        'fournisseur' => 'bool',
        'statut_bpf_participants_entreprise' => 'string',
        'mode_financement_par_defaut' => 'string',
        'financeur_type' => 'string',
        'financeur_id' => 'int',
        'global_visible' => 'bool',
        'centre_de_formation_id' => 'int',
        'importance' => 'string',
        'id_administrateur' => 'int',
        'id_contact' => 'int',
        'id_contact_secondaire' => 'int',
        'id_contact_facturation' => 'int',
        'commentaires' => 'string',
        'post_it_commercial' => 'string',
        'infos_adf' => 'string',
        'unread_notifications_count' => 'string',
        'auto_validate_inscriptions' => 'bool',
        'ical_url' => 'string',
        'created_at' => '\DateTime',
        'id_add' => 'int',
        'updated_at' => '\DateTime',
        'id_edit' => 'int',
        'deleted_at' => '\DateTime',
        'id_delete' => 'int',
        'administrateur_add' => '\Dbout\DendreoSdk\Model\Administrateur',
        'administrateur_edit' => '\Dbout\DendreoSdk\Model\Administrateur',
        'administrateur_delete' => '\Dbout\DendreoSdk\Model\Administrateur',
        'centres' => '\Dbout\DendreoSdk\Model\CentresDeFormation[]',
        'code_naf' => 'object',
        'stats' => 'object',
        'client_interne' => 'bool',
        'id_opca' => 'int',
        'id_opca_interlocuteur' => 'int',
        'message_extranet' => 'string',
        'formateurs_mode_remu' => 'string',
        'formateurs_remu_horaire_par_defaut' => 'float',
        'numero_compte_fournisseur' => 'string',
        'numero_compte_fournisseur_auxiliaire' => 'string',
        'tslearning_group_id' => 'string',
        'riseup_group_id' => 'int',
        'facturation_raison_sociale' => 'string',
        'facturation_adresse' => 'string',
        'facturation_code_postal' => 'string',
        'facturation_ville' => 'string',
        'facturation_pays' => 'string',
        'facturation_pays_alpha2' => 'string',
        'num_tva_intra' => 'string',
        'hidden' => 'bool',
        'nom_commercial' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'entreprise_parente_id' => null,
        'numero' => null,
        'numero_complet' => null,
        'numero_perso' => null,
        'client' => null,
        'numero_compte_client' => null,
        'numero_compte_client_auxiliaire' => null,
        'numero_comptable_adf' => null,
        'category_id' => null,
        'id_externe' => null,
        'particulier' => null,
        'nom' => null,
        'prenom' => null,
        'raison_sociale' => null,
        'appellation' => null,
        'sigle' => null,
        'statut_juridique' => null,
        'nb_employes' => null,
        'telephone' => null,
        'fax' => null,
        'site_internet' => null,
        'email_standard' => null,
        'adresse' => null,
        'code_postal' => null,
        'ville' => null,
        'pays' => null,
        'pays_alpha2' => null,
        'legal_scheme' => null,
        'legal_scheme_label' => null,
        'legal_identifier' => null,
        'peppol_scheme' => null,
        'peppol_identifier' => null,
        'num_tva_intra_auto' => null,
        'tva_formation' => null,
        'tva_frais' => null,
        'tva_hors_formation' => null,
        'has_chorus_pro_invoices' => null,
        'reference_acheteur' => null,
        'moyen_paiement_par_defaut' => null,
        'delai_paiement' => null,
        'fournisseur' => null,
        'statut_bpf_participants_entreprise' => null,
        'mode_financement_par_defaut' => null,
        'financeur_type' => null,
        'financeur_id' => null,
        'global_visible' => null,
        'centre_de_formation_id' => null,
        'importance' => null,
        'id_administrateur' => null,
        'id_contact' => null,
        'id_contact_secondaire' => null,
        'id_contact_facturation' => null,
        'commentaires' => null,
        'post_it_commercial' => null,
        'infos_adf' => null,
        'unread_notifications_count' => null,
        'auto_validate_inscriptions' => null,
        'ical_url' => null,
        'created_at' => 'date-time',
        'id_add' => null,
        'updated_at' => 'date-time',
        'id_edit' => null,
        'deleted_at' => 'date-time',
        'id_delete' => null,
        'administrateur_add' => null,
        'administrateur_edit' => null,
        'administrateur_delete' => null,
        'centres' => null,
        'code_naf' => null,
        'stats' => null,
        'client_interne' => null,
        'id_opca' => null,
        'id_opca_interlocuteur' => null,
        'message_extranet' => null,
        'formateurs_mode_remu' => null,
        'formateurs_remu_horaire_par_defaut' => null,
        'numero_compte_fournisseur' => null,
        'numero_compte_fournisseur_auxiliaire' => null,
        'tslearning_group_id' => null,
        'riseup_group_id' => null,
        'facturation_raison_sociale' => null,
        'facturation_adresse' => null,
        'facturation_code_postal' => null,
        'facturation_ville' => null,
        'facturation_pays' => null,
        'facturation_pays_alpha2' => null,
        'num_tva_intra' => null,
        'hidden' => null,
        'nom_commercial' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'entreprise_parente_id' => true,
        'numero' => true,
        'numero_complet' => false,
        'numero_perso' => true,
        'client' => false,
        'numero_compte_client' => true,
        'numero_compte_client_auxiliaire' => true,
        'numero_comptable_adf' => true,
        'category_id' => true,
        'id_externe' => false,
        'particulier' => false,
        'nom' => true,
        'prenom' => true,
        'raison_sociale' => true,
        'appellation' => true,
        'sigle' => true,
        'statut_juridique' => true,
        'nb_employes' => true,
        'telephone' => false,
        'fax' => true,
        'site_internet' => true,
        'email_standard' => false,
        'adresse' => false,
        'code_postal' => false,
        'ville' => false,
        'pays' => true,
        'pays_alpha2' => true,
        'legal_scheme' => false,
        'legal_scheme_label' => false,
        'legal_identifier' => false,
        'peppol_scheme' => false,
        'peppol_identifier' => false,
        'num_tva_intra_auto' => true,
        'tva_formation' => false,
        'tva_frais' => false,
        'tva_hors_formation' => false,
        'has_chorus_pro_invoices' => false,
        'reference_acheteur' => true,
        'moyen_paiement_par_defaut' => true,
        'delai_paiement' => false,
        'fournisseur' => false,
        'statut_bpf_participants_entreprise' => false,
        'mode_financement_par_defaut' => false,
        'financeur_type' => true,
        'financeur_id' => true,
        'global_visible' => false,
        'centre_de_formation_id' => false,
        'importance' => false,
        'id_administrateur' => true,
        'id_contact' => true,
        'id_contact_secondaire' => true,
        'id_contact_facturation' => true,
        'commentaires' => true,
        'post_it_commercial' => true,
        'infos_adf' => true,
        'unread_notifications_count' => true,
        'auto_validate_inscriptions' => false,
        'ical_url' => false,
        'created_at' => true,
        'id_add' => true,
        'updated_at' => true,
        'id_edit' => true,
        'deleted_at' => true,
        'id_delete' => true,
        'administrateur_add' => true,
        'administrateur_edit' => true,
        'administrateur_delete' => true,
        'centres' => false,
        'code_naf' => true,
        'stats' => true,
        'client_interne' => true,
        'id_opca' => true,
        'id_opca_interlocuteur' => true,
        'message_extranet' => true,
        'formateurs_mode_remu' => true,
        'formateurs_remu_horaire_par_defaut' => true,
        'numero_compte_fournisseur' => true,
        'numero_compte_fournisseur_auxiliaire' => true,
        'tslearning_group_id' => true,
        'riseup_group_id' => true,
        'facturation_raison_sociale' => true,
        'facturation_adresse' => true,
        'facturation_code_postal' => true,
        'facturation_ville' => true,
        'facturation_pays' => true,
        'facturation_pays_alpha2' => true,
        'num_tva_intra' => true,
        'hidden' => false,
        'nom_commercial' => false
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
        'entreprise_parente_id' => 'entreprise_parente_id',
        'numero' => 'numero',
        'numero_complet' => 'numero_complet',
        'numero_perso' => 'numero_perso',
        'client' => 'client',
        'numero_compte_client' => 'numero_compte_client',
        'numero_compte_client_auxiliaire' => 'numero_compte_client_auxiliaire',
        'numero_comptable_adf' => 'numero_comptable_adf',
        'category_id' => 'category_id',
        'id_externe' => 'id_externe',
        'particulier' => 'particulier',
        'nom' => 'nom',
        'prenom' => 'prenom',
        'raison_sociale' => 'raison_sociale',
        'appellation' => 'appellation',
        'sigle' => 'sigle',
        'statut_juridique' => 'statut_juridique',
        'nb_employes' => 'nb_employes',
        'telephone' => 'telephone',
        'fax' => 'fax',
        'site_internet' => 'site_internet',
        'email_standard' => 'email_standard',
        'adresse' => 'adresse',
        'code_postal' => 'code_postal',
        'ville' => 'ville',
        'pays' => 'pays',
        'pays_alpha2' => 'pays_alpha2',
        'legal_scheme' => 'legal_scheme',
        'legal_scheme_label' => 'legal_scheme_label',
        'legal_identifier' => 'legal_identifier',
        'peppol_scheme' => 'peppol_scheme',
        'peppol_identifier' => 'peppol_identifier',
        'num_tva_intra_auto' => 'num_tva_intra_auto',
        'tva_formation' => 'tva_formation',
        'tva_frais' => 'tva_frais',
        'tva_hors_formation' => 'tva_hors_formation',
        'has_chorus_pro_invoices' => 'has_chorus_pro_invoices',
        'reference_acheteur' => 'reference_acheteur',
        'moyen_paiement_par_defaut' => 'moyen_paiement_par_defaut',
        'delai_paiement' => 'delai_paiement',
        'fournisseur' => 'fournisseur',
        'statut_bpf_participants_entreprise' => 'statut_bpf_participants_entreprise',
        'mode_financement_par_defaut' => 'mode_financement_par_defaut',
        'financeur_type' => 'financeur_type',
        'financeur_id' => 'financeur_id',
        'global_visible' => 'global_visible',
        'centre_de_formation_id' => 'centre_de_formation_id',
        'importance' => 'importance',
        'id_administrateur' => 'id_administrateur',
        'id_contact' => 'id_contact',
        'id_contact_secondaire' => 'id_contact_secondaire',
        'id_contact_facturation' => 'id_contact_facturation',
        'commentaires' => 'commentaires',
        'post_it_commercial' => 'post_it_commercial',
        'infos_adf' => 'infos_adf',
        'unread_notifications_count' => 'unread_notifications_count',
        'auto_validate_inscriptions' => 'auto_validate_inscriptions',
        'ical_url' => 'ical_url',
        'created_at' => 'created_at',
        'id_add' => 'id_add',
        'updated_at' => 'updated_at',
        'id_edit' => 'id_edit',
        'deleted_at' => 'deleted_at',
        'id_delete' => 'id_delete',
        'administrateur_add' => 'administrateur_add',
        'administrateur_edit' => 'administrateur_edit',
        'administrateur_delete' => 'administrateur_delete',
        'centres' => 'centres',
        'code_naf' => 'code_naf',
        'stats' => 'stats',
        'client_interne' => 'client_interne',
        'id_opca' => 'id_opca',
        'id_opca_interlocuteur' => 'id_opca_interlocuteur',
        'message_extranet' => 'message_extranet',
        'formateurs_mode_remu' => 'formateurs_mode_remu',
        'formateurs_remu_horaire_par_defaut' => 'formateurs_remu_horaire_par_defaut',
        'numero_compte_fournisseur' => 'numero_compte_fournisseur',
        'numero_compte_fournisseur_auxiliaire' => 'numero_compte_fournisseur_auxiliaire',
        'tslearning_group_id' => 'tslearning_group_id',
        'riseup_group_id' => 'riseup_group_id',
        'facturation_raison_sociale' => 'facturation_raison_sociale',
        'facturation_adresse' => 'facturation_adresse',
        'facturation_code_postal' => 'facturation_code_postal',
        'facturation_ville' => 'facturation_ville',
        'facturation_pays' => 'facturation_pays',
        'facturation_pays_alpha2' => 'facturation_pays_alpha2',
        'num_tva_intra' => 'num_tva_intra',
        'hidden' => 'hidden',
        'nom_commercial' => 'nom_commercial'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'entreprise_parente_id' => 'setEntrepriseParenteId',
        'numero' => 'setNumero',
        'numero_complet' => 'setNumeroComplet',
        'numero_perso' => 'setNumeroPerso',
        'client' => 'setClient',
        'numero_compte_client' => 'setNumeroCompteClient',
        'numero_compte_client_auxiliaire' => 'setNumeroCompteClientAuxiliaire',
        'numero_comptable_adf' => 'setNumeroComptableAdf',
        'category_id' => 'setCategoryId',
        'id_externe' => 'setIdExterne',
        'particulier' => 'setParticulier',
        'nom' => 'setNom',
        'prenom' => 'setPrenom',
        'raison_sociale' => 'setRaisonSociale',
        'appellation' => 'setAppellation',
        'sigle' => 'setSigle',
        'statut_juridique' => 'setStatutJuridique',
        'nb_employes' => 'setNbEmployes',
        'telephone' => 'setTelephone',
        'fax' => 'setFax',
        'site_internet' => 'setSiteInternet',
        'email_standard' => 'setEmailStandard',
        'adresse' => 'setAdresse',
        'code_postal' => 'setCodePostal',
        'ville' => 'setVille',
        'pays' => 'setPays',
        'pays_alpha2' => 'setPaysAlpha2',
        'legal_scheme' => 'setLegalScheme',
        'legal_scheme_label' => 'setLegalSchemeLabel',
        'legal_identifier' => 'setLegalIdentifier',
        'peppol_scheme' => 'setPeppolScheme',
        'peppol_identifier' => 'setPeppolIdentifier',
        'num_tva_intra_auto' => 'setNumTvaIntraAuto',
        'tva_formation' => 'setTvaFormation',
        'tva_frais' => 'setTvaFrais',
        'tva_hors_formation' => 'setTvaHorsFormation',
        'has_chorus_pro_invoices' => 'setHasChorusProInvoices',
        'reference_acheteur' => 'setReferenceAcheteur',
        'moyen_paiement_par_defaut' => 'setMoyenPaiementParDefaut',
        'delai_paiement' => 'setDelaiPaiement',
        'fournisseur' => 'setFournisseur',
        'statut_bpf_participants_entreprise' => 'setStatutBpfParticipantsEntreprise',
        'mode_financement_par_defaut' => 'setModeFinancementParDefaut',
        'financeur_type' => 'setFinanceurType',
        'financeur_id' => 'setFinanceurId',
        'global_visible' => 'setGlobalVisible',
        'centre_de_formation_id' => 'setCentreDeFormationId',
        'importance' => 'setImportance',
        'id_administrateur' => 'setIdAdministrateur',
        'id_contact' => 'setIdContact',
        'id_contact_secondaire' => 'setIdContactSecondaire',
        'id_contact_facturation' => 'setIdContactFacturation',
        'commentaires' => 'setCommentaires',
        'post_it_commercial' => 'setPostItCommercial',
        'infos_adf' => 'setInfosAdf',
        'unread_notifications_count' => 'setUnreadNotificationsCount',
        'auto_validate_inscriptions' => 'setAutoValidateInscriptions',
        'ical_url' => 'setIcalUrl',
        'created_at' => 'setCreatedAt',
        'id_add' => 'setIdAdd',
        'updated_at' => 'setUpdatedAt',
        'id_edit' => 'setIdEdit',
        'deleted_at' => 'setDeletedAt',
        'id_delete' => 'setIdDelete',
        'administrateur_add' => 'setAdministrateurAdd',
        'administrateur_edit' => 'setAdministrateurEdit',
        'administrateur_delete' => 'setAdministrateurDelete',
        'centres' => 'setCentres',
        'code_naf' => 'setCodeNaf',
        'stats' => 'setStats',
        'client_interne' => 'setClientInterne',
        'id_opca' => 'setIdOpca',
        'id_opca_interlocuteur' => 'setIdOpcaInterlocuteur',
        'message_extranet' => 'setMessageExtranet',
        'formateurs_mode_remu' => 'setFormateursModeRemu',
        'formateurs_remu_horaire_par_defaut' => 'setFormateursRemuHoraireParDefaut',
        'numero_compte_fournisseur' => 'setNumeroCompteFournisseur',
        'numero_compte_fournisseur_auxiliaire' => 'setNumeroCompteFournisseurAuxiliaire',
        'tslearning_group_id' => 'setTslearningGroupId',
        'riseup_group_id' => 'setRiseupGroupId',
        'facturation_raison_sociale' => 'setFacturationRaisonSociale',
        'facturation_adresse' => 'setFacturationAdresse',
        'facturation_code_postal' => 'setFacturationCodePostal',
        'facturation_ville' => 'setFacturationVille',
        'facturation_pays' => 'setFacturationPays',
        'facturation_pays_alpha2' => 'setFacturationPaysAlpha2',
        'num_tva_intra' => 'setNumTvaIntra',
        'hidden' => 'setHidden',
        'nom_commercial' => 'setNomCommercial'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'entreprise_parente_id' => 'getEntrepriseParenteId',
        'numero' => 'getNumero',
        'numero_complet' => 'getNumeroComplet',
        'numero_perso' => 'getNumeroPerso',
        'client' => 'getClient',
        'numero_compte_client' => 'getNumeroCompteClient',
        'numero_compte_client_auxiliaire' => 'getNumeroCompteClientAuxiliaire',
        'numero_comptable_adf' => 'getNumeroComptableAdf',
        'category_id' => 'getCategoryId',
        'id_externe' => 'getIdExterne',
        'particulier' => 'getParticulier',
        'nom' => 'getNom',
        'prenom' => 'getPrenom',
        'raison_sociale' => 'getRaisonSociale',
        'appellation' => 'getAppellation',
        'sigle' => 'getSigle',
        'statut_juridique' => 'getStatutJuridique',
        'nb_employes' => 'getNbEmployes',
        'telephone' => 'getTelephone',
        'fax' => 'getFax',
        'site_internet' => 'getSiteInternet',
        'email_standard' => 'getEmailStandard',
        'adresse' => 'getAdresse',
        'code_postal' => 'getCodePostal',
        'ville' => 'getVille',
        'pays' => 'getPays',
        'pays_alpha2' => 'getPaysAlpha2',
        'legal_scheme' => 'getLegalScheme',
        'legal_scheme_label' => 'getLegalSchemeLabel',
        'legal_identifier' => 'getLegalIdentifier',
        'peppol_scheme' => 'getPeppolScheme',
        'peppol_identifier' => 'getPeppolIdentifier',
        'num_tva_intra_auto' => 'getNumTvaIntraAuto',
        'tva_formation' => 'getTvaFormation',
        'tva_frais' => 'getTvaFrais',
        'tva_hors_formation' => 'getTvaHorsFormation',
        'has_chorus_pro_invoices' => 'getHasChorusProInvoices',
        'reference_acheteur' => 'getReferenceAcheteur',
        'moyen_paiement_par_defaut' => 'getMoyenPaiementParDefaut',
        'delai_paiement' => 'getDelaiPaiement',
        'fournisseur' => 'getFournisseur',
        'statut_bpf_participants_entreprise' => 'getStatutBpfParticipantsEntreprise',
        'mode_financement_par_defaut' => 'getModeFinancementParDefaut',
        'financeur_type' => 'getFinanceurType',
        'financeur_id' => 'getFinanceurId',
        'global_visible' => 'getGlobalVisible',
        'centre_de_formation_id' => 'getCentreDeFormationId',
        'importance' => 'getImportance',
        'id_administrateur' => 'getIdAdministrateur',
        'id_contact' => 'getIdContact',
        'id_contact_secondaire' => 'getIdContactSecondaire',
        'id_contact_facturation' => 'getIdContactFacturation',
        'commentaires' => 'getCommentaires',
        'post_it_commercial' => 'getPostItCommercial',
        'infos_adf' => 'getInfosAdf',
        'unread_notifications_count' => 'getUnreadNotificationsCount',
        'auto_validate_inscriptions' => 'getAutoValidateInscriptions',
        'ical_url' => 'getIcalUrl',
        'created_at' => 'getCreatedAt',
        'id_add' => 'getIdAdd',
        'updated_at' => 'getUpdatedAt',
        'id_edit' => 'getIdEdit',
        'deleted_at' => 'getDeletedAt',
        'id_delete' => 'getIdDelete',
        'administrateur_add' => 'getAdministrateurAdd',
        'administrateur_edit' => 'getAdministrateurEdit',
        'administrateur_delete' => 'getAdministrateurDelete',
        'centres' => 'getCentres',
        'code_naf' => 'getCodeNaf',
        'stats' => 'getStats',
        'client_interne' => 'getClientInterne',
        'id_opca' => 'getIdOpca',
        'id_opca_interlocuteur' => 'getIdOpcaInterlocuteur',
        'message_extranet' => 'getMessageExtranet',
        'formateurs_mode_remu' => 'getFormateursModeRemu',
        'formateurs_remu_horaire_par_defaut' => 'getFormateursRemuHoraireParDefaut',
        'numero_compte_fournisseur' => 'getNumeroCompteFournisseur',
        'numero_compte_fournisseur_auxiliaire' => 'getNumeroCompteFournisseurAuxiliaire',
        'tslearning_group_id' => 'getTslearningGroupId',
        'riseup_group_id' => 'getRiseupGroupId',
        'facturation_raison_sociale' => 'getFacturationRaisonSociale',
        'facturation_adresse' => 'getFacturationAdresse',
        'facturation_code_postal' => 'getFacturationCodePostal',
        'facturation_ville' => 'getFacturationVille',
        'facturation_pays' => 'getFacturationPays',
        'facturation_pays_alpha2' => 'getFacturationPaysAlpha2',
        'num_tva_intra' => 'getNumTvaIntra',
        'hidden' => 'getHidden',
        'nom_commercial' => 'getNomCommercial'
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
        $this->setIfExists('entreprise_parente_id', $data ?? [], null);
        $this->setIfExists('numero', $data ?? [], null);
        $this->setIfExists('numero_complet', $data ?? [], null);
        $this->setIfExists('numero_perso', $data ?? [], null);
        $this->setIfExists('client', $data ?? [], null);
        $this->setIfExists('numero_compte_client', $data ?? [], null);
        $this->setIfExists('numero_compte_client_auxiliaire', $data ?? [], null);
        $this->setIfExists('numero_comptable_adf', $data ?? [], null);
        $this->setIfExists('category_id', $data ?? [], null);
        $this->setIfExists('id_externe', $data ?? [], null);
        $this->setIfExists('particulier', $data ?? [], null);
        $this->setIfExists('nom', $data ?? [], null);
        $this->setIfExists('prenom', $data ?? [], null);
        $this->setIfExists('raison_sociale', $data ?? [], null);
        $this->setIfExists('appellation', $data ?? [], null);
        $this->setIfExists('sigle', $data ?? [], null);
        $this->setIfExists('statut_juridique', $data ?? [], null);
        $this->setIfExists('nb_employes', $data ?? [], null);
        $this->setIfExists('telephone', $data ?? [], null);
        $this->setIfExists('fax', $data ?? [], null);
        $this->setIfExists('site_internet', $data ?? [], null);
        $this->setIfExists('email_standard', $data ?? [], null);
        $this->setIfExists('adresse', $data ?? [], null);
        $this->setIfExists('code_postal', $data ?? [], null);
        $this->setIfExists('ville', $data ?? [], null);
        $this->setIfExists('pays', $data ?? [], null);
        $this->setIfExists('pays_alpha2', $data ?? [], null);
        $this->setIfExists('legal_scheme', $data ?? [], null);
        $this->setIfExists('legal_scheme_label', $data ?? [], null);
        $this->setIfExists('legal_identifier', $data ?? [], null);
        $this->setIfExists('peppol_scheme', $data ?? [], null);
        $this->setIfExists('peppol_identifier', $data ?? [], null);
        $this->setIfExists('num_tva_intra_auto', $data ?? [], null);
        $this->setIfExists('tva_formation', $data ?? [], null);
        $this->setIfExists('tva_frais', $data ?? [], null);
        $this->setIfExists('tva_hors_formation', $data ?? [], null);
        $this->setIfExists('has_chorus_pro_invoices', $data ?? [], null);
        $this->setIfExists('reference_acheteur', $data ?? [], null);
        $this->setIfExists('moyen_paiement_par_defaut', $data ?? [], null);
        $this->setIfExists('delai_paiement', $data ?? [], null);
        $this->setIfExists('fournisseur', $data ?? [], null);
        $this->setIfExists('statut_bpf_participants_entreprise', $data ?? [], null);
        $this->setIfExists('mode_financement_par_defaut', $data ?? [], null);
        $this->setIfExists('financeur_type', $data ?? [], null);
        $this->setIfExists('financeur_id', $data ?? [], null);
        $this->setIfExists('global_visible', $data ?? [], null);
        $this->setIfExists('centre_de_formation_id', $data ?? [], null);
        $this->setIfExists('importance', $data ?? [], null);
        $this->setIfExists('id_administrateur', $data ?? [], null);
        $this->setIfExists('id_contact', $data ?? [], null);
        $this->setIfExists('id_contact_secondaire', $data ?? [], null);
        $this->setIfExists('id_contact_facturation', $data ?? [], null);
        $this->setIfExists('commentaires', $data ?? [], null);
        $this->setIfExists('post_it_commercial', $data ?? [], null);
        $this->setIfExists('infos_adf', $data ?? [], null);
        $this->setIfExists('unread_notifications_count', $data ?? [], null);
        $this->setIfExists('auto_validate_inscriptions', $data ?? [], null);
        $this->setIfExists('ical_url', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('id_add', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('id_edit', $data ?? [], null);
        $this->setIfExists('deleted_at', $data ?? [], null);
        $this->setIfExists('id_delete', $data ?? [], null);
        $this->setIfExists('administrateur_add', $data ?? [], null);
        $this->setIfExists('administrateur_edit', $data ?? [], null);
        $this->setIfExists('administrateur_delete', $data ?? [], null);
        $this->setIfExists('centres', $data ?? [], null);
        $this->setIfExists('code_naf', $data ?? [], null);
        $this->setIfExists('stats', $data ?? [], null);
        $this->setIfExists('client_interne', $data ?? [], null);
        $this->setIfExists('id_opca', $data ?? [], null);
        $this->setIfExists('id_opca_interlocuteur', $data ?? [], null);
        $this->setIfExists('message_extranet', $data ?? [], null);
        $this->setIfExists('formateurs_mode_remu', $data ?? [], null);
        $this->setIfExists('formateurs_remu_horaire_par_defaut', $data ?? [], null);
        $this->setIfExists('numero_compte_fournisseur', $data ?? [], null);
        $this->setIfExists('numero_compte_fournisseur_auxiliaire', $data ?? [], null);
        $this->setIfExists('tslearning_group_id', $data ?? [], null);
        $this->setIfExists('riseup_group_id', $data ?? [], null);
        $this->setIfExists('facturation_raison_sociale', $data ?? [], null);
        $this->setIfExists('facturation_adresse', $data ?? [], null);
        $this->setIfExists('facturation_code_postal', $data ?? [], null);
        $this->setIfExists('facturation_ville', $data ?? [], null);
        $this->setIfExists('facturation_pays', $data ?? [], null);
        $this->setIfExists('facturation_pays_alpha2', $data ?? [], null);
        $this->setIfExists('num_tva_intra', $data ?? [], null);
        $this->setIfExists('hidden', $data ?? [], null);
        $this->setIfExists('nom_commercial', $data ?? [], null);
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
     * Gets entreprise_parente_id
     *
     * @return int|null
     */
    public function getEntrepriseParenteId(): ?int
    {
        return $this->container['entreprise_parente_id'];
    }

    /**
     * Sets entreprise_parente_id
     *
     * @param int|null $entreprise_parente_id Présent uniquement pour une entreprise (`particulier` à `false`).
     *
     * @return $this
     */
    public function setEntrepriseParenteId(?int $entreprise_parente_id): static
    {
        if (is_null($entreprise_parente_id)) {
            array_push($this->openAPINullablesSetToNull, 'entreprise_parente_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('entreprise_parente_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * Gets client
     *
     * @return bool|null
     */
    public function getClient(): ?bool
    {
        return $this->container['client'];
    }

    /**
     * Sets client
     *
     * @param bool|null $client client
     *
     * @return $this
     */
    public function setClient(?bool $client): static
    {
        if (is_null($client)) {
            throw new InvalidArgumentException('non-nullable client cannot be null');
        }
        $this->container['client'] = $client;

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
     * @param string|null $numero_compte_client numero_compte_client
     *
     * @return $this
     */
    public function setNumeroCompteClient(?string $numero_compte_client): static
    {
        if (is_null($numero_compte_client)) {
            array_push($this->openAPINullablesSetToNull, 'numero_compte_client');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('numero_compte_client', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param string|null $numero_compte_client_auxiliaire numero_compte_client_auxiliaire
     *
     * @return $this
     */
    public function setNumeroCompteClientAuxiliaire(?string $numero_compte_client_auxiliaire): static
    {
        if (is_null($numero_compte_client_auxiliaire)) {
            array_push($this->openAPINullablesSetToNull, 'numero_compte_client_auxiliaire');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('numero_compte_client_auxiliaire', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['numero_compte_client_auxiliaire'] = $numero_compte_client_auxiliaire;

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
     * @param string|null $numero_comptable_adf numero_comptable_adf
     *
     * @return $this
     */
    public function setNumeroComptableAdf(?string $numero_comptable_adf): static
    {
        if (is_null($numero_comptable_adf)) {
            array_push($this->openAPINullablesSetToNull, 'numero_comptable_adf');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('numero_comptable_adf', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['numero_comptable_adf'] = $numero_comptable_adf;

        return $this;
    }

    /**
     * Gets category_id
     *
     * @return int|null
     */
    public function getCategoryId(): ?int
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param int|null $category_id category_id
     *
     * @return $this
     */
    public function setCategoryId(?int $category_id): static
    {
        if (is_null($category_id)) {
            array_push($this->openAPINullablesSetToNull, 'category_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('category_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets id_externe
     *
     * @return int|null
     */
    public function getIdExterne(): ?int
    {
        return $this->container['id_externe'];
    }

    /**
     * Sets id_externe
     *
     * @param int|null $id_externe id_externe
     *
     * @return $this
     */
    public function setIdExterne(?int $id_externe): static
    {
        if (is_null($id_externe)) {
            throw new InvalidArgumentException('non-nullable id_externe cannot be null');
        }
        $this->container['id_externe'] = $id_externe;

        return $this;
    }

    /**
     * Gets particulier
     *
     * @return bool|null
     */
    public function getParticulier(): ?bool
    {
        return $this->container['particulier'];
    }

    /**
     * Sets particulier
     *
     * @param bool|null $particulier particulier
     *
     * @return $this
     */
    public function setParticulier(?bool $particulier): static
    {
        if (is_null($particulier)) {
            throw new InvalidArgumentException('non-nullable particulier cannot be null');
        }
        $this->container['particulier'] = $particulier;

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
     * @param string|null $nom nom
     *
     * @return $this
     */
    public function setNom(?string $nom): static
    {
        if (is_null($nom)) {
            array_push($this->openAPINullablesSetToNull, 'nom');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nom', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param string|null $prenom prenom
     *
     * @return $this
     */
    public function setPrenom(?string $prenom): static
    {
        if (is_null($prenom)) {
            array_push($this->openAPINullablesSetToNull, 'prenom');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('prenom', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['prenom'] = $prenom;

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
     * @param string|null $raison_sociale raison_sociale
     *
     * @return $this
     */
    public function setRaisonSociale(?string $raison_sociale): static
    {
        if (is_null($raison_sociale)) {
            array_push($this->openAPINullablesSetToNull, 'raison_sociale');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('raison_sociale', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['raison_sociale'] = $raison_sociale;

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
     * @param string|null $appellation Présent uniquement pour une entreprise (`particulier` à `false`).
     *
     * @return $this
     */
    public function setAppellation(?string $appellation): static
    {
        if (is_null($appellation)) {
            array_push($this->openAPINullablesSetToNull, 'appellation');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('appellation', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param string|null $sigle sigle
     *
     * @return $this
     */
    public function setSigle(?string $sigle): static
    {
        if (is_null($sigle)) {
            array_push($this->openAPINullablesSetToNull, 'sigle');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sigle', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param string|null $statut_juridique statut_juridique
     *
     * @return $this
     */
    public function setStatutJuridique(?string $statut_juridique): static
    {
        if (is_null($statut_juridique)) {
            array_push($this->openAPINullablesSetToNull, 'statut_juridique');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('statut_juridique', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['statut_juridique'] = $statut_juridique;

        return $this;
    }

    /**
     * Gets nb_employes
     *
     * @return int|null
     */
    public function getNbEmployes(): ?int
    {
        return $this->container['nb_employes'];
    }

    /**
     * Sets nb_employes
     *
     * @param int|null $nb_employes Présent uniquement pour une entreprise (`particulier` à `false`).
     *
     * @return $this
     */
    public function setNbEmployes(?int $nb_employes): static
    {
        if (is_null($nb_employes)) {
            array_push($this->openAPINullablesSetToNull, 'nb_employes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nb_employes', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nb_employes'] = $nb_employes;

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
     * @param string|null $telephone telephone
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
     * @param string|null $fax fax
     *
     * @return $this
     */
    public function setFax(?string $fax): static
    {
        if (is_null($fax)) {
            array_push($this->openAPINullablesSetToNull, 'fax');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fax', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param string|null $site_internet site_internet
     *
     * @return $this
     */
    public function setSiteInternet(?string $site_internet): static
    {
        if (is_null($site_internet)) {
            array_push($this->openAPINullablesSetToNull, 'site_internet');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('site_internet', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param string|null $email_standard email_standard
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
     * @param string|null $adresse adresse
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
     * @param string|null $code_postal code_postal
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
     * @param string|null $ville ville
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
     * Gets pays
     *
     * @return string|null
     */
    public function getPays(): ?string
    {
        return $this->container['pays'];
    }

    /**
     * Sets pays
     *
     * @param string|null $pays pays
     *
     * @return $this
     */
    public function setPays(?string $pays): static
    {
        if (is_null($pays)) {
            array_push($this->openAPINullablesSetToNull, 'pays');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pays', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pays'] = $pays;

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
     * @param string|null $pays_alpha2 pays_alpha2
     *
     * @return $this
     */
    public function setPaysAlpha2(?string $pays_alpha2): static
    {
        if (is_null($pays_alpha2)) {
            array_push($this->openAPINullablesSetToNull, 'pays_alpha2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pays_alpha2', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pays_alpha2'] = $pays_alpha2;

        return $this;
    }

    /**
     * Gets legal_scheme
     *
     * @return string|null
     */
    public function getLegalScheme(): ?string
    {
        return $this->container['legal_scheme'];
    }

    /**
     * Sets legal_scheme
     *
     * @param string|null $legal_scheme legal_scheme
     *
     * @return $this
     */
    public function setLegalScheme(?string $legal_scheme): static
    {
        if (is_null($legal_scheme)) {
            throw new InvalidArgumentException('non-nullable legal_scheme cannot be null');
        }
        $this->container['legal_scheme'] = $legal_scheme;

        return $this;
    }

    /**
     * Gets legal_scheme_label
     *
     * @return string|null
     */
    public function getLegalSchemeLabel(): ?string
    {
        return $this->container['legal_scheme_label'];
    }

    /**
     * Sets legal_scheme_label
     *
     * @param string|null $legal_scheme_label legal_scheme_label
     *
     * @return $this
     */
    public function setLegalSchemeLabel(?string $legal_scheme_label): static
    {
        if (is_null($legal_scheme_label)) {
            throw new InvalidArgumentException('non-nullable legal_scheme_label cannot be null');
        }
        $this->container['legal_scheme_label'] = $legal_scheme_label;

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
     * @param string|null $legal_identifier legal_identifier
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
     * Gets peppol_scheme
     *
     * @return string|null
     */
    public function getPeppolScheme(): ?string
    {
        return $this->container['peppol_scheme'];
    }

    /**
     * Sets peppol_scheme
     *
     * @param string|null $peppol_scheme peppol_scheme
     *
     * @return $this
     */
    public function setPeppolScheme(?string $peppol_scheme): static
    {
        if (is_null($peppol_scheme)) {
            throw new InvalidArgumentException('non-nullable peppol_scheme cannot be null');
        }
        $this->container['peppol_scheme'] = $peppol_scheme;

        return $this;
    }

    /**
     * Gets peppol_identifier
     *
     * @return string|null
     */
    public function getPeppolIdentifier(): ?string
    {
        return $this->container['peppol_identifier'];
    }

    /**
     * Sets peppol_identifier
     *
     * @param string|null $peppol_identifier peppol_identifier
     *
     * @return $this
     */
    public function setPeppolIdentifier(?string $peppol_identifier): static
    {
        if (is_null($peppol_identifier)) {
            throw new InvalidArgumentException('non-nullable peppol_identifier cannot be null');
        }
        $this->container['peppol_identifier'] = $peppol_identifier;

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
     * @param string|null $num_tva_intra_auto num_tva_intra_auto
     *
     * @return $this
     */
    public function setNumTvaIntraAuto(?string $num_tva_intra_auto): static
    {
        if (is_null($num_tva_intra_auto)) {
            array_push($this->openAPINullablesSetToNull, 'num_tva_intra_auto');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('num_tva_intra_auto', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['num_tva_intra_auto'] = $num_tva_intra_auto;

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
            throw new InvalidArgumentException('non-nullable tva_formation cannot be null');
        }
        $this->container['tva_formation'] = $tva_formation;

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
            throw new InvalidArgumentException('non-nullable tva_frais cannot be null');
        }
        $this->container['tva_frais'] = $tva_frais;

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
            throw new InvalidArgumentException('non-nullable tva_hors_formation cannot be null');
        }
        $this->container['tva_hors_formation'] = $tva_hors_formation;

        return $this;
    }

    /**
     * Gets has_chorus_pro_invoices
     *
     * @return bool|null
     */
    public function getHasChorusProInvoices(): ?bool
    {
        return $this->container['has_chorus_pro_invoices'];
    }

    /**
     * Sets has_chorus_pro_invoices
     *
     * @param bool|null $has_chorus_pro_invoices has_chorus_pro_invoices
     *
     * @return $this
     */
    public function setHasChorusProInvoices(?bool $has_chorus_pro_invoices): static
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
     * @param string|null $reference_acheteur reference_acheteur
     *
     * @return $this
     */
    public function setReferenceAcheteur(?string $reference_acheteur): static
    {
        if (is_null($reference_acheteur)) {
            array_push($this->openAPINullablesSetToNull, 'reference_acheteur');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('reference_acheteur', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['reference_acheteur'] = $reference_acheteur;

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
     * @param string|null $moyen_paiement_par_defaut moyen_paiement_par_defaut
     *
     * @return $this
     */
    public function setMoyenPaiementParDefaut(?string $moyen_paiement_par_defaut): static
    {
        if (is_null($moyen_paiement_par_defaut)) {
            array_push($this->openAPINullablesSetToNull, 'moyen_paiement_par_defaut');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('moyen_paiement_par_defaut', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param string|null $delai_paiement delai_paiement
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
     * Gets fournisseur
     *
     * @return bool|null
     */
    public function getFournisseur(): ?bool
    {
        return $this->container['fournisseur'];
    }

    /**
     * Sets fournisseur
     *
     * @param bool|null $fournisseur Présent uniquement pour une entreprise (`particulier` à `false`).
     *
     * @return $this
     */
    public function setFournisseur(?bool $fournisseur): static
    {
        if (is_null($fournisseur)) {
            throw new InvalidArgumentException('non-nullable fournisseur cannot be null');
        }
        $this->container['fournisseur'] = $fournisseur;

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
     * @param string|null $statut_bpf_participants_entreprise statut_bpf_participants_entreprise
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
     * @param string|null $mode_financement_par_defaut mode_financement_par_defaut
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
     * Gets financeur_type
     *
     * @return string|null
     */
    public function getFinanceurType(): ?string
    {
        return $this->container['financeur_type'];
    }

    /**
     * Sets financeur_type
     *
     * @param string|null $financeur_type Présent uniquement quand `mode_financement_par_defaut` ne vaut pas `particulier`.
     *
     * @return $this
     */
    public function setFinanceurType(?string $financeur_type): static
    {
        if (is_null($financeur_type)) {
            array_push($this->openAPINullablesSetToNull, 'financeur_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('financeur_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['financeur_type'] = $financeur_type;

        return $this;
    }

    /**
     * Gets financeur_id
     *
     * @return int|null
     */
    public function getFinanceurId(): ?int
    {
        return $this->container['financeur_id'];
    }

    /**
     * Sets financeur_id
     *
     * @param int|null $financeur_id Présent uniquement quand `mode_financement_par_defaut` ne vaut pas `particulier`.
     *
     * @return $this
     */
    public function setFinanceurId(?int $financeur_id): static
    {
        if (is_null($financeur_id)) {
            array_push($this->openAPINullablesSetToNull, 'financeur_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('financeur_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['financeur_id'] = $financeur_id;

        return $this;
    }

    /**
     * Gets global_visible
     *
     * @return bool|null
     */
    public function getGlobalVisible(): ?bool
    {
        return $this->container['global_visible'];
    }

    /**
     * Sets global_visible
     *
     * @param bool|null $global_visible global_visible
     *
     * @return $this
     */
    public function setGlobalVisible(?bool $global_visible): static
    {
        if (is_null($global_visible)) {
            throw new InvalidArgumentException('non-nullable global_visible cannot be null');
        }
        $this->container['global_visible'] = $global_visible;

        return $this;
    }

    /**
     * Gets centre_de_formation_id
     *
     * @return int|null
     */
    public function getCentreDeFormationId(): ?int
    {
        return $this->container['centre_de_formation_id'];
    }

    /**
     * Sets centre_de_formation_id
     *
     * @param int|null $centre_de_formation_id centre_de_formation_id
     *
     * @return $this
     */
    public function setCentreDeFormationId(?int $centre_de_formation_id): static
    {
        if (is_null($centre_de_formation_id)) {
            throw new InvalidArgumentException('non-nullable centre_de_formation_id cannot be null');
        }
        $this->container['centre_de_formation_id'] = $centre_de_formation_id;

        return $this;
    }

    /**
     * Gets importance
     *
     * @return string|null
     */
    public function getImportance(): ?string
    {
        return $this->container['importance'];
    }

    /**
     * Sets importance
     *
     * @param string|null $importance importance
     *
     * @return $this
     */
    public function setImportance(?string $importance): static
    {
        if (is_null($importance)) {
            throw new InvalidArgumentException('non-nullable importance cannot be null');
        }
        $this->container['importance'] = $importance;

        return $this;
    }

    /**
     * Gets id_administrateur
     *
     * @return int|null
     */
    public function getIdAdministrateur(): ?int
    {
        return $this->container['id_administrateur'];
    }

    /**
     * Sets id_administrateur
     *
     * @param int|null $id_administrateur id_administrateur
     *
     * @return $this
     */
    public function setIdAdministrateur(?int $id_administrateur): static
    {
        if (is_null($id_administrateur)) {
            array_push($this->openAPINullablesSetToNull, 'id_administrateur');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_administrateur', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id_administrateur'] = $id_administrateur;

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
     * @param int|null $id_contact Présent uniquement pour une entreprise (`particulier` à `false`).
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
     * Gets id_contact_secondaire
     *
     * @return int|null
     */
    public function getIdContactSecondaire(): ?int
    {
        return $this->container['id_contact_secondaire'];
    }

    /**
     * Sets id_contact_secondaire
     *
     * @param int|null $id_contact_secondaire Présent uniquement pour une entreprise (`particulier` à `false`).
     *
     * @return $this
     */
    public function setIdContactSecondaire(?int $id_contact_secondaire): static
    {
        if (is_null($id_contact_secondaire)) {
            array_push($this->openAPINullablesSetToNull, 'id_contact_secondaire');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_contact_secondaire', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id_contact_secondaire'] = $id_contact_secondaire;

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
     * @param int|null $id_contact_facturation Présent uniquement pour une entreprise (`particulier` à `false`).
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
     * @param string|null $post_it_commercial post_it_commercial
     *
     * @return $this
     */
    public function setPostItCommercial(?string $post_it_commercial): static
    {
        if (is_null($post_it_commercial)) {
            array_push($this->openAPINullablesSetToNull, 'post_it_commercial');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('post_it_commercial', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['post_it_commercial'] = $post_it_commercial;

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
     * @param string|null $infos_adf infos_adf
     *
     * @return $this
     */
    public function setInfosAdf(?string $infos_adf): static
    {
        if (is_null($infos_adf)) {
            array_push($this->openAPINullablesSetToNull, 'infos_adf');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('infos_adf', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['infos_adf'] = $infos_adf;

        return $this;
    }

    /**
     * Gets unread_notifications_count
     *
     * @return string|null
     */
    public function getUnreadNotificationsCount(): ?string
    {
        return $this->container['unread_notifications_count'];
    }

    /**
     * Sets unread_notifications_count
     *
     * @param string|null $unread_notifications_count unread_notifications_count
     *
     * @return $this
     */
    public function setUnreadNotificationsCount(?string $unread_notifications_count): static
    {
        if (is_null($unread_notifications_count)) {
            array_push($this->openAPINullablesSetToNull, 'unread_notifications_count');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('unread_notifications_count', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['unread_notifications_count'] = $unread_notifications_count;

        return $this;
    }

    /**
     * Gets auto_validate_inscriptions
     *
     * @return bool|null
     */
    public function getAutoValidateInscriptions(): ?bool
    {
        return $this->container['auto_validate_inscriptions'];
    }

    /**
     * Sets auto_validate_inscriptions
     *
     * @param bool|null $auto_validate_inscriptions auto_validate_inscriptions
     *
     * @return $this
     */
    public function setAutoValidateInscriptions(?bool $auto_validate_inscriptions): static
    {
        if (is_null($auto_validate_inscriptions)) {
            throw new InvalidArgumentException('non-nullable auto_validate_inscriptions cannot be null');
        }
        $this->container['auto_validate_inscriptions'] = $auto_validate_inscriptions;

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
     * Gets administrateur_add
     *
     * @return \Dbout\DendreoSdk\Model\Administrateur|null
     */
    public function getAdministrateurAdd(): ?\Dbout\DendreoSdk\Model\Administrateur
    {
        return $this->container['administrateur_add'];
    }

    /**
     * Sets administrateur_add
     *
     * @param \Dbout\DendreoSdk\Model\Administrateur|null $administrateur_add Présent uniquement avec `include=administrateurAdd`.
     *
     * @return $this
     */
    public function setAdministrateurAdd(?\Dbout\DendreoSdk\Model\Administrateur $administrateur_add): static
    {
        if (is_null($administrateur_add)) {
            array_push($this->openAPINullablesSetToNull, 'administrateur_add');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('administrateur_add', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['administrateur_add'] = $administrateur_add;

        return $this;
    }

    /**
     * Gets administrateur_edit
     *
     * @return \Dbout\DendreoSdk\Model\Administrateur|null
     */
    public function getAdministrateurEdit(): ?\Dbout\DendreoSdk\Model\Administrateur
    {
        return $this->container['administrateur_edit'];
    }

    /**
     * Sets administrateur_edit
     *
     * @param \Dbout\DendreoSdk\Model\Administrateur|null $administrateur_edit Présent uniquement avec `include=administrateurEdit`.
     *
     * @return $this
     */
    public function setAdministrateurEdit(?\Dbout\DendreoSdk\Model\Administrateur $administrateur_edit): static
    {
        if (is_null($administrateur_edit)) {
            array_push($this->openAPINullablesSetToNull, 'administrateur_edit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('administrateur_edit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['administrateur_edit'] = $administrateur_edit;

        return $this;
    }

    /**
     * Gets administrateur_delete
     *
     * @return \Dbout\DendreoSdk\Model\Administrateur|null
     */
    public function getAdministrateurDelete(): ?\Dbout\DendreoSdk\Model\Administrateur
    {
        return $this->container['administrateur_delete'];
    }

    /**
     * Sets administrateur_delete
     *
     * @param \Dbout\DendreoSdk\Model\Administrateur|null $administrateur_delete Présent uniquement avec `include=administrateurDelete`.
     *
     * @return $this
     */
    public function setAdministrateurDelete(?\Dbout\DendreoSdk\Model\Administrateur $administrateur_delete): static
    {
        if (is_null($administrateur_delete)) {
            array_push($this->openAPINullablesSetToNull, 'administrateur_delete');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('administrateur_delete', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['administrateur_delete'] = $administrateur_delete;

        return $this;
    }

    /**
     * Gets centres
     *
     * @return \Dbout\DendreoSdk\Model\CentresDeFormation[]|null
     */
    public function getCentres(): ?array
    {
        return $this->container['centres'];
    }

    /**
     * Sets centres
     *
     * @param \Dbout\DendreoSdk\Model\CentresDeFormation[]|null $centres Présent uniquement avec `include=centres`. Renvoyé seulement si le compte gère plusieurs centres de formation.
     *
     * @return $this
     */
    public function setCentres(?array $centres): static
    {
        if (is_null($centres)) {
            throw new InvalidArgumentException('non-nullable centres cannot be null');
        }
        $this->container['centres'] = $centres;

        return $this;
    }

    /**
     * Gets code_naf
     *
     * @return object|null
     */
    public function getCodeNaf(): ?object
    {
        return $this->container['code_naf'];
    }

    /**
     * Sets code_naf
     *
     * @param object|null $code_naf Présent uniquement sur les endpoints Entreprises et avec `include=entreprise` des actions commerciales. Code NAF : `id`, `code` et `intitule`.
     *
     * @return $this
     */
    public function setCodeNaf(?object $code_naf): static
    {
        if (is_null($code_naf)) {
            array_push($this->openAPINullablesSetToNull, 'code_naf');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('code_naf', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['code_naf'] = $code_naf;

        return $this;
    }

    /**
     * Gets stats
     *
     * @return object|null
     */
    public function getStats(): ?object
    {
        return $this->container['stats'];
    }

    /**
     * Sets stats
     *
     * @param object|null $stats Présent uniquement avec `include=stats`. Chiffre d'affaires facturé (`ca_facture`), généré en formation (`ca_genere_formation`) et recettes prévisionnelles comprises (`recettes_with_previsionnal`), en nombres arrondis à deux décimales, `null` sans montant.
     *
     * @return $this
     */
    public function setStats(?object $stats): static
    {
        if (is_null($stats)) {
            array_push($this->openAPINullablesSetToNull, 'stats');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('stats', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['stats'] = $stats;

        return $this;
    }

    /**
     * Gets client_interne
     *
     * @return bool|null
     */
    public function getClientInterne(): ?bool
    {
        return $this->container['client_interne'];
    }

    /**
     * Sets client_interne
     *
     * @param bool|null $client_interne Présent uniquement si la facturation différenciée des clients internes est activée sur le compte.
     *
     * @return $this
     */
    public function setClientInterne(?bool $client_interne): static
    {
        if (is_null($client_interne)) {
            array_push($this->openAPINullablesSetToNull, 'client_interne');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('client_interne', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['client_interne'] = $client_interne;

        return $this;
    }

    /**
     * Gets id_opca
     *
     * @return int|null
     */
    public function getIdOpca(): ?int
    {
        return $this->container['id_opca'];
    }

    /**
     * Sets id_opca
     *
     * @param int|null $id_opca Présent uniquement quand `mode_financement_par_defaut` vaut `opca`.
     *
     * @return $this
     */
    public function setIdOpca(?int $id_opca): static
    {
        if (is_null($id_opca)) {
            array_push($this->openAPINullablesSetToNull, 'id_opca');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_opca', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id_opca'] = $id_opca;

        return $this;
    }

    /**
     * Gets id_opca_interlocuteur
     *
     * @return int|null
     */
    public function getIdOpcaInterlocuteur(): ?int
    {
        return $this->container['id_opca_interlocuteur'];
    }

    /**
     * Sets id_opca_interlocuteur
     *
     * @param int|null $id_opca_interlocuteur Présent uniquement quand `mode_financement_par_defaut` vaut `opca`.
     *
     * @return $this
     */
    public function setIdOpcaInterlocuteur(?int $id_opca_interlocuteur): static
    {
        if (is_null($id_opca_interlocuteur)) {
            array_push($this->openAPINullablesSetToNull, 'id_opca_interlocuteur');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_opca_interlocuteur', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id_opca_interlocuteur'] = $id_opca_interlocuteur;

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
     * @param string|null $message_extranet Présent uniquement si l'extranet client est activé sur le compte.
     *
     * @return $this
     */
    public function setMessageExtranet(?string $message_extranet): static
    {
        if (is_null($message_extranet)) {
            array_push($this->openAPINullablesSetToNull, 'message_extranet');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('message_extranet', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['message_extranet'] = $message_extranet;

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
     * @param string|null $formateurs_mode_remu Présent uniquement pour une entreprise fournisseur (`fournisseur` à `true`).
     *
     * @return $this
     */
    public function setFormateursModeRemu(?string $formateurs_mode_remu): static
    {
        if (is_null($formateurs_mode_remu)) {
            array_push($this->openAPINullablesSetToNull, 'formateurs_mode_remu');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('formateurs_mode_remu', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['formateurs_mode_remu'] = $formateurs_mode_remu;

        return $this;
    }

    /**
     * Gets formateurs_remu_horaire_par_defaut
     *
     * @return float|null
     */
    public function getFormateursRemuHoraireParDefaut(): ?float
    {
        return $this->container['formateurs_remu_horaire_par_defaut'];
    }

    /**
     * Sets formateurs_remu_horaire_par_defaut
     *
     * @param float|null $formateurs_remu_horaire_par_defaut Présent uniquement pour une entreprise fournisseur (`fournisseur` à `true`).
     *
     * @return $this
     */
    public function setFormateursRemuHoraireParDefaut(?float $formateurs_remu_horaire_par_defaut): static
    {
        if (is_null($formateurs_remu_horaire_par_defaut)) {
            array_push($this->openAPINullablesSetToNull, 'formateurs_remu_horaire_par_defaut');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('formateurs_remu_horaire_par_defaut', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['formateurs_remu_horaire_par_defaut'] = $formateurs_remu_horaire_par_defaut;

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
     * @param string|null $numero_compte_fournisseur Présent uniquement pour une entreprise fournisseur (`fournisseur` à `true`).
     *
     * @return $this
     */
    public function setNumeroCompteFournisseur(?string $numero_compte_fournisseur): static
    {
        if (is_null($numero_compte_fournisseur)) {
            array_push($this->openAPINullablesSetToNull, 'numero_compte_fournisseur');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('numero_compte_fournisseur', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param string|null $numero_compte_fournisseur_auxiliaire Présent uniquement pour une entreprise fournisseur (`fournisseur` à `true`).
     *
     * @return $this
     */
    public function setNumeroCompteFournisseurAuxiliaire(?string $numero_compte_fournisseur_auxiliaire): static
    {
        if (is_null($numero_compte_fournisseur_auxiliaire)) {
            array_push($this->openAPINullablesSetToNull, 'numero_compte_fournisseur_auxiliaire');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('numero_compte_fournisseur_auxiliaire', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['numero_compte_fournisseur_auxiliaire'] = $numero_compte_fournisseur_auxiliaire;

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
     * @param string|null $facturation_raison_sociale Présent uniquement quand une adresse de facturation différente est renseignée.
     *
     * @return $this
     */
    public function setFacturationRaisonSociale(?string $facturation_raison_sociale): static
    {
        if (is_null($facturation_raison_sociale)) {
            array_push($this->openAPINullablesSetToNull, 'facturation_raison_sociale');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('facturation_raison_sociale', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param string|null $facturation_adresse Présent uniquement quand une adresse de facturation différente est renseignée.
     *
     * @return $this
     */
    public function setFacturationAdresse(?string $facturation_adresse): static
    {
        if (is_null($facturation_adresse)) {
            array_push($this->openAPINullablesSetToNull, 'facturation_adresse');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('facturation_adresse', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param string|null $facturation_code_postal Présent uniquement quand une adresse de facturation différente est renseignée.
     *
     * @return $this
     */
    public function setFacturationCodePostal(?string $facturation_code_postal): static
    {
        if (is_null($facturation_code_postal)) {
            array_push($this->openAPINullablesSetToNull, 'facturation_code_postal');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('facturation_code_postal', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param string|null $facturation_ville Présent uniquement quand une adresse de facturation différente est renseignée.
     *
     * @return $this
     */
    public function setFacturationVille(?string $facturation_ville): static
    {
        if (is_null($facturation_ville)) {
            array_push($this->openAPINullablesSetToNull, 'facturation_ville');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('facturation_ville', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['facturation_ville'] = $facturation_ville;

        return $this;
    }

    /**
     * Gets facturation_pays
     *
     * @return string|null
     */
    public function getFacturationPays(): ?string
    {
        return $this->container['facturation_pays'];
    }

    /**
     * Sets facturation_pays
     *
     * @param string|null $facturation_pays Présent uniquement quand une adresse de facturation différente est renseignée.
     *
     * @return $this
     */
    public function setFacturationPays(?string $facturation_pays): static
    {
        if (is_null($facturation_pays)) {
            array_push($this->openAPINullablesSetToNull, 'facturation_pays');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('facturation_pays', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['facturation_pays'] = $facturation_pays;

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
     * @param string|null $facturation_pays_alpha2 Présent uniquement quand une adresse de facturation différente est renseignée.
     *
     * @return $this
     */
    public function setFacturationPaysAlpha2(?string $facturation_pays_alpha2): static
    {
        if (is_null($facturation_pays_alpha2)) {
            array_push($this->openAPINullablesSetToNull, 'facturation_pays_alpha2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('facturation_pays_alpha2', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['facturation_pays_alpha2'] = $facturation_pays_alpha2;

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
     * @param string|null $num_tva_intra Présent uniquement quand `num_tva_intra_auto` est vrai.
     *
     * @return $this
     */
    public function setNumTvaIntra(?string $num_tva_intra): static
    {
        if (is_null($num_tva_intra)) {
            array_push($this->openAPINullablesSetToNull, 'num_tva_intra');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('num_tva_intra', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['num_tva_intra'] = $num_tva_intra;

        return $this;
    }

    /**
     * Gets hidden
     *
     * @return bool|null
     */
    public function getHidden(): ?bool
    {
        return $this->container['hidden'];
    }

    /**
     * Sets hidden
     *
     * @param bool|null $hidden hidden
     *
     * @return $this
     */
    public function setHidden(?bool $hidden): static
    {
        if (is_null($hidden)) {
            throw new InvalidArgumentException('non-nullable hidden cannot be null');
        }
        $this->container['hidden'] = $hidden;

        return $this;
    }

    /**
     * Gets nom_commercial
     *
     * @return string|null
     */
    public function getNomCommercial(): ?string
    {
        return $this->container['nom_commercial'];
    }

    /**
     * Sets nom_commercial
     *
     * @param string|null $nom_commercial nom_commercial
     *
     * @return $this
     */
    public function setNomCommercial(?string $nom_commercial): static
    {
        if (is_null($nom_commercial)) {
            throw new InvalidArgumentException('non-nullable nom_commercial cannot be null');
        }
        $this->container['nom_commercial'] = $nom_commercial;

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


