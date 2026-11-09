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
 * BudgetFilter Class Doc Comment
 *
 * Generated from the Dendreo OpenAPI specification, do not edit manually.
 *
 * @package  Dbout\DendreoSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class BudgetFilter implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'BudgetFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int[]',
        'id_budget_type' => 'int[]',
        'id_action_de_formation' => 'int[]',
        'devis_detail_id' => 'int[]',
        'id_module' => 'int[]',
        'id_lap' => 'int[]',
        'id_heure_type' => 'int[]',
        'id_laf' => 'int[]',
        'id_lmf' => 'int[]',
        'type' => 'string',
        'intitule' => 'string',
        'refacturable' => 'string',
        'parent_id' => 'int[]',
        'expense_id' => 'int[]',
        'formateur_facture_id' => 'int[]',
        'categorie_operation' => 'string[]',
        'created_at' => 'string',
        'updated_at' => 'string'
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
        'refacturable' => null,
        'parent_id' => null,
        'expense_id' => null,
        'formateur_facture_id' => null,
        'categorie_operation' => null,
        'created_at' => null,
        'updated_at' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'id_budget_type' => false,
        'id_action_de_formation' => false,
        'devis_detail_id' => false,
        'id_module' => false,
        'id_lap' => false,
        'id_heure_type' => false,
        'id_laf' => false,
        'id_lmf' => false,
        'type' => false,
        'intitule' => false,
        'refacturable' => false,
        'parent_id' => false,
        'expense_id' => false,
        'formateur_facture_id' => false,
        'categorie_operation' => false,
        'created_at' => false,
        'updated_at' => false
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
        'refacturable' => 'refacturable',
        'parent_id' => 'parent_id',
        'expense_id' => 'expense_id',
        'formateur_facture_id' => 'formateur_facture_id',
        'categorie_operation' => 'categorie_operation',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
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
        'refacturable' => 'setRefacturable',
        'parent_id' => 'setParentId',
        'expense_id' => 'setExpenseId',
        'formateur_facture_id' => 'setFormateurFactureId',
        'categorie_operation' => 'setCategorieOperation',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
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
        'refacturable' => 'getRefacturable',
        'parent_id' => 'getParentId',
        'expense_id' => 'getExpenseId',
        'formateur_facture_id' => 'getFormateurFactureId',
        'categorie_operation' => 'getCategorieOperation',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
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
        $this->setIfExists('refacturable', $data ?? [], null);
        $this->setIfExists('parent_id', $data ?? [], null);
        $this->setIfExists('expense_id', $data ?? [], null);
        $this->setIfExists('formateur_facture_id', $data ?? [], null);
        $this->setIfExists('categorie_operation', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
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
     * @param int[]|null $id Valeur exacte. Plusieurs valeurs séparées par des virgules.
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
     * Gets id_budget_type
     *
     * @return int[]|null
     */
    public function getIdBudgetType(): ?array
    {
        return $this->container['id_budget_type'];
    }

    /**
     * Sets id_budget_type
     *
     * @param int[]|null $id_budget_type Valeur exacte. Plusieurs valeurs séparées par des virgules.
     *
     * @return $this
     */
    public function setIdBudgetType(?array $id_budget_type): static
    {
        if (is_null($id_budget_type)) {
            throw new InvalidArgumentException('non-nullable id_budget_type cannot be null');
        }
        $this->container['id_budget_type'] = $id_budget_type;

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
     * @param int[]|null $id_action_de_formation Valeur exacte. Plusieurs valeurs séparées par des virgules.
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
     * Gets devis_detail_id
     *
     * @return int[]|null
     */
    public function getDevisDetailId(): ?array
    {
        return $this->container['devis_detail_id'];
    }

    /**
     * Sets devis_detail_id
     *
     * @param int[]|null $devis_detail_id Valeur exacte. Plusieurs valeurs séparées par des virgules.
     *
     * @return $this
     */
    public function setDevisDetailId(?array $devis_detail_id): static
    {
        if (is_null($devis_detail_id)) {
            throw new InvalidArgumentException('non-nullable devis_detail_id cannot be null');
        }
        $this->container['devis_detail_id'] = $devis_detail_id;

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
     * @param int[]|null $id_module Valeur exacte. Plusieurs valeurs séparées par des virgules.
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
     * Gets id_lap
     *
     * @return int[]|null
     */
    public function getIdLap(): ?array
    {
        return $this->container['id_lap'];
    }

    /**
     * Sets id_lap
     *
     * @param int[]|null $id_lap Valeur exacte. Plusieurs valeurs séparées par des virgules.
     *
     * @return $this
     */
    public function setIdLap(?array $id_lap): static
    {
        if (is_null($id_lap)) {
            throw new InvalidArgumentException('non-nullable id_lap cannot be null');
        }
        $this->container['id_lap'] = $id_lap;

        return $this;
    }

    /**
     * Gets id_heure_type
     *
     * @return int[]|null
     */
    public function getIdHeureType(): ?array
    {
        return $this->container['id_heure_type'];
    }

    /**
     * Sets id_heure_type
     *
     * @param int[]|null $id_heure_type Valeur exacte. Plusieurs valeurs séparées par des virgules.
     *
     * @return $this
     */
    public function setIdHeureType(?array $id_heure_type): static
    {
        if (is_null($id_heure_type)) {
            throw new InvalidArgumentException('non-nullable id_heure_type cannot be null');
        }
        $this->container['id_heure_type'] = $id_heure_type;

        return $this;
    }

    /**
     * Gets id_laf
     *
     * @return int[]|null
     */
    public function getIdLaf(): ?array
    {
        return $this->container['id_laf'];
    }

    /**
     * Sets id_laf
     *
     * @param int[]|null $id_laf Valeur exacte. Plusieurs valeurs séparées par des virgules.
     *
     * @return $this
     */
    public function setIdLaf(?array $id_laf): static
    {
        if (is_null($id_laf)) {
            throw new InvalidArgumentException('non-nullable id_laf cannot be null');
        }
        $this->container['id_laf'] = $id_laf;

        return $this;
    }

    /**
     * Gets id_lmf
     *
     * @return int[]|null
     */
    public function getIdLmf(): ?array
    {
        return $this->container['id_lmf'];
    }

    /**
     * Sets id_lmf
     *
     * @param int[]|null $id_lmf Valeur exacte. Plusieurs valeurs séparées par des virgules.
     *
     * @return $this
     */
    public function setIdLmf(?array $id_lmf): static
    {
        if (is_null($id_lmf)) {
            throw new InvalidArgumentException('non-nullable id_lmf cannot be null');
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
     * @param string|null $type Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
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
     * @param string|null $intitule Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
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
     * Gets refacturable
     *
     * @return string|null
     */
    public function getRefacturable(): ?string
    {
        return $this->container['refacturable'];
    }

    /**
     * Sets refacturable
     *
     * @param string|null $refacturable Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setRefacturable(?string $refacturable): static
    {
        if (is_null($refacturable)) {
            throw new InvalidArgumentException('non-nullable refacturable cannot be null');
        }
        $this->container['refacturable'] = $refacturable;

        return $this;
    }

    /**
     * Gets parent_id
     *
     * @return int[]|null
     */
    public function getParentId(): ?array
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param int[]|null $parent_id Valeur exacte. Plusieurs valeurs séparées par des virgules.
     *
     * @return $this
     */
    public function setParentId(?array $parent_id): static
    {
        if (is_null($parent_id)) {
            throw new InvalidArgumentException('non-nullable parent_id cannot be null');
        }
        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets expense_id
     *
     * @return int[]|null
     */
    public function getExpenseId(): ?array
    {
        return $this->container['expense_id'];
    }

    /**
     * Sets expense_id
     *
     * @param int[]|null $expense_id Valeur exacte. Plusieurs valeurs séparées par des virgules.
     *
     * @return $this
     */
    public function setExpenseId(?array $expense_id): static
    {
        if (is_null($expense_id)) {
            throw new InvalidArgumentException('non-nullable expense_id cannot be null');
        }
        $this->container['expense_id'] = $expense_id;

        return $this;
    }

    /**
     * Gets formateur_facture_id
     *
     * @return int[]|null
     */
    public function getFormateurFactureId(): ?array
    {
        return $this->container['formateur_facture_id'];
    }

    /**
     * Sets formateur_facture_id
     *
     * @param int[]|null $formateur_facture_id Valeur exacte. Plusieurs valeurs séparées par des virgules.
     *
     * @return $this
     */
    public function setFormateurFactureId(?array $formateur_facture_id): static
    {
        if (is_null($formateur_facture_id)) {
            throw new InvalidArgumentException('non-nullable formateur_facture_id cannot be null');
        }
        $this->container['formateur_facture_id'] = $formateur_facture_id;

        return $this;
    }

    /**
     * Gets categorie_operation
     *
     * @return string[]|null
     */
    public function getCategorieOperation(): ?array
    {
        return $this->container['categorie_operation'];
    }

    /**
     * Sets categorie_operation
     *
     * @param string[]|null $categorie_operation Valeur exacte. Plusieurs valeurs séparées par des virgules.
     *
     * @return $this
     */
    public function setCategorieOperation(?array $categorie_operation): static
    {
        if (is_null($categorie_operation)) {
            throw new InvalidArgumentException('non-nullable categorie_operation cannot be null');
        }
        $this->container['categorie_operation'] = $categorie_operation;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at Date (`2026-01-31`) ou date et heure (`2026-01-31 09:00:00`), précédée d'un opérateur `>=`, `<=`, `>`, `<`, `=` ou `<>`. Sans opérateur, recherche par préfixe (`2026`, `2026-01`). Une valeur qui n'est pas une date ne renvoie rien. Pour encadrer une période, passer le filtre en tableau : `filter[created_at][]=>=2026-01-01&filter[created_at][]=<=2026-12-31`.
     *
     * @return $this
     */
    public function setCreatedAt(?string $created_at): static
    {
        if (is_null($created_at)) {
            throw new InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string|null $updated_at Date (`2026-01-31`) ou date et heure (`2026-01-31 09:00:00`), précédée d'un opérateur `>=`, `<=`, `>`, `<`, `=` ou `<>`. Sans opérateur, recherche par préfixe (`2026`, `2026-01`). Une valeur qui n'est pas une date ne renvoie rien. Pour encadrer une période, passer le filtre en tableau : `filter[updated_at][]=>=2026-01-01&filter[updated_at][]=<=2026-12-31`.
     *
     * @return $this
     */
    public function setUpdatedAt(?string $updated_at): static
    {
        if (is_null($updated_at)) {
            throw new InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

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


