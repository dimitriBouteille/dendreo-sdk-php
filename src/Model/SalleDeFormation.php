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
 * SalleDeFormation Class Doc Comment
 *
 * Generated from the Dendreo OpenAPI specification, do not edit manually.
 *
 * @description Les champs additionnels du compte sont ajoutés à la ressource, sous leur nom de champ.
 * @package  Dbout\DendreoSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class SalleDeFormation implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'SalleDeFormation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'intitule' => 'string',
        'name' => 'string',
        'color' => 'string',
        'status' => 'string',
        'capacite_max' => 'int',
        'id_externe' => 'string',
        'inside' => 'bool',
        'elearning' => 'bool',
        'no_conflits' => 'bool',
        'invisible_catalogue' => 'bool',
        'commentaires_internes' => 'string',
        'adresse' => 'string',
        'code_postal' => 'string',
        'ville' => 'string',
        'pays' => 'string',
        'pays_alpha2' => 'string',
        'nom_contact' => 'string',
        'telephone' => 'string',
        'email' => 'string',
        'lien_google_maps' => 'string',
        'url_connexion' => 'string',
        'acces_handicapes' => 'string',
        'acces_handicapes_desc' => 'string',
        'acces' => 'string',
        'accueil' => 'string',
        'id_centre_de_formation' => 'string',
        'emplacement_cible' => 'string',
        'emplacement_type' => 'string',
        'emplacement_id' => 'int',
        'ical_url' => 'string',
        'image_map' => 'string',
        'pdf_map' => 'string',
        'visuel' => 'string',
        'created_at' => '\DateTime',
        'id_add' => 'int',
        'updated_at' => '\DateTime',
        'id_edit' => 'int',
        'deleted_at' => '\DateTime',
        'id_delete' => 'int',
        'emplacement' => '\Dbout\DendreoSdk\Model\SalleDeFormationEmplacement',
        'centres' => '\Dbout\DendreoSdk\Model\CentresDeFormation[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'intitule' => null,
        'name' => null,
        'color' => null,
        'status' => null,
        'capacite_max' => null,
        'id_externe' => null,
        'inside' => null,
        'elearning' => null,
        'no_conflits' => null,
        'invisible_catalogue' => null,
        'commentaires_internes' => null,
        'adresse' => null,
        'code_postal' => null,
        'ville' => null,
        'pays' => null,
        'pays_alpha2' => null,
        'nom_contact' => null,
        'telephone' => null,
        'email' => null,
        'lien_google_maps' => null,
        'url_connexion' => null,
        'acces_handicapes' => null,
        'acces_handicapes_desc' => null,
        'acces' => null,
        'accueil' => null,
        'id_centre_de_formation' => null,
        'emplacement_cible' => null,
        'emplacement_type' => null,
        'emplacement_id' => null,
        'ical_url' => null,
        'image_map' => null,
        'pdf_map' => null,
        'visuel' => null,
        'created_at' => 'date-time',
        'id_add' => null,
        'updated_at' => 'date-time',
        'id_edit' => null,
        'deleted_at' => 'date-time',
        'id_delete' => null,
        'emplacement' => null,
        'centres' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'intitule' => false,
        'name' => false,
        'color' => true,
        'status' => true,
        'capacite_max' => false,
        'id_externe' => true,
        'inside' => false,
        'elearning' => false,
        'no_conflits' => false,
        'invisible_catalogue' => false,
        'commentaires_internes' => true,
        'adresse' => true,
        'code_postal' => true,
        'ville' => true,
        'pays' => false,
        'pays_alpha2' => false,
        'nom_contact' => true,
        'telephone' => true,
        'email' => true,
        'lien_google_maps' => true,
        'url_connexion' => true,
        'acces_handicapes' => true,
        'acces_handicapes_desc' => true,
        'acces' => true,
        'accueil' => true,
        'id_centre_de_formation' => false,
        'emplacement_cible' => false,
        'emplacement_type' => false,
        'emplacement_id' => false,
        'ical_url' => false,
        'image_map' => true,
        'pdf_map' => true,
        'visuel' => true,
        'created_at' => true,
        'id_add' => true,
        'updated_at' => true,
        'id_edit' => true,
        'deleted_at' => true,
        'id_delete' => true,
        'emplacement' => true,
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
        'intitule' => 'intitule',
        'name' => 'name',
        'color' => 'color',
        'status' => 'status',
        'capacite_max' => 'capacite_max',
        'id_externe' => 'id_externe',
        'inside' => 'inside',
        'elearning' => 'elearning',
        'no_conflits' => 'no_conflits',
        'invisible_catalogue' => 'invisible_catalogue',
        'commentaires_internes' => 'commentaires_internes',
        'adresse' => 'adresse',
        'code_postal' => 'code_postal',
        'ville' => 'ville',
        'pays' => 'pays',
        'pays_alpha2' => 'pays_alpha2',
        'nom_contact' => 'nom_contact',
        'telephone' => 'telephone',
        'email' => 'email',
        'lien_google_maps' => 'lien_google_maps',
        'url_connexion' => 'url_connexion',
        'acces_handicapes' => 'acces_handicapes',
        'acces_handicapes_desc' => 'acces_handicapes_desc',
        'acces' => 'acces',
        'accueil' => 'accueil',
        'id_centre_de_formation' => 'id_centre_de_formation',
        'emplacement_cible' => 'emplacement_cible',
        'emplacement_type' => 'emplacement_type',
        'emplacement_id' => 'emplacement_id',
        'ical_url' => 'ical_url',
        'image_map' => 'image_map',
        'pdf_map' => 'pdf_map',
        'visuel' => 'visuel',
        'created_at' => 'created_at',
        'id_add' => 'id_add',
        'updated_at' => 'updated_at',
        'id_edit' => 'id_edit',
        'deleted_at' => 'deleted_at',
        'id_delete' => 'id_delete',
        'emplacement' => 'emplacement',
        'centres' => 'centres'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'intitule' => 'setIntitule',
        'name' => 'setName',
        'color' => 'setColor',
        'status' => 'setStatus',
        'capacite_max' => 'setCapaciteMax',
        'id_externe' => 'setIdExterne',
        'inside' => 'setInside',
        'elearning' => 'setElearning',
        'no_conflits' => 'setNoConflits',
        'invisible_catalogue' => 'setInvisibleCatalogue',
        'commentaires_internes' => 'setCommentairesInternes',
        'adresse' => 'setAdresse',
        'code_postal' => 'setCodePostal',
        'ville' => 'setVille',
        'pays' => 'setPays',
        'pays_alpha2' => 'setPaysAlpha2',
        'nom_contact' => 'setNomContact',
        'telephone' => 'setTelephone',
        'email' => 'setEmail',
        'lien_google_maps' => 'setLienGoogleMaps',
        'url_connexion' => 'setUrlConnexion',
        'acces_handicapes' => 'setAccesHandicapes',
        'acces_handicapes_desc' => 'setAccesHandicapesDesc',
        'acces' => 'setAcces',
        'accueil' => 'setAccueil',
        'id_centre_de_formation' => 'setIdCentreDeFormation',
        'emplacement_cible' => 'setEmplacementCible',
        'emplacement_type' => 'setEmplacementType',
        'emplacement_id' => 'setEmplacementId',
        'ical_url' => 'setIcalUrl',
        'image_map' => 'setImageMap',
        'pdf_map' => 'setPdfMap',
        'visuel' => 'setVisuel',
        'created_at' => 'setCreatedAt',
        'id_add' => 'setIdAdd',
        'updated_at' => 'setUpdatedAt',
        'id_edit' => 'setIdEdit',
        'deleted_at' => 'setDeletedAt',
        'id_delete' => 'setIdDelete',
        'emplacement' => 'setEmplacement',
        'centres' => 'setCentres'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'intitule' => 'getIntitule',
        'name' => 'getName',
        'color' => 'getColor',
        'status' => 'getStatus',
        'capacite_max' => 'getCapaciteMax',
        'id_externe' => 'getIdExterne',
        'inside' => 'getInside',
        'elearning' => 'getElearning',
        'no_conflits' => 'getNoConflits',
        'invisible_catalogue' => 'getInvisibleCatalogue',
        'commentaires_internes' => 'getCommentairesInternes',
        'adresse' => 'getAdresse',
        'code_postal' => 'getCodePostal',
        'ville' => 'getVille',
        'pays' => 'getPays',
        'pays_alpha2' => 'getPaysAlpha2',
        'nom_contact' => 'getNomContact',
        'telephone' => 'getTelephone',
        'email' => 'getEmail',
        'lien_google_maps' => 'getLienGoogleMaps',
        'url_connexion' => 'getUrlConnexion',
        'acces_handicapes' => 'getAccesHandicapes',
        'acces_handicapes_desc' => 'getAccesHandicapesDesc',
        'acces' => 'getAcces',
        'accueil' => 'getAccueil',
        'id_centre_de_formation' => 'getIdCentreDeFormation',
        'emplacement_cible' => 'getEmplacementCible',
        'emplacement_type' => 'getEmplacementType',
        'emplacement_id' => 'getEmplacementId',
        'ical_url' => 'getIcalUrl',
        'image_map' => 'getImageMap',
        'pdf_map' => 'getPdfMap',
        'visuel' => 'getVisuel',
        'created_at' => 'getCreatedAt',
        'id_add' => 'getIdAdd',
        'updated_at' => 'getUpdatedAt',
        'id_edit' => 'getIdEdit',
        'deleted_at' => 'getDeletedAt',
        'id_delete' => 'getIdDelete',
        'emplacement' => 'getEmplacement',
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
        $this->setIfExists('intitule', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('color', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('capacite_max', $data ?? [], null);
        $this->setIfExists('id_externe', $data ?? [], null);
        $this->setIfExists('inside', $data ?? [], null);
        $this->setIfExists('elearning', $data ?? [], null);
        $this->setIfExists('no_conflits', $data ?? [], null);
        $this->setIfExists('invisible_catalogue', $data ?? [], null);
        $this->setIfExists('commentaires_internes', $data ?? [], null);
        $this->setIfExists('adresse', $data ?? [], null);
        $this->setIfExists('code_postal', $data ?? [], null);
        $this->setIfExists('ville', $data ?? [], null);
        $this->setIfExists('pays', $data ?? [], null);
        $this->setIfExists('pays_alpha2', $data ?? [], null);
        $this->setIfExists('nom_contact', $data ?? [], null);
        $this->setIfExists('telephone', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('lien_google_maps', $data ?? [], null);
        $this->setIfExists('url_connexion', $data ?? [], null);
        $this->setIfExists('acces_handicapes', $data ?? [], null);
        $this->setIfExists('acces_handicapes_desc', $data ?? [], null);
        $this->setIfExists('acces', $data ?? [], null);
        $this->setIfExists('accueil', $data ?? [], null);
        $this->setIfExists('id_centre_de_formation', $data ?? [], null);
        $this->setIfExists('emplacement_cible', $data ?? [], null);
        $this->setIfExists('emplacement_type', $data ?? [], null);
        $this->setIfExists('emplacement_id', $data ?? [], null);
        $this->setIfExists('ical_url', $data ?? [], null);
        $this->setIfExists('image_map', $data ?? [], null);
        $this->setIfExists('pdf_map', $data ?? [], null);
        $this->setIfExists('visuel', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('id_add', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('id_edit', $data ?? [], null);
        $this->setIfExists('deleted_at', $data ?? [], null);
        $this->setIfExists('id_delete', $data ?? [], null);
        $this->setIfExists('emplacement', $data ?? [], null);
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
     * Gets name
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return $this
     */
    public function setName(?string $name): static
    {
        if (is_null($name)) {
            throw new InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

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
     * Gets status
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return $this
     */
    public function setStatus(?string $status): static
    {
        if (is_null($status)) {
            array_push($this->openAPINullablesSetToNull, 'status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets capacite_max
     *
     * @return int|null
     */
    public function getCapaciteMax(): ?int
    {
        return $this->container['capacite_max'];
    }

    /**
     * Sets capacite_max
     *
     * @param int|null $capacite_max capacite_max
     *
     * @return $this
     */
    public function setCapaciteMax(?int $capacite_max): static
    {
        if (is_null($capacite_max)) {
            throw new InvalidArgumentException('non-nullable capacite_max cannot be null');
        }
        $this->container['capacite_max'] = $capacite_max;

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
     * Gets inside
     *
     * @return bool|null
     */
    public function getInside(): ?bool
    {
        return $this->container['inside'];
    }

    /**
     * Sets inside
     *
     * @param bool|null $inside inside
     *
     * @return $this
     */
    public function setInside(?bool $inside): static
    {
        if (is_null($inside)) {
            throw new InvalidArgumentException('non-nullable inside cannot be null');
        }
        $this->container['inside'] = $inside;

        return $this;
    }

    /**
     * Gets elearning
     *
     * @return bool|null
     */
    public function getElearning(): ?bool
    {
        return $this->container['elearning'];
    }

    /**
     * Sets elearning
     *
     * @param bool|null $elearning elearning
     *
     * @return $this
     */
    public function setElearning(?bool $elearning): static
    {
        if (is_null($elearning)) {
            throw new InvalidArgumentException('non-nullable elearning cannot be null');
        }
        $this->container['elearning'] = $elearning;

        return $this;
    }

    /**
     * Gets no_conflits
     *
     * @return bool|null
     */
    public function getNoConflits(): ?bool
    {
        return $this->container['no_conflits'];
    }

    /**
     * Sets no_conflits
     *
     * @param bool|null $no_conflits no_conflits
     *
     * @return $this
     */
    public function setNoConflits(?bool $no_conflits): static
    {
        if (is_null($no_conflits)) {
            throw new InvalidArgumentException('non-nullable no_conflits cannot be null');
        }
        $this->container['no_conflits'] = $no_conflits;

        return $this;
    }

    /**
     * Gets invisible_catalogue
     *
     * @return bool|null
     */
    public function getInvisibleCatalogue(): ?bool
    {
        return $this->container['invisible_catalogue'];
    }

    /**
     * Sets invisible_catalogue
     *
     * @param bool|null $invisible_catalogue invisible_catalogue
     *
     * @return $this
     */
    public function setInvisibleCatalogue(?bool $invisible_catalogue): static
    {
        if (is_null($invisible_catalogue)) {
            throw new InvalidArgumentException('non-nullable invisible_catalogue cannot be null');
        }
        $this->container['invisible_catalogue'] = $invisible_catalogue;

        return $this;
    }

    /**
     * Gets commentaires_internes
     *
     * @return string|null
     */
    public function getCommentairesInternes(): ?string
    {
        return $this->container['commentaires_internes'];
    }

    /**
     * Sets commentaires_internes
     *
     * @param string|null $commentaires_internes commentaires_internes
     *
     * @return $this
     */
    public function setCommentairesInternes(?string $commentaires_internes): static
    {
        if (is_null($commentaires_internes)) {
            array_push($this->openAPINullablesSetToNull, 'commentaires_internes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('commentaires_internes', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['commentaires_internes'] = $commentaires_internes;

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
     * Gets nom_contact
     *
     * @return string|null
     */
    public function getNomContact(): ?string
    {
        return $this->container['nom_contact'];
    }

    /**
     * Sets nom_contact
     *
     * @param string|null $nom_contact nom_contact
     *
     * @return $this
     */
    public function setNomContact(?string $nom_contact): static
    {
        if (is_null($nom_contact)) {
            array_push($this->openAPINullablesSetToNull, 'nom_contact');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nom_contact', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nom_contact'] = $nom_contact;

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
            array_push($this->openAPINullablesSetToNull, 'email');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('email', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets lien_google_maps
     *
     * @return string|null
     */
    public function getLienGoogleMaps(): ?string
    {
        return $this->container['lien_google_maps'];
    }

    /**
     * Sets lien_google_maps
     *
     * @param string|null $lien_google_maps lien_google_maps
     *
     * @return $this
     */
    public function setLienGoogleMaps(?string $lien_google_maps): static
    {
        if (is_null($lien_google_maps)) {
            array_push($this->openAPINullablesSetToNull, 'lien_google_maps');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lien_google_maps', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['lien_google_maps'] = $lien_google_maps;

        return $this;
    }

    /**
     * Gets url_connexion
     *
     * @return string|null
     */
    public function getUrlConnexion(): ?string
    {
        return $this->container['url_connexion'];
    }

    /**
     * Sets url_connexion
     *
     * @param string|null $url_connexion url_connexion
     *
     * @return $this
     */
    public function setUrlConnexion(?string $url_connexion): static
    {
        if (is_null($url_connexion)) {
            array_push($this->openAPINullablesSetToNull, 'url_connexion');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('url_connexion', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['url_connexion'] = $url_connexion;

        return $this;
    }

    /**
     * Gets acces_handicapes
     *
     * @return string|null
     */
    public function getAccesHandicapes(): ?string
    {
        return $this->container['acces_handicapes'];
    }

    /**
     * Sets acces_handicapes
     *
     * @param string|null $acces_handicapes acces_handicapes
     *
     * @return $this
     */
    public function setAccesHandicapes(?string $acces_handicapes): static
    {
        if (is_null($acces_handicapes)) {
            array_push($this->openAPINullablesSetToNull, 'acces_handicapes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('acces_handicapes', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['acces_handicapes'] = $acces_handicapes;

        return $this;
    }

    /**
     * Gets acces_handicapes_desc
     *
     * @return string|null
     */
    public function getAccesHandicapesDesc(): ?string
    {
        return $this->container['acces_handicapes_desc'];
    }

    /**
     * Sets acces_handicapes_desc
     *
     * @param string|null $acces_handicapes_desc acces_handicapes_desc
     *
     * @return $this
     */
    public function setAccesHandicapesDesc(?string $acces_handicapes_desc): static
    {
        if (is_null($acces_handicapes_desc)) {
            array_push($this->openAPINullablesSetToNull, 'acces_handicapes_desc');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('acces_handicapes_desc', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['acces_handicapes_desc'] = $acces_handicapes_desc;

        return $this;
    }

    /**
     * Gets acces
     *
     * @return string|null
     */
    public function getAcces(): ?string
    {
        return $this->container['acces'];
    }

    /**
     * Sets acces
     *
     * @param string|null $acces acces
     *
     * @return $this
     */
    public function setAcces(?string $acces): static
    {
        if (is_null($acces)) {
            array_push($this->openAPINullablesSetToNull, 'acces');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('acces', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['acces'] = $acces;

        return $this;
    }

    /**
     * Gets accueil
     *
     * @return string|null
     */
    public function getAccueil(): ?string
    {
        return $this->container['accueil'];
    }

    /**
     * Sets accueil
     *
     * @param string|null $accueil accueil
     *
     * @return $this
     */
    public function setAccueil(?string $accueil): static
    {
        if (is_null($accueil)) {
            array_push($this->openAPINullablesSetToNull, 'accueil');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('accueil', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['accueil'] = $accueil;

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
     * @param string|null $id_centre_de_formation Identifiants des centres de formation de la salle, séparés par des virgules (`1,3`), ou `0` quand elle est visible de tous les centres. Le détail des centres est renvoyé par `include=centres`.
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
     * Gets emplacement_cible
     *
     * @return string|null
     */
    public function getEmplacementCible(): ?string
    {
        return $this->container['emplacement_cible'];
    }

    /**
     * Sets emplacement_cible
     *
     * @param string|null $emplacement_cible emplacement_cible
     *
     * @return $this
     */
    public function setEmplacementCible(?string $emplacement_cible): static
    {
        if (is_null($emplacement_cible)) {
            throw new InvalidArgumentException('non-nullable emplacement_cible cannot be null');
        }
        $this->container['emplacement_cible'] = $emplacement_cible;

        return $this;
    }

    /**
     * Gets emplacement_type
     *
     * @return string|null
     */
    public function getEmplacementType(): ?string
    {
        return $this->container['emplacement_type'];
    }

    /**
     * Sets emplacement_type
     *
     * @param string|null $emplacement_type emplacement_type
     *
     * @return $this
     */
    public function setEmplacementType(?string $emplacement_type): static
    {
        if (is_null($emplacement_type)) {
            throw new InvalidArgumentException('non-nullable emplacement_type cannot be null');
        }
        $this->container['emplacement_type'] = $emplacement_type;

        return $this;
    }

    /**
     * Gets emplacement_id
     *
     * @return int|null
     */
    public function getEmplacementId(): ?int
    {
        return $this->container['emplacement_id'];
    }

    /**
     * Sets emplacement_id
     *
     * @param int|null $emplacement_id emplacement_id
     *
     * @return $this
     */
    public function setEmplacementId(?int $emplacement_id): static
    {
        if (is_null($emplacement_id)) {
            throw new InvalidArgumentException('non-nullable emplacement_id cannot be null');
        }
        $this->container['emplacement_id'] = $emplacement_id;

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
     * Gets image_map
     *
     * @return string|null
     */
    public function getImageMap(): ?string
    {
        return $this->container['image_map'];
    }

    /**
     * Sets image_map
     *
     * @param string|null $image_map image_map
     *
     * @return $this
     */
    public function setImageMap(?string $image_map): static
    {
        if (is_null($image_map)) {
            array_push($this->openAPINullablesSetToNull, 'image_map');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('image_map', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['image_map'] = $image_map;

        return $this;
    }

    /**
     * Gets pdf_map
     *
     * @return string|null
     */
    public function getPdfMap(): ?string
    {
        return $this->container['pdf_map'];
    }

    /**
     * Sets pdf_map
     *
     * @param string|null $pdf_map pdf_map
     *
     * @return $this
     */
    public function setPdfMap(?string $pdf_map): static
    {
        if (is_null($pdf_map)) {
            array_push($this->openAPINullablesSetToNull, 'pdf_map');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pdf_map', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pdf_map'] = $pdf_map;

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
     * @param string|null $visuel visuel
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
     * Gets emplacement
     *
     * @return \Dbout\DendreoSdk\Model\SalleDeFormationEmplacement|null
     */
    public function getEmplacement(): ?\Dbout\DendreoSdk\Model\SalleDeFormationEmplacement
    {
        return $this->container['emplacement'];
    }

    /**
     * Sets emplacement
     *
     * @param \Dbout\DendreoSdk\Model\SalleDeFormationEmplacement|null $emplacement emplacement
     *
     * @return $this
     */
    public function setEmplacement(?\Dbout\DendreoSdk\Model\SalleDeFormationEmplacement $emplacement): static
    {
        if (is_null($emplacement)) {
            array_push($this->openAPINullablesSetToNull, 'emplacement');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('emplacement', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['emplacement'] = $emplacement;

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
     * @param \Dbout\DendreoSdk\Model\CentresDeFormation[]|null $centres Présent uniquement avec `include=centres`.
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


