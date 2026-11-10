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
 * BudgetRequest Class Doc Comment
 *
 * Generated from the Dendreo OpenAPI specification, do not edit manually.
 *
 * @package  Dbout\DendreoSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class BudgetRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'BudgetRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id_action_de_formation' => 'int',
        'intitule' => 'string',
        'type' => 'string',
        'prix_unitaire' => 'float',
        'nb' => 'float',
        'tva' => 'string',
        'id_lap' => 'int',
        'refacturable' => 'bool',
        'categorie_operation' => 'string',
        'refacturable_prix_coutant' => 'bool',
        'prix_unitaire_depense' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id_action_de_formation' => null,
        'intitule' => null,
        'type' => null,
        'prix_unitaire' => null,
        'nb' => null,
        'tva' => null,
        'id_lap' => null,
        'refacturable' => null,
        'categorie_operation' => null,
        'refacturable_prix_coutant' => null,
        'prix_unitaire_depense' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id_action_de_formation' => false,
        'intitule' => false,
        'type' => false,
        'prix_unitaire' => false,
        'nb' => false,
        'tva' => true,
        'id_lap' => false,
        'refacturable' => true,
        'categorie_operation' => true,
        'refacturable_prix_coutant' => true,
        'prix_unitaire_depense' => true
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
        'id_action_de_formation' => 'id_action_de_formation',
        'intitule' => 'intitule',
        'type' => 'type',
        'prix_unitaire' => 'prix_unitaire',
        'nb' => 'nb',
        'tva' => 'tva',
        'id_lap' => 'id_lap',
        'refacturable' => 'refacturable',
        'categorie_operation' => 'categorie_operation',
        'refacturable_prix_coutant' => 'refacturable_prix_coutant',
        'prix_unitaire_depense' => 'prix_unitaire_depense'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id_action_de_formation' => 'setIdActionDeFormation',
        'intitule' => 'setIntitule',
        'type' => 'setType',
        'prix_unitaire' => 'setPrixUnitaire',
        'nb' => 'setNb',
        'tva' => 'setTva',
        'id_lap' => 'setIdLap',
        'refacturable' => 'setRefacturable',
        'categorie_operation' => 'setCategorieOperation',
        'refacturable_prix_coutant' => 'setRefacturablePrixCoutant',
        'prix_unitaire_depense' => 'setPrixUnitaireDepense'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id_action_de_formation' => 'getIdActionDeFormation',
        'intitule' => 'getIntitule',
        'type' => 'getType',
        'prix_unitaire' => 'getPrixUnitaire',
        'nb' => 'getNb',
        'tva' => 'getTva',
        'id_lap' => 'getIdLap',
        'refacturable' => 'getRefacturable',
        'categorie_operation' => 'getCategorieOperation',
        'refacturable_prix_coutant' => 'getRefacturablePrixCoutant',
        'prix_unitaire_depense' => 'getPrixUnitaireDepense'
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

    public const TYPE_DEPENSE = 'depense';
    public const TYPE_RECETTE = 'recette';
    public const TYPE_RECETTE_HORS_BPF = 'recette_hors_bpf';
    public const TVA__0_0 = '0.0';
    public const TVA__2_1 = '2.1';
    public const TVA__2_5 = '2.5';
    public const TVA__3_0 = '3.0';
    public const TVA__3_7 = '3.7';
    public const TVA__4_0 = '4.0';
    public const TVA__5_0 = '5.0';
    public const TVA__5_5 = '5.5';
    public const TVA__6_0 = '6.0';
    public const TVA__7_7 = '7.7';
    public const TVA__8_1 = '8.1';
    public const TVA__8_5 = '8.5';
    public const TVA__10_0 = '10.0';
    public const TVA__11_0 = '11.0';
    public const TVA__13_0 = '13.0';
    public const TVA__13_5 = '13.5';
    public const TVA__16_0 = '16.0';
    public const TVA__17_0 = '17.0';
    public const TVA__20_0 = '20.0';
    public const TVA__21_0 = '21.0';
    public const TVA__23_0 = '23.0';
    public const CATEGORIE_OPERATION_SERVICES = 'services';
    public const CATEGORIE_OPERATION_BIENS = 'biens';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public static function getTypeAllowableValues()
    {
        return [
            self::TYPE_DEPENSE,
            self::TYPE_RECETTE,
            self::TYPE_RECETTE_HORS_BPF,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public static function getTvaAllowableValues()
    {
        return [
            self::TVA__0_0,
            self::TVA__2_1,
            self::TVA__2_5,
            self::TVA__3_0,
            self::TVA__3_7,
            self::TVA__4_0,
            self::TVA__5_0,
            self::TVA__5_5,
            self::TVA__6_0,
            self::TVA__7_7,
            self::TVA__8_1,
            self::TVA__8_5,
            self::TVA__10_0,
            self::TVA__11_0,
            self::TVA__13_0,
            self::TVA__13_5,
            self::TVA__16_0,
            self::TVA__17_0,
            self::TVA__20_0,
            self::TVA__21_0,
            self::TVA__23_0,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public static function getCategorieOperationAllowableValues()
    {
        return [
            self::CATEGORIE_OPERATION_SERVICES,
            self::CATEGORIE_OPERATION_BIENS,
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
        $this->setIfExists('id_action_de_formation', $data ?? [], null);
        $this->setIfExists('intitule', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('prix_unitaire', $data ?? [], null);
        $this->setIfExists('nb', $data ?? [], null);
        $this->setIfExists('tva', $data ?? [], null);
        $this->setIfExists('id_lap', $data ?? [], null);
        $this->setIfExists('refacturable', $data ?? [], null);
        $this->setIfExists('categorie_operation', $data ?? [], null);
        $this->setIfExists('refacturable_prix_coutant', $data ?? [], null);
        $this->setIfExists('prix_unitaire_depense', $data ?? [], null);
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

        if ($this->container['id_action_de_formation'] === null) {
            $invalidProperties[] = "'id_action_de_formation' can't be null";
        }
        if ($this->container['intitule'] === null) {
            $invalidProperties[] = "'intitule' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = self::getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['prix_unitaire'] === null) {
            $invalidProperties[] = "'prix_unitaire' can't be null";
        }
        if ($this->container['nb'] === null) {
            $invalidProperties[] = "'nb' can't be null";
        }
        $allowedValues = self::getTvaAllowableValues();
        if (!is_null($this->container['tva']) && !in_array($this->container['tva'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'tva', must be one of '%s'",
                $this->container['tva'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = self::getCategorieOperationAllowableValues();
        if (!is_null($this->container['categorie_operation']) && !in_array($this->container['categorie_operation'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'categorie_operation', must be one of '%s'",
                $this->container['categorie_operation'],
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
     * Gets id_action_de_formation
     *
     * @return int
     */
    public function getIdActionDeFormation(): int
    {
        return $this->container['id_action_de_formation'];
    }

    /**
     * Sets id_action_de_formation
     *
     * @param int $id_action_de_formation Doit correspondre à un id_action_de_formation existant
     *
     * @return $this
     */
    public function setIdActionDeFormation(int $id_action_de_formation): static
    {
        if (is_null($id_action_de_formation)) {
            throw new InvalidArgumentException('non-nullable id_action_de_formation cannot be null');
        }
        $this->container['id_action_de_formation'] = $id_action_de_formation;

        return $this;
    }

    /**
     * Gets intitule
     *
     * @return string
     */
    public function getIntitule(): string
    {
        return $this->container['intitule'];
    }

    /**
     * Sets intitule
     *
     * @param string $intitule Max : 255 caractères.
     *
     * @return $this
     */
    public function setIntitule(string $intitule): static
    {
        if (is_null($intitule)) {
            throw new InvalidArgumentException('non-nullable intitule cannot be null');
        }
        $this->container['intitule'] = $intitule;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type 
     *
     * @return $this
     */
    public function setType(string $type): static
    {
        if (is_null($type)) {
            throw new InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = self::getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
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
     * Gets prix_unitaire
     *
     * @return float
     */
    public function getPrixUnitaire(): float
    {
        return $this->container['prix_unitaire'];
    }

    /**
     * Sets prix_unitaire
     *
     * @param float $prix_unitaire Min : 0.
     *
     * @return $this
     */
    public function setPrixUnitaire(float $prix_unitaire): static
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
     * @return float
     */
    public function getNb(): float
    {
        return $this->container['nb'];
    }

    /**
     * Sets nb
     *
     * @param float $nb Min : 0.
     *
     * @return $this
     */
    public function setNb(float $nb): static
    {
        if (is_null($nb)) {
            throw new InvalidArgumentException('non-nullable nb cannot be null');
        }
        $this->container['nb'] = $nb;

        return $this;
    }

    /**
     * Gets tva
     *
     * @return string|null
     */
    public function getTva(): ?string
    {
        return $this->container['tva'];
    }

    /**
     * Sets tva
     *
     * @param string|null $tva 
     *
     * @return $this
     */
    public function setTva(?string $tva): static
    {
        if (is_null($tva)) {
            array_push($this->openAPINullablesSetToNull, 'tva');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tva', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = self::getTvaAllowableValues();
        if (!is_null($tva) && !in_array($tva, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'tva', must be one of '%s'",
                    $tva,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tva'] = $tva;

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
     * @param int|null $id_lap Doit correspondre à un id_lap d'un Participant existant
     *
     * @return $this
     */
    public function setIdLap(?int $id_lap): static
    {
        if (is_null($id_lap)) {
            throw new InvalidArgumentException('non-nullable id_lap cannot be null');
        }
        $this->container['id_lap'] = $id_lap;

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
     * @param bool|null $refacturable 
     *
     * @return $this
     */
    public function setRefacturable(?bool $refacturable): static
    {
        if (is_null($refacturable)) {
            array_push($this->openAPINullablesSetToNull, 'refacturable');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('refacturable', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param string|null $categorie_operation 
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
        $allowedValues = self::getCategorieOperationAllowableValues();
        if (!is_null($categorie_operation) && !in_array($categorie_operation, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'categorie_operation', must be one of '%s'",
                    $categorie_operation,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['categorie_operation'] = $categorie_operation;

        return $this;
    }

    /**
     * Gets refacturable_prix_coutant
     *
     * @return bool|null
     */
    public function getRefacturablePrixCoutant(): ?bool
    {
        return $this->container['refacturable_prix_coutant'];
    }

    /**
     * Sets refacturable_prix_coutant
     *
     * @param bool|null $refacturable_prix_coutant 
     *
     * @return $this
     */
    public function setRefacturablePrixCoutant(?bool $refacturable_prix_coutant): static
    {
        if (is_null($refacturable_prix_coutant)) {
            array_push($this->openAPINullablesSetToNull, 'refacturable_prix_coutant');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('refacturable_prix_coutant', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['refacturable_prix_coutant'] = $refacturable_prix_coutant;

        return $this;
    }

    /**
     * Gets prix_unitaire_depense
     *
     * @return float|null
     */
    public function getPrixUnitaireDepense(): ?float
    {
        return $this->container['prix_unitaire_depense'];
    }

    /**
     * Sets prix_unitaire_depense
     *
     * @param float|null $prix_unitaire_depense Min : 0.
     *
     * @return $this
     */
    public function setPrixUnitaireDepense(?float $prix_unitaire_depense): static
    {
        if (is_null($prix_unitaire_depense)) {
            array_push($this->openAPINullablesSetToNull, 'prix_unitaire_depense');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('prix_unitaire_depense', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['prix_unitaire_depense'] = $prix_unitaire_depense;

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


