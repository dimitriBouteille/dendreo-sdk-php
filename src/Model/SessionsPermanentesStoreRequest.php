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
 * SessionsPermanentesStoreRequest Class Doc Comment
 *
 * Generated from the Dendreo OpenAPI specification, do not edit manually.
 *
 * @package  Dbout\DendreoSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class SessionsPermanentesStoreRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'SessionsPermanentesStoreRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id_module' => 'int',
        'id_externe_module' => 'string',
        'id_salle_de_formation' => 'int',
        'id_externe_salle_de_formation' => 'string',
        'id_centre_de_formation' => 'int',
        'id_responsable' => 'int',
        'mode_pricing' => 'string',
        'prix' => 'float',
        'duree_heures' => 'float',
        'garantie' => 'bool',
        'active' => 'bool',
        'visible_cp' => 'bool',
        'rythmes' => 'string[]',
        'url_edof' => 'string',
        'pre_requis' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id_module' => null,
        'id_externe_module' => null,
        'id_salle_de_formation' => null,
        'id_externe_salle_de_formation' => null,
        'id_centre_de_formation' => null,
        'id_responsable' => null,
        'mode_pricing' => null,
        'prix' => null,
        'duree_heures' => null,
        'garantie' => null,
        'active' => null,
        'visible_cp' => null,
        'rythmes' => null,
        'url_edof' => null,
        'pre_requis' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id_module' => false,
        'id_externe_module' => false,
        'id_salle_de_formation' => false,
        'id_externe_salle_de_formation' => false,
        'id_centre_de_formation' => true,
        'id_responsable' => true,
        'mode_pricing' => true,
        'prix' => true,
        'duree_heures' => true,
        'garantie' => true,
        'active' => true,
        'visible_cp' => true,
        'rythmes' => false,
        'url_edof' => true,
        'pre_requis' => true
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
        'id_module' => 'id_module',
        'id_externe_module' => 'id_externe_module',
        'id_salle_de_formation' => 'id_salle_de_formation',
        'id_externe_salle_de_formation' => 'id_externe_salle_de_formation',
        'id_centre_de_formation' => 'id_centre_de_formation',
        'id_responsable' => 'id_responsable',
        'mode_pricing' => 'mode_pricing',
        'prix' => 'prix',
        'duree_heures' => 'duree_heures',
        'garantie' => 'garantie',
        'active' => 'active',
        'visible_cp' => 'visible_cp',
        'rythmes' => 'rythmes',
        'url_edof' => 'url_edof',
        'pre_requis' => 'pre_requis'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id_module' => 'setIdModule',
        'id_externe_module' => 'setIdExterneModule',
        'id_salle_de_formation' => 'setIdSalleDeFormation',
        'id_externe_salle_de_formation' => 'setIdExterneSalleDeFormation',
        'id_centre_de_formation' => 'setIdCentreDeFormation',
        'id_responsable' => 'setIdResponsable',
        'mode_pricing' => 'setModePricing',
        'prix' => 'setPrix',
        'duree_heures' => 'setDureeHeures',
        'garantie' => 'setGarantie',
        'active' => 'setActive',
        'visible_cp' => 'setVisibleCp',
        'rythmes' => 'setRythmes',
        'url_edof' => 'setUrlEdof',
        'pre_requis' => 'setPreRequis'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id_module' => 'getIdModule',
        'id_externe_module' => 'getIdExterneModule',
        'id_salle_de_formation' => 'getIdSalleDeFormation',
        'id_externe_salle_de_formation' => 'getIdExterneSalleDeFormation',
        'id_centre_de_formation' => 'getIdCentreDeFormation',
        'id_responsable' => 'getIdResponsable',
        'mode_pricing' => 'getModePricing',
        'prix' => 'getPrix',
        'duree_heures' => 'getDureeHeures',
        'garantie' => 'getGarantie',
        'active' => 'getActive',
        'visible_cp' => 'getVisibleCp',
        'rythmes' => 'getRythmes',
        'url_edof' => 'getUrlEdof',
        'pre_requis' => 'getPreRequis'
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

    public const MODE_PRICING_FORFAITAIRE = 'forfaitaire';
    public const MODE_PRICING_ASSIDUITE = 'assiduite';
    public const RYTHMES__1 = '1';
    public const RYTHMES__2 = '2';
    public const RYTHMES__3 = '3';
    public const RYTHMES__4 = '4';
    public const RYTHMES__5 = '5';
    public const RYTHMES__6 = '6';
    public const RYTHMES__7 = '7';

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
    public static function getRythmesAllowableValues()
    {
        return [
            self::RYTHMES__1,
            self::RYTHMES__2,
            self::RYTHMES__3,
            self::RYTHMES__4,
            self::RYTHMES__5,
            self::RYTHMES__6,
            self::RYTHMES__7,
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
        $this->setIfExists('id_module', $data ?? [], null);
        $this->setIfExists('id_externe_module', $data ?? [], null);
        $this->setIfExists('id_salle_de_formation', $data ?? [], null);
        $this->setIfExists('id_externe_salle_de_formation', $data ?? [], null);
        $this->setIfExists('id_centre_de_formation', $data ?? [], null);
        $this->setIfExists('id_responsable', $data ?? [], null);
        $this->setIfExists('mode_pricing', $data ?? [], null);
        $this->setIfExists('prix', $data ?? [], null);
        $this->setIfExists('duree_heures', $data ?? [], null);
        $this->setIfExists('garantie', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('visible_cp', $data ?? [], null);
        $this->setIfExists('rythmes', $data ?? [], null);
        $this->setIfExists('url_edof', $data ?? [], null);
        $this->setIfExists('pre_requis', $data ?? [], null);
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

        $allowedValues = self::getModePricingAllowableValues();
        if (!is_null($this->container['mode_pricing']) && !in_array($this->container['mode_pricing'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'mode_pricing', must be one of '%s'",
                $this->container['mode_pricing'],
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
     * Gets id_module
     *
     * @return int|null
     */
    public function getIdModule(): ?int
    {
        return $this->container['id_module'];
    }

    /**
     * Sets id_module
     *
     * @param int|null $id_module Identifiant du module. Obligatoire si `id_externe_module` n'est pas fourni. Renvoyé dans la réponse sous la clé `module_id`. Ce champ est requis lorsque <code>id_externe_module</code> n'est pas présent. Max : 2147483647.
     *
     * @return $this
     */
    public function setIdModule(?int $id_module): static
    {
        if (is_null($id_module)) {
            throw new InvalidArgumentException('non-nullable id_module cannot be null');
        }
        $this->container['id_module'] = $id_module;

        return $this;
    }

    /**
     * Gets id_externe_module
     *
     * @return string|null
     */
    public function getIdExterneModule(): ?string
    {
        return $this->container['id_externe_module'];
    }

    /**
     * Sets id_externe_module
     *
     * @param string|null $id_externe_module Identifiant externe du module, alternative à `id_module` pour désigner le même module. Ce champ est requis lorsque <code>id_module</code> n'est pas présent. Max : 36 caractères.
     *
     * @return $this
     */
    public function setIdExterneModule(?string $id_externe_module): static
    {
        if (is_null($id_externe_module)) {
            throw new InvalidArgumentException('non-nullable id_externe_module cannot be null');
        }
        $this->container['id_externe_module'] = $id_externe_module;

        return $this;
    }

    /**
     * Gets id_salle_de_formation
     *
     * @return int|null
     */
    public function getIdSalleDeFormation(): ?int
    {
        return $this->container['id_salle_de_formation'];
    }

    /**
     * Sets id_salle_de_formation
     *
     * @param int|null $id_salle_de_formation Identifiant de la salle de formation. Obligatoire si `id_externe_salle_de_formation` n'est pas fourni. Renvoyé dans la réponse sous la clé `salle_de_formation_id`. Ce champ est requis lorsque <code>id_externe_salle_de_formation</code> n'est pas présent. Max : 2147483647.
     *
     * @return $this
     */
    public function setIdSalleDeFormation(?int $id_salle_de_formation): static
    {
        if (is_null($id_salle_de_formation)) {
            throw new InvalidArgumentException('non-nullable id_salle_de_formation cannot be null');
        }
        $this->container['id_salle_de_formation'] = $id_salle_de_formation;

        return $this;
    }

    /**
     * Gets id_externe_salle_de_formation
     *
     * @return string|null
     */
    public function getIdExterneSalleDeFormation(): ?string
    {
        return $this->container['id_externe_salle_de_formation'];
    }

    /**
     * Sets id_externe_salle_de_formation
     *
     * @param string|null $id_externe_salle_de_formation Identifiant externe de la salle de formation, alternative à `id_salle_de_formation` pour désigner la même salle. Ce champ est requis lorsque <code>id_salle_de_formation</code> n'est pas présent. Max : 36 caractères.
     *
     * @return $this
     */
    public function setIdExterneSalleDeFormation(?string $id_externe_salle_de_formation): static
    {
        if (is_null($id_externe_salle_de_formation)) {
            throw new InvalidArgumentException('non-nullable id_externe_salle_de_formation cannot be null');
        }
        $this->container['id_externe_salle_de_formation'] = $id_externe_salle_de_formation;

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
     * @param int|null $id_centre_de_formation Centre de formation rattaché. `0` = « Tous les centres ». Défaut : `0`. Contrairement aux autres identifiants, conserve la même clé (`id_centre_de_formation`) dans la réponse. Max : 2147483647.
     *
     * @return $this
     */
    public function setIdCentreDeFormation(?int $id_centre_de_formation): static
    {
        if (is_null($id_centre_de_formation)) {
            array_push($this->openAPINullablesSetToNull, 'id_centre_de_formation');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_centre_de_formation', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id_centre_de_formation'] = $id_centre_de_formation;

        return $this;
    }

    /**
     * Gets id_responsable
     *
     * @return int|null
     */
    public function getIdResponsable(): ?int
    {
        return $this->container['id_responsable'];
    }

    /**
     * Sets id_responsable
     *
     * @param int|null $id_responsable Identifiant de l'administrateur responsable. Renvoyé dans la réponse sous la clé `responsable_id`. Max : 2147483647.
     *
     * @return $this
     */
    public function setIdResponsable(?int $id_responsable): static
    {
        if (is_null($id_responsable)) {
            array_push($this->openAPINullablesSetToNull, 'id_responsable');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_responsable', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id_responsable'] = $id_responsable;

        return $this;
    }

    /**
     * Gets mode_pricing
     *
     * @return string|null
     */
    public function getModePricing(): ?string
    {
        return $this->container['mode_pricing'];
    }

    /**
     * Sets mode_pricing
     *
     * @param string|null $mode_pricing Mode de tarification. Valeurs : `forfaitaire`, `assiduite`. Défaut : `forfaitaire`.
     *
     * @return $this
     */
    public function setModePricing(?string $mode_pricing): static
    {
        if (is_null($mode_pricing)) {
            array_push($this->openAPINullablesSetToNull, 'mode_pricing');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mode_pricing', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = self::getModePricingAllowableValues();
        if (!is_null($mode_pricing) && !in_array($mode_pricing, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'mode_pricing', must be one of '%s'",
                    $mode_pricing,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mode_pricing'] = $mode_pricing;

        return $this;
    }

    /**
     * Gets prix
     *
     * @return float|null
     */
    public function getPrix(): ?float
    {
        return $this->container['prix'];
    }

    /**
     * Sets prix
     *
     * @param float|null $prix Prix. Si absent, déduit du module : tarif EDOF si le module est éligible au CPF et qu'un tarif EDOF est renseigné, sinon tarif du module. Min : 0. Max : 9999999999.9999.
     *
     * @return $this
     */
    public function setPrix(?float $prix): static
    {
        if (is_null($prix)) {
            array_push($this->openAPINullablesSetToNull, 'prix');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('prix', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['prix'] = $prix;

        return $this;
    }

    /**
     * Gets duree_heures
     *
     * @return float|null
     */
    public function getDureeHeures(): ?float
    {
        return $this->container['duree_heures'];
    }

    /**
     * Sets duree_heures
     *
     * @param float|null $duree_heures Durée **en heures**. Absente ou `null` : la session hérite de la durée du module. La réponse expose `duree_heures`, potentiellement héritée du module dans ce cas. Min : 0. Max : 10000.
     *
     * @return $this
     */
    public function setDureeHeures(?float $duree_heures): static
    {
        if (is_null($duree_heures)) {
            array_push($this->openAPINullablesSetToNull, 'duree_heures');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('duree_heures', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['duree_heures'] = $duree_heures;

        return $this;
    }

    /**
     * Gets garantie
     *
     * @return bool|null
     */
    public function getGarantie(): ?bool
    {
        return $this->container['garantie'];
    }

    /**
     * Sets garantie
     *
     * @param bool|null $garantie Garantie. Défaut : `0`.
     *
     * @return $this
     */
    public function setGarantie(?bool $garantie): static
    {
        if (is_null($garantie)) {
            array_push($this->openAPINullablesSetToNull, 'garantie');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('garantie', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['garantie'] = $garantie;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive(): ?bool
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active Session ouverte (`true`) ou fermée (`false`). Défaut : `false`, aligné sur le back-office.
     *
     * @return $this
     */
    public function setActive(?bool $active): static
    {
        if (is_null($active)) {
            array_push($this->openAPINullablesSetToNull, 'active');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('active', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets visible_cp
     *
     * @return bool|null
     */
    public function getVisibleCp(): ?bool
    {
        return $this->container['visible_cp'];
    }

    /**
     * Sets visible_cp
     *
     * @param bool|null $visible_cp Visible dans le catalogue public. Défaut : `false`.
     *
     * @return $this
     */
    public function setVisibleCp(?bool $visible_cp): static
    {
        if (is_null($visible_cp)) {
            array_push($this->openAPINullablesSetToNull, 'visible_cp');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('visible_cp', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['visible_cp'] = $visible_cp;

        return $this;
    }

    /**
     * Gets rythmes
     *
     * @return string[]|null
     */
    public function getRythmes(): ?array
    {
        return $this->container['rythmes'];
    }

    /**
     * Sets rythmes
     *
     * @param string[]|null $rythmes Tableau de rythmes de formation (valeurs entre 1 et 7 : `1` = En journée, `2` = En soirée, `3` = En semaine, `4` = Le week-end, `5` = Temps plein, `6` = Temps partiel, `7` = Plusieurs rythmes possibles), ou chaîne `\"1,3,5\"` équivalente. Absent : un rythme par défaut est appliqué (`En journée`). Une valeur `null` explicite est conservée telle quelle.
     *
     * @return $this
     */
    public function setRythmes(?array $rythmes): static
    {
        if (is_null($rythmes)) {
            throw new InvalidArgumentException('non-nullable rythmes cannot be null');
        }
        $allowedValues = self::getRythmesAllowableValues();
        if (array_diff($rythmes, $allowedValues)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value for 'rythmes', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['rythmes'] = $rythmes;

        return $this;
    }

    /**
     * Gets url_edof
     *
     * @return string|null
     */
    public function getUrlEdof(): ?string
    {
        return $this->container['url_edof'];
    }

    /**
     * Sets url_edof
     *
     * @param string|null $url_edof URL de la formation sur EDOF. Défaut : `null`. Doit être une URL valide. Max : 65535 caractères.
     *
     * @return $this
     */
    public function setUrlEdof(?string $url_edof): static
    {
        if (is_null($url_edof)) {
            array_push($this->openAPINullablesSetToNull, 'url_edof');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('url_edof', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['url_edof'] = $url_edof;

        return $this;
    }

    /**
     * Gets pre_requis
     *
     * @return string|null
     */
    public function getPreRequis(): ?string
    {
        return $this->container['pre_requis'];
    }

    /**
     * Sets pre_requis
     *
     * @param string|null $pre_requis Prérequis. Accepte du texte simple ou du HTML. Défaut : `null`. Max : 65535 caractères.
     *
     * @return $this
     */
    public function setPreRequis(?string $pre_requis): static
    {
        if (is_null($pre_requis)) {
            array_push($this->openAPINullablesSetToNull, 'pre_requis');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pre_requis', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pre_requis'] = $pre_requis;

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


