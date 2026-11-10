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
 * CreneauRecording Class Doc Comment
 *
 * Generated from the Dendreo OpenAPI specification, do not edit manually.
 *
 * @package  Dbout\DendreoSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class CreneauRecording implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CreneauRecording';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'created_at' => '\DateTime',
        'id' => 'int',
        'id_creneau' => 'int',
        'nom' => 'string',
        'duree_secondes' => 'int',
        'visible' => 'bool',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'created_at' => 'date-time',
        'id' => null,
        'id_creneau' => null,
        'nom' => null,
        'duree_secondes' => null,
        'visible' => null,
        'url' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'created_at' => true,
        'id' => false,
        'id_creneau' => false,
        'nom' => true,
        'duree_secondes' => true,
        'visible' => false,
        'url' => true
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
        'created_at' => 'created_at',
        'id' => 'id',
        'id_creneau' => 'id_creneau',
        'nom' => 'nom',
        'duree_secondes' => 'duree_secondes',
        'visible' => 'visible',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'created_at' => 'setCreatedAt',
        'id' => 'setId',
        'id_creneau' => 'setIdCreneau',
        'nom' => 'setNom',
        'duree_secondes' => 'setDureeSecondes',
        'visible' => 'setVisible',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'created_at' => 'getCreatedAt',
        'id' => 'getId',
        'id_creneau' => 'getIdCreneau',
        'nom' => 'getNom',
        'duree_secondes' => 'getDureeSecondes',
        'visible' => 'getVisible',
        'url' => 'getUrl'
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
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('id_creneau', $data ?? [], null);
        $this->setIfExists('nom', $data ?? [], null);
        $this->setIfExists('duree_secondes', $data ?? [], null);
        $this->setIfExists('visible', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
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

        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
     * Gets id_creneau
     *
     * @return int|null
     */
    public function getIdCreneau(): ?int
    {
        return $this->container['id_creneau'];
    }

    /**
     * Sets id_creneau
     *
     * @param int|null $id_creneau id_creneau
     *
     * @return $this
     */
    public function setIdCreneau(?int $id_creneau): static
    {
        if (is_null($id_creneau)) {
            throw new InvalidArgumentException('non-nullable id_creneau cannot be null');
        }
        $this->container['id_creneau'] = $id_creneau;

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
     * Gets duree_secondes
     *
     * @return int|null
     */
    public function getDureeSecondes(): ?int
    {
        return $this->container['duree_secondes'];
    }

    /**
     * Sets duree_secondes
     *
     * @param int|null $duree_secondes Durée de l'enregistrement, en secondes.
     *
     * @return $this
     */
    public function setDureeSecondes(?int $duree_secondes): static
    {
        if (is_null($duree_secondes)) {
            array_push($this->openAPINullablesSetToNull, 'duree_secondes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('duree_secondes', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['duree_secondes'] = $duree_secondes;

        return $this;
    }

    /**
     * Gets visible
     *
     * @return bool|null
     */
    public function getVisible(): ?bool
    {
        return $this->container['visible'];
    }

    /**
     * Sets visible
     *
     * @param bool|null $visible visible
     *
     * @return $this
     */
    public function setVisible(?bool $visible): static
    {
        if (is_null($visible)) {
            throw new InvalidArgumentException('non-nullable visible cannot be null');
        }
        $this->container['visible'] = $visible;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url URL de téléchargement de l'enregistrement.
     *
     * @return $this
     */
    public function setUrl(?string $url): static
    {
        if (is_null($url)) {
            array_push($this->openAPINullablesSetToNull, 'url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['url'] = $url;

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


