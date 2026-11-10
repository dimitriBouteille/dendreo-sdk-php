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
 * EtapeProcessUpdateRequest Class Doc Comment
 *
 * Generated from the Dendreo OpenAPI specification, do not edit manually.
 *
 * @package  Dbout\DendreoSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class EtapeProcessUpdateRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'EtapeProcessUpdateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'intitule' => 'string',
        'cible' => 'string',
        'id_parent' => 'int',
        'ordre' => 'int',
        'type' => 'string',
        'icon' => 'string',
        'color' => 'string',
        'favorite' => 'bool',
        'default_adf' => 'bool',
        'alerte_jours' => 'int',
        'calendar' => 'bool',
        'show_catalogue' => 'bool',
        'show_extranet_participant' => 'bool',
        'show_extranet_formateur' => 'bool',
        'show_extranet_entreprise' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'intitule' => null,
        'cible' => null,
        'id_parent' => null,
        'ordre' => null,
        'type' => null,
        'icon' => null,
        'color' => null,
        'favorite' => null,
        'default_adf' => null,
        'alerte_jours' => null,
        'calendar' => null,
        'show_catalogue' => null,
        'show_extranet_participant' => null,
        'show_extranet_formateur' => null,
        'show_extranet_entreprise' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'intitule' => false,
        'cible' => true,
        'id_parent' => true,
        'ordre' => true,
        'type' => true,
        'icon' => true,
        'color' => true,
        'favorite' => true,
        'default_adf' => true,
        'alerte_jours' => true,
        'calendar' => true,
        'show_catalogue' => true,
        'show_extranet_participant' => true,
        'show_extranet_formateur' => true,
        'show_extranet_entreprise' => true
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
        'intitule' => 'intitule',
        'cible' => 'cible',
        'id_parent' => 'id_parent',
        'ordre' => 'ordre',
        'type' => 'type',
        'icon' => 'icon',
        'color' => 'color',
        'favorite' => 'favorite',
        'default_adf' => 'default_adf',
        'alerte_jours' => 'alerte_jours',
        'calendar' => 'calendar',
        'show_catalogue' => 'show_catalogue',
        'show_extranet_participant' => 'show_extranet_participant',
        'show_extranet_formateur' => 'show_extranet_formateur',
        'show_extranet_entreprise' => 'show_extranet_entreprise'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'intitule' => 'setIntitule',
        'cible' => 'setCible',
        'id_parent' => 'setIdParent',
        'ordre' => 'setOrdre',
        'type' => 'setType',
        'icon' => 'setIcon',
        'color' => 'setColor',
        'favorite' => 'setFavorite',
        'default_adf' => 'setDefaultAdf',
        'alerte_jours' => 'setAlerteJours',
        'calendar' => 'setCalendar',
        'show_catalogue' => 'setShowCatalogue',
        'show_extranet_participant' => 'setShowExtranetParticipant',
        'show_extranet_formateur' => 'setShowExtranetFormateur',
        'show_extranet_entreprise' => 'setShowExtranetEntreprise'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'intitule' => 'getIntitule',
        'cible' => 'getCible',
        'id_parent' => 'getIdParent',
        'ordre' => 'getOrdre',
        'type' => 'getType',
        'icon' => 'getIcon',
        'color' => 'getColor',
        'favorite' => 'getFavorite',
        'default_adf' => 'getDefaultAdf',
        'alerte_jours' => 'getAlerteJours',
        'calendar' => 'getCalendar',
        'show_catalogue' => 'getShowCatalogue',
        'show_extranet_participant' => 'getShowExtranetParticipant',
        'show_extranet_formateur' => 'getShowExtranetFormateur',
        'show_extranet_entreprise' => 'getShowExtranetEntreprise'
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

    public const CIBLE_INTER = 'inter';
    public const CIBLE_INTRA = 'intra';
    public const TYPE_CONFIRMED = 'confirmed';
    public const TYPE_NOT_CONFIRMED = 'not_confirmed';
    public const TYPE_CANCELLED = 'cancelled';
    public const ICON_ALL = 'all';
    public const ICON_NEGO = 'nego';
    public const ICON_PREVUE = 'prevue';
    public const ICON_REAL = 'real';
    public const ICON_CLOTURATION = 'cloturation';
    public const ICON_ARCHIVES = 'archives';
    public const ICON_ECHEC = 'echec';
    public const ICON_ACCEPT = 'accept';
    public const ICON_DELETE = 'delete';
    public const ICON_MONITOR = 'monitor';
    public const ICON_STAR = 'star';
    public const ICON_MONEY_DOLLAR = 'money_dollar';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public static function getCibleAllowableValues()
    {
        return [
            self::CIBLE_INTER,
            self::CIBLE_INTRA,
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
            self::TYPE_CONFIRMED,
            self::TYPE_NOT_CONFIRMED,
            self::TYPE_CANCELLED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public static function getIconAllowableValues()
    {
        return [
            self::ICON_ALL,
            self::ICON_NEGO,
            self::ICON_PREVUE,
            self::ICON_REAL,
            self::ICON_CLOTURATION,
            self::ICON_ARCHIVES,
            self::ICON_ECHEC,
            self::ICON_ACCEPT,
            self::ICON_DELETE,
            self::ICON_MONITOR,
            self::ICON_STAR,
            self::ICON_MONEY_DOLLAR,
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
        $this->setIfExists('intitule', $data ?? [], null);
        $this->setIfExists('cible', $data ?? [], null);
        $this->setIfExists('id_parent', $data ?? [], null);
        $this->setIfExists('ordre', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('icon', $data ?? [], null);
        $this->setIfExists('color', $data ?? [], null);
        $this->setIfExists('favorite', $data ?? [], null);
        $this->setIfExists('default_adf', $data ?? [], null);
        $this->setIfExists('alerte_jours', $data ?? [], null);
        $this->setIfExists('calendar', $data ?? [], null);
        $this->setIfExists('show_catalogue', $data ?? [], null);
        $this->setIfExists('show_extranet_participant', $data ?? [], null);
        $this->setIfExists('show_extranet_formateur', $data ?? [], null);
        $this->setIfExists('show_extranet_entreprise', $data ?? [], null);
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

        $allowedValues = self::getCibleAllowableValues();
        if (!is_null($this->container['cible']) && !in_array($this->container['cible'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'cible', must be one of '%s'",
                $this->container['cible'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = self::getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = self::getIconAllowableValues();
        if (!is_null($this->container['icon']) && !in_array($this->container['icon'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'icon', must be one of '%s'",
                $this->container['icon'],
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
     * @param string|null $intitule L'intitulé de l'étape (max 40 caractères). Max : 40 caractères.
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
     * @param string|null $cible Le type d'ADF ciblé. Valeurs : `inter`, `intra`. Obligatoire sauf si `id_parent` est fourni (héritage automatique).
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
        $allowedValues = self::getCibleAllowableValues();
        if (!is_null($cible) && !in_array($cible, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'cible', must be one of '%s'",
                    $cible,
                    implode("', '", $allowedValues)
                )
            );
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
     * @param int|null $id_parent ID de l'étape parente (null ou 0 pour une étape racine). L'étape parente doit elle-même être racine (2 niveaux max). Min : 0. Max : 2147483647.
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
     * @param int|null $ordre Ordre d'affichage. Min : 0. Max : 2147483647.
     *
     * @return $this
     */
    public function setOrdre(?int $ordre): static
    {
        if (is_null($ordre)) {
            array_push($this->openAPINullablesSetToNull, 'ordre');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ordre', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ordre'] = $ordre;

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
     * @param string|null $type Statut fonctionnel de l'ADF. Valeurs : `confirmed`, `not_confirmed`, `cancelled`. Défaut : `not_confirmed`.
     *
     * @return $this
     */
    public function setType(?string $type): static
    {
        if (is_null($type)) {
            array_push($this->openAPINullablesSetToNull, 'type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = self::getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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
     * @param string|null $icon Icône. Valeurs : all, nego, prevue, real, cloturation, archives, echec, accept, delete, monitor, star, money_dollar. Défaut : `all`.
     *
     * @return $this
     */
    public function setIcon(?string $icon): static
    {
        if (is_null($icon)) {
            array_push($this->openAPINullablesSetToNull, 'icon');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('icon', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = self::getIconAllowableValues();
        if (!is_null($icon) && !in_array($icon, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'icon', must be one of '%s'",
                    $icon,
                    implode("', '", $allowedValues)
                )
            );
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
     * @param string|null $color Couleur hexadécimale (format `#RRGGBB` ou `#RGB`). Défaut : `#ffffff`.
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
     * @param bool|null $favorite Étape favorite pour ce type. Une seule favorite par `cible`.
     *
     * @return $this
     */
    public function setFavorite(?bool $favorite): static
    {
        if (is_null($favorite)) {
            array_push($this->openAPINullablesSetToNull, 'favorite');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('favorite', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param bool|null $default_adf Étape par défaut pour les nouvelles ADF. Une seule par `cible`.
     *
     * @return $this
     */
    public function setDefaultAdf(?bool $default_adf): static
    {
        if (is_null($default_adf)) {
            array_push($this->openAPINullablesSetToNull, 'default_adf');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('default_adf', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['default_adf'] = $default_adf;

        return $this;
    }

    /**
     * Gets alerte_jours
     *
     * @return int|null
     */
    public function getAlerteJours(): ?int
    {
        return $this->container['alerte_jours'];
    }

    /**
     * Sets alerte_jours
     *
     * @param int|null $alerte_jours Seuil d'alerte en jours. Min : 0. Max : 9999.
     *
     * @return $this
     */
    public function setAlerteJours(?int $alerte_jours): static
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
     * @param bool|null $calendar Visible dans l'agenda admin.
     *
     * @return $this
     */
    public function setCalendar(?bool $calendar): static
    {
        if (is_null($calendar)) {
            array_push($this->openAPINullablesSetToNull, 'calendar');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('calendar', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param bool|null $show_catalogue Visible dans le catalogue public.
     *
     * @return $this
     */
    public function setShowCatalogue(?bool $show_catalogue): static
    {
        if (is_null($show_catalogue)) {
            array_push($this->openAPINullablesSetToNull, 'show_catalogue');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('show_catalogue', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param bool|null $show_extranet_participant Visible dans l'extranet participant.
     *
     * @return $this
     */
    public function setShowExtranetParticipant(?bool $show_extranet_participant): static
    {
        if (is_null($show_extranet_participant)) {
            array_push($this->openAPINullablesSetToNull, 'show_extranet_participant');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('show_extranet_participant', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param bool|null $show_extranet_formateur Visible dans l'extranet formateur.
     *
     * @return $this
     */
    public function setShowExtranetFormateur(?bool $show_extranet_formateur): static
    {
        if (is_null($show_extranet_formateur)) {
            array_push($this->openAPINullablesSetToNull, 'show_extranet_formateur');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('show_extranet_formateur', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param bool|null $show_extranet_entreprise Visible dans l'extranet entreprise.
     *
     * @return $this
     */
    public function setShowExtranetEntreprise(?bool $show_extranet_entreprise): static
    {
        if (is_null($show_extranet_entreprise)) {
            array_push($this->openAPINullablesSetToNull, 'show_extranet_entreprise');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('show_extranet_entreprise', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['show_extranet_entreprise'] = $show_extranet_entreprise;

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


