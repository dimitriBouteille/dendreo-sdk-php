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
 * SalleDeFormationFilter Class Doc Comment
 *
 * Generated from the Dendreo OpenAPI specification, do not edit manually.
 *
 * @package  Dbout\DendreoSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class SalleDeFormationFilter implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'SalleDeFormationFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int[]',
        'id_externe' => 'string[]',
        'inside' => 'int[]',
        'elearning' => 'int[]',
        'invisible_catalogue' => 'int[]',
        'id_centre_de_formation' => 'int[]',
        'emplacement_type' => 'string',
        'search' => 'string',
        'trashed' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'id_externe' => null,
        'inside' => null,
        'elearning' => null,
        'invisible_catalogue' => null,
        'id_centre_de_formation' => null,
        'emplacement_type' => null,
        'search' => null,
        'trashed' => null,
        'created_at' => null,
        'updated_at' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'id_externe' => false,
        'inside' => false,
        'elearning' => false,
        'invisible_catalogue' => false,
        'id_centre_de_formation' => false,
        'emplacement_type' => false,
        'search' => false,
        'trashed' => false,
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
        'id' => 'id',
        'id_externe' => 'id_externe',
        'inside' => 'inside',
        'elearning' => 'elearning',
        'invisible_catalogue' => 'invisible_catalogue',
        'id_centre_de_formation' => 'id_centre_de_formation',
        'emplacement_type' => 'emplacement_type',
        'search' => 'search',
        'trashed' => 'trashed',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'id_externe' => 'setIdExterne',
        'inside' => 'setInside',
        'elearning' => 'setElearning',
        'invisible_catalogue' => 'setInvisibleCatalogue',
        'id_centre_de_formation' => 'setIdCentreDeFormation',
        'emplacement_type' => 'setEmplacementType',
        'search' => 'setSearch',
        'trashed' => 'setTrashed',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'id_externe' => 'getIdExterne',
        'inside' => 'getInside',
        'elearning' => 'getElearning',
        'invisible_catalogue' => 'getInvisibleCatalogue',
        'id_centre_de_formation' => 'getIdCentreDeFormation',
        'emplacement_type' => 'getEmplacementType',
        'search' => 'getSearch',
        'trashed' => 'getTrashed',
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

    public const INSIDE_NUMBER_0 = 0;
    public const INSIDE_NUMBER_1 = 1;
    public const ELEARNING_NUMBER_0 = 0;
    public const ELEARNING_NUMBER_1 = 1;
    public const INVISIBLE_CATALOGUE_NUMBER_0 = 0;
    public const INVISIBLE_CATALOGUE_NUMBER_1 = 1;
    public const EMPLACEMENT_TYPE_CENTRES_DE_FORMATION = 'CentresDeFormation';
    public const EMPLACEMENT_TYPE_ENTREPRISE = 'Entreprise';
    public const TRASHED_WITH = 'with';
    public const TRASHED_ONLY = 'only';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public static function getInsideAllowableValues()
    {
        return [
            self::INSIDE_NUMBER_0,
            self::INSIDE_NUMBER_1,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public static function getElearningAllowableValues()
    {
        return [
            self::ELEARNING_NUMBER_0,
            self::ELEARNING_NUMBER_1,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public static function getInvisibleCatalogueAllowableValues()
    {
        return [
            self::INVISIBLE_CATALOGUE_NUMBER_0,
            self::INVISIBLE_CATALOGUE_NUMBER_1,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public static function getEmplacementTypeAllowableValues()
    {
        return [
            self::EMPLACEMENT_TYPE_CENTRES_DE_FORMATION,
            self::EMPLACEMENT_TYPE_ENTREPRISE,
        ];
    }

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
        $this->setIfExists('id_externe', $data ?? [], null);
        $this->setIfExists('inside', $data ?? [], null);
        $this->setIfExists('elearning', $data ?? [], null);
        $this->setIfExists('invisible_catalogue', $data ?? [], null);
        $this->setIfExists('id_centre_de_formation', $data ?? [], null);
        $this->setIfExists('emplacement_type', $data ?? [], null);
        $this->setIfExists('search', $data ?? [], null);
        $this->setIfExists('trashed', $data ?? [], null);
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

        $allowedValues = self::getEmplacementTypeAllowableValues();
        if (!is_null($this->container['emplacement_type']) && !in_array($this->container['emplacement_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'emplacement_type', must be one of '%s'",
                $this->container['emplacement_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = self::getTrashedAllowableValues();
        if (!is_null($this->container['trashed']) && !in_array($this->container['trashed'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'trashed', must be one of '%s'",
                $this->container['trashed'],
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
     * Gets id_externe
     *
     * @return string[]|null
     */
    public function getIdExterne(): ?array
    {
        return $this->container['id_externe'];
    }

    /**
     * Sets id_externe
     *
     * @param string[]|null $id_externe Valeur exacte. Plusieurs valeurs séparées par des virgules.
     *
     * @return $this
     */
    public function setIdExterne(?array $id_externe): static
    {
        if (is_null($id_externe)) {
            throw new InvalidArgumentException('non-nullable id_externe cannot be null');
        }
        $this->container['id_externe'] = $id_externe;

        return $this;
    }

    /**
     * Gets inside
     *
     * @return int[]|null
     */
    public function getInside(): ?array
    {
        return $this->container['inside'];
    }

    /**
     * Sets inside
     *
     * @param int[]|null $inside Filtre les salles internes (`1`) ou externes (`0`).
     *
     * @return $this
     */
    public function setInside(?array $inside): static
    {
        if (is_null($inside)) {
            throw new InvalidArgumentException('non-nullable inside cannot be null');
        }
        $allowedValues = self::getInsideAllowableValues();
        if (array_diff($inside, $allowedValues)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value for 'inside', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['inside'] = $inside;

        return $this;
    }

    /**
     * Gets elearning
     *
     * @return int[]|null
     */
    public function getElearning(): ?array
    {
        return $this->container['elearning'];
    }

    /**
     * Sets elearning
     *
     * @param int[]|null $elearning Filtre les salles virtuelles (`1`) ou non (`0`).
     *
     * @return $this
     */
    public function setElearning(?array $elearning): static
    {
        if (is_null($elearning)) {
            throw new InvalidArgumentException('non-nullable elearning cannot be null');
        }
        $allowedValues = self::getElearningAllowableValues();
        if (array_diff($elearning, $allowedValues)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value for 'elearning', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['elearning'] = $elearning;

        return $this;
    }

    /**
     * Gets invisible_catalogue
     *
     * @return int[]|null
     */
    public function getInvisibleCatalogue(): ?array
    {
        return $this->container['invisible_catalogue'];
    }

    /**
     * Sets invisible_catalogue
     *
     * @param int[]|null $invisible_catalogue Filtre les salles masquées du Catalogue Public (`1`) ou visibles (`0`).
     *
     * @return $this
     */
    public function setInvisibleCatalogue(?array $invisible_catalogue): static
    {
        if (is_null($invisible_catalogue)) {
            throw new InvalidArgumentException('non-nullable invisible_catalogue cannot be null');
        }
        $allowedValues = self::getInvisibleCatalogueAllowableValues();
        if (array_diff($invisible_catalogue, $allowedValues)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value for 'invisible_catalogue', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['invisible_catalogue'] = $invisible_catalogue;

        return $this;
    }

    /**
     * Gets id_centre_de_formation
     *
     * @return int[]|null
     */
    public function getIdCentreDeFormation(): ?array
    {
        return $this->container['id_centre_de_formation'];
    }

    /**
     * Sets id_centre_de_formation
     *
     * @param int[]|null $id_centre_de_formation Filtre les salles visibles dans ce(s) centre(s) de formation, séparés par des virgules. Une salle visible dans tous les centres est toujours retournée ; `0` seul ne retourne que ces salles.
     *
     * @return $this
     */
    public function setIdCentreDeFormation(?array $id_centre_de_formation): static
    {
        if (is_null($id_centre_de_formation)) {
            throw new InvalidArgumentException('non-nullable id_centre_de_formation cannot be null');
        }
        $this->container['id_centre_de_formation'] = $id_centre_de_formation;

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
     * @param string|null $emplacement_type Filtre par type d'emplacement.
     *
     * @return $this
     */
    public function setEmplacementType(?string $emplacement_type): static
    {
        if (is_null($emplacement_type)) {
            throw new InvalidArgumentException('non-nullable emplacement_type cannot be null');
        }
        $allowedValues = self::getEmplacementTypeAllowableValues();
        if (!in_array($emplacement_type, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'emplacement_type', must be one of '%s'",
                    $emplacement_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['emplacement_type'] = $emplacement_type;

        return $this;
    }

    /**
     * Gets search
     *
     * @return string|null
     */
    public function getSearch(): ?string
    {
        return $this->container['search'];
    }

    /**
     * Sets search
     *
     * @param string|null $search Recherche sur l'intitulé, l'adresse, la ville et le code postal.
     *
     * @return $this
     */
    public function setSearch(?string $search): static
    {
        if (is_null($search)) {
            throw new InvalidArgumentException('non-nullable search cannot be null');
        }
        $this->container['search'] = $search;

        return $this;
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


