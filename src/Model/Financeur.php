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
 * Financeur Class Doc Comment
 *
 * Generated from the Dendreo OpenAPI specification, do not edit manually.
 *
 * @description Les champs additionnels du compte sont ajoutés à la ressource, sous leur nom de champ.
 * @package  Dbout\DendreoSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class Financeur implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Financeur';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'opca' => 'bool',
        'raison_sociale' => 'string',
        'legal_scheme' => 'string',
        'legal_identifier' => 'string',
        'peppol_scheme' => 'string',
        'peppol_identifier' => 'string',
        'num_tva_intra' => 'string',
        'tva' => 'float',
        'description' => 'string',
        'cible' => 'string',
        'site_internet' => 'string',
        'adresse' => 'string',
        'code_postal' => 'string',
        'ville' => 'string',
        'telephone' => 'string',
        'pays_alpha2' => 'string',
        'pays' => 'string',
        'compte_client' => 'string',
        'compte_client_auxiliaire' => 'string',
        'numero_comptable_adf' => 'string',
        'contacts' => '\Dbout\DendreoSdk\Model\Contact[]',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'deleted_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'opca' => null,
        'raison_sociale' => null,
        'legal_scheme' => null,
        'legal_identifier' => null,
        'peppol_scheme' => null,
        'peppol_identifier' => null,
        'num_tva_intra' => null,
        'tva' => null,
        'description' => null,
        'cible' => null,
        'site_internet' => null,
        'adresse' => null,
        'code_postal' => null,
        'ville' => null,
        'telephone' => null,
        'pays_alpha2' => null,
        'pays' => null,
        'compte_client' => null,
        'compte_client_auxiliaire' => null,
        'numero_comptable_adf' => null,
        'contacts' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'deleted_at' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'opca' => false,
        'raison_sociale' => false,
        'legal_scheme' => false,
        'legal_identifier' => false,
        'peppol_scheme' => false,
        'peppol_identifier' => false,
        'num_tva_intra' => true,
        'tva' => true,
        'description' => true,
        'cible' => true,
        'site_internet' => true,
        'adresse' => true,
        'code_postal' => true,
        'ville' => true,
        'telephone' => true,
        'pays_alpha2' => false,
        'pays' => false,
        'compte_client' => true,
        'compte_client_auxiliaire' => true,
        'numero_comptable_adf' => true,
        'contacts' => false,
        'created_at' => true,
        'updated_at' => true,
        'deleted_at' => true
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
        'opca' => 'opca',
        'raison_sociale' => 'raison_sociale',
        'legal_scheme' => 'legal_scheme',
        'legal_identifier' => 'legal_identifier',
        'peppol_scheme' => 'peppol_scheme',
        'peppol_identifier' => 'peppol_identifier',
        'num_tva_intra' => 'num_tva_intra',
        'tva' => 'tva',
        'description' => 'description',
        'cible' => 'cible',
        'site_internet' => 'site_internet',
        'adresse' => 'adresse',
        'code_postal' => 'code_postal',
        'ville' => 'ville',
        'telephone' => 'telephone',
        'pays_alpha2' => 'pays_alpha2',
        'pays' => 'pays',
        'compte_client' => 'compte_client',
        'compte_client_auxiliaire' => 'compte_client_auxiliaire',
        'numero_comptable_adf' => 'numero_comptable_adf',
        'contacts' => 'contacts',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'deleted_at' => 'deleted_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'opca' => 'setOpca',
        'raison_sociale' => 'setRaisonSociale',
        'legal_scheme' => 'setLegalScheme',
        'legal_identifier' => 'setLegalIdentifier',
        'peppol_scheme' => 'setPeppolScheme',
        'peppol_identifier' => 'setPeppolIdentifier',
        'num_tva_intra' => 'setNumTvaIntra',
        'tva' => 'setTva',
        'description' => 'setDescription',
        'cible' => 'setCible',
        'site_internet' => 'setSiteInternet',
        'adresse' => 'setAdresse',
        'code_postal' => 'setCodePostal',
        'ville' => 'setVille',
        'telephone' => 'setTelephone',
        'pays_alpha2' => 'setPaysAlpha2',
        'pays' => 'setPays',
        'compte_client' => 'setCompteClient',
        'compte_client_auxiliaire' => 'setCompteClientAuxiliaire',
        'numero_comptable_adf' => 'setNumeroComptableAdf',
        'contacts' => 'setContacts',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'deleted_at' => 'setDeletedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'opca' => 'getOpca',
        'raison_sociale' => 'getRaisonSociale',
        'legal_scheme' => 'getLegalScheme',
        'legal_identifier' => 'getLegalIdentifier',
        'peppol_scheme' => 'getPeppolScheme',
        'peppol_identifier' => 'getPeppolIdentifier',
        'num_tva_intra' => 'getNumTvaIntra',
        'tva' => 'getTva',
        'description' => 'getDescription',
        'cible' => 'getCible',
        'site_internet' => 'getSiteInternet',
        'adresse' => 'getAdresse',
        'code_postal' => 'getCodePostal',
        'ville' => 'getVille',
        'telephone' => 'getTelephone',
        'pays_alpha2' => 'getPaysAlpha2',
        'pays' => 'getPays',
        'compte_client' => 'getCompteClient',
        'compte_client_auxiliaire' => 'getCompteClientAuxiliaire',
        'numero_comptable_adf' => 'getNumeroComptableAdf',
        'contacts' => 'getContacts',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'deleted_at' => 'getDeletedAt'
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
        $this->setIfExists('opca', $data ?? [], null);
        $this->setIfExists('raison_sociale', $data ?? [], null);
        $this->setIfExists('legal_scheme', $data ?? [], null);
        $this->setIfExists('legal_identifier', $data ?? [], null);
        $this->setIfExists('peppol_scheme', $data ?? [], null);
        $this->setIfExists('peppol_identifier', $data ?? [], null);
        $this->setIfExists('num_tva_intra', $data ?? [], null);
        $this->setIfExists('tva', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('cible', $data ?? [], null);
        $this->setIfExists('site_internet', $data ?? [], null);
        $this->setIfExists('adresse', $data ?? [], null);
        $this->setIfExists('code_postal', $data ?? [], null);
        $this->setIfExists('ville', $data ?? [], null);
        $this->setIfExists('telephone', $data ?? [], null);
        $this->setIfExists('pays_alpha2', $data ?? [], null);
        $this->setIfExists('pays', $data ?? [], null);
        $this->setIfExists('compte_client', $data ?? [], null);
        $this->setIfExists('compte_client_auxiliaire', $data ?? [], null);
        $this->setIfExists('numero_comptable_adf', $data ?? [], null);
        $this->setIfExists('contacts', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('deleted_at', $data ?? [], null);
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
     * Gets opca
     *
     * @return bool|null
     */
    public function getOpca(): ?bool
    {
        return $this->container['opca'];
    }

    /**
     * Sets opca
     *
     * @param bool|null $opca opca
     *
     * @return $this
     */
    public function setOpca(?bool $opca): static
    {
        if (is_null($opca)) {
            throw new InvalidArgumentException('non-nullable opca cannot be null');
        }
        $this->container['opca'] = $opca;

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
            throw new InvalidArgumentException('non-nullable raison_sociale cannot be null');
        }
        $this->container['raison_sociale'] = $raison_sociale;

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
     * @param string|null $num_tva_intra num_tva_intra
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
     * Gets tva
     *
     * @return float|null
     */
    public function getTva(): ?float
    {
        return $this->container['tva'];
    }

    /**
     * Sets tva
     *
     * @param float|null $tva tva
     *
     * @return $this
     */
    public function setTva(?float $tva): static
    {
        if (is_null($tva)) {
            array_push($this->openAPINullablesSetToNull, 'tva');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tva', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tva'] = $tva;

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
     * Gets cible
     *
     * @return string|null
     */
    public function getCible(): ?string
    {
        return $this->container['cible'];
    }

    /**
     * Sets cible
     *
     * @param string|null $cible cible
     *
     * @return $this
     */
    public function setCible(?string $cible): static
    {
        if (is_null($cible)) {
            array_push($this->openAPINullablesSetToNull, 'cible');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cible', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cible'] = $cible;

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
            array_push($this->openAPINullablesSetToNull, 'adresse');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('adresse', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
            array_push($this->openAPINullablesSetToNull, 'code_postal');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('code_postal', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
            array_push($this->openAPINullablesSetToNull, 'ville');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ville', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ville'] = $ville;

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
            array_push($this->openAPINullablesSetToNull, 'telephone');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('telephone', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['telephone'] = $telephone;

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
     * Gets compte_client
     *
     * @return string|null
     */
    public function getCompteClient(): ?string
    {
        return $this->container['compte_client'];
    }

    /**
     * Sets compte_client
     *
     * @param string|null $compte_client compte_client
     *
     * @return $this
     */
    public function setCompteClient(?string $compte_client): static
    {
        if (is_null($compte_client)) {
            array_push($this->openAPINullablesSetToNull, 'compte_client');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('compte_client', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['compte_client'] = $compte_client;

        return $this;
    }

    /**
     * Gets compte_client_auxiliaire
     *
     * @return string|null
     */
    public function getCompteClientAuxiliaire(): ?string
    {
        return $this->container['compte_client_auxiliaire'];
    }

    /**
     * Sets compte_client_auxiliaire
     *
     * @param string|null $compte_client_auxiliaire compte_client_auxiliaire
     *
     * @return $this
     */
    public function setCompteClientAuxiliaire(?string $compte_client_auxiliaire): static
    {
        if (is_null($compte_client_auxiliaire)) {
            array_push($this->openAPINullablesSetToNull, 'compte_client_auxiliaire');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('compte_client_auxiliaire', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['compte_client_auxiliaire'] = $compte_client_auxiliaire;

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
     * Gets contacts
     *
     * @return \Dbout\DendreoSdk\Model\Contact[]|null
     */
    public function getContacts(): ?array
    {
        return $this->container['contacts'];
    }

    /**
     * Sets contacts
     *
     * @param \Dbout\DendreoSdk\Model\Contact[]|null $contacts Présent uniquement avec `include=contacts`.
     *
     * @return $this
     */
    public function setContacts(?array $contacts): static
    {
        if (is_null($contacts)) {
            throw new InvalidArgumentException('non-nullable contacts cannot be null');
        }
        $this->container['contacts'] = $contacts;

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


