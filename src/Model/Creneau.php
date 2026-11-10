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
 * Creneau Class Doc Comment
 *
 * Generated from the Dendreo OpenAPI specification, do not edit manually.
 *
 * @package  Dbout\DendreoSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class Creneau implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Creneau';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id_creneau' => 'int',
        'id_action_de_formation' => 'int',
        'id_lam' => 'int',
        'main_lam_id' => 'int',
        'id_salle_de_formation' => 'int',
        'name' => 'string',
        'icon' => 'string',
        'date_debut' => '\DateTime',
        'date_fin' => '\DateTime',
        'day' => '\DateTime',
        'url_connexion' => 'string',
        'url_connexion_invite' => 'string',
        'created_at' => '\DateTime',
        'id_add' => 'int',
        'updated_at' => '\DateTime',
        'id_edit' => 'int',
        'salle' => '\Dbout\DendreoSdk\Model\Lieu',
        'formateurs' => '\Dbout\DendreoSdk\Model\CreneauFormateur[]',
        'suivi' => '\Dbout\DendreoSdk\Model\SuiviPedagogique',
        'replays' => '\Dbout\DendreoSdk\Model\CreneauRecording[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id_creneau' => null,
        'id_action_de_formation' => null,
        'id_lam' => null,
        'main_lam_id' => null,
        'id_salle_de_formation' => null,
        'name' => null,
        'icon' => null,
        'date_debut' => 'date-time',
        'date_fin' => 'date-time',
        'day' => 'date',
        'url_connexion' => null,
        'url_connexion_invite' => null,
        'created_at' => 'date-time',
        'id_add' => null,
        'updated_at' => 'date-time',
        'id_edit' => null,
        'salle' => null,
        'formateurs' => null,
        'suivi' => null,
        'replays' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id_creneau' => false,
        'id_action_de_formation' => false,
        'id_lam' => false,
        'main_lam_id' => true,
        'id_salle_de_formation' => true,
        'name' => false,
        'icon' => false,
        'date_debut' => true,
        'date_fin' => true,
        'day' => true,
        'url_connexion' => false,
        'url_connexion_invite' => false,
        'created_at' => true,
        'id_add' => true,
        'updated_at' => true,
        'id_edit' => true,
        'salle' => true,
        'formateurs' => false,
        'suivi' => true,
        'replays' => false
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
        'id_creneau' => 'id_creneau',
        'id_action_de_formation' => 'id_action_de_formation',
        'id_lam' => 'id_lam',
        'main_lam_id' => 'main_lam_id',
        'id_salle_de_formation' => 'id_salle_de_formation',
        'name' => 'name',
        'icon' => 'icon',
        'date_debut' => 'date_debut',
        'date_fin' => 'date_fin',
        'day' => 'day',
        'url_connexion' => 'url_connexion',
        'url_connexion_invite' => 'url_connexion_invite',
        'created_at' => 'created_at',
        'id_add' => 'id_add',
        'updated_at' => 'updated_at',
        'id_edit' => 'id_edit',
        'salle' => 'salle',
        'formateurs' => 'formateurs',
        'suivi' => 'suivi',
        'replays' => 'replays'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id_creneau' => 'setIdCreneau',
        'id_action_de_formation' => 'setIdActionDeFormation',
        'id_lam' => 'setIdLam',
        'main_lam_id' => 'setMainLamId',
        'id_salle_de_formation' => 'setIdSalleDeFormation',
        'name' => 'setName',
        'icon' => 'setIcon',
        'date_debut' => 'setDateDebut',
        'date_fin' => 'setDateFin',
        'day' => 'setDay',
        'url_connexion' => 'setUrlConnexion',
        'url_connexion_invite' => 'setUrlConnexionInvite',
        'created_at' => 'setCreatedAt',
        'id_add' => 'setIdAdd',
        'updated_at' => 'setUpdatedAt',
        'id_edit' => 'setIdEdit',
        'salle' => 'setSalle',
        'formateurs' => 'setFormateurs',
        'suivi' => 'setSuivi',
        'replays' => 'setReplays'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id_creneau' => 'getIdCreneau',
        'id_action_de_formation' => 'getIdActionDeFormation',
        'id_lam' => 'getIdLam',
        'main_lam_id' => 'getMainLamId',
        'id_salle_de_formation' => 'getIdSalleDeFormation',
        'name' => 'getName',
        'icon' => 'getIcon',
        'date_debut' => 'getDateDebut',
        'date_fin' => 'getDateFin',
        'day' => 'getDay',
        'url_connexion' => 'getUrlConnexion',
        'url_connexion_invite' => 'getUrlConnexionInvite',
        'created_at' => 'getCreatedAt',
        'id_add' => 'getIdAdd',
        'updated_at' => 'getUpdatedAt',
        'id_edit' => 'getIdEdit',
        'salle' => 'getSalle',
        'formateurs' => 'getFormateurs',
        'suivi' => 'getSuivi',
        'replays' => 'getReplays'
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
        $this->setIfExists('id_creneau', $data ?? [], null);
        $this->setIfExists('id_action_de_formation', $data ?? [], null);
        $this->setIfExists('id_lam', $data ?? [], null);
        $this->setIfExists('main_lam_id', $data ?? [], null);
        $this->setIfExists('id_salle_de_formation', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('icon', $data ?? [], null);
        $this->setIfExists('date_debut', $data ?? [], null);
        $this->setIfExists('date_fin', $data ?? [], null);
        $this->setIfExists('day', $data ?? [], null);
        $this->setIfExists('url_connexion', $data ?? [], null);
        $this->setIfExists('url_connexion_invite', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('id_add', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('id_edit', $data ?? [], null);
        $this->setIfExists('salle', $data ?? [], null);
        $this->setIfExists('formateurs', $data ?? [], null);
        $this->setIfExists('suivi', $data ?? [], null);
        $this->setIfExists('replays', $data ?? [], null);
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
     * Gets id_lam
     *
     * @return int|null
     */
    public function getIdLam(): ?int
    {
        return $this->container['id_lam'];
    }

    /**
     * Sets id_lam
     *
     * @param int|null $id_lam id_lam
     *
     * @return $this
     */
    public function setIdLam(?int $id_lam): static
    {
        if (is_null($id_lam)) {
            throw new InvalidArgumentException('non-nullable id_lam cannot be null');
        }
        $this->container['id_lam'] = $id_lam;

        return $this;
    }

    /**
     * Gets main_lam_id
     *
     * @return int|null
     */
    public function getMainLamId(): ?int
    {
        return $this->container['main_lam_id'];
    }

    /**
     * Sets main_lam_id
     *
     * @param int|null $main_lam_id main_lam_id
     *
     * @return $this
     */
    public function setMainLamId(?int $main_lam_id): static
    {
        if (is_null($main_lam_id)) {
            array_push($this->openAPINullablesSetToNull, 'main_lam_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('main_lam_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['main_lam_id'] = $main_lam_id;

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
     * @param int|null $id_salle_de_formation id_salle_de_formation
     *
     * @return $this
     */
    public function setIdSalleDeFormation(?int $id_salle_de_formation): static
    {
        if (is_null($id_salle_de_formation)) {
            array_push($this->openAPINullablesSetToNull, 'id_salle_de_formation');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_salle_de_formation', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id_salle_de_formation'] = $id_salle_de_formation;

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
     * Gets date_debut
     *
     * @return \DateTime|null
     */
    public function getDateDebut(): ?\DateTime
    {
        return $this->container['date_debut'];
    }

    /**
     * Sets date_debut
     *
     * @param \DateTime|null $date_debut date_debut
     *
     * @return $this
     */
    public function setDateDebut(?\DateTime $date_debut): static
    {
        if (is_null($date_debut)) {
            array_push($this->openAPINullablesSetToNull, 'date_debut');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date_debut', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['date_debut'] = $date_debut;

        return $this;
    }

    /**
     * Gets date_fin
     *
     * @return \DateTime|null
     */
    public function getDateFin(): ?\DateTime
    {
        return $this->container['date_fin'];
    }

    /**
     * Sets date_fin
     *
     * @param \DateTime|null $date_fin date_fin
     *
     * @return $this
     */
    public function setDateFin(?\DateTime $date_fin): static
    {
        if (is_null($date_fin)) {
            array_push($this->openAPINullablesSetToNull, 'date_fin');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date_fin', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['date_fin'] = $date_fin;

        return $this;
    }

    /**
     * Gets day
     *
     * @return \DateTime|null
     */
    public function getDay(): ?\DateTime
    {
        return $this->container['day'];
    }

    /**
     * Sets day
     *
     * @param \DateTime|null $day day
     *
     * @return $this
     */
    public function setDay(?\DateTime $day): static
    {
        if (is_null($day)) {
            array_push($this->openAPINullablesSetToNull, 'day');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('day', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['day'] = $day;

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
            throw new InvalidArgumentException('non-nullable url_connexion cannot be null');
        }
        $this->container['url_connexion'] = $url_connexion;

        return $this;
    }

    /**
     * Gets url_connexion_invite
     *
     * @return string|null
     */
    public function getUrlConnexionInvite(): ?string
    {
        return $this->container['url_connexion_invite'];
    }

    /**
     * Sets url_connexion_invite
     *
     * @param string|null $url_connexion_invite url_connexion_invite
     *
     * @return $this
     */
    public function setUrlConnexionInvite(?string $url_connexion_invite): static
    {
        if (is_null($url_connexion_invite)) {
            throw new InvalidArgumentException('non-nullable url_connexion_invite cannot be null');
        }
        $this->container['url_connexion_invite'] = $url_connexion_invite;

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
     * Gets salle
     *
     * @return \Dbout\DendreoSdk\Model\Lieu|null
     */
    public function getSalle(): ?\Dbout\DendreoSdk\Model\Lieu
    {
        return $this->container['salle'];
    }

    /**
     * Sets salle
     *
     * @param \Dbout\DendreoSdk\Model\Lieu|null $salle Présent uniquement avec `include=creneaux.salle`. Même format que les éléments de `lieux`.
     *
     * @return $this
     */
    public function setSalle(?\Dbout\DendreoSdk\Model\Lieu $salle): static
    {
        if (is_null($salle)) {
            array_push($this->openAPINullablesSetToNull, 'salle');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('salle', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['salle'] = $salle;

        return $this;
    }

    /**
     * Gets formateurs
     *
     * @return \Dbout\DendreoSdk\Model\CreneauFormateur[]|null
     */
    public function getFormateurs(): ?array
    {
        return $this->container['formateurs'];
    }

    /**
     * Sets formateurs
     *
     * @param \Dbout\DendreoSdk\Model\CreneauFormateur[]|null $formateurs Présent uniquement avec `include=creneaux.formateurs`.
     *
     * @return $this
     */
    public function setFormateurs(?array $formateurs): static
    {
        if (is_null($formateurs)) {
            throw new InvalidArgumentException('non-nullable formateurs cannot be null');
        }
        $this->container['formateurs'] = $formateurs;

        return $this;
    }

    /**
     * Gets suivi
     *
     * @return \Dbout\DendreoSdk\Model\SuiviPedagogique|null
     */
    public function getSuivi(): ?\Dbout\DendreoSdk\Model\SuiviPedagogique
    {
        return $this->container['suivi'];
    }

    /**
     * Sets suivi
     *
     * @param \Dbout\DendreoSdk\Model\SuiviPedagogique|null $suivi Présent uniquement avec `include=creneaux.suivi`.
     *
     * @return $this
     */
    public function setSuivi(?\Dbout\DendreoSdk\Model\SuiviPedagogique $suivi): static
    {
        if (is_null($suivi)) {
            array_push($this->openAPINullablesSetToNull, 'suivi');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('suivi', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['suivi'] = $suivi;

        return $this;
    }

    /**
     * Gets replays
     *
     * @return \Dbout\DendreoSdk\Model\CreneauRecording[]|null
     */
    public function getReplays(): ?array
    {
        return $this->container['replays'];
    }

    /**
     * Sets replays
     *
     * @param \Dbout\DendreoSdk\Model\CreneauRecording[]|null $replays Présent uniquement avec `include=creneaux.replays`.
     *
     * @return $this
     */
    public function setReplays(?array $replays): static
    {
        if (is_null($replays)) {
            throw new InvalidArgumentException('non-nullable replays cannot be null');
        }
        $this->container['replays'] = $replays;

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


