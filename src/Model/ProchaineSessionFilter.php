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
 * ProchaineSessionFilter Class Doc Comment
 *
 * Generated from the Dendreo OpenAPI specification, do not edit manually.
 *
 * @package  Dbout\DendreoSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ProchaineSessionFilter implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ProchaineSessionFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int[]',
        'id_centre_de_formation' => 'int',
        'id_module' => 'int[]',
        'id_categorie' => 'int[]',
        'id_action_de_formation' => 'int[]',
        'type_module' => 'string[]',
        'type' => 'string[]',
        'mode_organisation' => 'string[]',
        'date_debut' => 'string',
        'date_fin' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'id_centre_de_formation' => null,
        'id_module' => null,
        'id_categorie' => null,
        'id_action_de_formation' => null,
        'type_module' => null,
        'type' => null,
        'mode_organisation' => null,
        'date_debut' => null,
        'date_fin' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'id_centre_de_formation' => false,
        'id_module' => false,
        'id_categorie' => false,
        'id_action_de_formation' => false,
        'type_module' => false,
        'type' => false,
        'mode_organisation' => false,
        'date_debut' => false,
        'date_fin' => false
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
        'id_centre_de_formation' => 'id_centre_de_formation',
        'id_module' => 'id_module',
        'id_categorie' => 'id_categorie',
        'id_action_de_formation' => 'id_action_de_formation',
        'type_module' => 'type_module',
        'type' => 'type',
        'mode_organisation' => 'mode_organisation',
        'date_debut' => 'date_debut',
        'date_fin' => 'date_fin'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'id_centre_de_formation' => 'setIdCentreDeFormation',
        'id_module' => 'setIdModule',
        'id_categorie' => 'setIdCategorie',
        'id_action_de_formation' => 'setIdActionDeFormation',
        'type_module' => 'setTypeModule',
        'type' => 'setType',
        'mode_organisation' => 'setModeOrganisation',
        'date_debut' => 'setDateDebut',
        'date_fin' => 'setDateFin'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'id_centre_de_formation' => 'getIdCentreDeFormation',
        'id_module' => 'getIdModule',
        'id_categorie' => 'getIdCategorie',
        'id_action_de_formation' => 'getIdActionDeFormation',
        'type_module' => 'getTypeModule',
        'type' => 'getType',
        'mode_organisation' => 'getModeOrganisation',
        'date_debut' => 'getDateDebut',
        'date_fin' => 'getDateFin'
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

    public const TYPE_MODULE_SIMPLE = 'simple';
    public const TYPE_MODULE_COMPOSE = 'compose';
    public const TYPE_INTER = 'inter';
    public const TYPE_INTRA = 'intra';
    public const MODE_ORGANISATION_PRESENTIEL = 'presentiel';
    public const MODE_ORGANISATION_ELEARNING_SYNC = 'elearning_sync';
    public const MODE_ORGANISATION_ELEARNING_ASYNC = 'elearning_async';
    public const MODE_ORGANISATION_MIXTE = 'mixte';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public static function getTypeModuleAllowableValues()
    {
        return [
            self::TYPE_MODULE_SIMPLE,
            self::TYPE_MODULE_COMPOSE,
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
            self::TYPE_INTER,
            self::TYPE_INTRA,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public static function getModeOrganisationAllowableValues()
    {
        return [
            self::MODE_ORGANISATION_PRESENTIEL,
            self::MODE_ORGANISATION_ELEARNING_SYNC,
            self::MODE_ORGANISATION_ELEARNING_ASYNC,
            self::MODE_ORGANISATION_MIXTE,
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
        $this->setIfExists('id_centre_de_formation', $data ?? [], null);
        $this->setIfExists('id_module', $data ?? [], null);
        $this->setIfExists('id_categorie', $data ?? [], null);
        $this->setIfExists('id_action_de_formation', $data ?? [], null);
        $this->setIfExists('type_module', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('mode_organisation', $data ?? [], null);
        $this->setIfExists('date_debut', $data ?? [], null);
        $this->setIfExists('date_fin', $data ?? [], null);
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
     * @param int[]|null $id Identifiant de la session. Entiers séparés par des virgules : une valeur non entière, seule ou dans une liste, ne retourne aucune session.
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
     * Gets id_centre_de_formation
     *
     * @return int|null
     */
    public function getIdCentreDeFormation(): ?int
    {
        return $this->container['id_centre_de_formation'];
    }

    /**
     * Sets id_centre_de_formation
     *
     * @param int|null $id_centre_de_formation Limite la liste au catalogue public de ce centre, avec les réglages du centre. `0` ou absent : catalogue public global. Un seul identifiant est accepté. Le mot de passe du catalogue de ce centre et l'absence de catalogue pour ce centre sont ignorés.
     *
     * @return $this
     */
    public function setIdCentreDeFormation(?int $id_centre_de_formation): static
    {
        if (is_null($id_centre_de_formation)) {
            throw new InvalidArgumentException('non-nullable id_centre_de_formation cannot be null');
        }
        $this->container['id_centre_de_formation'] = $id_centre_de_formation;

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
     * @param int[]|null $id_module Identifiant du module. Entiers séparés par des virgules : une valeur non entière, seule ou dans une liste, ne retourne aucune session.
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
     * Gets id_categorie
     *
     * @return int[]|null
     */
    public function getIdCategorie(): ?array
    {
        return $this->container['id_categorie'];
    }

    /**
     * Sets id_categorie
     *
     * @param int[]|null $id_categorie Identifiant de la catégorie directe du module, sans ses sous-catégories. Entiers séparés par des virgules : une valeur non entière, seule ou dans une liste, ne retourne aucune session.
     *
     * @return $this
     */
    public function setIdCategorie(?array $id_categorie): static
    {
        if (is_null($id_categorie)) {
            throw new InvalidArgumentException('non-nullable id_categorie cannot be null');
        }
        $this->container['id_categorie'] = $id_categorie;

        return $this;
    }

    /**
     * Gets id_action_de_formation
     *
     * @return int[]|null
     */
    public function getIdActionDeFormation(): ?array
    {
        return $this->container['id_action_de_formation'];
    }

    /**
     * Sets id_action_de_formation
     *
     * @param int[]|null $id_action_de_formation Identifiant de l'action de formation. Entiers séparés par des virgules : une valeur non entière, seule ou dans une liste, ne retourne aucune session.
     *
     * @return $this
     */
    public function setIdActionDeFormation(?array $id_action_de_formation): static
    {
        if (is_null($id_action_de_formation)) {
            throw new InvalidArgumentException('non-nullable id_action_de_formation cannot be null');
        }
        $this->container['id_action_de_formation'] = $id_action_de_formation;

        return $this;
    }

    /**
     * Gets type_module
     *
     * @return string[]|null
     */
    public function getTypeModule(): ?array
    {
        return $this->container['type_module'];
    }

    /**
     * Sets type_module
     *
     * @param string[]|null $type_module Filtre par type de session, une ou plusieurs valeurs séparées par des virgules.
     *
     * @return $this
     */
    public function setTypeModule(?array $type_module): static
    {
        if (is_null($type_module)) {
            throw new InvalidArgumentException('non-nullable type_module cannot be null');
        }
        $allowedValues = self::getTypeModuleAllowableValues();
        if (array_diff($type_module, $allowedValues)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type_module', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type_module'] = $type_module;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string[]|null
     */
    public function getType(): ?array
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string[]|null $type Filtre par type d'action de formation, une ou plusieurs valeurs séparées par des virgules.
     *
     * @return $this
     */
    public function setType(?array $type): static
    {
        if (is_null($type)) {
            throw new InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = self::getTypeAllowableValues();
        if (array_diff($type, $allowedValues)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets mode_organisation
     *
     * @return string[]|null
     */
    public function getModeOrganisation(): ?array
    {
        return $this->container['mode_organisation'];
    }

    /**
     * Sets mode_organisation
     *
     * @param string[]|null $mode_organisation Filtre par mode d'organisation, une ou plusieurs valeurs séparées par des virgules.
     *
     * @return $this
     */
    public function setModeOrganisation(?array $mode_organisation): static
    {
        if (is_null($mode_organisation)) {
            throw new InvalidArgumentException('non-nullable mode_organisation cannot be null');
        }
        $allowedValues = self::getModeOrganisationAllowableValues();
        if (array_diff($mode_organisation, $allowedValues)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value for 'mode_organisation', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mode_organisation'] = $mode_organisation;

        return $this;
    }

    /**
     * Gets date_debut
     *
     * @return string|null
     */
    public function getDateDebut(): ?string
    {
        return $this->container['date_debut'];
    }

    /**
     * Sets date_debut
     *
     * @param string|null $date_debut Date (`2026-01-31`) ou date et heure (`2026-01-31 09:00:00`), précédée d'un opérateur `>=`, `<=`, `>`, `<`, `=` ou `<>`. Sans opérateur, recherche par préfixe (`2026`, `2026-01`). Une valeur qui n'est pas une date ne renvoie rien. Pour encadrer une période, passer le filtre en tableau : `filter[date_debut][]=>=2026-01-01&filter[date_debut][]=<=2026-12-31`. Les sessions passées restent exclues.
     *
     * @return $this
     */
    public function setDateDebut(?string $date_debut): static
    {
        if (is_null($date_debut)) {
            throw new InvalidArgumentException('non-nullable date_debut cannot be null');
        }
        $this->container['date_debut'] = $date_debut;

        return $this;
    }

    /**
     * Gets date_fin
     *
     * @return string|null
     */
    public function getDateFin(): ?string
    {
        return $this->container['date_fin'];
    }

    /**
     * Sets date_fin
     *
     * @param string|null $date_fin Date (`2026-01-31`) ou date et heure (`2026-01-31 09:00:00`), précédée d'un opérateur `>=`, `<=`, `>`, `<`, `=` ou `<>`. Sans opérateur, recherche par préfixe (`2026`, `2026-01`). Une valeur qui n'est pas une date ne renvoie rien. Pour encadrer une période, passer le filtre en tableau : `filter[date_fin][]=>=2026-01-01&filter[date_fin][]=<=2026-12-31`.
     *
     * @return $this
     */
    public function setDateFin(?string $date_fin): static
    {
        if (is_null($date_fin)) {
            throw new InvalidArgumentException('non-nullable date_fin cannot be null');
        }
        $this->container['date_fin'] = $date_fin;

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


