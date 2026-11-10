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
 * Tache Class Doc Comment
 *
 * Generated from the Dendreo OpenAPI specification, do not edit manually.
 *
 * @package  Dbout\DendreoSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class Tache implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Tache';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'type' => 'string',
        'intitule' => 'string',
        'id_action_de_formation' => 'int',
        'id_lcp' => 'int',
        'creneau_date_debut' => '\DateTime',
        'creneau_date_fin' => '\DateTime',
        'url' => 'string',
        'id_media' => 'int',
        'date' => '\DateTime',
        'questionnaire_type' => 'string',
        'id_lap' => 'int',
        'positionnement_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'type' => null,
        'intitule' => null,
        'id_action_de_formation' => null,
        'id_lcp' => null,
        'creneau_date_debut' => 'date-time',
        'creneau_date_fin' => 'date-time',
        'url' => null,
        'id_media' => null,
        'date' => 'date-time',
        'questionnaire_type' => null,
        'id_lap' => null,
        'positionnement_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'type' => false,
        'intitule' => false,
        'id_action_de_formation' => false,
        'id_lcp' => false,
        'creneau_date_debut' => true,
        'creneau_date_fin' => true,
        'url' => false,
        'id_media' => false,
        'date' => true,
        'questionnaire_type' => false,
        'id_lap' => false,
        'positionnement_type' => false
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
        'intitule' => 'intitule',
        'id_action_de_formation' => 'id_action_de_formation',
        'id_lcp' => 'id_lcp',
        'creneau_date_debut' => 'creneau_date_debut',
        'creneau_date_fin' => 'creneau_date_fin',
        'url' => 'url',
        'id_media' => 'id_media',
        'date' => 'date',
        'questionnaire_type' => 'questionnaire_type',
        'id_lap' => 'id_lap',
        'positionnement_type' => 'positionnement_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'type' => 'setType',
        'intitule' => 'setIntitule',
        'id_action_de_formation' => 'setIdActionDeFormation',
        'id_lcp' => 'setIdLcp',
        'creneau_date_debut' => 'setCreneauDateDebut',
        'creneau_date_fin' => 'setCreneauDateFin',
        'url' => 'setUrl',
        'id_media' => 'setIdMedia',
        'date' => 'setDate',
        'questionnaire_type' => 'setQuestionnaireType',
        'id_lap' => 'setIdLap',
        'positionnement_type' => 'setPositionnementType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'type' => 'getType',
        'intitule' => 'getIntitule',
        'id_action_de_formation' => 'getIdActionDeFormation',
        'id_lcp' => 'getIdLcp',
        'creneau_date_debut' => 'getCreneauDateDebut',
        'creneau_date_fin' => 'getCreneauDateFin',
        'url' => 'getUrl',
        'id_media' => 'getIdMedia',
        'date' => 'getDate',
        'questionnaire_type' => 'getQuestionnaireType',
        'id_lap' => 'getIdLap',
        'positionnement_type' => 'getPositionnementType'
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
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('intitule', $data ?? [], null);
        $this->setIfExists('id_action_de_formation', $data ?? [], null);
        $this->setIfExists('id_lcp', $data ?? [], null);
        $this->setIfExists('creneau_date_debut', $data ?? [], null);
        $this->setIfExists('creneau_date_fin', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('id_media', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('questionnaire_type', $data ?? [], null);
        $this->setIfExists('id_lap', $data ?? [], null);
        $this->setIfExists('positionnement_type', $data ?? [], null);
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
     * @param string|null $type type
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
     * Gets id_action_de_formation
     *
     * @return int|null
     */
    public function getIdActionDeFormation(): ?int
    {
        return $this->container['id_action_de_formation'];
    }

    /**
     * Sets id_action_de_formation
     *
     * @param int|null $id_action_de_formation id_action_de_formation
     *
     * @return $this
     */
    public function setIdActionDeFormation(?int $id_action_de_formation): static
    {
        if (is_null($id_action_de_formation)) {
            throw new InvalidArgumentException('non-nullable id_action_de_formation cannot be null');
        }
        $this->container['id_action_de_formation'] = $id_action_de_formation;

        return $this;
    }

    /**
     * Gets id_lcp
     *
     * @return int|null
     */
    public function getIdLcp(): ?int
    {
        return $this->container['id_lcp'];
    }

    /**
     * Sets id_lcp
     *
     * @param int|null $id_lcp id_lcp
     *
     * @return $this
     */
    public function setIdLcp(?int $id_lcp): static
    {
        if (is_null($id_lcp)) {
            throw new InvalidArgumentException('non-nullable id_lcp cannot be null');
        }
        $this->container['id_lcp'] = $id_lcp;

        return $this;
    }

    /**
     * Gets creneau_date_debut
     *
     * @return \DateTime|null
     */
    public function getCreneauDateDebut(): ?\DateTime
    {
        return $this->container['creneau_date_debut'];
    }

    /**
     * Sets creneau_date_debut
     *
     * @param \DateTime|null $creneau_date_debut creneau_date_debut
     *
     * @return $this
     */
    public function setCreneauDateDebut(?\DateTime $creneau_date_debut): static
    {
        if (is_null($creneau_date_debut)) {
            array_push($this->openAPINullablesSetToNull, 'creneau_date_debut');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('creneau_date_debut', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['creneau_date_debut'] = $creneau_date_debut;

        return $this;
    }

    /**
     * Gets creneau_date_fin
     *
     * @return \DateTime|null
     */
    public function getCreneauDateFin(): ?\DateTime
    {
        return $this->container['creneau_date_fin'];
    }

    /**
     * Sets creneau_date_fin
     *
     * @param \DateTime|null $creneau_date_fin creneau_date_fin
     *
     * @return $this
     */
    public function setCreneauDateFin(?\DateTime $creneau_date_fin): static
    {
        if (is_null($creneau_date_fin)) {
            array_push($this->openAPINullablesSetToNull, 'creneau_date_fin');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('creneau_date_fin', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['creneau_date_fin'] = $creneau_date_fin;

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
     * @param string|null $url url
     *
     * @return $this
     */
    public function setUrl(?string $url): static
    {
        if (is_null($url)) {
            throw new InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets id_media
     *
     * @return int|null
     */
    public function getIdMedia(): ?int
    {
        return $this->container['id_media'];
    }

    /**
     * Sets id_media
     *
     * @param int|null $id_media id_media
     *
     * @return $this
     */
    public function setIdMedia(?int $id_media): static
    {
        if (is_null($id_media)) {
            throw new InvalidArgumentException('non-nullable id_media cannot be null');
        }
        $this->container['id_media'] = $id_media;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime|null
     */
    public function getDate(): ?\DateTime
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime|null $date date
     *
     * @return $this
     */
    public function setDate(?\DateTime $date): static
    {
        if (is_null($date)) {
            array_push($this->openAPINullablesSetToNull, 'date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets questionnaire_type
     *
     * @return string|null
     */
    public function getQuestionnaireType(): ?string
    {
        return $this->container['questionnaire_type'];
    }

    /**
     * Sets questionnaire_type
     *
     * @param string|null $questionnaire_type questionnaire_type
     *
     * @return $this
     */
    public function setQuestionnaireType(?string $questionnaire_type): static
    {
        if (is_null($questionnaire_type)) {
            throw new InvalidArgumentException('non-nullable questionnaire_type cannot be null');
        }
        $this->container['questionnaire_type'] = $questionnaire_type;

        return $this;
    }

    /**
     * Gets id_lap
     *
     * @return int|null
     */
    public function getIdLap(): ?int
    {
        return $this->container['id_lap'];
    }

    /**
     * Sets id_lap
     *
     * @param int|null $id_lap id_lap
     *
     * @return $this
     */
    public function setIdLap(?int $id_lap): static
    {
        if (is_null($id_lap)) {
            throw new InvalidArgumentException('non-nullable id_lap cannot be null');
        }
        $this->container['id_lap'] = $id_lap;

        return $this;
    }

    /**
     * Gets positionnement_type
     *
     * @return string|null
     */
    public function getPositionnementType(): ?string
    {
        return $this->container['positionnement_type'];
    }

    /**
     * Sets positionnement_type
     *
     * @param string|null $positionnement_type positionnement_type
     *
     * @return $this
     */
    public function setPositionnementType(?string $positionnement_type): static
    {
        if (is_null($positionnement_type)) {
            throw new InvalidArgumentException('non-nullable positionnement_type cannot be null');
        }
        $this->container['positionnement_type'] = $positionnement_type;

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


