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
 * ProchaineSession Class Doc Comment
 *
 * Generated from the Dendreo OpenAPI specification, do not edit manually.
 *
 * @package  Dbout\DendreoSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ProchaineSession implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ProchaineSession';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'type_module' => 'string',
        'id_action_de_formation' => 'int',
        'id_module' => 'int',
        'intitule' => 'string',
        'date_debut' => '\DateTime',
        'date_fin' => '\DateTime',
        'categorie' => 'string',
        'id_categorie' => 'int',
        'url_categorie' => 'string',
        'mode_organisation' => 'string',
        'mode_organisation_libelle' => 'string',
        'total_participants' => 'int',
        'nb_participants_min' => 'int',
        'nb_participants_max' => 'int',
        'remplissage' => 'string',
        'prix_formation' => 'int',
        'prix_module' => 'int',
        'url' => 'string',
        'url_relative' => 'string',
        'lieux' => '\Dbout\DendreoSdk\Model\Lieu[]',
        'module_champs_additionnels' => 'object',
        'visuel_module' => 'string',
        'satisfaction' => 'float',
        'categorie_module' => '\Dbout\DendreoSdk\Model\ModuleCategorie',
        'centre' => '\Dbout\DendreoSdk\Model\CentresDeFormation',
        'creneaux' => '\Dbout\DendreoSdk\Model\Creneau[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'type_module' => null,
        'id_action_de_formation' => null,
        'id_module' => null,
        'intitule' => null,
        'date_debut' => 'date-time',
        'date_fin' => 'date-time',
        'categorie' => null,
        'id_categorie' => null,
        'url_categorie' => null,
        'mode_organisation' => null,
        'mode_organisation_libelle' => null,
        'total_participants' => null,
        'nb_participants_min' => null,
        'nb_participants_max' => null,
        'remplissage' => null,
        'prix_formation' => null,
        'prix_module' => null,
        'url' => null,
        'url_relative' => null,
        'lieux' => null,
        'module_champs_additionnels' => null,
        'visuel_module' => null,
        'satisfaction' => null,
        'categorie_module' => null,
        'centre' => null,
        'creneaux' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'type_module' => false,
        'id_action_de_formation' => false,
        'id_module' => false,
        'intitule' => false,
        'date_debut' => true,
        'date_fin' => true,
        'categorie' => false,
        'id_categorie' => false,
        'url_categorie' => false,
        'mode_organisation' => false,
        'mode_organisation_libelle' => false,
        'total_participants' => false,
        'nb_participants_min' => false,
        'nb_participants_max' => false,
        'remplissage' => false,
        'prix_formation' => false,
        'prix_module' => false,
        'url' => false,
        'url_relative' => false,
        'lieux' => false,
        'module_champs_additionnels' => false,
        'visuel_module' => true,
        'satisfaction' => true,
        'categorie_module' => true,
        'centre' => true,
        'creneaux' => false
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
        'type_module' => 'type_module',
        'id_action_de_formation' => 'id_action_de_formation',
        'id_module' => 'id_module',
        'intitule' => 'intitule',
        'date_debut' => 'date_debut',
        'date_fin' => 'date_fin',
        'categorie' => 'categorie',
        'id_categorie' => 'id_categorie',
        'url_categorie' => 'url_categorie',
        'mode_organisation' => 'mode_organisation',
        'mode_organisation_libelle' => 'mode_organisation_libelle',
        'total_participants' => 'total_participants',
        'nb_participants_min' => 'nb_participants_min',
        'nb_participants_max' => 'nb_participants_max',
        'remplissage' => 'remplissage',
        'prix_formation' => 'prix_formation',
        'prix_module' => 'prix_module',
        'url' => 'url',
        'url_relative' => 'url_relative',
        'lieux' => 'lieux',
        'module_champs_additionnels' => 'module_champs_additionnels',
        'visuel_module' => 'visuel_module',
        'satisfaction' => 'satisfaction',
        'categorie_module' => 'categorie_module',
        'centre' => 'centre',
        'creneaux' => 'creneaux'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'type_module' => 'setTypeModule',
        'id_action_de_formation' => 'setIdActionDeFormation',
        'id_module' => 'setIdModule',
        'intitule' => 'setIntitule',
        'date_debut' => 'setDateDebut',
        'date_fin' => 'setDateFin',
        'categorie' => 'setCategorie',
        'id_categorie' => 'setIdCategorie',
        'url_categorie' => 'setUrlCategorie',
        'mode_organisation' => 'setModeOrganisation',
        'mode_organisation_libelle' => 'setModeOrganisationLibelle',
        'total_participants' => 'setTotalParticipants',
        'nb_participants_min' => 'setNbParticipantsMin',
        'nb_participants_max' => 'setNbParticipantsMax',
        'remplissage' => 'setRemplissage',
        'prix_formation' => 'setPrixFormation',
        'prix_module' => 'setPrixModule',
        'url' => 'setUrl',
        'url_relative' => 'setUrlRelative',
        'lieux' => 'setLieux',
        'module_champs_additionnels' => 'setModuleChampsAdditionnels',
        'visuel_module' => 'setVisuelModule',
        'satisfaction' => 'setSatisfaction',
        'categorie_module' => 'setCategorieModule',
        'centre' => 'setCentre',
        'creneaux' => 'setCreneaux'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'type_module' => 'getTypeModule',
        'id_action_de_formation' => 'getIdActionDeFormation',
        'id_module' => 'getIdModule',
        'intitule' => 'getIntitule',
        'date_debut' => 'getDateDebut',
        'date_fin' => 'getDateFin',
        'categorie' => 'getCategorie',
        'id_categorie' => 'getIdCategorie',
        'url_categorie' => 'getUrlCategorie',
        'mode_organisation' => 'getModeOrganisation',
        'mode_organisation_libelle' => 'getModeOrganisationLibelle',
        'total_participants' => 'getTotalParticipants',
        'nb_participants_min' => 'getNbParticipantsMin',
        'nb_participants_max' => 'getNbParticipantsMax',
        'remplissage' => 'getRemplissage',
        'prix_formation' => 'getPrixFormation',
        'prix_module' => 'getPrixModule',
        'url' => 'getUrl',
        'url_relative' => 'getUrlRelative',
        'lieux' => 'getLieux',
        'module_champs_additionnels' => 'getModuleChampsAdditionnels',
        'visuel_module' => 'getVisuelModule',
        'satisfaction' => 'getSatisfaction',
        'categorie_module' => 'getCategorieModule',
        'centre' => 'getCentre',
        'creneaux' => 'getCreneaux'
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
        $this->setIfExists('type_module', $data ?? [], null);
        $this->setIfExists('id_action_de_formation', $data ?? [], null);
        $this->setIfExists('id_module', $data ?? [], null);
        $this->setIfExists('intitule', $data ?? [], null);
        $this->setIfExists('date_debut', $data ?? [], null);
        $this->setIfExists('date_fin', $data ?? [], null);
        $this->setIfExists('categorie', $data ?? [], null);
        $this->setIfExists('id_categorie', $data ?? [], null);
        $this->setIfExists('url_categorie', $data ?? [], null);
        $this->setIfExists('mode_organisation', $data ?? [], null);
        $this->setIfExists('mode_organisation_libelle', $data ?? [], null);
        $this->setIfExists('total_participants', $data ?? [], null);
        $this->setIfExists('nb_participants_min', $data ?? [], null);
        $this->setIfExists('nb_participants_max', $data ?? [], null);
        $this->setIfExists('remplissage', $data ?? [], null);
        $this->setIfExists('prix_formation', $data ?? [], null);
        $this->setIfExists('prix_module', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('url_relative', $data ?? [], null);
        $this->setIfExists('lieux', $data ?? [], null);
        $this->setIfExists('module_champs_additionnels', $data ?? [], null);
        $this->setIfExists('visuel_module', $data ?? [], null);
        $this->setIfExists('satisfaction', $data ?? [], null);
        $this->setIfExists('categorie_module', $data ?? [], null);
        $this->setIfExists('centre', $data ?? [], null);
        $this->setIfExists('creneaux', $data ?? [], null);
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
     * Gets type_module
     *
     * @return string|null
     */
    public function getTypeModule(): ?string
    {
        return $this->container['type_module'];
    }

    /**
     * Sets type_module
     *
     * @param string|null $type_module type_module
     *
     * @return $this
     */
    public function setTypeModule(?string $type_module): static
    {
        if (is_null($type_module)) {
            throw new InvalidArgumentException('non-nullable type_module cannot be null');
        }
        $this->container['type_module'] = $type_module;

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
     * @param int|null $id_module id_module
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
     * Gets categorie
     *
     * @return string|null
     */
    public function getCategorie(): ?string
    {
        return $this->container['categorie'];
    }

    /**
     * Sets categorie
     *
     * @param string|null $categorie categorie
     *
     * @return $this
     */
    public function setCategorie(?string $categorie): static
    {
        if (is_null($categorie)) {
            throw new InvalidArgumentException('non-nullable categorie cannot be null');
        }
        $this->container['categorie'] = $categorie;

        return $this;
    }

    /**
     * Gets id_categorie
     *
     * @return int|null
     */
    public function getIdCategorie(): ?int
    {
        return $this->container['id_categorie'];
    }

    /**
     * Sets id_categorie
     *
     * @param int|null $id_categorie id_categorie
     *
     * @return $this
     */
    public function setIdCategorie(?int $id_categorie): static
    {
        if (is_null($id_categorie)) {
            throw new InvalidArgumentException('non-nullable id_categorie cannot be null');
        }
        $this->container['id_categorie'] = $id_categorie;

        return $this;
    }

    /**
     * Gets url_categorie
     *
     * @return string|null
     */
    public function getUrlCategorie(): ?string
    {
        return $this->container['url_categorie'];
    }

    /**
     * Sets url_categorie
     *
     * @param string|null $url_categorie url_categorie
     *
     * @return $this
     */
    public function setUrlCategorie(?string $url_categorie): static
    {
        if (is_null($url_categorie)) {
            throw new InvalidArgumentException('non-nullable url_categorie cannot be null');
        }
        $this->container['url_categorie'] = $url_categorie;

        return $this;
    }

    /**
     * Gets mode_organisation
     *
     * @return string|null
     */
    public function getModeOrganisation(): ?string
    {
        return $this->container['mode_organisation'];
    }

    /**
     * Sets mode_organisation
     *
     * @param string|null $mode_organisation mode_organisation
     *
     * @return $this
     */
    public function setModeOrganisation(?string $mode_organisation): static
    {
        if (is_null($mode_organisation)) {
            throw new InvalidArgumentException('non-nullable mode_organisation cannot be null');
        }
        $this->container['mode_organisation'] = $mode_organisation;

        return $this;
    }

    /**
     * Gets mode_organisation_libelle
     *
     * @return string|null
     */
    public function getModeOrganisationLibelle(): ?string
    {
        return $this->container['mode_organisation_libelle'];
    }

    /**
     * Sets mode_organisation_libelle
     *
     * @param string|null $mode_organisation_libelle mode_organisation_libelle
     *
     * @return $this
     */
    public function setModeOrganisationLibelle(?string $mode_organisation_libelle): static
    {
        if (is_null($mode_organisation_libelle)) {
            throw new InvalidArgumentException('non-nullable mode_organisation_libelle cannot be null');
        }
        $this->container['mode_organisation_libelle'] = $mode_organisation_libelle;

        return $this;
    }

    /**
     * Gets total_participants
     *
     * @return int|null
     */
    public function getTotalParticipants(): ?int
    {
        return $this->container['total_participants'];
    }

    /**
     * Sets total_participants
     *
     * @param int|null $total_participants total_participants
     *
     * @return $this
     */
    public function setTotalParticipants(?int $total_participants): static
    {
        if (is_null($total_participants)) {
            throw new InvalidArgumentException('non-nullable total_participants cannot be null');
        }
        $this->container['total_participants'] = $total_participants;

        return $this;
    }

    /**
     * Gets nb_participants_min
     *
     * @return int|null
     */
    public function getNbParticipantsMin(): ?int
    {
        return $this->container['nb_participants_min'];
    }

    /**
     * Sets nb_participants_min
     *
     * @param int|null $nb_participants_min nb_participants_min
     *
     * @return $this
     */
    public function setNbParticipantsMin(?int $nb_participants_min): static
    {
        if (is_null($nb_participants_min)) {
            throw new InvalidArgumentException('non-nullable nb_participants_min cannot be null');
        }
        $this->container['nb_participants_min'] = $nb_participants_min;

        return $this;
    }

    /**
     * Gets nb_participants_max
     *
     * @return int|null
     */
    public function getNbParticipantsMax(): ?int
    {
        return $this->container['nb_participants_max'];
    }

    /**
     * Sets nb_participants_max
     *
     * @param int|null $nb_participants_max nb_participants_max
     *
     * @return $this
     */
    public function setNbParticipantsMax(?int $nb_participants_max): static
    {
        if (is_null($nb_participants_max)) {
            throw new InvalidArgumentException('non-nullable nb_participants_max cannot be null');
        }
        $this->container['nb_participants_max'] = $nb_participants_max;

        return $this;
    }

    /**
     * Gets remplissage
     *
     * @return string|null
     */
    public function getRemplissage(): ?string
    {
        return $this->container['remplissage'];
    }

    /**
     * Sets remplissage
     *
     * @param string|null $remplissage remplissage
     *
     * @return $this
     */
    public function setRemplissage(?string $remplissage): static
    {
        if (is_null($remplissage)) {
            throw new InvalidArgumentException('non-nullable remplissage cannot be null');
        }
        $this->container['remplissage'] = $remplissage;

        return $this;
    }

    /**
     * Gets prix_formation
     *
     * @return int|null
     */
    public function getPrixFormation(): ?int
    {
        return $this->container['prix_formation'];
    }

    /**
     * Sets prix_formation
     *
     * @param int|null $prix_formation prix_formation
     *
     * @return $this
     */
    public function setPrixFormation(?int $prix_formation): static
    {
        if (is_null($prix_formation)) {
            throw new InvalidArgumentException('non-nullable prix_formation cannot be null');
        }
        $this->container['prix_formation'] = $prix_formation;

        return $this;
    }

    /**
     * Gets prix_module
     *
     * @return int|null
     */
    public function getPrixModule(): ?int
    {
        return $this->container['prix_module'];
    }

    /**
     * Sets prix_module
     *
     * @param int|null $prix_module prix_module
     *
     * @return $this
     */
    public function setPrixModule(?int $prix_module): static
    {
        if (is_null($prix_module)) {
            throw new InvalidArgumentException('non-nullable prix_module cannot be null');
        }
        $this->container['prix_module'] = $prix_module;

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
     * Gets url_relative
     *
     * @return string|null
     */
    public function getUrlRelative(): ?string
    {
        return $this->container['url_relative'];
    }

    /**
     * Sets url_relative
     *
     * @param string|null $url_relative url_relative
     *
     * @return $this
     */
    public function setUrlRelative(?string $url_relative): static
    {
        if (is_null($url_relative)) {
            throw new InvalidArgumentException('non-nullable url_relative cannot be null');
        }
        $this->container['url_relative'] = $url_relative;

        return $this;
    }

    /**
     * Gets lieux
     *
     * @return \Dbout\DendreoSdk\Model\Lieu[]|null
     */
    public function getLieux(): ?array
    {
        return $this->container['lieux'];
    }

    /**
     * Sets lieux
     *
     * @param \Dbout\DendreoSdk\Model\Lieu[]|null $lieux lieux
     *
     * @return $this
     */
    public function setLieux(?array $lieux): static
    {
        if (is_null($lieux)) {
            throw new InvalidArgumentException('non-nullable lieux cannot be null');
        }
        $this->container['lieux'] = $lieux;

        return $this;
    }

    /**
     * Gets module_champs_additionnels
     *
     * @return object|null
     */
    public function getModuleChampsAdditionnels(): ?object
    {
        return $this->container['module_champs_additionnels'];
    }

    /**
     * Sets module_champs_additionnels
     *
     * @param object|null $module_champs_additionnels Champs additionnels du module, sous leur nom de champ. Objet vide sans champ additionnel.
     *
     * @return $this
     */
    public function setModuleChampsAdditionnels(?object $module_champs_additionnels): static
    {
        if (is_null($module_champs_additionnels)) {
            throw new InvalidArgumentException('non-nullable module_champs_additionnels cannot be null');
        }
        $this->container['module_champs_additionnels'] = $module_champs_additionnels;

        return $this;
    }

    /**
     * Gets visuel_module
     *
     * @return string|null
     */
    public function getVisuelModule(): ?string
    {
        return $this->container['visuel_module'];
    }

    /**
     * Sets visuel_module
     *
     * @param string|null $visuel_module Présent uniquement avec `include=visuel`. URL du visuel du module.
     *
     * @return $this
     */
    public function setVisuelModule(?string $visuel_module): static
    {
        if (is_null($visuel_module)) {
            array_push($this->openAPINullablesSetToNull, 'visuel_module');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('visuel_module', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['visuel_module'] = $visuel_module;

        return $this;
    }

    /**
     * Gets satisfaction
     *
     * @return float|null
     */
    public function getSatisfaction(): ?float
    {
        return $this->container['satisfaction'];
    }

    /**
     * Sets satisfaction
     *
     * @param float|null $satisfaction Présent uniquement avec `include=satisfaction`. Note moyenne de satisfaction. `null` quand la satisfaction est désactivée ou que le catalogue appelé masque la note moyenne.
     *
     * @return $this
     */
    public function setSatisfaction(?float $satisfaction): static
    {
        if (is_null($satisfaction)) {
            array_push($this->openAPINullablesSetToNull, 'satisfaction');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('satisfaction', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['satisfaction'] = $satisfaction;

        return $this;
    }

    /**
     * Gets categorie_module
     *
     * @return \Dbout\DendreoSdk\Model\ModuleCategorie|null
     */
    public function getCategorieModule(): ?\Dbout\DendreoSdk\Model\ModuleCategorie
    {
        return $this->container['categorie_module'];
    }

    /**
     * Sets categorie_module
     *
     * @param \Dbout\DendreoSdk\Model\ModuleCategorie|null $categorie_module Présent uniquement avec `include=categorie_module`.
     *
     * @return $this
     */
    public function setCategorieModule(?\Dbout\DendreoSdk\Model\ModuleCategorie $categorie_module): static
    {
        if (is_null($categorie_module)) {
            array_push($this->openAPINullablesSetToNull, 'categorie_module');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('categorie_module', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['categorie_module'] = $categorie_module;

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
     * @param \Dbout\DendreoSdk\Model\CentresDeFormation|null $centre Présent uniquement avec `include=centre`. `null` pour une session du centre Global.
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
     * Gets creneaux
     *
     * @return \Dbout\DendreoSdk\Model\Creneau[]|null
     */
    public function getCreneaux(): ?array
    {
        return $this->container['creneaux'];
    }

    /**
     * Sets creneaux
     *
     * @param \Dbout\DendreoSdk\Model\Creneau[]|null $creneaux Présent uniquement avec `include=creneaux`. Aussi renvoyé avec `creneaux.salle`, `creneaux.formateurs`, `creneaux.suivi` ou `creneaux.replays`.
     *
     * @return $this
     */
    public function setCreneaux(?array $creneaux): static
    {
        if (is_null($creneaux)) {
            throw new InvalidArgumentException('non-nullable creneaux cannot be null');
        }
        $this->container['creneaux'] = $creneaux;

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


