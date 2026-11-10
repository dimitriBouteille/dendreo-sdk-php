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
 * EtapeProcess Class Doc Comment
 *
 * Generated from the Dendreo OpenAPI specification, do not edit manually.
 *
 * @description Les champs additionnels du compte sont ajoutés à la ressource, sous leur nom de champ.
 * @package  Dbout\DendreoSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class EtapeProcess implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'EtapeProcess';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'intitule' => 'string',
        'cible' => 'string',
        'id_parent' => 'int',
        'ordre' => 'int',
        'icon' => 'string',
        'color' => 'string',
        'type' => 'string',
        'type_label' => 'string',
        'favorite' => 'bool',
        'default_adf' => 'bool',
        'alerte_jours' => 'string',
        'calendar' => 'bool',
        'show_catalogue' => 'bool',
        'show_extranet_participant' => 'bool',
        'show_extranet_formateur' => 'bool',
        'show_extranet_entreprise' => 'bool',
        'created_at' => '\DateTime',
        'id_add' => 'int',
        'updated_at' => '\DateTime',
        'id_edit' => 'int',
        'parent' => '\Dbout\DendreoSdk\Model\EtapeProcess',
        'children' => '\Dbout\DendreoSdk\Model\EtapeProcess[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'intitule' => null,
        'cible' => null,
        'id_parent' => null,
        'ordre' => null,
        'icon' => null,
        'color' => null,
        'type' => null,
        'type_label' => null,
        'favorite' => null,
        'default_adf' => null,
        'alerte_jours' => null,
        'calendar' => null,
        'show_catalogue' => null,
        'show_extranet_participant' => null,
        'show_extranet_formateur' => null,
        'show_extranet_entreprise' => null,
        'created_at' => 'date-time',
        'id_add' => null,
        'updated_at' => 'date-time',
        'id_edit' => null,
        'parent' => null,
        'children' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'intitule' => false,
        'cible' => false,
        'id_parent' => true,
        'ordre' => false,
        'icon' => false,
        'color' => false,
        'type' => false,
        'type_label' => false,
        'favorite' => false,
        'default_adf' => false,
        'alerte_jours' => true,
        'calendar' => false,
        'show_catalogue' => false,
        'show_extranet_participant' => false,
        'show_extranet_formateur' => false,
        'show_extranet_entreprise' => false,
        'created_at' => true,
        'id_add' => true,
        'updated_at' => true,
        'id_edit' => true,
        'parent' => true,
        'children' => false
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
        'cible' => 'cible',
        'id_parent' => 'id_parent',
        'ordre' => 'ordre',
        'icon' => 'icon',
        'color' => 'color',
        'type' => 'type',
        'type_label' => 'type_label',
        'favorite' => 'favorite',
        'default_adf' => 'default_adf',
        'alerte_jours' => 'alerte_jours',
        'calendar' => 'calendar',
        'show_catalogue' => 'show_catalogue',
        'show_extranet_participant' => 'show_extranet_participant',
        'show_extranet_formateur' => 'show_extranet_formateur',
        'show_extranet_entreprise' => 'show_extranet_entreprise',
        'created_at' => 'created_at',
        'id_add' => 'id_add',
        'updated_at' => 'updated_at',
        'id_edit' => 'id_edit',
        'parent' => 'parent',
        'children' => 'children'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'intitule' => 'setIntitule',
        'cible' => 'setCible',
        'id_parent' => 'setIdParent',
        'ordre' => 'setOrdre',
        'icon' => 'setIcon',
        'color' => 'setColor',
        'type' => 'setType',
        'type_label' => 'setTypeLabel',
        'favorite' => 'setFavorite',
        'default_adf' => 'setDefaultAdf',
        'alerte_jours' => 'setAlerteJours',
        'calendar' => 'setCalendar',
        'show_catalogue' => 'setShowCatalogue',
        'show_extranet_participant' => 'setShowExtranetParticipant',
        'show_extranet_formateur' => 'setShowExtranetFormateur',
        'show_extranet_entreprise' => 'setShowExtranetEntreprise',
        'created_at' => 'setCreatedAt',
        'id_add' => 'setIdAdd',
        'updated_at' => 'setUpdatedAt',
        'id_edit' => 'setIdEdit',
        'parent' => 'setParent',
        'children' => 'setChildren'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'intitule' => 'getIntitule',
        'cible' => 'getCible',
        'id_parent' => 'getIdParent',
        'ordre' => 'getOrdre',
        'icon' => 'getIcon',
        'color' => 'getColor',
        'type' => 'getType',
        'type_label' => 'getTypeLabel',
        'favorite' => 'getFavorite',
        'default_adf' => 'getDefaultAdf',
        'alerte_jours' => 'getAlerteJours',
        'calendar' => 'getCalendar',
        'show_catalogue' => 'getShowCatalogue',
        'show_extranet_participant' => 'getShowExtranetParticipant',
        'show_extranet_formateur' => 'getShowExtranetFormateur',
        'show_extranet_entreprise' => 'getShowExtranetEntreprise',
        'created_at' => 'getCreatedAt',
        'id_add' => 'getIdAdd',
        'updated_at' => 'getUpdatedAt',
        'id_edit' => 'getIdEdit',
        'parent' => 'getParent',
        'children' => 'getChildren'
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
        $this->setIfExists('cible', $data ?? [], null);
        $this->setIfExists('id_parent', $data ?? [], null);
        $this->setIfExists('ordre', $data ?? [], null);
        $this->setIfExists('icon', $data ?? [], null);
        $this->setIfExists('color', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('type_label', $data ?? [], null);
        $this->setIfExists('favorite', $data ?? [], null);
        $this->setIfExists('default_adf', $data ?? [], null);
        $this->setIfExists('alerte_jours', $data ?? [], null);
        $this->setIfExists('calendar', $data ?? [], null);
        $this->setIfExists('show_catalogue', $data ?? [], null);
        $this->setIfExists('show_extranet_participant', $data ?? [], null);
        $this->setIfExists('show_extranet_formateur', $data ?? [], null);
        $this->setIfExists('show_extranet_entreprise', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('id_add', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('id_edit', $data ?? [], null);
        $this->setIfExists('parent', $data ?? [], null);
        $this->setIfExists('children', $data ?? [], null);
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
            throw new InvalidArgumentException('non-nullable cible cannot be null');
        }
        $this->container['cible'] = $cible;

        return $this;
    }

    /**
     * Gets id_parent
     *
     * @return int|null
     */
    public function getIdParent(): ?int
    {
        return $this->container['id_parent'];
    }

    /**
     * Sets id_parent
     *
     * @param int|null $id_parent id_parent
     *
     * @return $this
     */
    public function setIdParent(?int $id_parent): static
    {
        if (is_null($id_parent)) {
            array_push($this->openAPINullablesSetToNull, 'id_parent');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_parent', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id_parent'] = $id_parent;

        return $this;
    }

    /**
     * Gets ordre
     *
     * @return int|null
     */
    public function getOrdre(): ?int
    {
        return $this->container['ordre'];
    }

    /**
     * Sets ordre
     *
     * @param int|null $ordre ordre
     *
     * @return $this
     */
    public function setOrdre(?int $ordre): static
    {
        if (is_null($ordre)) {
            throw new InvalidArgumentException('non-nullable ordre cannot be null');
        }
        $this->container['ordre'] = $ordre;

        return $this;
    }

    /**
     * Gets icon
     *
     * @return string|null
     */
    public function getIcon(): ?string
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     *
     * @param string|null $icon icon
     *
     * @return $this
     */
    public function setIcon(?string $icon): static
    {
        if (is_null($icon)) {
            throw new InvalidArgumentException('non-nullable icon cannot be null');
        }
        $this->container['icon'] = $icon;

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
     * Gets type_label
     *
     * @return string|null
     */
    public function getTypeLabel(): ?string
    {
        return $this->container['type_label'];
    }

    /**
     * Sets type_label
     *
     * @param string|null $type_label type_label
     *
     * @return $this
     */
    public function setTypeLabel(?string $type_label): static
    {
        if (is_null($type_label)) {
            throw new InvalidArgumentException('non-nullable type_label cannot be null');
        }
        $this->container['type_label'] = $type_label;

        return $this;
    }

    /**
     * Gets favorite
     *
     * @return bool|null
     */
    public function getFavorite(): ?bool
    {
        return $this->container['favorite'];
    }

    /**
     * Sets favorite
     *
     * @param bool|null $favorite favorite
     *
     * @return $this
     */
    public function setFavorite(?bool $favorite): static
    {
        if (is_null($favorite)) {
            throw new InvalidArgumentException('non-nullable favorite cannot be null');
        }
        $this->container['favorite'] = $favorite;

        return $this;
    }

    /**
     * Gets default_adf
     *
     * @return bool|null
     */
    public function getDefaultAdf(): ?bool
    {
        return $this->container['default_adf'];
    }

    /**
     * Sets default_adf
     *
     * @param bool|null $default_adf default_adf
     *
     * @return $this
     */
    public function setDefaultAdf(?bool $default_adf): static
    {
        if (is_null($default_adf)) {
            throw new InvalidArgumentException('non-nullable default_adf cannot be null');
        }
        $this->container['default_adf'] = $default_adf;

        return $this;
    }

    /**
     * Gets alerte_jours
     *
     * @return string|null
     */
    public function getAlerteJours(): ?string
    {
        return $this->container['alerte_jours'];
    }

    /**
     * Sets alerte_jours
     *
     * @param string|null $alerte_jours alerte_jours
     *
     * @return $this
     */
    public function setAlerteJours(?string $alerte_jours): static
    {
        if (is_null($alerte_jours)) {
            array_push($this->openAPINullablesSetToNull, 'alerte_jours');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('alerte_jours', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['alerte_jours'] = $alerte_jours;

        return $this;
    }

    /**
     * Gets calendar
     *
     * @return bool|null
     */
    public function getCalendar(): ?bool
    {
        return $this->container['calendar'];
    }

    /**
     * Sets calendar
     *
     * @param bool|null $calendar calendar
     *
     * @return $this
     */
    public function setCalendar(?bool $calendar): static
    {
        if (is_null($calendar)) {
            throw new InvalidArgumentException('non-nullable calendar cannot be null');
        }
        $this->container['calendar'] = $calendar;

        return $this;
    }

    /**
     * Gets show_catalogue
     *
     * @return bool|null
     */
    public function getShowCatalogue(): ?bool
    {
        return $this->container['show_catalogue'];
    }

    /**
     * Sets show_catalogue
     *
     * @param bool|null $show_catalogue show_catalogue
     *
     * @return $this
     */
    public function setShowCatalogue(?bool $show_catalogue): static
    {
        if (is_null($show_catalogue)) {
            throw new InvalidArgumentException('non-nullable show_catalogue cannot be null');
        }
        $this->container['show_catalogue'] = $show_catalogue;

        return $this;
    }

    /**
     * Gets show_extranet_participant
     *
     * @return bool|null
     */
    public function getShowExtranetParticipant(): ?bool
    {
        return $this->container['show_extranet_participant'];
    }

    /**
     * Sets show_extranet_participant
     *
     * @param bool|null $show_extranet_participant show_extranet_participant
     *
     * @return $this
     */
    public function setShowExtranetParticipant(?bool $show_extranet_participant): static
    {
        if (is_null($show_extranet_participant)) {
            throw new InvalidArgumentException('non-nullable show_extranet_participant cannot be null');
        }
        $this->container['show_extranet_participant'] = $show_extranet_participant;

        return $this;
    }

    /**
     * Gets show_extranet_formateur
     *
     * @return bool|null
     */
    public function getShowExtranetFormateur(): ?bool
    {
        return $this->container['show_extranet_formateur'];
    }

    /**
     * Sets show_extranet_formateur
     *
     * @param bool|null $show_extranet_formateur show_extranet_formateur
     *
     * @return $this
     */
    public function setShowExtranetFormateur(?bool $show_extranet_formateur): static
    {
        if (is_null($show_extranet_formateur)) {
            throw new InvalidArgumentException('non-nullable show_extranet_formateur cannot be null');
        }
        $this->container['show_extranet_formateur'] = $show_extranet_formateur;

        return $this;
    }

    /**
     * Gets show_extranet_entreprise
     *
     * @return bool|null
     */
    public function getShowExtranetEntreprise(): ?bool
    {
        return $this->container['show_extranet_entreprise'];
    }

    /**
     * Sets show_extranet_entreprise
     *
     * @param bool|null $show_extranet_entreprise show_extranet_entreprise
     *
     * @return $this
     */
    public function setShowExtranetEntreprise(?bool $show_extranet_entreprise): static
    {
        if (is_null($show_extranet_entreprise)) {
            throw new InvalidArgumentException('non-nullable show_extranet_entreprise cannot be null');
        }
        $this->container['show_extranet_entreprise'] = $show_extranet_entreprise;

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
     * Gets parent
     *
     * @return \Dbout\DendreoSdk\Model\EtapeProcess|null
     */
    public function getParent(): ?\Dbout\DendreoSdk\Model\EtapeProcess
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param \Dbout\DendreoSdk\Model\EtapeProcess|null $parent Présent uniquement avec `include=parent`.
     *
     * @return $this
     */
    public function setParent(?\Dbout\DendreoSdk\Model\EtapeProcess $parent): static
    {
        if (is_null($parent)) {
            array_push($this->openAPINullablesSetToNull, 'parent');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('parent', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets children
     *
     * @return \Dbout\DendreoSdk\Model\EtapeProcess[]|null
     */
    public function getChildren(): ?array
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     *
     * @param \Dbout\DendreoSdk\Model\EtapeProcess[]|null $children Présent uniquement avec `include=children`.
     *
     * @return $this
     */
    public function setChildren(?array $children): static
    {
        if (is_null($children)) {
            throw new InvalidArgumentException('non-nullable children cannot be null');
        }
        $this->container['children'] = $children;

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


