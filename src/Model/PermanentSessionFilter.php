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
 * PermanentSessionFilter Class Doc Comment
 *
 * Generated from the Dendreo OpenAPI specification, do not edit manually.
 *
 * @package  Dbout\DendreoSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class PermanentSessionFilter implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PermanentSessionFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int[]',
        'id_module' => 'int[]',
        'id_salle_de_formation' => 'int[]',
        'id_centre_de_formation' => 'int[]',
        'active' => 'int[]',
        'visible_cp' => 'int[]',
        'mode_pricing' => 'string[]',
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
        'id_module' => null,
        'id_salle_de_formation' => null,
        'id_centre_de_formation' => null,
        'active' => null,
        'visible_cp' => null,
        'mode_pricing' => null,
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
        'id_module' => false,
        'id_salle_de_formation' => false,
        'id_centre_de_formation' => false,
        'active' => false,
        'visible_cp' => false,
        'mode_pricing' => false,
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
        'id_module' => 'id_module',
        'id_salle_de_formation' => 'id_salle_de_formation',
        'id_centre_de_formation' => 'id_centre_de_formation',
        'active' => 'active',
        'visible_cp' => 'visible_cp',
        'mode_pricing' => 'mode_pricing',
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
        'id_module' => 'setIdModule',
        'id_salle_de_formation' => 'setIdSalleDeFormation',
        'id_centre_de_formation' => 'setIdCentreDeFormation',
        'active' => 'setActive',
        'visible_cp' => 'setVisibleCp',
        'mode_pricing' => 'setModePricing',
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
        'id_module' => 'getIdModule',
        'id_salle_de_formation' => 'getIdSalleDeFormation',
        'id_centre_de_formation' => 'getIdCentreDeFormation',
        'active' => 'getActive',
        'visible_cp' => 'getVisibleCp',
        'mode_pricing' => 'getModePricing',
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

    public const ACTIVE_NUMBER_0 = 0;
    public const ACTIVE_NUMBER_1 = 1;
    public const VISIBLE_CP_NUMBER_0 = 0;
    public const VISIBLE_CP_NUMBER_1 = 1;
    public const MODE_PRICING_FORFAITAIRE = 'forfaitaire';
    public const MODE_PRICING_ASSIDUITE = 'assiduite';
    public const TRASHED_WITH = 'with';
    public const TRASHED_ONLY = 'only';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public static function getActiveAllowableValues()
    {
        return [
            self::ACTIVE_NUMBER_0,
            self::ACTIVE_NUMBER_1,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public static function getVisibleCpAllowableValues()
    {
        return [
            self::VISIBLE_CP_NUMBER_0,
            self::VISIBLE_CP_NUMBER_1,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public static function getModePricingAllowableValues()
    {
        return [
            self::MODE_PRICING_FORFAITAIRE,
            self::MODE_PRICING_ASSIDUITE,
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
        $this->setIfExists('id_module', $data ?? [], null);
        $this->setIfExists('id_salle_de_formation', $data ?? [], null);
        $this->setIfExists('id_centre_de_formation', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('visible_cp', $data ?? [], null);
        $this->setIfExists('mode_pricing', $data ?? [], null);
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
     * Gets id_module
     *
     * @return int[]|null
     */
    public function getIdModule(): ?array
    {
        return $this->container['id_module'];
    }

    /**
     * Sets id_module
     *
     * @param int[]|null $id_module Valeur exacte. Plusieurs valeurs séparées par des virgules.
     *
     * @return $this
     */
    public function setIdModule(?array $id_module): static
    {
        if (is_null($id_module)) {
            throw new InvalidArgumentException('non-nullable id_module cannot be null');
        }
        $this->container['id_module'] = $id_module;

        return $this;
    }

    /**
     * Gets id_salle_de_formation
     *
     * @return int[]|null
     */
    public function getIdSalleDeFormation(): ?array
    {
        return $this->container['id_salle_de_formation'];
    }

    /**
     * Sets id_salle_de_formation
     *
     * @param int[]|null $id_salle_de_formation Valeur exacte. Plusieurs valeurs séparées par des virgules.
     *
     * @return $this
     */
    public function setIdSalleDeFormation(?array $id_salle_de_formation): static
    {
        if (is_null($id_salle_de_formation)) {
            throw new InvalidArgumentException('non-nullable id_salle_de_formation cannot be null');
        }
        $this->container['id_salle_de_formation'] = $id_salle_de_formation;

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
     * @param int[]|null $id_centre_de_formation Filtre par identifiant(s) de centre de formation, séparés par des virgules. Une session portant le centre `0` (« Tous les centres ») reste toujours visible, quel que soit le centre demandé. `0` seul ne filtre rien (toutes les sessions sont retournées). Un élément non numérique est ignoré ; si aucun élément n'est numérique, le filtre ne s'applique pas.
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
     * Gets active
     *
     * @return int[]|null
     */
    public function getActive(): ?array
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param int[]|null $active Filtre par statut : `1` = ouverte, `0` = fermée.
     *
     * @return $this
     */
    public function setActive(?array $active): static
    {
        if (is_null($active)) {
            throw new InvalidArgumentException('non-nullable active cannot be null');
        }
        $allowedValues = self::getActiveAllowableValues();
        if (array_diff($active, $allowedValues)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value for 'active', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets visible_cp
     *
     * @return int[]|null
     */
    public function getVisibleCp(): ?array
    {
        return $this->container['visible_cp'];
    }

    /**
     * Sets visible_cp
     *
     * @param int[]|null $visible_cp Filtre par visibilité dans le catalogue public : `1` = visible, `0` = masquée.
     *
     * @return $this
     */
    public function setVisibleCp(?array $visible_cp): static
    {
        if (is_null($visible_cp)) {
            throw new InvalidArgumentException('non-nullable visible_cp cannot be null');
        }
        $allowedValues = self::getVisibleCpAllowableValues();
        if (array_diff($visible_cp, $allowedValues)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value for 'visible_cp', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['visible_cp'] = $visible_cp;

        return $this;
    }

    /**
     * Gets mode_pricing
     *
     * @return string[]|null
     */
    public function getModePricing(): ?array
    {
        return $this->container['mode_pricing'];
    }

    /**
     * Sets mode_pricing
     *
     * @param string[]|null $mode_pricing Filtre par mode de tarification.
     *
     * @return $this
     */
    public function setModePricing(?array $mode_pricing): static
    {
        if (is_null($mode_pricing)) {
            throw new InvalidArgumentException('non-nullable mode_pricing cannot be null');
        }
        $allowedValues = self::getModePricingAllowableValues();
        if (array_diff($mode_pricing, $allowedValues)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value for 'mode_pricing', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mode_pricing'] = $mode_pricing;

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


