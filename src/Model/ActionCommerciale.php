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
 * ActionCommerciale Class Doc Comment
 *
 * Generated from the Dendreo OpenAPI specification, do not edit manually.
 *
 * @description Les champs additionnels du compte sont ajoutés à la ressource, sous leur nom de champ.
 * @package  Dbout\DendreoSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ActionCommerciale implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ActionCommerciale';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'date_action' => '\DateTime',
        'date_relance' => '\DateTime',
        'compte_rendu' => 'string',
        'priorite' => 'int',
        'id_categorie_ac' => 'int',
        'devis_id' => 'int',
        'id_entreprise' => 'int',
        'parent_id' => 'int',
        'created_at' => '\DateTime',
        'id_add' => 'int',
        'updated_at' => '\DateTime',
        'id_edit' => 'int',
        'administrateur_add' => '\Dbout\DendreoSdk\Model\Administrateur',
        'administrateur_edit' => '\Dbout\DendreoSdk\Model\Administrateur',
        'categorie' => '\Dbout\DendreoSdk\Model\CategorieAc',
        'commerciaux' => '\Dbout\DendreoSdk\Model\Administrateur[]',
        'devis' => '\Dbout\DendreoSdk\Model\Devis',
        'entreprise' => '\Dbout\DendreoSdk\Model\Entreprise',
        'interlocuteurs' => '\Dbout\DendreoSdk\Model\ActionCommercialeInterlocuteur[]',
        'parent' => '\Dbout\DendreoSdk\Model\ActionCommerciale'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'date_action' => 'date',
        'date_relance' => 'date',
        'compte_rendu' => null,
        'priorite' => null,
        'id_categorie_ac' => null,
        'devis_id' => null,
        'id_entreprise' => null,
        'parent_id' => null,
        'created_at' => 'date-time',
        'id_add' => null,
        'updated_at' => 'date-time',
        'id_edit' => null,
        'administrateur_add' => null,
        'administrateur_edit' => null,
        'categorie' => null,
        'commerciaux' => null,
        'devis' => null,
        'entreprise' => null,
        'interlocuteurs' => null,
        'parent' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'date_action' => true,
        'date_relance' => true,
        'compte_rendu' => false,
        'priorite' => false,
        'id_categorie_ac' => false,
        'devis_id' => false,
        'id_entreprise' => false,
        'parent_id' => true,
        'created_at' => true,
        'id_add' => true,
        'updated_at' => true,
        'id_edit' => true,
        'administrateur_add' => true,
        'administrateur_edit' => true,
        'categorie' => true,
        'commerciaux' => false,
        'devis' => true,
        'entreprise' => true,
        'interlocuteurs' => false,
        'parent' => true
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
        'date_action' => 'date_action',
        'date_relance' => 'date_relance',
        'compte_rendu' => 'compte_rendu',
        'priorite' => 'priorite',
        'id_categorie_ac' => 'id_categorie_ac',
        'devis_id' => 'devis_id',
        'id_entreprise' => 'id_entreprise',
        'parent_id' => 'parent_id',
        'created_at' => 'created_at',
        'id_add' => 'id_add',
        'updated_at' => 'updated_at',
        'id_edit' => 'id_edit',
        'administrateur_add' => 'administrateur_add',
        'administrateur_edit' => 'administrateur_edit',
        'categorie' => 'categorie',
        'commerciaux' => 'commerciaux',
        'devis' => 'devis',
        'entreprise' => 'entreprise',
        'interlocuteurs' => 'interlocuteurs',
        'parent' => 'parent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'date_action' => 'setDateAction',
        'date_relance' => 'setDateRelance',
        'compte_rendu' => 'setCompteRendu',
        'priorite' => 'setPriorite',
        'id_categorie_ac' => 'setIdCategorieAc',
        'devis_id' => 'setDevisId',
        'id_entreprise' => 'setIdEntreprise',
        'parent_id' => 'setParentId',
        'created_at' => 'setCreatedAt',
        'id_add' => 'setIdAdd',
        'updated_at' => 'setUpdatedAt',
        'id_edit' => 'setIdEdit',
        'administrateur_add' => 'setAdministrateurAdd',
        'administrateur_edit' => 'setAdministrateurEdit',
        'categorie' => 'setCategorie',
        'commerciaux' => 'setCommerciaux',
        'devis' => 'setDevis',
        'entreprise' => 'setEntreprise',
        'interlocuteurs' => 'setInterlocuteurs',
        'parent' => 'setParent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'date_action' => 'getDateAction',
        'date_relance' => 'getDateRelance',
        'compte_rendu' => 'getCompteRendu',
        'priorite' => 'getPriorite',
        'id_categorie_ac' => 'getIdCategorieAc',
        'devis_id' => 'getDevisId',
        'id_entreprise' => 'getIdEntreprise',
        'parent_id' => 'getParentId',
        'created_at' => 'getCreatedAt',
        'id_add' => 'getIdAdd',
        'updated_at' => 'getUpdatedAt',
        'id_edit' => 'getIdEdit',
        'administrateur_add' => 'getAdministrateurAdd',
        'administrateur_edit' => 'getAdministrateurEdit',
        'categorie' => 'getCategorie',
        'commerciaux' => 'getCommerciaux',
        'devis' => 'getDevis',
        'entreprise' => 'getEntreprise',
        'interlocuteurs' => 'getInterlocuteurs',
        'parent' => 'getParent'
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
        $this->setIfExists('date_action', $data ?? [], null);
        $this->setIfExists('date_relance', $data ?? [], null);
        $this->setIfExists('compte_rendu', $data ?? [], null);
        $this->setIfExists('priorite', $data ?? [], null);
        $this->setIfExists('id_categorie_ac', $data ?? [], null);
        $this->setIfExists('devis_id', $data ?? [], null);
        $this->setIfExists('id_entreprise', $data ?? [], null);
        $this->setIfExists('parent_id', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('id_add', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('id_edit', $data ?? [], null);
        $this->setIfExists('administrateur_add', $data ?? [], null);
        $this->setIfExists('administrateur_edit', $data ?? [], null);
        $this->setIfExists('categorie', $data ?? [], null);
        $this->setIfExists('commerciaux', $data ?? [], null);
        $this->setIfExists('devis', $data ?? [], null);
        $this->setIfExists('entreprise', $data ?? [], null);
        $this->setIfExists('interlocuteurs', $data ?? [], null);
        $this->setIfExists('parent', $data ?? [], null);
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
     * Gets date_action
     *
     * @return \DateTime|null
     */
    public function getDateAction(): ?\DateTime
    {
        return $this->container['date_action'];
    }

    /**
     * Sets date_action
     *
     * @param \DateTime|null $date_action date_action
     *
     * @return $this
     */
    public function setDateAction(?\DateTime $date_action): static
    {
        if (is_null($date_action)) {
            array_push($this->openAPINullablesSetToNull, 'date_action');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date_action', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['date_action'] = $date_action;

        return $this;
    }

    /**
     * Gets date_relance
     *
     * @return \DateTime|null
     */
    public function getDateRelance(): ?\DateTime
    {
        return $this->container['date_relance'];
    }

    /**
     * Sets date_relance
     *
     * @param \DateTime|null $date_relance date_relance
     *
     * @return $this
     */
    public function setDateRelance(?\DateTime $date_relance): static
    {
        if (is_null($date_relance)) {
            array_push($this->openAPINullablesSetToNull, 'date_relance');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date_relance', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['date_relance'] = $date_relance;

        return $this;
    }

    /**
     * Gets compte_rendu
     *
     * @return string|null
     */
    public function getCompteRendu(): ?string
    {
        return $this->container['compte_rendu'];
    }

    /**
     * Sets compte_rendu
     *
     * @param string|null $compte_rendu compte_rendu
     *
     * @return $this
     */
    public function setCompteRendu(?string $compte_rendu): static
    {
        if (is_null($compte_rendu)) {
            throw new InvalidArgumentException('non-nullable compte_rendu cannot be null');
        }
        $this->container['compte_rendu'] = $compte_rendu;

        return $this;
    }

    /**
     * Gets priorite
     *
     * @return int|null
     */
    public function getPriorite(): ?int
    {
        return $this->container['priorite'];
    }

    /**
     * Sets priorite
     *
     * @param int|null $priorite priorite
     *
     * @return $this
     */
    public function setPriorite(?int $priorite): static
    {
        if (is_null($priorite)) {
            throw new InvalidArgumentException('non-nullable priorite cannot be null');
        }
        $this->container['priorite'] = $priorite;

        return $this;
    }

    /**
     * Gets id_categorie_ac
     *
     * @return int|null
     */
    public function getIdCategorieAc(): ?int
    {
        return $this->container['id_categorie_ac'];
    }

    /**
     * Sets id_categorie_ac
     *
     * @param int|null $id_categorie_ac id_categorie_ac
     *
     * @return $this
     */
    public function setIdCategorieAc(?int $id_categorie_ac): static
    {
        if (is_null($id_categorie_ac)) {
            throw new InvalidArgumentException('non-nullable id_categorie_ac cannot be null');
        }
        $this->container['id_categorie_ac'] = $id_categorie_ac;

        return $this;
    }

    /**
     * Gets devis_id
     *
     * @return int|null
     */
    public function getDevisId(): ?int
    {
        return $this->container['devis_id'];
    }

    /**
     * Sets devis_id
     *
     * @param int|null $devis_id devis_id
     *
     * @return $this
     */
    public function setDevisId(?int $devis_id): static
    {
        if (is_null($devis_id)) {
            throw new InvalidArgumentException('non-nullable devis_id cannot be null');
        }
        $this->container['devis_id'] = $devis_id;

        return $this;
    }

    /**
     * Gets id_entreprise
     *
     * @return int|null
     */
    public function getIdEntreprise(): ?int
    {
        return $this->container['id_entreprise'];
    }

    /**
     * Sets id_entreprise
     *
     * @param int|null $id_entreprise id_entreprise
     *
     * @return $this
     */
    public function setIdEntreprise(?int $id_entreprise): static
    {
        if (is_null($id_entreprise)) {
            throw new InvalidArgumentException('non-nullable id_entreprise cannot be null');
        }
        $this->container['id_entreprise'] = $id_entreprise;

        return $this;
    }

    /**
     * Gets parent_id
     *
     * @return int|null
     */
    public function getParentId(): ?int
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param int|null $parent_id parent_id
     *
     * @return $this
     */
    public function setParentId(?int $parent_id): static
    {
        if (is_null($parent_id)) {
            array_push($this->openAPINullablesSetToNull, 'parent_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('parent_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['parent_id'] = $parent_id;

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
     * Gets administrateur_add
     *
     * @return \Dbout\DendreoSdk\Model\Administrateur|null
     */
    public function getAdministrateurAdd(): ?\Dbout\DendreoSdk\Model\Administrateur
    {
        return $this->container['administrateur_add'];
    }

    /**
     * Sets administrateur_add
     *
     * @param \Dbout\DendreoSdk\Model\Administrateur|null $administrateur_add Présent uniquement avec `include=administrateurAdd`.
     *
     * @return $this
     */
    public function setAdministrateurAdd(?\Dbout\DendreoSdk\Model\Administrateur $administrateur_add): static
    {
        if (is_null($administrateur_add)) {
            array_push($this->openAPINullablesSetToNull, 'administrateur_add');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('administrateur_add', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['administrateur_add'] = $administrateur_add;

        return $this;
    }

    /**
     * Gets administrateur_edit
     *
     * @return \Dbout\DendreoSdk\Model\Administrateur|null
     */
    public function getAdministrateurEdit(): ?\Dbout\DendreoSdk\Model\Administrateur
    {
        return $this->container['administrateur_edit'];
    }

    /**
     * Sets administrateur_edit
     *
     * @param \Dbout\DendreoSdk\Model\Administrateur|null $administrateur_edit Présent uniquement avec `include=administrateurEdit`.
     *
     * @return $this
     */
    public function setAdministrateurEdit(?\Dbout\DendreoSdk\Model\Administrateur $administrateur_edit): static
    {
        if (is_null($administrateur_edit)) {
            array_push($this->openAPINullablesSetToNull, 'administrateur_edit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('administrateur_edit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['administrateur_edit'] = $administrateur_edit;

        return $this;
    }

    /**
     * Gets categorie
     *
     * @return \Dbout\DendreoSdk\Model\CategorieAc|null
     */
    public function getCategorie(): ?\Dbout\DendreoSdk\Model\CategorieAc
    {
        return $this->container['categorie'];
    }

    /**
     * Sets categorie
     *
     * @param \Dbout\DendreoSdk\Model\CategorieAc|null $categorie Présent uniquement avec `include=categorie`.
     *
     * @return $this
     */
    public function setCategorie(?\Dbout\DendreoSdk\Model\CategorieAc $categorie): static
    {
        if (is_null($categorie)) {
            array_push($this->openAPINullablesSetToNull, 'categorie');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('categorie', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['categorie'] = $categorie;

        return $this;
    }

    /**
     * Gets commerciaux
     *
     * @return \Dbout\DendreoSdk\Model\Administrateur[]|null
     */
    public function getCommerciaux(): ?array
    {
        return $this->container['commerciaux'];
    }

    /**
     * Sets commerciaux
     *
     * @param \Dbout\DendreoSdk\Model\Administrateur[]|null $commerciaux Présent uniquement avec `include=commerciaux`.
     *
     * @return $this
     */
    public function setCommerciaux(?array $commerciaux): static
    {
        if (is_null($commerciaux)) {
            throw new InvalidArgumentException('non-nullable commerciaux cannot be null');
        }
        $this->container['commerciaux'] = $commerciaux;

        return $this;
    }

    /**
     * Gets devis
     *
     * @return \Dbout\DendreoSdk\Model\Devis|null
     */
    public function getDevis(): ?\Dbout\DendreoSdk\Model\Devis
    {
        return $this->container['devis'];
    }

    /**
     * Sets devis
     *
     * @param \Dbout\DendreoSdk\Model\Devis|null $devis Présent uniquement avec `include=devis`.
     *
     * @return $this
     */
    public function setDevis(?\Dbout\DendreoSdk\Model\Devis $devis): static
    {
        if (is_null($devis)) {
            array_push($this->openAPINullablesSetToNull, 'devis');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('devis', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['devis'] = $devis;

        return $this;
    }

    /**
     * Gets entreprise
     *
     * @return \Dbout\DendreoSdk\Model\Entreprise|null
     */
    public function getEntreprise(): ?\Dbout\DendreoSdk\Model\Entreprise
    {
        return $this->container['entreprise'];
    }

    /**
     * Sets entreprise
     *
     * @param \Dbout\DendreoSdk\Model\Entreprise|null $entreprise Présent uniquement avec `include=entreprise`.
     *
     * @return $this
     */
    public function setEntreprise(?\Dbout\DendreoSdk\Model\Entreprise $entreprise): static
    {
        if (is_null($entreprise)) {
            array_push($this->openAPINullablesSetToNull, 'entreprise');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('entreprise', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['entreprise'] = $entreprise;

        return $this;
    }

    /**
     * Gets interlocuteurs
     *
     * @return \Dbout\DendreoSdk\Model\ActionCommercialeInterlocuteur[]|null
     */
    public function getInterlocuteurs(): ?array
    {
        return $this->container['interlocuteurs'];
    }

    /**
     * Sets interlocuteurs
     *
     * @param \Dbout\DendreoSdk\Model\ActionCommercialeInterlocuteur[]|null $interlocuteurs Présent uniquement avec `include=interlocuteurs`.
     *
     * @return $this
     */
    public function setInterlocuteurs(?array $interlocuteurs): static
    {
        if (is_null($interlocuteurs)) {
            throw new InvalidArgumentException('non-nullable interlocuteurs cannot be null');
        }
        $this->container['interlocuteurs'] = $interlocuteurs;

        return $this;
    }

    /**
     * Gets parent
     *
     * @return \Dbout\DendreoSdk\Model\ActionCommerciale|null
     */
    public function getParent(): ?\Dbout\DendreoSdk\Model\ActionCommerciale
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param \Dbout\DendreoSdk\Model\ActionCommerciale|null $parent Présent uniquement avec `include=parent`.
     *
     * @return $this
     */
    public function setParent(?\Dbout\DendreoSdk\Model\ActionCommerciale $parent): static
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


