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
 * Participant Class Doc Comment
 *
 * Generated from the Dendreo OpenAPI specification, do not edit manually.
 *
 * @description Les champs additionnels du compte sont ajoutés à la ressource, sous leur nom de champ.
 * @package  Dbout\DendreoSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class Participant implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Participant';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'civilite' => 'string',
        'nom' => 'string',
        'prenom' => 'string',
        'email' => 'string',
        'commentaires' => 'string',
        'numero_compte_client' => 'string',
        'numero_compte_client_auxiliaire' => 'string',
        'infos_adf' => 'string',
        'portable' => 'string',
        'fonction' => 'string',
        'statut_bpf' => 'string',
        'niveau_diplome' => 'string',
        'date_de_naissance' => '\DateTime',
        'ville_naissance' => 'string',
        'departement_naissance' => 'string',
        'adresse' => 'string',
        'code_postal' => 'string',
        'ville' => 'string',
        'pays_alpha2' => 'string',
        'id_entreprise' => 'int',
        'particulier' => 'bool',
        'id_externe' => 'string',
        'global_visible' => 'bool',
        'id_contact' => 'int',
        'formateur_lie_id' => 'int',
        'newsletter_optin' => 'bool',
        'nom_naissance' => 'string',
        'pays_naissance_alpha2' => 'string',
        'num_forprev' => 'string',
        'numero_secu' => 'string',
        'langue_principale' => 'string',
        'langues_secondaires' => 'string[]',
        'post_it_commercial' => 'string',
        'ical_url' => 'string',
        'id_centre_de_formation' => 'string',
        'pays' => 'string',
        'pays_naissance' => 'string',
        'responsable_type' => 'string',
        'responsable_id' => 'int',
        'created_at' => '\DateTime',
        'id_add' => 'int',
        'updated_at' => '\DateTime',
        'id_edit' => 'int',
        'deleted_at' => '\DateTime',
        'id_delete' => 'int',
        'photo_url' => 'string',
        'entreprise' => '\Dbout\DendreoSdk\Model\Entreprise',
        'contact' => '\Dbout\DendreoSdk\Model\Contact',
        'formateur_lie' => '\Dbout\DendreoSdk\Model\Formateur',
        'centres' => '\Dbout\DendreoSdk\Model\CentresDeFormation[]',
        'lmsuniversel_user_id' => 'string',
        'tslearning_user_id' => 'string',
        'riseup_user_id' => 'int',
        'moodle_user_id' => 'int',
        'thinkific_user_id' => 'int',
        'dokeos_user_id' => 'int',
        'extranet_url' => 'string',
        'extranet_code' => 'string',
        'extranet_autologin_url' => 'string',
        'message_extranet' => 'string',
        'ogdpc_adeli' => 'string',
        'ogdpc_rpps' => 'string',
        'ogdpc_id_specialite' => 'int',
        'mode_dexercice_dominant' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'civilite' => null,
        'nom' => null,
        'prenom' => null,
        'email' => null,
        'commentaires' => null,
        'numero_compte_client' => null,
        'numero_compte_client_auxiliaire' => null,
        'infos_adf' => null,
        'portable' => null,
        'fonction' => null,
        'statut_bpf' => null,
        'niveau_diplome' => null,
        'date_de_naissance' => 'date',
        'ville_naissance' => null,
        'departement_naissance' => null,
        'adresse' => null,
        'code_postal' => null,
        'ville' => null,
        'pays_alpha2' => null,
        'id_entreprise' => null,
        'particulier' => null,
        'id_externe' => null,
        'global_visible' => null,
        'id_contact' => null,
        'formateur_lie_id' => null,
        'newsletter_optin' => null,
        'nom_naissance' => null,
        'pays_naissance_alpha2' => null,
        'num_forprev' => null,
        'numero_secu' => null,
        'langue_principale' => null,
        'langues_secondaires' => null,
        'post_it_commercial' => null,
        'ical_url' => null,
        'id_centre_de_formation' => null,
        'pays' => null,
        'pays_naissance' => null,
        'responsable_type' => null,
        'responsable_id' => null,
        'created_at' => 'date-time',
        'id_add' => null,
        'updated_at' => 'date-time',
        'id_edit' => null,
        'deleted_at' => 'date-time',
        'id_delete' => null,
        'photo_url' => null,
        'entreprise' => null,
        'contact' => null,
        'formateur_lie' => null,
        'centres' => null,
        'lmsuniversel_user_id' => null,
        'tslearning_user_id' => null,
        'riseup_user_id' => null,
        'moodle_user_id' => null,
        'thinkific_user_id' => null,
        'dokeos_user_id' => null,
        'extranet_url' => null,
        'extranet_code' => null,
        'extranet_autologin_url' => null,
        'message_extranet' => null,
        'ogdpc_adeli' => null,
        'ogdpc_rpps' => null,
        'ogdpc_id_specialite' => null,
        'mode_dexercice_dominant' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'civilite' => false,
        'nom' => false,
        'prenom' => false,
        'email' => false,
        'commentaires' => true,
        'numero_compte_client' => true,
        'numero_compte_client_auxiliaire' => true,
        'infos_adf' => true,
        'portable' => false,
        'fonction' => true,
        'statut_bpf' => false,
        'niveau_diplome' => true,
        'date_de_naissance' => true,
        'ville_naissance' => true,
        'departement_naissance' => true,
        'adresse' => false,
        'code_postal' => false,
        'ville' => false,
        'pays_alpha2' => false,
        'id_entreprise' => false,
        'particulier' => false,
        'id_externe' => true,
        'global_visible' => false,
        'id_contact' => true,
        'formateur_lie_id' => true,
        'newsletter_optin' => false,
        'nom_naissance' => true,
        'pays_naissance_alpha2' => true,
        'num_forprev' => true,
        'numero_secu' => true,
        'langue_principale' => true,
        'langues_secondaires' => false,
        'post_it_commercial' => true,
        'ical_url' => false,
        'id_centre_de_formation' => false,
        'pays' => false,
        'pays_naissance' => true,
        'responsable_type' => true,
        'responsable_id' => true,
        'created_at' => true,
        'id_add' => true,
        'updated_at' => true,
        'id_edit' => true,
        'deleted_at' => true,
        'id_delete' => true,
        'photo_url' => true,
        'entreprise' => true,
        'contact' => true,
        'formateur_lie' => true,
        'centres' => false,
        'lmsuniversel_user_id' => true,
        'tslearning_user_id' => true,
        'riseup_user_id' => true,
        'moodle_user_id' => true,
        'thinkific_user_id' => true,
        'dokeos_user_id' => true,
        'extranet_url' => true,
        'extranet_code' => true,
        'extranet_autologin_url' => true,
        'message_extranet' => true,
        'ogdpc_adeli' => true,
        'ogdpc_rpps' => true,
        'ogdpc_id_specialite' => true,
        'mode_dexercice_dominant' => true
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
        'civilite' => 'civilite',
        'nom' => 'nom',
        'prenom' => 'prenom',
        'email' => 'email',
        'commentaires' => 'commentaires',
        'numero_compte_client' => 'numero_compte_client',
        'numero_compte_client_auxiliaire' => 'numero_compte_client_auxiliaire',
        'infos_adf' => 'infos_adf',
        'portable' => 'portable',
        'fonction' => 'fonction',
        'statut_bpf' => 'statut_bpf',
        'niveau_diplome' => 'niveau_diplome',
        'date_de_naissance' => 'date_de_naissance',
        'ville_naissance' => 'ville_naissance',
        'departement_naissance' => 'departement_naissance',
        'adresse' => 'adresse',
        'code_postal' => 'code_postal',
        'ville' => 'ville',
        'pays_alpha2' => 'pays_alpha2',
        'id_entreprise' => 'id_entreprise',
        'particulier' => 'particulier',
        'id_externe' => 'id_externe',
        'global_visible' => 'global_visible',
        'id_contact' => 'id_contact',
        'formateur_lie_id' => 'formateur_lie_id',
        'newsletter_optin' => 'newsletter_optin',
        'nom_naissance' => 'nom_naissance',
        'pays_naissance_alpha2' => 'pays_naissance_alpha2',
        'num_forprev' => 'num_forprev',
        'numero_secu' => 'numero_secu',
        'langue_principale' => 'langue_principale',
        'langues_secondaires' => 'langues_secondaires',
        'post_it_commercial' => 'post_it_commercial',
        'ical_url' => 'ical_url',
        'id_centre_de_formation' => 'id_centre_de_formation',
        'pays' => 'pays',
        'pays_naissance' => 'pays_naissance',
        'responsable_type' => 'responsable_type',
        'responsable_id' => 'responsable_id',
        'created_at' => 'created_at',
        'id_add' => 'id_add',
        'updated_at' => 'updated_at',
        'id_edit' => 'id_edit',
        'deleted_at' => 'deleted_at',
        'id_delete' => 'id_delete',
        'photo_url' => 'photo_url',
        'entreprise' => 'entreprise',
        'contact' => 'contact',
        'formateur_lie' => 'formateur_lie',
        'centres' => 'centres',
        'lmsuniversel_user_id' => 'lmsuniversel_user_id',
        'tslearning_user_id' => 'tslearning_user_id',
        'riseup_user_id' => 'riseup_user_id',
        'moodle_user_id' => 'moodle_user_id',
        'thinkific_user_id' => 'thinkific_user_id',
        'dokeos_user_id' => 'dokeos_user_id',
        'extranet_url' => 'extranet_url',
        'extranet_code' => 'extranet_code',
        'extranet_autologin_url' => 'extranet_autologin_url',
        'message_extranet' => 'message_extranet',
        'ogdpc_adeli' => 'ogdpc_adeli',
        'ogdpc_rpps' => 'ogdpc_rpps',
        'ogdpc_id_specialite' => 'ogdpc_id_specialite',
        'mode_dexercice_dominant' => 'mode_dexercice_dominant'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'civilite' => 'setCivilite',
        'nom' => 'setNom',
        'prenom' => 'setPrenom',
        'email' => 'setEmail',
        'commentaires' => 'setCommentaires',
        'numero_compte_client' => 'setNumeroCompteClient',
        'numero_compte_client_auxiliaire' => 'setNumeroCompteClientAuxiliaire',
        'infos_adf' => 'setInfosAdf',
        'portable' => 'setPortable',
        'fonction' => 'setFonction',
        'statut_bpf' => 'setStatutBpf',
        'niveau_diplome' => 'setNiveauDiplome',
        'date_de_naissance' => 'setDateDeNaissance',
        'ville_naissance' => 'setVilleNaissance',
        'departement_naissance' => 'setDepartementNaissance',
        'adresse' => 'setAdresse',
        'code_postal' => 'setCodePostal',
        'ville' => 'setVille',
        'pays_alpha2' => 'setPaysAlpha2',
        'id_entreprise' => 'setIdEntreprise',
        'particulier' => 'setParticulier',
        'id_externe' => 'setIdExterne',
        'global_visible' => 'setGlobalVisible',
        'id_contact' => 'setIdContact',
        'formateur_lie_id' => 'setFormateurLieId',
        'newsletter_optin' => 'setNewsletterOptin',
        'nom_naissance' => 'setNomNaissance',
        'pays_naissance_alpha2' => 'setPaysNaissanceAlpha2',
        'num_forprev' => 'setNumForprev',
        'numero_secu' => 'setNumeroSecu',
        'langue_principale' => 'setLanguePrincipale',
        'langues_secondaires' => 'setLanguesSecondaires',
        'post_it_commercial' => 'setPostItCommercial',
        'ical_url' => 'setIcalUrl',
        'id_centre_de_formation' => 'setIdCentreDeFormation',
        'pays' => 'setPays',
        'pays_naissance' => 'setPaysNaissance',
        'responsable_type' => 'setResponsableType',
        'responsable_id' => 'setResponsableId',
        'created_at' => 'setCreatedAt',
        'id_add' => 'setIdAdd',
        'updated_at' => 'setUpdatedAt',
        'id_edit' => 'setIdEdit',
        'deleted_at' => 'setDeletedAt',
        'id_delete' => 'setIdDelete',
        'photo_url' => 'setPhotoUrl',
        'entreprise' => 'setEntreprise',
        'contact' => 'setContact',
        'formateur_lie' => 'setFormateurLie',
        'centres' => 'setCentres',
        'lmsuniversel_user_id' => 'setLmsuniverselUserId',
        'tslearning_user_id' => 'setTslearningUserId',
        'riseup_user_id' => 'setRiseupUserId',
        'moodle_user_id' => 'setMoodleUserId',
        'thinkific_user_id' => 'setThinkificUserId',
        'dokeos_user_id' => 'setDokeosUserId',
        'extranet_url' => 'setExtranetUrl',
        'extranet_code' => 'setExtranetCode',
        'extranet_autologin_url' => 'setExtranetAutologinUrl',
        'message_extranet' => 'setMessageExtranet',
        'ogdpc_adeli' => 'setOgdpcAdeli',
        'ogdpc_rpps' => 'setOgdpcRpps',
        'ogdpc_id_specialite' => 'setOgdpcIdSpecialite',
        'mode_dexercice_dominant' => 'setModeDexerciceDominant'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'civilite' => 'getCivilite',
        'nom' => 'getNom',
        'prenom' => 'getPrenom',
        'email' => 'getEmail',
        'commentaires' => 'getCommentaires',
        'numero_compte_client' => 'getNumeroCompteClient',
        'numero_compte_client_auxiliaire' => 'getNumeroCompteClientAuxiliaire',
        'infos_adf' => 'getInfosAdf',
        'portable' => 'getPortable',
        'fonction' => 'getFonction',
        'statut_bpf' => 'getStatutBpf',
        'niveau_diplome' => 'getNiveauDiplome',
        'date_de_naissance' => 'getDateDeNaissance',
        'ville_naissance' => 'getVilleNaissance',
        'departement_naissance' => 'getDepartementNaissance',
        'adresse' => 'getAdresse',
        'code_postal' => 'getCodePostal',
        'ville' => 'getVille',
        'pays_alpha2' => 'getPaysAlpha2',
        'id_entreprise' => 'getIdEntreprise',
        'particulier' => 'getParticulier',
        'id_externe' => 'getIdExterne',
        'global_visible' => 'getGlobalVisible',
        'id_contact' => 'getIdContact',
        'formateur_lie_id' => 'getFormateurLieId',
        'newsletter_optin' => 'getNewsletterOptin',
        'nom_naissance' => 'getNomNaissance',
        'pays_naissance_alpha2' => 'getPaysNaissanceAlpha2',
        'num_forprev' => 'getNumForprev',
        'numero_secu' => 'getNumeroSecu',
        'langue_principale' => 'getLanguePrincipale',
        'langues_secondaires' => 'getLanguesSecondaires',
        'post_it_commercial' => 'getPostItCommercial',
        'ical_url' => 'getIcalUrl',
        'id_centre_de_formation' => 'getIdCentreDeFormation',
        'pays' => 'getPays',
        'pays_naissance' => 'getPaysNaissance',
        'responsable_type' => 'getResponsableType',
        'responsable_id' => 'getResponsableId',
        'created_at' => 'getCreatedAt',
        'id_add' => 'getIdAdd',
        'updated_at' => 'getUpdatedAt',
        'id_edit' => 'getIdEdit',
        'deleted_at' => 'getDeletedAt',
        'id_delete' => 'getIdDelete',
        'photo_url' => 'getPhotoUrl',
        'entreprise' => 'getEntreprise',
        'contact' => 'getContact',
        'formateur_lie' => 'getFormateurLie',
        'centres' => 'getCentres',
        'lmsuniversel_user_id' => 'getLmsuniverselUserId',
        'tslearning_user_id' => 'getTslearningUserId',
        'riseup_user_id' => 'getRiseupUserId',
        'moodle_user_id' => 'getMoodleUserId',
        'thinkific_user_id' => 'getThinkificUserId',
        'dokeos_user_id' => 'getDokeosUserId',
        'extranet_url' => 'getExtranetUrl',
        'extranet_code' => 'getExtranetCode',
        'extranet_autologin_url' => 'getExtranetAutologinUrl',
        'message_extranet' => 'getMessageExtranet',
        'ogdpc_adeli' => 'getOgdpcAdeli',
        'ogdpc_rpps' => 'getOgdpcRpps',
        'ogdpc_id_specialite' => 'getOgdpcIdSpecialite',
        'mode_dexercice_dominant' => 'getModeDexerciceDominant'
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
        $this->setIfExists('civilite', $data ?? [], null);
        $this->setIfExists('nom', $data ?? [], null);
        $this->setIfExists('prenom', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('commentaires', $data ?? [], null);
        $this->setIfExists('numero_compte_client', $data ?? [], null);
        $this->setIfExists('numero_compte_client_auxiliaire', $data ?? [], null);
        $this->setIfExists('infos_adf', $data ?? [], null);
        $this->setIfExists('portable', $data ?? [], null);
        $this->setIfExists('fonction', $data ?? [], null);
        $this->setIfExists('statut_bpf', $data ?? [], null);
        $this->setIfExists('niveau_diplome', $data ?? [], null);
        $this->setIfExists('date_de_naissance', $data ?? [], null);
        $this->setIfExists('ville_naissance', $data ?? [], null);
        $this->setIfExists('departement_naissance', $data ?? [], null);
        $this->setIfExists('adresse', $data ?? [], null);
        $this->setIfExists('code_postal', $data ?? [], null);
        $this->setIfExists('ville', $data ?? [], null);
        $this->setIfExists('pays_alpha2', $data ?? [], null);
        $this->setIfExists('id_entreprise', $data ?? [], null);
        $this->setIfExists('particulier', $data ?? [], null);
        $this->setIfExists('id_externe', $data ?? [], null);
        $this->setIfExists('global_visible', $data ?? [], null);
        $this->setIfExists('id_contact', $data ?? [], null);
        $this->setIfExists('formateur_lie_id', $data ?? [], null);
        $this->setIfExists('newsletter_optin', $data ?? [], null);
        $this->setIfExists('nom_naissance', $data ?? [], null);
        $this->setIfExists('pays_naissance_alpha2', $data ?? [], null);
        $this->setIfExists('num_forprev', $data ?? [], null);
        $this->setIfExists('numero_secu', $data ?? [], null);
        $this->setIfExists('langue_principale', $data ?? [], null);
        $this->setIfExists('langues_secondaires', $data ?? [], null);
        $this->setIfExists('post_it_commercial', $data ?? [], null);
        $this->setIfExists('ical_url', $data ?? [], null);
        $this->setIfExists('id_centre_de_formation', $data ?? [], null);
        $this->setIfExists('pays', $data ?? [], null);
        $this->setIfExists('pays_naissance', $data ?? [], null);
        $this->setIfExists('responsable_type', $data ?? [], null);
        $this->setIfExists('responsable_id', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('id_add', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('id_edit', $data ?? [], null);
        $this->setIfExists('deleted_at', $data ?? [], null);
        $this->setIfExists('id_delete', $data ?? [], null);
        $this->setIfExists('photo_url', $data ?? [], null);
        $this->setIfExists('entreprise', $data ?? [], null);
        $this->setIfExists('contact', $data ?? [], null);
        $this->setIfExists('formateur_lie', $data ?? [], null);
        $this->setIfExists('centres', $data ?? [], null);
        $this->setIfExists('lmsuniversel_user_id', $data ?? [], null);
        $this->setIfExists('tslearning_user_id', $data ?? [], null);
        $this->setIfExists('riseup_user_id', $data ?? [], null);
        $this->setIfExists('moodle_user_id', $data ?? [], null);
        $this->setIfExists('thinkific_user_id', $data ?? [], null);
        $this->setIfExists('dokeos_user_id', $data ?? [], null);
        $this->setIfExists('extranet_url', $data ?? [], null);
        $this->setIfExists('extranet_code', $data ?? [], null);
        $this->setIfExists('extranet_autologin_url', $data ?? [], null);
        $this->setIfExists('message_extranet', $data ?? [], null);
        $this->setIfExists('ogdpc_adeli', $data ?? [], null);
        $this->setIfExists('ogdpc_rpps', $data ?? [], null);
        $this->setIfExists('ogdpc_id_specialite', $data ?? [], null);
        $this->setIfExists('mode_dexercice_dominant', $data ?? [], null);
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
     * Gets civilite
     *
     * @return string|null
     */
    public function getCivilite(): ?string
    {
        return $this->container['civilite'];
    }

    /**
     * Sets civilite
     *
     * @param string|null $civilite civilite
     *
     * @return $this
     */
    public function setCivilite(?string $civilite): static
    {
        if (is_null($civilite)) {
            throw new InvalidArgumentException('non-nullable civilite cannot be null');
        }
        $this->container['civilite'] = $civilite;

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
     * @param string|null $prenom prenom
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
     * Gets email
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return $this
     */
    public function setEmail(?string $email): static
    {
        if (is_null($email)) {
            throw new InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

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
     * Gets portable
     *
     * @return string|null
     */
    public function getPortable(): ?string
    {
        return $this->container['portable'];
    }

    /**
     * Sets portable
     *
     * @param string|null $portable portable
     *
     * @return $this
     */
    public function setPortable(?string $portable): static
    {
        if (is_null($portable)) {
            throw new InvalidArgumentException('non-nullable portable cannot be null');
        }
        $this->container['portable'] = $portable;

        return $this;
    }

    /**
     * Gets fonction
     *
     * @return string|null
     */
    public function getFonction(): ?string
    {
        return $this->container['fonction'];
    }

    /**
     * Sets fonction
     *
     * @param string|null $fonction fonction
     *
     * @return $this
     */
    public function setFonction(?string $fonction): static
    {
        if (is_null($fonction)) {
            array_push($this->openAPINullablesSetToNull, 'fonction');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fonction', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['fonction'] = $fonction;

        return $this;
    }

    /**
     * Gets statut_bpf
     *
     * @return string|null
     */
    public function getStatutBpf(): ?string
    {
        return $this->container['statut_bpf'];
    }

    /**
     * Sets statut_bpf
     *
     * @param string|null $statut_bpf statut_bpf
     *
     * @return $this
     */
    public function setStatutBpf(?string $statut_bpf): static
    {
        if (is_null($statut_bpf)) {
            throw new InvalidArgumentException('non-nullable statut_bpf cannot be null');
        }
        $this->container['statut_bpf'] = $statut_bpf;

        return $this;
    }

    /**
     * Gets niveau_diplome
     *
     * @return string|null
     */
    public function getNiveauDiplome(): ?string
    {
        return $this->container['niveau_diplome'];
    }

    /**
     * Sets niveau_diplome
     *
     * @param string|null $niveau_diplome niveau_diplome
     *
     * @return $this
     */
    public function setNiveauDiplome(?string $niveau_diplome): static
    {
        if (is_null($niveau_diplome)) {
            array_push($this->openAPINullablesSetToNull, 'niveau_diplome');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('niveau_diplome', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['niveau_diplome'] = $niveau_diplome;

        return $this;
    }

    /**
     * Gets date_de_naissance
     *
     * @return \DateTime|null
     */
    public function getDateDeNaissance(): ?\DateTime
    {
        return $this->container['date_de_naissance'];
    }

    /**
     * Sets date_de_naissance
     *
     * @param \DateTime|null $date_de_naissance date_de_naissance
     *
     * @return $this
     */
    public function setDateDeNaissance(?\DateTime $date_de_naissance): static
    {
        if (is_null($date_de_naissance)) {
            array_push($this->openAPINullablesSetToNull, 'date_de_naissance');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date_de_naissance', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['date_de_naissance'] = $date_de_naissance;

        return $this;
    }

    /**
     * Gets ville_naissance
     *
     * @return string|null
     */
    public function getVilleNaissance(): ?string
    {
        return $this->container['ville_naissance'];
    }

    /**
     * Sets ville_naissance
     *
     * @param string|null $ville_naissance ville_naissance
     *
     * @return $this
     */
    public function setVilleNaissance(?string $ville_naissance): static
    {
        if (is_null($ville_naissance)) {
            array_push($this->openAPINullablesSetToNull, 'ville_naissance');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ville_naissance', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ville_naissance'] = $ville_naissance;

        return $this;
    }

    /**
     * Gets departement_naissance
     *
     * @return string|null
     */
    public function getDepartementNaissance(): ?string
    {
        return $this->container['departement_naissance'];
    }

    /**
     * Sets departement_naissance
     *
     * @param string|null $departement_naissance departement_naissance
     *
     * @return $this
     */
    public function setDepartementNaissance(?string $departement_naissance): static
    {
        if (is_null($departement_naissance)) {
            array_push($this->openAPINullablesSetToNull, 'departement_naissance');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('departement_naissance', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['departement_naissance'] = $departement_naissance;

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
            throw new InvalidArgumentException('non-nullable pays_alpha2 cannot be null');
        }
        $this->container['pays_alpha2'] = $pays_alpha2;

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
            throw new InvalidArgumentException('non-nullable id_entreprise cannot be null');
        }
        $this->container['id_entreprise'] = $id_entreprise;

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
     * Gets formateur_lie_id
     *
     * @return int|null
     */
    public function getFormateurLieId(): ?int
    {
        return $this->container['formateur_lie_id'];
    }

    /**
     * Sets formateur_lie_id
     *
     * @param int|null $formateur_lie_id formateur_lie_id
     *
     * @return $this
     */
    public function setFormateurLieId(?int $formateur_lie_id): static
    {
        if (is_null($formateur_lie_id)) {
            array_push($this->openAPINullablesSetToNull, 'formateur_lie_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('formateur_lie_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['formateur_lie_id'] = $formateur_lie_id;

        return $this;
    }

    /**
     * Gets newsletter_optin
     *
     * @return bool|null
     */
    public function getNewsletterOptin(): ?bool
    {
        return $this->container['newsletter_optin'];
    }

    /**
     * Sets newsletter_optin
     *
     * @param bool|null $newsletter_optin newsletter_optin
     *
     * @return $this
     */
    public function setNewsletterOptin(?bool $newsletter_optin): static
    {
        if (is_null($newsletter_optin)) {
            throw new InvalidArgumentException('non-nullable newsletter_optin cannot be null');
        }
        $this->container['newsletter_optin'] = $newsletter_optin;

        return $this;
    }

    /**
     * Gets nom_naissance
     *
     * @return string|null
     */
    public function getNomNaissance(): ?string
    {
        return $this->container['nom_naissance'];
    }

    /**
     * Sets nom_naissance
     *
     * @param string|null $nom_naissance nom_naissance
     *
     * @return $this
     */
    public function setNomNaissance(?string $nom_naissance): static
    {
        if (is_null($nom_naissance)) {
            array_push($this->openAPINullablesSetToNull, 'nom_naissance');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nom_naissance', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nom_naissance'] = $nom_naissance;

        return $this;
    }

    /**
     * Gets pays_naissance_alpha2
     *
     * @return string|null
     */
    public function getPaysNaissanceAlpha2(): ?string
    {
        return $this->container['pays_naissance_alpha2'];
    }

    /**
     * Sets pays_naissance_alpha2
     *
     * @param string|null $pays_naissance_alpha2 pays_naissance_alpha2
     *
     * @return $this
     */
    public function setPaysNaissanceAlpha2(?string $pays_naissance_alpha2): static
    {
        if (is_null($pays_naissance_alpha2)) {
            array_push($this->openAPINullablesSetToNull, 'pays_naissance_alpha2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pays_naissance_alpha2', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pays_naissance_alpha2'] = $pays_naissance_alpha2;

        return $this;
    }

    /**
     * Gets num_forprev
     *
     * @return string|null
     */
    public function getNumForprev(): ?string
    {
        return $this->container['num_forprev'];
    }

    /**
     * Sets num_forprev
     *
     * @param string|null $num_forprev num_forprev
     *
     * @return $this
     */
    public function setNumForprev(?string $num_forprev): static
    {
        if (is_null($num_forprev)) {
            array_push($this->openAPINullablesSetToNull, 'num_forprev');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('num_forprev', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['num_forprev'] = $num_forprev;

        return $this;
    }

    /**
     * Gets numero_secu
     *
     * @return string|null
     */
    public function getNumeroSecu(): ?string
    {
        return $this->container['numero_secu'];
    }

    /**
     * Sets numero_secu
     *
     * @param string|null $numero_secu numero_secu
     *
     * @return $this
     */
    public function setNumeroSecu(?string $numero_secu): static
    {
        if (is_null($numero_secu)) {
            array_push($this->openAPINullablesSetToNull, 'numero_secu');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('numero_secu', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['numero_secu'] = $numero_secu;

        return $this;
    }

    /**
     * Gets langue_principale
     *
     * @return string|null
     */
    public function getLanguePrincipale(): ?string
    {
        return $this->container['langue_principale'];
    }

    /**
     * Sets langue_principale
     *
     * @param string|null $langue_principale langue_principale
     *
     * @return $this
     */
    public function setLanguePrincipale(?string $langue_principale): static
    {
        if (is_null($langue_principale)) {
            array_push($this->openAPINullablesSetToNull, 'langue_principale');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('langue_principale', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['langue_principale'] = $langue_principale;

        return $this;
    }

    /**
     * Gets langues_secondaires
     *
     * @return string[]|null
     */
    public function getLanguesSecondaires(): ?array
    {
        return $this->container['langues_secondaires'];
    }

    /**
     * Sets langues_secondaires
     *
     * @param string[]|null $langues_secondaires Codes des langues secondaires du participant.
     *
     * @return $this
     */
    public function setLanguesSecondaires(?array $langues_secondaires): static
    {
        if (is_null($langues_secondaires)) {
            throw new InvalidArgumentException('non-nullable langues_secondaires cannot be null');
        }
        $this->container['langues_secondaires'] = $langues_secondaires;

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
     * Gets id_centre_de_formation
     *
     * @return string|null
     */
    public function getIdCentreDeFormation(): ?string
    {
        return $this->container['id_centre_de_formation'];
    }

    /**
     * Sets id_centre_de_formation
     *
     * @param string|null $id_centre_de_formation Identifiants des centres de formation du participant, séparés par des virgules (`1,3`), ou `0` quand il est visible de tous les centres. Le détail des centres est renvoyé par `include=centres`.
     *
     * @return $this
     */
    public function setIdCentreDeFormation(?string $id_centre_de_formation): static
    {
        if (is_null($id_centre_de_formation)) {
            throw new InvalidArgumentException('non-nullable id_centre_de_formation cannot be null');
        }
        $this->container['id_centre_de_formation'] = $id_centre_de_formation;

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
            throw new InvalidArgumentException('non-nullable pays cannot be null');
        }
        $this->container['pays'] = $pays;

        return $this;
    }

    /**
     * Gets pays_naissance
     *
     * @return string|null
     */
    public function getPaysNaissance(): ?string
    {
        return $this->container['pays_naissance'];
    }

    /**
     * Sets pays_naissance
     *
     * @param string|null $pays_naissance pays_naissance
     *
     * @return $this
     */
    public function setPaysNaissance(?string $pays_naissance): static
    {
        if (is_null($pays_naissance)) {
            array_push($this->openAPINullablesSetToNull, 'pays_naissance');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pays_naissance', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pays_naissance'] = $pays_naissance;

        return $this;
    }

    /**
     * Gets responsable_type
     *
     * @return string|null
     */
    public function getResponsableType(): ?string
    {
        return $this->container['responsable_type'];
    }

    /**
     * Sets responsable_type
     *
     * @param string|null $responsable_type Présent uniquement pour un salarié (`particulier` à `false`).
     *
     * @return $this
     */
    public function setResponsableType(?string $responsable_type): static
    {
        if (is_null($responsable_type)) {
            array_push($this->openAPINullablesSetToNull, 'responsable_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('responsable_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['responsable_type'] = $responsable_type;

        return $this;
    }

    /**
     * Gets responsable_id
     *
     * @return int|null
     */
    public function getResponsableId(): ?int
    {
        return $this->container['responsable_id'];
    }

    /**
     * Sets responsable_id
     *
     * @param int|null $responsable_id Présent uniquement pour un salarié (`particulier` à `false`).
     *
     * @return $this
     */
    public function setResponsableId(?int $responsable_id): static
    {
        if (is_null($responsable_id)) {
            array_push($this->openAPINullablesSetToNull, 'responsable_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('responsable_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['responsable_id'] = $responsable_id;

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
     * Gets photo_url
     *
     * @return string|null
     */
    public function getPhotoUrl(): ?string
    {
        return $this->container['photo_url'];
    }

    /**
     * Sets photo_url
     *
     * @param string|null $photo_url Présent uniquement avec `include=media`. URL de la photo du participant.
     *
     * @return $this
     */
    public function setPhotoUrl(?string $photo_url): static
    {
        if (is_null($photo_url)) {
            array_push($this->openAPINullablesSetToNull, 'photo_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('photo_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['photo_url'] = $photo_url;

        return $this;
    }

    /**
     * Gets entreprise
     *
     * @return \Dbout\DendreoSdk\Model\Entreprise|null
     */
    public function getEntreprise(): ?\Dbout\DendreoSdk\Model\Entreprise
    {
        return $this->container['entreprise'];
    }

    /**
     * Sets entreprise
     *
     * @param \Dbout\DendreoSdk\Model\Entreprise|null $entreprise Présent uniquement avec `include=entreprise`.
     *
     * @return $this
     */
    public function setEntreprise(?\Dbout\DendreoSdk\Model\Entreprise $entreprise): static
    {
        if (is_null($entreprise)) {
            array_push($this->openAPINullablesSetToNull, 'entreprise');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('entreprise', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['entreprise'] = $entreprise;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return \Dbout\DendreoSdk\Model\Contact|null
     */
    public function getContact(): ?\Dbout\DendreoSdk\Model\Contact
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \Dbout\DendreoSdk\Model\Contact|null $contact Présent uniquement avec `include=contact`.
     *
     * @return $this
     */
    public function setContact(?\Dbout\DendreoSdk\Model\Contact $contact): static
    {
        if (is_null($contact)) {
            array_push($this->openAPINullablesSetToNull, 'contact');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('contact', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets formateur_lie
     *
     * @return \Dbout\DendreoSdk\Model\Formateur|null
     */
    public function getFormateurLie(): ?\Dbout\DendreoSdk\Model\Formateur
    {
        return $this->container['formateur_lie'];
    }

    /**
     * Sets formateur_lie
     *
     * @param \Dbout\DendreoSdk\Model\Formateur|null $formateur_lie Présent uniquement avec `include=formateur_lie`.
     *
     * @return $this
     */
    public function setFormateurLie(?\Dbout\DendreoSdk\Model\Formateur $formateur_lie): static
    {
        if (is_null($formateur_lie)) {
            array_push($this->openAPINullablesSetToNull, 'formateur_lie');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('formateur_lie', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['formateur_lie'] = $formateur_lie;

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
     * Gets lmsuniversel_user_id
     *
     * @return string|null
     */
    public function getLmsuniverselUserId(): ?string
    {
        return $this->container['lmsuniversel_user_id'];
    }

    /**
     * Sets lmsuniversel_user_id
     *
     * @param string|null $lmsuniversel_user_id Présent uniquement si l'intégration LMS Universel est activée sur le compte.
     *
     * @return $this
     */
    public function setLmsuniverselUserId(?string $lmsuniversel_user_id): static
    {
        if (is_null($lmsuniversel_user_id)) {
            array_push($this->openAPINullablesSetToNull, 'lmsuniversel_user_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lmsuniversel_user_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['lmsuniversel_user_id'] = $lmsuniversel_user_id;

        return $this;
    }

    /**
     * Gets tslearning_user_id
     *
     * @return string|null
     */
    public function getTslearningUserId(): ?string
    {
        return $this->container['tslearning_user_id'];
    }

    /**
     * Sets tslearning_user_id
     *
     * @param string|null $tslearning_user_id Présent uniquement si l'intégration TSLearning est activée sur le compte.
     *
     * @return $this
     */
    public function setTslearningUserId(?string $tslearning_user_id): static
    {
        if (is_null($tslearning_user_id)) {
            array_push($this->openAPINullablesSetToNull, 'tslearning_user_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tslearning_user_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tslearning_user_id'] = $tslearning_user_id;

        return $this;
    }

    /**
     * Gets riseup_user_id
     *
     * @return int|null
     */
    public function getRiseupUserId(): ?int
    {
        return $this->container['riseup_user_id'];
    }

    /**
     * Sets riseup_user_id
     *
     * @param int|null $riseup_user_id Présent uniquement si l'intégration Rise Up est activée sur le compte.
     *
     * @return $this
     */
    public function setRiseupUserId(?int $riseup_user_id): static
    {
        if (is_null($riseup_user_id)) {
            array_push($this->openAPINullablesSetToNull, 'riseup_user_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('riseup_user_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['riseup_user_id'] = $riseup_user_id;

        return $this;
    }

    /**
     * Gets moodle_user_id
     *
     * @return int|null
     */
    public function getMoodleUserId(): ?int
    {
        return $this->container['moodle_user_id'];
    }

    /**
     * Sets moodle_user_id
     *
     * @param int|null $moodle_user_id Présent uniquement si l'intégration Moodle est activée sur le compte.
     *
     * @return $this
     */
    public function setMoodleUserId(?int $moodle_user_id): static
    {
        if (is_null($moodle_user_id)) {
            array_push($this->openAPINullablesSetToNull, 'moodle_user_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('moodle_user_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['moodle_user_id'] = $moodle_user_id;

        return $this;
    }

    /**
     * Gets thinkific_user_id
     *
     * @return int|null
     */
    public function getThinkificUserId(): ?int
    {
        return $this->container['thinkific_user_id'];
    }

    /**
     * Sets thinkific_user_id
     *
     * @param int|null $thinkific_user_id Présent uniquement si l'intégration Thinkific est activée sur le compte.
     *
     * @return $this
     */
    public function setThinkificUserId(?int $thinkific_user_id): static
    {
        if (is_null($thinkific_user_id)) {
            array_push($this->openAPINullablesSetToNull, 'thinkific_user_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('thinkific_user_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['thinkific_user_id'] = $thinkific_user_id;

        return $this;
    }

    /**
     * Gets dokeos_user_id
     *
     * @return int|null
     */
    public function getDokeosUserId(): ?int
    {
        return $this->container['dokeos_user_id'];
    }

    /**
     * Sets dokeos_user_id
     *
     * @param int|null $dokeos_user_id Présent uniquement si l'intégration Dokeos est activée sur le compte.
     *
     * @return $this
     */
    public function setDokeosUserId(?int $dokeos_user_id): static
    {
        if (is_null($dokeos_user_id)) {
            array_push($this->openAPINullablesSetToNull, 'dokeos_user_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dokeos_user_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dokeos_user_id'] = $dokeos_user_id;

        return $this;
    }

    /**
     * Gets extranet_url
     *
     * @return string|null
     */
    public function getExtranetUrl(): ?string
    {
        return $this->container['extranet_url'];
    }

    /**
     * Sets extranet_url
     *
     * @param string|null $extranet_url Présent uniquement si le participant a un accès à l'extranet.
     *
     * @return $this
     */
    public function setExtranetUrl(?string $extranet_url): static
    {
        if (is_null($extranet_url)) {
            array_push($this->openAPINullablesSetToNull, 'extranet_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('extranet_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['extranet_url'] = $extranet_url;

        return $this;
    }

    /**
     * Gets extranet_code
     *
     * @return string|null
     */
    public function getExtranetCode(): ?string
    {
        return $this->container['extranet_code'];
    }

    /**
     * Sets extranet_code
     *
     * @param string|null $extranet_code Présent uniquement si le participant a un accès à l'extranet.
     *
     * @return $this
     */
    public function setExtranetCode(?string $extranet_code): static
    {
        if (is_null($extranet_code)) {
            array_push($this->openAPINullablesSetToNull, 'extranet_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('extranet_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['extranet_code'] = $extranet_code;

        return $this;
    }

    /**
     * Gets extranet_autologin_url
     *
     * @return string|null
     */
    public function getExtranetAutologinUrl(): ?string
    {
        return $this->container['extranet_autologin_url'];
    }

    /**
     * Sets extranet_autologin_url
     *
     * @param string|null $extranet_autologin_url Présent uniquement si le participant a un accès à l'extranet.
     *
     * @return $this
     */
    public function setExtranetAutologinUrl(?string $extranet_autologin_url): static
    {
        if (is_null($extranet_autologin_url)) {
            array_push($this->openAPINullablesSetToNull, 'extranet_autologin_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('extranet_autologin_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['extranet_autologin_url'] = $extranet_autologin_url;

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
     * @param string|null $message_extranet Présent uniquement si le participant a un accès à l'extranet.
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
     * Gets ogdpc_adeli
     *
     * @return string|null
     */
    public function getOgdpcAdeli(): ?string
    {
        return $this->container['ogdpc_adeli'];
    }

    /**
     * Sets ogdpc_adeli
     *
     * @param string|null $ogdpc_adeli Présent uniquement si l'option OGDPC est activée sur le compte.
     *
     * @return $this
     */
    public function setOgdpcAdeli(?string $ogdpc_adeli): static
    {
        if (is_null($ogdpc_adeli)) {
            array_push($this->openAPINullablesSetToNull, 'ogdpc_adeli');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ogdpc_adeli', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ogdpc_adeli'] = $ogdpc_adeli;

        return $this;
    }

    /**
     * Gets ogdpc_rpps
     *
     * @return string|null
     */
    public function getOgdpcRpps(): ?string
    {
        return $this->container['ogdpc_rpps'];
    }

    /**
     * Sets ogdpc_rpps
     *
     * @param string|null $ogdpc_rpps Présent uniquement si l'option OGDPC est activée sur le compte.
     *
     * @return $this
     */
    public function setOgdpcRpps(?string $ogdpc_rpps): static
    {
        if (is_null($ogdpc_rpps)) {
            array_push($this->openAPINullablesSetToNull, 'ogdpc_rpps');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ogdpc_rpps', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ogdpc_rpps'] = $ogdpc_rpps;

        return $this;
    }

    /**
     * Gets ogdpc_id_specialite
     *
     * @return int|null
     */
    public function getOgdpcIdSpecialite(): ?int
    {
        return $this->container['ogdpc_id_specialite'];
    }

    /**
     * Sets ogdpc_id_specialite
     *
     * @param int|null $ogdpc_id_specialite Présent uniquement si l'option OGDPC est activée sur le compte.
     *
     * @return $this
     */
    public function setOgdpcIdSpecialite(?int $ogdpc_id_specialite): static
    {
        if (is_null($ogdpc_id_specialite)) {
            array_push($this->openAPINullablesSetToNull, 'ogdpc_id_specialite');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ogdpc_id_specialite', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ogdpc_id_specialite'] = $ogdpc_id_specialite;

        return $this;
    }

    /**
     * Gets mode_dexercice_dominant
     *
     * @return string|null
     */
    public function getModeDexerciceDominant(): ?string
    {
        return $this->container['mode_dexercice_dominant'];
    }

    /**
     * Sets mode_dexercice_dominant
     *
     * @param string|null $mode_dexercice_dominant Présent uniquement si l'option OGDPC est activée sur le compte.
     *
     * @return $this
     */
    public function setModeDexerciceDominant(?string $mode_dexercice_dominant): static
    {
        if (is_null($mode_dexercice_dominant)) {
            array_push($this->openAPINullablesSetToNull, 'mode_dexercice_dominant');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mode_dexercice_dominant', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['mode_dexercice_dominant'] = $mode_dexercice_dominant;

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


