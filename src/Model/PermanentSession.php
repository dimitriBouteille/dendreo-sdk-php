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
 * PermanentSession Class Doc Comment
 *
 * Generated from the Dendreo OpenAPI specification, do not edit manually.
 *
 * @description Les champs additionnels du compte sont ajoutés à la ressource, sous leur nom de champ.
 * @package  Dbout\DendreoSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class PermanentSession implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PermanentSession';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'module_id' => 'int',
        'salle_de_formation_id' => 'int',
        'responsable_id' => 'int',
        'mode_pricing' => 'string',
        'rythmes' => 'int[]',
        'prix' => 'string',
        'duree_heures' => 'int',
        'garantie' => 'bool',
        'active' => 'bool',
        'url_edof' => 'string',
        'id_centre_de_formation' => 'int',
        'pre_requis' => 'string',
        'visible_cp' => 'bool',
        'numero_complet' => 'string',
        'intitule' => 'string',
        'rythmes_readable' => 'string[]',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'deleted_at' => '\DateTime',
        'responsable' => '\Dbout\DendreoSdk\Model\Administrateur',
        'centre' => '\Dbout\DendreoSdk\Model\CentresDeFormation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'module_id' => null,
        'salle_de_formation_id' => null,
        'responsable_id' => null,
        'mode_pricing' => null,
        'rythmes' => null,
        'prix' => null,
        'duree_heures' => null,
        'garantie' => null,
        'active' => null,
        'url_edof' => null,
        'id_centre_de_formation' => null,
        'pre_requis' => null,
        'visible_cp' => null,
        'numero_complet' => null,
        'intitule' => null,
        'rythmes_readable' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'deleted_at' => 'date-time',
        'responsable' => null,
        'centre' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'module_id' => false,
        'salle_de_formation_id' => false,
        'responsable_id' => true,
        'mode_pricing' => false,
        'rythmes' => false,
        'prix' => true,
        'duree_heures' => false,
        'garantie' => false,
        'active' => false,
        'url_edof' => true,
        'id_centre_de_formation' => false,
        'pre_requis' => true,
        'visible_cp' => false,
        'numero_complet' => false,
        'intitule' => false,
        'rythmes_readable' => false,
        'created_at' => true,
        'updated_at' => true,
        'deleted_at' => true,
        'responsable' => true,
        'centre' => true
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
        'module_id' => 'module_id',
        'salle_de_formation_id' => 'salle_de_formation_id',
        'responsable_id' => 'responsable_id',
        'mode_pricing' => 'mode_pricing',
        'rythmes' => 'rythmes',
        'prix' => 'prix',
        'duree_heures' => 'duree_heures',
        'garantie' => 'garantie',
        'active' => 'active',
        'url_edof' => 'url_edof',
        'id_centre_de_formation' => 'id_centre_de_formation',
        'pre_requis' => 'pre_requis',
        'visible_cp' => 'visible_cp',
        'numero_complet' => 'numero_complet',
        'intitule' => 'intitule',
        'rythmes_readable' => 'rythmes_readable',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'deleted_at' => 'deleted_at',
        'responsable' => 'responsable',
        'centre' => 'centre'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'module_id' => 'setModuleId',
        'salle_de_formation_id' => 'setSalleDeFormationId',
        'responsable_id' => 'setResponsableId',
        'mode_pricing' => 'setModePricing',
        'rythmes' => 'setRythmes',
        'prix' => 'setPrix',
        'duree_heures' => 'setDureeHeures',
        'garantie' => 'setGarantie',
        'active' => 'setActive',
        'url_edof' => 'setUrlEdof',
        'id_centre_de_formation' => 'setIdCentreDeFormation',
        'pre_requis' => 'setPreRequis',
        'visible_cp' => 'setVisibleCp',
        'numero_complet' => 'setNumeroComplet',
        'intitule' => 'setIntitule',
        'rythmes_readable' => 'setRythmesReadable',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'deleted_at' => 'setDeletedAt',
        'responsable' => 'setResponsable',
        'centre' => 'setCentre'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'module_id' => 'getModuleId',
        'salle_de_formation_id' => 'getSalleDeFormationId',
        'responsable_id' => 'getResponsableId',
        'mode_pricing' => 'getModePricing',
        'rythmes' => 'getRythmes',
        'prix' => 'getPrix',
        'duree_heures' => 'getDureeHeures',
        'garantie' => 'getGarantie',
        'active' => 'getActive',
        'url_edof' => 'getUrlEdof',
        'id_centre_de_formation' => 'getIdCentreDeFormation',
        'pre_requis' => 'getPreRequis',
        'visible_cp' => 'getVisibleCp',
        'numero_complet' => 'getNumeroComplet',
        'intitule' => 'getIntitule',
        'rythmes_readable' => 'getRythmesReadable',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'deleted_at' => 'getDeletedAt',
        'responsable' => 'getResponsable',
        'centre' => 'getCentre'
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
        $this->setIfExists('module_id', $data ?? [], null);
        $this->setIfExists('salle_de_formation_id', $data ?? [], null);
        $this->setIfExists('responsable_id', $data ?? [], null);
        $this->setIfExists('mode_pricing', $data ?? [], null);
        $this->setIfExists('rythmes', $data ?? [], null);
        $this->setIfExists('prix', $data ?? [], null);
        $this->setIfExists('duree_heures', $data ?? [], null);
        $this->setIfExists('garantie', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('url_edof', $data ?? [], null);
        $this->setIfExists('id_centre_de_formation', $data ?? [], null);
        $this->setIfExists('pre_requis', $data ?? [], null);
        $this->setIfExists('visible_cp', $data ?? [], null);
        $this->setIfExists('numero_complet', $data ?? [], null);
        $this->setIfExists('intitule', $data ?? [], null);
        $this->setIfExists('rythmes_readable', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('deleted_at', $data ?? [], null);
        $this->setIfExists('responsable', $data ?? [], null);
        $this->setIfExists('centre', $data ?? [], null);
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
     * Gets module_id
     *
     * @return int|null
     */
    public function getModuleId(): ?int
    {
        return $this->container['module_id'];
    }

    /**
     * Sets module_id
     *
     * @param int|null $module_id module_id
     *
     * @return $this
     */
    public function setModuleId(?int $module_id): static
    {
        if (is_null($module_id)) {
            throw new InvalidArgumentException('non-nullable module_id cannot be null');
        }
        $this->container['module_id'] = $module_id;

        return $this;
    }

    /**
     * Gets salle_de_formation_id
     *
     * @return int|null
     */
    public function getSalleDeFormationId(): ?int
    {
        return $this->container['salle_de_formation_id'];
    }

    /**
     * Sets salle_de_formation_id
     *
     * @param int|null $salle_de_formation_id salle_de_formation_id
     *
     * @return $this
     */
    public function setSalleDeFormationId(?int $salle_de_formation_id): static
    {
        if (is_null($salle_de_formation_id)) {
            throw new InvalidArgumentException('non-nullable salle_de_formation_id cannot be null');
        }
        $this->container['salle_de_formation_id'] = $salle_de_formation_id;

        return $this;
    }

    /**
     * Gets responsable_id
     *
     * @return int|null
     */
    public function getResponsableId(): ?int
    {
        return $this->container['responsable_id'];
    }

    /**
     * Sets responsable_id
     *
     * @param int|null $responsable_id responsable_id
     *
     * @return $this
     */
    public function setResponsableId(?int $responsable_id): static
    {
        if (is_null($responsable_id)) {
            array_push($this->openAPINullablesSetToNull, 'responsable_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('responsable_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['responsable_id'] = $responsable_id;

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
     * @param string|null $mode_pricing mode_pricing
     *
     * @return $this
     */
    public function setModePricing(?string $mode_pricing): static
    {
        if (is_null($mode_pricing)) {
            throw new InvalidArgumentException('non-nullable mode_pricing cannot be null');
        }
        $this->container['mode_pricing'] = $mode_pricing;

        return $this;
    }

    /**
     * Gets rythmes
     *
     * @return int[]|null
     */
    public function getRythmes(): ?array
    {
        return $this->container['rythmes'];
    }

    /**
     * Sets rythmes
     *
     * @param int[]|null $rythmes rythmes
     *
     * @return $this
     */
    public function setRythmes(?array $rythmes): static
    {
        if (is_null($rythmes)) {
            throw new InvalidArgumentException('non-nullable rythmes cannot be null');
        }
        $this->container['rythmes'] = $rythmes;

        return $this;
    }

    /**
     * Gets prix
     *
     * @return string|null
     */
    public function getPrix(): ?string
    {
        return $this->container['prix'];
    }

    /**
     * Sets prix
     *
     * @param string|null $prix prix
     *
     * @return $this
     */
    public function setPrix(?string $prix): static
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
     * @return int|null
     */
    public function getDureeHeures(): ?int
    {
        return $this->container['duree_heures'];
    }

    /**
     * Sets duree_heures
     *
     * @param int|null $duree_heures duree_heures
     *
     * @return $this
     */
    public function setDureeHeures(?int $duree_heures): static
    {
        if (is_null($duree_heures)) {
            throw new InvalidArgumentException('non-nullable duree_heures cannot be null');
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
     * @param bool|null $garantie garantie
     *
     * @return $this
     */
    public function setGarantie(?bool $garantie): static
    {
        if (is_null($garantie)) {
            throw new InvalidArgumentException('non-nullable garantie cannot be null');
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
     * @param bool|null $active active
     *
     * @return $this
     */
    public function setActive(?bool $active): static
    {
        if (is_null($active)) {
            throw new InvalidArgumentException('non-nullable active cannot be null');
        }
        $this->container['active'] = $active;

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
     * @param string|null $url_edof url_edof
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
     * @param int|null $id_centre_de_formation id_centre_de_formation
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
     * @param string|null $pre_requis pre_requis
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
     * @param bool|null $visible_cp visible_cp
     *
     * @return $this
     */
    public function setVisibleCp(?bool $visible_cp): static
    {
        if (is_null($visible_cp)) {
            throw new InvalidArgumentException('non-nullable visible_cp cannot be null');
        }
        $this->container['visible_cp'] = $visible_cp;

        return $this;
    }

    /**
     * Gets numero_complet
     *
     * @return string|null
     */
    public function getNumeroComplet(): ?string
    {
        return $this->container['numero_complet'];
    }

    /**
     * Sets numero_complet
     *
     * @param string|null $numero_complet numero_complet
     *
     * @return $this
     */
    public function setNumeroComplet(?string $numero_complet): static
    {
        if (is_null($numero_complet)) {
            throw new InvalidArgumentException('non-nullable numero_complet cannot be null');
        }
        $this->container['numero_complet'] = $numero_complet;

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
     * Gets rythmes_readable
     *
     * @return string[]|null
     */
    public function getRythmesReadable(): ?array
    {
        return $this->container['rythmes_readable'];
    }

    /**
     * Sets rythmes_readable
     *
     * @param string[]|null $rythmes_readable rythmes_readable
     *
     * @return $this
     */
    public function setRythmesReadable(?array $rythmes_readable): static
    {
        if (is_null($rythmes_readable)) {
            throw new InvalidArgumentException('non-nullable rythmes_readable cannot be null');
        }
        $this->container['rythmes_readable'] = $rythmes_readable;

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
     * Gets responsable
     *
     * @return \Dbout\DendreoSdk\Model\Administrateur|null
     */
    public function getResponsable(): ?\Dbout\DendreoSdk\Model\Administrateur
    {
        return $this->container['responsable'];
    }

    /**
     * Sets responsable
     *
     * @param \Dbout\DendreoSdk\Model\Administrateur|null $responsable Présent uniquement avec `include=responsable`.
     *
     * @return $this
     */
    public function setResponsable(?\Dbout\DendreoSdk\Model\Administrateur $responsable): static
    {
        if (is_null($responsable)) {
            array_push($this->openAPINullablesSetToNull, 'responsable');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('responsable', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['responsable'] = $responsable;

        return $this;
    }

    /**
     * Gets centre
     *
     * @return \Dbout\DendreoSdk\Model\CentresDeFormation|null
     */
    public function getCentre(): ?\Dbout\DendreoSdk\Model\CentresDeFormation
    {
        return $this->container['centre'];
    }

    /**
     * Sets centre
     *
     * @param \Dbout\DendreoSdk\Model\CentresDeFormation|null $centre Présent uniquement avec `include=centre`. Vaut `null` pour une session rattachée au centre « Global ».
     *
     * @return $this
     */
    public function setCentre(?\Dbout\DendreoSdk\Model\CentresDeFormation $centre): static
    {
        if (is_null($centre)) {
            array_push($this->openAPINullablesSetToNull, 'centre');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('centre', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['centre'] = $centre;

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


