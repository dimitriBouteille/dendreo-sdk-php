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
 * Budget Class Doc Comment
 *
 * Generated from the Dendreo OpenAPI specification, do not edit manually.
 *
 * @description Les champs additionnels du compte sont ajoutés à la ressource, sous leur nom de champ.
 * @package  Dbout\DendreoSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class Budget implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Budget';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'id_budget_type' => 'int',
        'id_action_de_formation' => 'int',
        'devis_detail_id' => 'int',
        'id_module' => 'int',
        'id_lap' => 'int',
        'id_heure_type' => 'int',
        'id_laf' => 'int',
        'id_lmf' => 'int',
        'type' => 'string',
        'intitule' => 'string',
        'prix_unitaire' => 'float',
        'nb' => 'int',
        'total' => 'int',
        'tva' => 'float',
        'refacturable' => 'bool',
        'categorie_operation' => 'string',
        'parent_id' => 'int',
        'expense_id' => 'int',
        'date' => '\DateTime',
        'formateur_facture_id' => 'int',
        'invoiced_at' => '\DateTime',
        'created_at' => '\DateTime',
        'id_add' => 'int',
        'updated_at' => '\DateTime',
        'id_edit' => 'int',
        'administrateur_add' => '\Dbout\DendreoSdk\Model\Administrateur',
        'administrateur_edit' => '\Dbout\DendreoSdk\Model\Administrateur',
        'parent' => '\Dbout\DendreoSdk\Model\Budget'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'id_budget_type' => null,
        'id_action_de_formation' => null,
        'devis_detail_id' => null,
        'id_module' => null,
        'id_lap' => null,
        'id_heure_type' => null,
        'id_laf' => null,
        'id_lmf' => null,
        'type' => null,
        'intitule' => null,
        'prix_unitaire' => null,
        'nb' => null,
        'total' => null,
        'tva' => null,
        'refacturable' => null,
        'categorie_operation' => null,
        'parent_id' => null,
        'expense_id' => null,
        'date' => 'date',
        'formateur_facture_id' => null,
        'invoiced_at' => 'date-time',
        'created_at' => 'date-time',
        'id_add' => null,
        'updated_at' => 'date-time',
        'id_edit' => null,
        'administrateur_add' => null,
        'administrateur_edit' => null,
        'parent' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'id_budget_type' => true,
        'id_action_de_formation' => false,
        'devis_detail_id' => true,
        'id_module' => true,
        'id_lap' => true,
        'id_heure_type' => true,
        'id_laf' => true,
        'id_lmf' => true,
        'type' => false,
        'intitule' => false,
        'prix_unitaire' => false,
        'nb' => false,
        'total' => false,
        'tva' => false,
        'refacturable' => false,
        'categorie_operation' => true,
        'parent_id' => true,
        'expense_id' => true,
        'date' => true,
        'formateur_facture_id' => true,
        'invoiced_at' => true,
        'created_at' => true,
        'id_add' => true,
        'updated_at' => true,
        'id_edit' => true,
        'administrateur_add' => true,
        'administrateur_edit' => true,
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
        'id_budget_type' => 'id_budget_type',
        'id_action_de_formation' => 'id_action_de_formation',
        'devis_detail_id' => 'devis_detail_id',
        'id_module' => 'id_module',
        'id_lap' => 'id_lap',
        'id_heure_type' => 'id_heure_type',
        'id_laf' => 'id_laf',
        'id_lmf' => 'id_lmf',
        'type' => 'type',
        'intitule' => 'intitule',
        'prix_unitaire' => 'prix_unitaire',
        'nb' => 'nb',
        'total' => 'total',
        'tva' => 'tva',
        'refacturable' => 'refacturable',
        'categorie_operation' => 'categorie_operation',
        'parent_id' => 'parent_id',
        'expense_id' => 'expense_id',
        'date' => 'date',
        'formateur_facture_id' => 'formateur_facture_id',
        'invoiced_at' => 'invoiced_at',
        'created_at' => 'created_at',
        'id_add' => 'id_add',
        'updated_at' => 'updated_at',
        'id_edit' => 'id_edit',
        'administrateur_add' => 'administrateur_add',
        'administrateur_edit' => 'administrateur_edit',
        'parent' => 'parent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'id_budget_type' => 'setIdBudgetType',
        'id_action_de_formation' => 'setIdActionDeFormation',
        'devis_detail_id' => 'setDevisDetailId',
        'id_module' => 'setIdModule',
        'id_lap' => 'setIdLap',
        'id_heure_type' => 'setIdHeureType',
        'id_laf' => 'setIdLaf',
        'id_lmf' => 'setIdLmf',
        'type' => 'setType',
        'intitule' => 'setIntitule',
        'prix_unitaire' => 'setPrixUnitaire',
        'nb' => 'setNb',
        'total' => 'setTotal',
        'tva' => 'setTva',
        'refacturable' => 'setRefacturable',
        'categorie_operation' => 'setCategorieOperation',
        'parent_id' => 'setParentId',
        'expense_id' => 'setExpenseId',
        'date' => 'setDate',
        'formateur_facture_id' => 'setFormateurFactureId',
        'invoiced_at' => 'setInvoicedAt',
        'created_at' => 'setCreatedAt',
        'id_add' => 'setIdAdd',
        'updated_at' => 'setUpdatedAt',
        'id_edit' => 'setIdEdit',
        'administrateur_add' => 'setAdministrateurAdd',
        'administrateur_edit' => 'setAdministrateurEdit',
        'parent' => 'setParent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'id_budget_type' => 'getIdBudgetType',
        'id_action_de_formation' => 'getIdActionDeFormation',
        'devis_detail_id' => 'getDevisDetailId',
        'id_module' => 'getIdModule',
        'id_lap' => 'getIdLap',
        'id_heure_type' => 'getIdHeureType',
        'id_laf' => 'getIdLaf',
        'id_lmf' => 'getIdLmf',
        'type' => 'getType',
        'intitule' => 'getIntitule',
        'prix_unitaire' => 'getPrixUnitaire',
        'nb' => 'getNb',
        'total' => 'getTotal',
        'tva' => 'getTva',
        'refacturable' => 'getRefacturable',
        'categorie_operation' => 'getCategorieOperation',
        'parent_id' => 'getParentId',
        'expense_id' => 'getExpenseId',
        'date' => 'getDate',
        'formateur_facture_id' => 'getFormateurFactureId',
        'invoiced_at' => 'getInvoicedAt',
        'created_at' => 'getCreatedAt',
        'id_add' => 'getIdAdd',
        'updated_at' => 'getUpdatedAt',
        'id_edit' => 'getIdEdit',
        'administrateur_add' => 'getAdministrateurAdd',
        'administrateur_edit' => 'getAdministrateurEdit',
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
        $this->setIfExists('id_budget_type', $data ?? [], null);
        $this->setIfExists('id_action_de_formation', $data ?? [], null);
        $this->setIfExists('devis_detail_id', $data ?? [], null);
        $this->setIfExists('id_module', $data ?? [], null);
        $this->setIfExists('id_lap', $data ?? [], null);
        $this->setIfExists('id_heure_type', $data ?? [], null);
        $this->setIfExists('id_laf', $data ?? [], null);
        $this->setIfExists('id_lmf', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('intitule', $data ?? [], null);
        $this->setIfExists('prix_unitaire', $data ?? [], null);
        $this->setIfExists('nb', $data ?? [], null);
        $this->setIfExists('total', $data ?? [], null);
        $this->setIfExists('tva', $data ?? [], null);
        $this->setIfExists('refacturable', $data ?? [], null);
        $this->setIfExists('categorie_operation', $data ?? [], null);
        $this->setIfExists('parent_id', $data ?? [], null);
        $this->setIfExists('expense_id', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('formateur_facture_id', $data ?? [], null);
        $this->setIfExists('invoiced_at', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('id_add', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('id_edit', $data ?? [], null);
        $this->setIfExists('administrateur_add', $data ?? [], null);
        $this->setIfExists('administrateur_edit', $data ?? [], null);
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
     * Gets id_budget_type
     *
     * @return int|null
     */
    public function getIdBudgetType(): ?int
    {
        return $this->container['id_budget_type'];
    }

    /**
     * Sets id_budget_type
     *
     * @param int|null $id_budget_type id_budget_type
     *
     * @return $this
     */
    public function setIdBudgetType(?int $id_budget_type): static
    {
        if (is_null($id_budget_type)) {
            array_push($this->openAPINullablesSetToNull, 'id_budget_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_budget_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id_budget_type'] = $id_budget_type;

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
     * Gets devis_detail_id
     *
     * @return int|null
     */
    public function getDevisDetailId(): ?int
    {
        return $this->container['devis_detail_id'];
    }

    /**
     * Sets devis_detail_id
     *
     * @param int|null $devis_detail_id devis_detail_id
     *
     * @return $this
     */
    public function setDevisDetailId(?int $devis_detail_id): static
    {
        if (is_null($devis_detail_id)) {
            array_push($this->openAPINullablesSetToNull, 'devis_detail_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('devis_detail_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['devis_detail_id'] = $devis_detail_id;

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
            array_push($this->openAPINullablesSetToNull, 'id_module');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_module', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id_module'] = $id_module;

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
            array_push($this->openAPINullablesSetToNull, 'id_lap');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_lap', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id_lap'] = $id_lap;

        return $this;
    }

    /**
     * Gets id_heure_type
     *
     * @return int|null
     */
    public function getIdHeureType(): ?int
    {
        return $this->container['id_heure_type'];
    }

    /**
     * Sets id_heure_type
     *
     * @param int|null $id_heure_type id_heure_type
     *
     * @return $this
     */
    public function setIdHeureType(?int $id_heure_type): static
    {
        if (is_null($id_heure_type)) {
            array_push($this->openAPINullablesSetToNull, 'id_heure_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_heure_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id_heure_type'] = $id_heure_type;

        return $this;
    }

    /**
     * Gets id_laf
     *
     * @return int|null
     */
    public function getIdLaf(): ?int
    {
        return $this->container['id_laf'];
    }

    /**
     * Sets id_laf
     *
     * @param int|null $id_laf id_laf
     *
     * @return $this
     */
    public function setIdLaf(?int $id_laf): static
    {
        if (is_null($id_laf)) {
            array_push($this->openAPINullablesSetToNull, 'id_laf');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_laf', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id_laf'] = $id_laf;

        return $this;
    }

    /**
     * Gets id_lmf
     *
     * @return int|null
     */
    public function getIdLmf(): ?int
    {
        return $this->container['id_lmf'];
    }

    /**
     * Sets id_lmf
     *
     * @param int|null $id_lmf id_lmf
     *
     * @return $this
     */
    public function setIdLmf(?int $id_lmf): static
    {
        if (is_null($id_lmf)) {
            array_push($this->openAPINullablesSetToNull, 'id_lmf');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_lmf', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id_lmf'] = $id_lmf;

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
     * Gets prix_unitaire
     *
     * @return float|null
     */
    public function getPrixUnitaire(): ?float
    {
        return $this->container['prix_unitaire'];
    }

    /**
     * Sets prix_unitaire
     *
     * @param float|null $prix_unitaire prix_unitaire
     *
     * @return $this
     */
    public function setPrixUnitaire(?float $prix_unitaire): static
    {
        if (is_null($prix_unitaire)) {
            throw new InvalidArgumentException('non-nullable prix_unitaire cannot be null');
        }
        $this->container['prix_unitaire'] = $prix_unitaire;

        return $this;
    }

    /**
     * Gets nb
     *
     * @return int|null
     */
    public function getNb(): ?int
    {
        return $this->container['nb'];
    }

    /**
     * Sets nb
     *
     * @param int|null $nb nb
     *
     * @return $this
     */
    public function setNb(?int $nb): static
    {
        if (is_null($nb)) {
            throw new InvalidArgumentException('non-nullable nb cannot be null');
        }
        $this->container['nb'] = $nb;

        return $this;
    }

    /**
     * Gets total
     *
     * @return int|null
     */
    public function getTotal(): ?int
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param int|null $total total
     *
     * @return $this
     */
    public function setTotal(?int $total): static
    {
        if (is_null($total)) {
            throw new InvalidArgumentException('non-nullable total cannot be null');
        }
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets tva
     *
     * @return float|null
     */
    public function getTva(): ?float
    {
        return $this->container['tva'];
    }

    /**
     * Sets tva
     *
     * @param float|null $tva tva
     *
     * @return $this
     */
    public function setTva(?float $tva): static
    {
        if (is_null($tva)) {
            throw new InvalidArgumentException('non-nullable tva cannot be null');
        }
        $this->container['tva'] = $tva;

        return $this;
    }

    /**
     * Gets refacturable
     *
     * @return bool|null
     */
    public function getRefacturable(): ?bool
    {
        return $this->container['refacturable'];
    }

    /**
     * Sets refacturable
     *
     * @param bool|null $refacturable refacturable
     *
     * @return $this
     */
    public function setRefacturable(?bool $refacturable): static
    {
        if (is_null($refacturable)) {
            throw new InvalidArgumentException('non-nullable refacturable cannot be null');
        }
        $this->container['refacturable'] = $refacturable;

        return $this;
    }

    /**
     * Gets categorie_operation
     *
     * @return string|null
     */
    public function getCategorieOperation(): ?string
    {
        return $this->container['categorie_operation'];
    }

    /**
     * Sets categorie_operation
     *
     * @param string|null $categorie_operation categorie_operation
     *
     * @return $this
     */
    public function setCategorieOperation(?string $categorie_operation): static
    {
        if (is_null($categorie_operation)) {
            array_push($this->openAPINullablesSetToNull, 'categorie_operation');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('categorie_operation', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['categorie_operation'] = $categorie_operation;

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
     * Gets expense_id
     *
     * @return int|null
     */
    public function getExpenseId(): ?int
    {
        return $this->container['expense_id'];
    }

    /**
     * Sets expense_id
     *
     * @param int|null $expense_id expense_id
     *
     * @return $this
     */
    public function setExpenseId(?int $expense_id): static
    {
        if (is_null($expense_id)) {
            array_push($this->openAPINullablesSetToNull, 'expense_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('expense_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['expense_id'] = $expense_id;

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
     * Gets formateur_facture_id
     *
     * @return int|null
     */
    public function getFormateurFactureId(): ?int
    {
        return $this->container['formateur_facture_id'];
    }

    /**
     * Sets formateur_facture_id
     *
     * @param int|null $formateur_facture_id formateur_facture_id
     *
     * @return $this
     */
    public function setFormateurFactureId(?int $formateur_facture_id): static
    {
        if (is_null($formateur_facture_id)) {
            array_push($this->openAPINullablesSetToNull, 'formateur_facture_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('formateur_facture_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['formateur_facture_id'] = $formateur_facture_id;

        return $this;
    }

    /**
     * Gets invoiced_at
     *
     * @return \DateTime|null
     */
    public function getInvoicedAt(): ?\DateTime
    {
        return $this->container['invoiced_at'];
    }

    /**
     * Sets invoiced_at
     *
     * @param \DateTime|null $invoiced_at Heure de Paris (Europe/Paris), heure d'été comprise.
     *
     * @return $this
     */
    public function setInvoicedAt(?\DateTime $invoiced_at): static
    {
        if (is_null($invoiced_at)) {
            array_push($this->openAPINullablesSetToNull, 'invoiced_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('invoiced_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['invoiced_at'] = $invoiced_at;

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
     * Gets parent
     *
     * @return \Dbout\DendreoSdk\Model\Budget|null
     */
    public function getParent(): ?\Dbout\DendreoSdk\Model\Budget
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param \Dbout\DendreoSdk\Model\Budget|null $parent Présent uniquement avec `include=parent`. Absent quand la ligne de budget n'a pas de parent.
     *
     * @return $this
     */
    public function setParent(?\Dbout\DendreoSdk\Model\Budget $parent): static
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


