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
 * Formateur Class Doc Comment
 *
 * Generated from the Dendreo OpenAPI specification, do not edit manually.
 *
 * @description Les champs additionnels du compte sont ajoutés à la ressource, sous leur nom de champ.
 * @package  Dbout\DendreoSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class Formateur implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Formateur';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'user_id' => 'int',
        'anonyme' => 'string',
        'numero' => 'string',
        'numero_complet' => 'string',
        'numero_perso' => 'string',
        'numero_compte_fournisseur' => 'string',
        'numero_compte_fournisseur_auxiliaire' => 'string',
        'n_secu' => 'string',
        'civilite' => 'string',
        'nom' => 'string',
        'nom_jeune_fille' => 'string',
        'prenom' => 'string',
        'color' => 'string',
        'date_de_naissance' => '\DateTime',
        'lieu_de_naissance' => 'string',
        'nationalite' => 'string',
        'situation_familiale' => 'string',
        'adresse' => 'string',
        'code_postal' => 'string',
        'ville' => 'string',
        'pays_alpha2' => 'string',
        'pays' => 'string',
        'profession' => 'string',
        'invisible_catalogue' => 'string',
        'biographie_catalogue' => 'string',
        'telephone_perso' => 'string',
        'telephone_pro' => 'string',
        'email_perso' => 'string',
        'email_pro' => 'string',
        'statut' => 'string',
        'statut_bpf' => 'string',
        'mode_remu' => 'string',
        'remu_horaire_par_defaut' => 'float',
        'adeli_rpps' => 'string',
        'key_uniq' => 'string',
        'id_externe' => 'string',
        'global_visible' => 'string',
        'id_centre_de_formation' => 'string',
        'created_at' => '\DateTime',
        'id_add' => 'int',
        'updated_at' => '\DateTime',
        'id_edit' => 'int',
        'deleted_at' => '\DateTime',
        'id_delete' => 'int',
        'centres' => '\Dbout\DendreoSdk\Model\CentresDeFormation[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'user_id' => null,
        'anonyme' => null,
        'numero' => null,
        'numero_complet' => null,
        'numero_perso' => null,
        'numero_compte_fournisseur' => null,
        'numero_compte_fournisseur_auxiliaire' => null,
        'n_secu' => null,
        'civilite' => null,
        'nom' => null,
        'nom_jeune_fille' => null,
        'prenom' => null,
        'color' => null,
        'date_de_naissance' => 'date',
        'lieu_de_naissance' => null,
        'nationalite' => null,
        'situation_familiale' => null,
        'adresse' => null,
        'code_postal' => null,
        'ville' => null,
        'pays_alpha2' => null,
        'pays' => null,
        'profession' => null,
        'invisible_catalogue' => null,
        'biographie_catalogue' => null,
        'telephone_perso' => null,
        'telephone_pro' => null,
        'email_perso' => null,
        'email_pro' => null,
        'statut' => null,
        'statut_bpf' => null,
        'mode_remu' => null,
        'remu_horaire_par_defaut' => null,
        'adeli_rpps' => null,
        'key_uniq' => null,
        'id_externe' => null,
        'global_visible' => null,
        'id_centre_de_formation' => null,
        'created_at' => 'date-time',
        'id_add' => null,
        'updated_at' => 'date-time',
        'id_edit' => null,
        'deleted_at' => 'date-time',
        'id_delete' => null,
        'centres' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'user_id' => true,
        'anonyme' => false,
        'numero' => false,
        'numero_complet' => false,
        'numero_perso' => false,
        'numero_compte_fournisseur' => false,
        'numero_compte_fournisseur_auxiliaire' => false,
        'n_secu' => false,
        'civilite' => false,
        'nom' => false,
        'nom_jeune_fille' => false,
        'prenom' => false,
        'color' => false,
        'date_de_naissance' => true,
        'lieu_de_naissance' => false,
        'nationalite' => false,
        'situation_familiale' => false,
        'adresse' => false,
        'code_postal' => false,
        'ville' => false,
        'pays_alpha2' => false,
        'pays' => false,
        'profession' => false,
        'invisible_catalogue' => false,
        'biographie_catalogue' => false,
        'telephone_perso' => false,
        'telephone_pro' => false,
        'email_perso' => false,
        'email_pro' => false,
        'statut' => false,
        'statut_bpf' => false,
        'mode_remu' => false,
        'remu_horaire_par_defaut' => true,
        'adeli_rpps' => false,
        'key_uniq' => false,
        'id_externe' => false,
        'global_visible' => false,
        'id_centre_de_formation' => false,
        'created_at' => true,
        'id_add' => true,
        'updated_at' => true,
        'id_edit' => true,
        'deleted_at' => true,
        'id_delete' => true,
        'centres' => false
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
        'user_id' => 'user_id',
        'anonyme' => 'anonyme',
        'numero' => 'numero',
        'numero_complet' => 'numero_complet',
        'numero_perso' => 'numero_perso',
        'numero_compte_fournisseur' => 'numero_compte_fournisseur',
        'numero_compte_fournisseur_auxiliaire' => 'numero_compte_fournisseur_auxiliaire',
        'n_secu' => 'n_secu',
        'civilite' => 'civilite',
        'nom' => 'nom',
        'nom_jeune_fille' => 'nom_jeune_fille',
        'prenom' => 'prenom',
        'color' => 'color',
        'date_de_naissance' => 'date_de_naissance',
        'lieu_de_naissance' => 'lieu_de_naissance',
        'nationalite' => 'nationalite',
        'situation_familiale' => 'situation_familiale',
        'adresse' => 'adresse',
        'code_postal' => 'code_postal',
        'ville' => 'ville',
        'pays_alpha2' => 'pays_alpha2',
        'pays' => 'pays',
        'profession' => 'profession',
        'invisible_catalogue' => 'invisible_catalogue',
        'biographie_catalogue' => 'biographie_catalogue',
        'telephone_perso' => 'telephone_perso',
        'telephone_pro' => 'telephone_pro',
        'email_perso' => 'email_perso',
        'email_pro' => 'email_pro',
        'statut' => 'statut',
        'statut_bpf' => 'statut_bpf',
        'mode_remu' => 'mode_remu',
        'remu_horaire_par_defaut' => 'remu_horaire_par_defaut',
        'adeli_rpps' => 'adeli_rpps',
        'key_uniq' => 'key_uniq',
        'id_externe' => 'id_externe',
        'global_visible' => 'global_visible',
        'id_centre_de_formation' => 'id_centre_de_formation',
        'created_at' => 'created_at',
        'id_add' => 'id_add',
        'updated_at' => 'updated_at',
        'id_edit' => 'id_edit',
        'deleted_at' => 'deleted_at',
        'id_delete' => 'id_delete',
        'centres' => 'centres'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'user_id' => 'setUserId',
        'anonyme' => 'setAnonyme',
        'numero' => 'setNumero',
        'numero_complet' => 'setNumeroComplet',
        'numero_perso' => 'setNumeroPerso',
        'numero_compte_fournisseur' => 'setNumeroCompteFournisseur',
        'numero_compte_fournisseur_auxiliaire' => 'setNumeroCompteFournisseurAuxiliaire',
        'n_secu' => 'setNSecu',
        'civilite' => 'setCivilite',
        'nom' => 'setNom',
        'nom_jeune_fille' => 'setNomJeuneFille',
        'prenom' => 'setPrenom',
        'color' => 'setColor',
        'date_de_naissance' => 'setDateDeNaissance',
        'lieu_de_naissance' => 'setLieuDeNaissance',
        'nationalite' => 'setNationalite',
        'situation_familiale' => 'setSituationFamiliale',
        'adresse' => 'setAdresse',
        'code_postal' => 'setCodePostal',
        'ville' => 'setVille',
        'pays_alpha2' => 'setPaysAlpha2',
        'pays' => 'setPays',
        'profession' => 'setProfession',
        'invisible_catalogue' => 'setInvisibleCatalogue',
        'biographie_catalogue' => 'setBiographieCatalogue',
        'telephone_perso' => 'setTelephonePerso',
        'telephone_pro' => 'setTelephonePro',
        'email_perso' => 'setEmailPerso',
        'email_pro' => 'setEmailPro',
        'statut' => 'setStatut',
        'statut_bpf' => 'setStatutBpf',
        'mode_remu' => 'setModeRemu',
        'remu_horaire_par_defaut' => 'setRemuHoraireParDefaut',
        'adeli_rpps' => 'setAdeliRpps',
        'key_uniq' => 'setKeyUniq',
        'id_externe' => 'setIdExterne',
        'global_visible' => 'setGlobalVisible',
        'id_centre_de_formation' => 'setIdCentreDeFormation',
        'created_at' => 'setCreatedAt',
        'id_add' => 'setIdAdd',
        'updated_at' => 'setUpdatedAt',
        'id_edit' => 'setIdEdit',
        'deleted_at' => 'setDeletedAt',
        'id_delete' => 'setIdDelete',
        'centres' => 'setCentres'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'user_id' => 'getUserId',
        'anonyme' => 'getAnonyme',
        'numero' => 'getNumero',
        'numero_complet' => 'getNumeroComplet',
        'numero_perso' => 'getNumeroPerso',
        'numero_compte_fournisseur' => 'getNumeroCompteFournisseur',
        'numero_compte_fournisseur_auxiliaire' => 'getNumeroCompteFournisseurAuxiliaire',
        'n_secu' => 'getNSecu',
        'civilite' => 'getCivilite',
        'nom' => 'getNom',
        'nom_jeune_fille' => 'getNomJeuneFille',
        'prenom' => 'getPrenom',
        'color' => 'getColor',
        'date_de_naissance' => 'getDateDeNaissance',
        'lieu_de_naissance' => 'getLieuDeNaissance',
        'nationalite' => 'getNationalite',
        'situation_familiale' => 'getSituationFamiliale',
        'adresse' => 'getAdresse',
        'code_postal' => 'getCodePostal',
        'ville' => 'getVille',
        'pays_alpha2' => 'getPaysAlpha2',
        'pays' => 'getPays',
        'profession' => 'getProfession',
        'invisible_catalogue' => 'getInvisibleCatalogue',
        'biographie_catalogue' => 'getBiographieCatalogue',
        'telephone_perso' => 'getTelephonePerso',
        'telephone_pro' => 'getTelephonePro',
        'email_perso' => 'getEmailPerso',
        'email_pro' => 'getEmailPro',
        'statut' => 'getStatut',
        'statut_bpf' => 'getStatutBpf',
        'mode_remu' => 'getModeRemu',
        'remu_horaire_par_defaut' => 'getRemuHoraireParDefaut',
        'adeli_rpps' => 'getAdeliRpps',
        'key_uniq' => 'getKeyUniq',
        'id_externe' => 'getIdExterne',
        'global_visible' => 'getGlobalVisible',
        'id_centre_de_formation' => 'getIdCentreDeFormation',
        'created_at' => 'getCreatedAt',
        'id_add' => 'getIdAdd',
        'updated_at' => 'getUpdatedAt',
        'id_edit' => 'getIdEdit',
        'deleted_at' => 'getDeletedAt',
        'id_delete' => 'getIdDelete',
        'centres' => 'getCentres'
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
        $this->setIfExists('user_id', $data ?? [], null);
        $this->setIfExists('anonyme', $data ?? [], null);
        $this->setIfExists('numero', $data ?? [], null);
        $this->setIfExists('numero_complet', $data ?? [], null);
        $this->setIfExists('numero_perso', $data ?? [], null);
        $this->setIfExists('numero_compte_fournisseur', $data ?? [], null);
        $this->setIfExists('numero_compte_fournisseur_auxiliaire', $data ?? [], null);
        $this->setIfExists('n_secu', $data ?? [], null);
        $this->setIfExists('civilite', $data ?? [], null);
        $this->setIfExists('nom', $data ?? [], null);
        $this->setIfExists('nom_jeune_fille', $data ?? [], null);
        $this->setIfExists('prenom', $data ?? [], null);
        $this->setIfExists('color', $data ?? [], null);
        $this->setIfExists('date_de_naissance', $data ?? [], null);
        $this->setIfExists('lieu_de_naissance', $data ?? [], null);
        $this->setIfExists('nationalite', $data ?? [], null);
        $this->setIfExists('situation_familiale', $data ?? [], null);
        $this->setIfExists('adresse', $data ?? [], null);
        $this->setIfExists('code_postal', $data ?? [], null);
        $this->setIfExists('ville', $data ?? [], null);
        $this->setIfExists('pays_alpha2', $data ?? [], null);
        $this->setIfExists('pays', $data ?? [], null);
        $this->setIfExists('profession', $data ?? [], null);
        $this->setIfExists('invisible_catalogue', $data ?? [], null);
        $this->setIfExists('biographie_catalogue', $data ?? [], null);
        $this->setIfExists('telephone_perso', $data ?? [], null);
        $this->setIfExists('telephone_pro', $data ?? [], null);
        $this->setIfExists('email_perso', $data ?? [], null);
        $this->setIfExists('email_pro', $data ?? [], null);
        $this->setIfExists('statut', $data ?? [], null);
        $this->setIfExists('statut_bpf', $data ?? [], null);
        $this->setIfExists('mode_remu', $data ?? [], null);
        $this->setIfExists('remu_horaire_par_defaut', $data ?? [], null);
        $this->setIfExists('adeli_rpps', $data ?? [], null);
        $this->setIfExists('key_uniq', $data ?? [], null);
        $this->setIfExists('id_externe', $data ?? [], null);
        $this->setIfExists('global_visible', $data ?? [], null);
        $this->setIfExists('id_centre_de_formation', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('id_add', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('id_edit', $data ?? [], null);
        $this->setIfExists('deleted_at', $data ?? [], null);
        $this->setIfExists('id_delete', $data ?? [], null);
        $this->setIfExists('centres', $data ?? [], null);
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
     * Gets user_id
     *
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int|null $user_id user_id
     *
     * @return $this
     */
    public function setUserId(?int $user_id): static
    {
        if (is_null($user_id)) {
            array_push($this->openAPINullablesSetToNull, 'user_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('user_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets anonyme
     *
     * @return string|null
     */
    public function getAnonyme(): ?string
    {
        return $this->container['anonyme'];
    }

    /**
     * Sets anonyme
     *
     * @param string|null $anonyme anonyme
     *
     * @return $this
     */
    public function setAnonyme(?string $anonyme): static
    {
        if (is_null($anonyme)) {
            throw new InvalidArgumentException('non-nullable anonyme cannot be null');
        }
        $this->container['anonyme'] = $anonyme;

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
            throw new InvalidArgumentException('non-nullable numero_perso cannot be null');
        }
        $this->container['numero_perso'] = $numero_perso;

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
     * @param string|null $numero_compte_fournisseur numero_compte_fournisseur
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
     * @param string|null $numero_compte_fournisseur_auxiliaire numero_compte_fournisseur_auxiliaire
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
     * Gets n_secu
     *
     * @return string|null
     */
    public function getNSecu(): ?string
    {
        return $this->container['n_secu'];
    }

    /**
     * Sets n_secu
     *
     * @param string|null $n_secu n_secu
     *
     * @return $this
     */
    public function setNSecu(?string $n_secu): static
    {
        if (is_null($n_secu)) {
            throw new InvalidArgumentException('non-nullable n_secu cannot be null');
        }
        $this->container['n_secu'] = $n_secu;

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
     * Gets nom_jeune_fille
     *
     * @return string|null
     */
    public function getNomJeuneFille(): ?string
    {
        return $this->container['nom_jeune_fille'];
    }

    /**
     * Sets nom_jeune_fille
     *
     * @param string|null $nom_jeune_fille nom_jeune_fille
     *
     * @return $this
     */
    public function setNomJeuneFille(?string $nom_jeune_fille): static
    {
        if (is_null($nom_jeune_fille)) {
            throw new InvalidArgumentException('non-nullable nom_jeune_fille cannot be null');
        }
        $this->container['nom_jeune_fille'] = $nom_jeune_fille;

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
            throw new InvalidArgumentException('non-nullable color cannot be null');
        }
        $this->container['color'] = $color;

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
     * Gets lieu_de_naissance
     *
     * @return string|null
     */
    public function getLieuDeNaissance(): ?string
    {
        return $this->container['lieu_de_naissance'];
    }

    /**
     * Sets lieu_de_naissance
     *
     * @param string|null $lieu_de_naissance lieu_de_naissance
     *
     * @return $this
     */
    public function setLieuDeNaissance(?string $lieu_de_naissance): static
    {
        if (is_null($lieu_de_naissance)) {
            throw new InvalidArgumentException('non-nullable lieu_de_naissance cannot be null');
        }
        $this->container['lieu_de_naissance'] = $lieu_de_naissance;

        return $this;
    }

    /**
     * Gets nationalite
     *
     * @return string|null
     */
    public function getNationalite(): ?string
    {
        return $this->container['nationalite'];
    }

    /**
     * Sets nationalite
     *
     * @param string|null $nationalite nationalite
     *
     * @return $this
     */
    public function setNationalite(?string $nationalite): static
    {
        if (is_null($nationalite)) {
            throw new InvalidArgumentException('non-nullable nationalite cannot be null');
        }
        $this->container['nationalite'] = $nationalite;

        return $this;
    }

    /**
     * Gets situation_familiale
     *
     * @return string|null
     */
    public function getSituationFamiliale(): ?string
    {
        return $this->container['situation_familiale'];
    }

    /**
     * Sets situation_familiale
     *
     * @param string|null $situation_familiale situation_familiale
     *
     * @return $this
     */
    public function setSituationFamiliale(?string $situation_familiale): static
    {
        if (is_null($situation_familiale)) {
            throw new InvalidArgumentException('non-nullable situation_familiale cannot be null');
        }
        $this->container['situation_familiale'] = $situation_familiale;

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
     * Gets profession
     *
     * @return string|null
     */
    public function getProfession(): ?string
    {
        return $this->container['profession'];
    }

    /**
     * Sets profession
     *
     * @param string|null $profession profession
     *
     * @return $this
     */
    public function setProfession(?string $profession): static
    {
        if (is_null($profession)) {
            throw new InvalidArgumentException('non-nullable profession cannot be null');
        }
        $this->container['profession'] = $profession;

        return $this;
    }

    /**
     * Gets invisible_catalogue
     *
     * @return string|null
     */
    public function getInvisibleCatalogue(): ?string
    {
        return $this->container['invisible_catalogue'];
    }

    /**
     * Sets invisible_catalogue
     *
     * @param string|null $invisible_catalogue invisible_catalogue
     *
     * @return $this
     */
    public function setInvisibleCatalogue(?string $invisible_catalogue): static
    {
        if (is_null($invisible_catalogue)) {
            throw new InvalidArgumentException('non-nullable invisible_catalogue cannot be null');
        }
        $this->container['invisible_catalogue'] = $invisible_catalogue;

        return $this;
    }

    /**
     * Gets biographie_catalogue
     *
     * @return string|null
     */
    public function getBiographieCatalogue(): ?string
    {
        return $this->container['biographie_catalogue'];
    }

    /**
     * Sets biographie_catalogue
     *
     * @param string|null $biographie_catalogue biographie_catalogue
     *
     * @return $this
     */
    public function setBiographieCatalogue(?string $biographie_catalogue): static
    {
        if (is_null($biographie_catalogue)) {
            throw new InvalidArgumentException('non-nullable biographie_catalogue cannot be null');
        }
        $this->container['biographie_catalogue'] = $biographie_catalogue;

        return $this;
    }

    /**
     * Gets telephone_perso
     *
     * @return string|null
     */
    public function getTelephonePerso(): ?string
    {
        return $this->container['telephone_perso'];
    }

    /**
     * Sets telephone_perso
     *
     * @param string|null $telephone_perso telephone_perso
     *
     * @return $this
     */
    public function setTelephonePerso(?string $telephone_perso): static
    {
        if (is_null($telephone_perso)) {
            throw new InvalidArgumentException('non-nullable telephone_perso cannot be null');
        }
        $this->container['telephone_perso'] = $telephone_perso;

        return $this;
    }

    /**
     * Gets telephone_pro
     *
     * @return string|null
     */
    public function getTelephonePro(): ?string
    {
        return $this->container['telephone_pro'];
    }

    /**
     * Sets telephone_pro
     *
     * @param string|null $telephone_pro telephone_pro
     *
     * @return $this
     */
    public function setTelephonePro(?string $telephone_pro): static
    {
        if (is_null($telephone_pro)) {
            throw new InvalidArgumentException('non-nullable telephone_pro cannot be null');
        }
        $this->container['telephone_pro'] = $telephone_pro;

        return $this;
    }

    /**
     * Gets email_perso
     *
     * @return string|null
     */
    public function getEmailPerso(): ?string
    {
        return $this->container['email_perso'];
    }

    /**
     * Sets email_perso
     *
     * @param string|null $email_perso email_perso
     *
     * @return $this
     */
    public function setEmailPerso(?string $email_perso): static
    {
        if (is_null($email_perso)) {
            throw new InvalidArgumentException('non-nullable email_perso cannot be null');
        }
        $this->container['email_perso'] = $email_perso;

        return $this;
    }

    /**
     * Gets email_pro
     *
     * @return string|null
     */
    public function getEmailPro(): ?string
    {
        return $this->container['email_pro'];
    }

    /**
     * Sets email_pro
     *
     * @param string|null $email_pro email_pro
     *
     * @return $this
     */
    public function setEmailPro(?string $email_pro): static
    {
        if (is_null($email_pro)) {
            throw new InvalidArgumentException('non-nullable email_pro cannot be null');
        }
        $this->container['email_pro'] = $email_pro;

        return $this;
    }

    /**
     * Gets statut
     *
     * @return string|null
     */
    public function getStatut(): ?string
    {
        return $this->container['statut'];
    }

    /**
     * Sets statut
     *
     * @param string|null $statut statut
     *
     * @return $this
     */
    public function setStatut(?string $statut): static
    {
        if (is_null($statut)) {
            throw new InvalidArgumentException('non-nullable statut cannot be null');
        }
        $this->container['statut'] = $statut;

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
     * Gets mode_remu
     *
     * @return string|null
     */
    public function getModeRemu(): ?string
    {
        return $this->container['mode_remu'];
    }

    /**
     * Sets mode_remu
     *
     * @param string|null $mode_remu mode_remu
     *
     * @return $this
     */
    public function setModeRemu(?string $mode_remu): static
    {
        if (is_null($mode_remu)) {
            throw new InvalidArgumentException('non-nullable mode_remu cannot be null');
        }
        $this->container['mode_remu'] = $mode_remu;

        return $this;
    }

    /**
     * Gets remu_horaire_par_defaut
     *
     * @return float|null
     */
    public function getRemuHoraireParDefaut(): ?float
    {
        return $this->container['remu_horaire_par_defaut'];
    }

    /**
     * Sets remu_horaire_par_defaut
     *
     * @param float|null $remu_horaire_par_defaut remu_horaire_par_defaut
     *
     * @return $this
     */
    public function setRemuHoraireParDefaut(?float $remu_horaire_par_defaut): static
    {
        if (is_null($remu_horaire_par_defaut)) {
            array_push($this->openAPINullablesSetToNull, 'remu_horaire_par_defaut');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('remu_horaire_par_defaut', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['remu_horaire_par_defaut'] = $remu_horaire_par_defaut;

        return $this;
    }

    /**
     * Gets adeli_rpps
     *
     * @return string|null
     */
    public function getAdeliRpps(): ?string
    {
        return $this->container['adeli_rpps'];
    }

    /**
     * Sets adeli_rpps
     *
     * @param string|null $adeli_rpps adeli_rpps
     *
     * @return $this
     */
    public function setAdeliRpps(?string $adeli_rpps): static
    {
        if (is_null($adeli_rpps)) {
            throw new InvalidArgumentException('non-nullable adeli_rpps cannot be null');
        }
        $this->container['adeli_rpps'] = $adeli_rpps;

        return $this;
    }

    /**
     * Gets key_uniq
     *
     * @return string|null
     */
    public function getKeyUniq(): ?string
    {
        return $this->container['key_uniq'];
    }

    /**
     * Sets key_uniq
     *
     * @param string|null $key_uniq key_uniq
     *
     * @return $this
     */
    public function setKeyUniq(?string $key_uniq): static
    {
        if (is_null($key_uniq)) {
            throw new InvalidArgumentException('non-nullable key_uniq cannot be null');
        }
        $this->container['key_uniq'] = $key_uniq;

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
            throw new InvalidArgumentException('non-nullable id_externe cannot be null');
        }
        $this->container['id_externe'] = $id_externe;

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
     * @param string|null $global_visible global_visible
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
     * @param string|null $id_centre_de_formation id_centre_de_formation
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


