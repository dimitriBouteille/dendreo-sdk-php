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
 * ActionDeFormationFilter Class Doc Comment
 *
 * Generated from the Dendreo OpenAPI specification, do not edit manually.
 *
 * @package  Dbout\DendreoSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ActionDeFormationFilter implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ActionDeFormationFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int[]',
        'id_externe' => 'string[]',
        'numero_complet' => 'string[]',
        'search' => 'string',
        'type' => 'string',
        'id_entreprise' => 'int[]',
        'id_externe_entreprise' => 'string[]',
        'id_etape_process' => 'int[]',
        'id_module' => 'int[]',
        'id_salle_de_formation' => 'int[]',
        'id_formateur' => 'int[]',
        'id_centre_de_formation' => 'int[]',
        'date_debut' => 'string',
        'date_fin' => 'string',
        'trashed' => 'string',
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
        'id_externe' => null,
        'numero_complet' => null,
        'search' => null,
        'type' => null,
        'id_entreprise' => null,
        'id_externe_entreprise' => null,
        'id_etape_process' => null,
        'id_module' => null,
        'id_salle_de_formation' => null,
        'id_formateur' => null,
        'id_centre_de_formation' => null,
        'date_debut' => null,
        'date_fin' => null,
        'trashed' => null,
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
        'id_externe' => false,
        'numero_complet' => false,
        'search' => false,
        'type' => false,
        'id_entreprise' => false,
        'id_externe_entreprise' => false,
        'id_etape_process' => false,
        'id_module' => false,
        'id_salle_de_formation' => false,
        'id_formateur' => false,
        'id_centre_de_formation' => false,
        'date_debut' => false,
        'date_fin' => false,
        'trashed' => false,
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
        'id_externe' => 'id_externe',
        'numero_complet' => 'numero_complet',
        'search' => 'search',
        'type' => 'type',
        'id_entreprise' => 'id_entreprise',
        'id_externe_entreprise' => 'id_externe_entreprise',
        'id_etape_process' => 'id_etape_process',
        'id_module' => 'id_module',
        'id_salle_de_formation' => 'id_salle_de_formation',
        'id_formateur' => 'id_formateur',
        'id_centre_de_formation' => 'id_centre_de_formation',
        'date_debut' => 'date_debut',
        'date_fin' => 'date_fin',
        'trashed' => 'trashed',
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
        'id_externe' => 'setIdExterne',
        'numero_complet' => 'setNumeroComplet',
        'search' => 'setSearch',
        'type' => 'setType',
        'id_entreprise' => 'setIdEntreprise',
        'id_externe_entreprise' => 'setIdExterneEntreprise',
        'id_etape_process' => 'setIdEtapeProcess',
        'id_module' => 'setIdModule',
        'id_salle_de_formation' => 'setIdSalleDeFormation',
        'id_formateur' => 'setIdFormateur',
        'id_centre_de_formation' => 'setIdCentreDeFormation',
        'date_debut' => 'setDateDebut',
        'date_fin' => 'setDateFin',
        'trashed' => 'setTrashed',
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
        'id_externe' => 'getIdExterne',
        'numero_complet' => 'getNumeroComplet',
        'search' => 'getSearch',
        'type' => 'getType',
        'id_entreprise' => 'getIdEntreprise',
        'id_externe_entreprise' => 'getIdExterneEntreprise',
        'id_etape_process' => 'getIdEtapeProcess',
        'id_module' => 'getIdModule',
        'id_salle_de_formation' => 'getIdSalleDeFormation',
        'id_formateur' => 'getIdFormateur',
        'id_centre_de_formation' => 'getIdCentreDeFormation',
        'date_debut' => 'getDateDebut',
        'date_fin' => 'getDateFin',
        'trashed' => 'getTrashed',
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

    public const TYPE_INTER = 'inter';
    public const TYPE_INTRA = 'intra';
    public const TYPE_HORS_FORMATION = 'hors_formation';
    public const TRASHED_WITH = 'with';
    public const TRASHED_ONLY = 'only';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public static function getTypeAllowableValues()
    {
        return [
            self::TYPE_INTER,
            self::TYPE_INTRA,
            self::TYPE_HORS_FORMATION,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public static function getTrashedAllowableValues()
    {
        return [
            self::TRASHED_WITH,
            self::TRASHED_ONLY,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('id_externe', $data ?? [], null);
        $this->setIfExists('numero_complet', $data ?? [], null);
        $this->setIfExists('search', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('id_entreprise', $data ?? [], null);
        $this->setIfExists('id_externe_entreprise', $data ?? [], null);
        $this->setIfExists('id_etape_process', $data ?? [], null);
        $this->setIfExists('id_module', $data ?? [], null);
        $this->setIfExists('id_salle_de_formation', $data ?? [], null);
        $this->setIfExists('id_formateur', $data ?? [], null);
        $this->setIfExists('id_centre_de_formation', $data ?? [], null);
        $this->setIfExists('date_debut', $data ?? [], null);
        $this->setIfExists('date_fin', $data ?? [], null);
        $this->setIfExists('trashed', $data ?? [], null);
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

        $allowedValues = self::getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = self::getTrashedAllowableValues();
        if (!is_null($this->container['trashed']) && !in_array($this->container['trashed'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'trashed', must be one of '%s'",
                $this->container['trashed'],
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
     * @param int[]|null $id Entiers séparés par des virgules : une valeur non entière, seule ou dans une liste, ne retourne aucune ADF.
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
     * Gets id_externe
     *
     * @return string[]|null
     */
    public function getIdExterne(): ?array
    {
        return $this->container['id_externe'];
    }

    /**
     * Sets id_externe
     *
     * @param string[]|null $id_externe Valeur exacte. Plusieurs valeurs séparées par des virgules.
     *
     * @return $this
     */
    public function setIdExterne(?array $id_externe): static
    {
        if (is_null($id_externe)) {
            throw new InvalidArgumentException('non-nullable id_externe cannot be null');
        }
        $this->container['id_externe'] = $id_externe;

        return $this;
    }

    /**
     * Gets numero_complet
     *
     * @return string[]|null
     */
    public function getNumeroComplet(): ?array
    {
        return $this->container['numero_complet'];
    }

    /**
     * Sets numero_complet
     *
     * @param string[]|null $numero_complet Valeur exacte. Plusieurs valeurs séparées par des virgules.
     *
     * @return $this
     */
    public function setNumeroComplet(?array $numero_complet): static
    {
        if (is_null($numero_complet)) {
            throw new InvalidArgumentException('non-nullable numero_complet cannot be null');
        }
        $this->container['numero_complet'] = $numero_complet;

        return $this;
    }

    /**
     * Gets search
     *
     * @return string|null
     */
    public function getSearch(): ?string
    {
        return $this->container['search'];
    }

    /**
     * Sets search
     *
     * @param string|null $search Recherche partielle littérale sur l'intitulé et le numéro complet (`%` et `_` cherchés tels quels). Une valeur séparée par des virgules recherche chacun de ses termes.
     *
     * @return $this
     */
    public function setSearch(?string $search): static
    {
        if (is_null($search)) {
            throw new InvalidArgumentException('non-nullable search cannot be null');
        }
        $this->container['search'] = $search;

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
     * @param string|null $type Type de l'ADF. Toute autre valeur ne retourne aucune ADF.
     *
     * @return $this
     */
    public function setType(?string $type): static
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
     * Gets id_entreprise
     *
     * @return int[]|null
     */
    public function getIdEntreprise(): ?array
    {
        return $this->container['id_entreprise'];
    }

    /**
     * Sets id_entreprise
     *
     * @param int[]|null $id_entreprise Entiers séparés par des virgules : une valeur non entière, seule ou dans une liste, ne retourne aucune ADF.
     *
     * @return $this
     */
    public function setIdEntreprise(?array $id_entreprise): static
    {
        if (is_null($id_entreprise)) {
            throw new InvalidArgumentException('non-nullable id_entreprise cannot be null');
        }
        $this->container['id_entreprise'] = $id_entreprise;

        return $this;
    }

    /**
     * Gets id_externe_entreprise
     *
     * @return string[]|null
     */
    public function getIdExterneEntreprise(): ?array
    {
        return $this->container['id_externe_entreprise'];
    }

    /**
     * Sets id_externe_entreprise
     *
     * @param string[]|null $id_externe_entreprise Identifiant externe de l'entreprise. Plusieurs valeurs séparées par des virgules.
     *
     * @return $this
     */
    public function setIdExterneEntreprise(?array $id_externe_entreprise): static
    {
        if (is_null($id_externe_entreprise)) {
            throw new InvalidArgumentException('non-nullable id_externe_entreprise cannot be null');
        }
        $this->container['id_externe_entreprise'] = $id_externe_entreprise;

        return $this;
    }

    /**
     * Gets id_etape_process
     *
     * @return int[]|null
     */
    public function getIdEtapeProcess(): ?array
    {
        return $this->container['id_etape_process'];
    }

    /**
     * Sets id_etape_process
     *
     * @param int[]|null $id_etape_process Entiers séparés par des virgules : une valeur non entière, seule ou dans une liste, ne retourne aucune ADF.
     *
     * @return $this
     */
    public function setIdEtapeProcess(?array $id_etape_process): static
    {
        if (is_null($id_etape_process)) {
            throw new InvalidArgumentException('non-nullable id_etape_process cannot be null');
        }
        $this->container['id_etape_process'] = $id_etape_process;

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
     * @param int[]|null $id_module Entiers séparés par des virgules : une valeur non entière, seule ou dans une liste, ne retourne aucune ADF. Trouve aussi les ADF qui contiennent le module dans un module composé.
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
     * Gets id_salle_de_formation
     *
     * @return int[]|null
     */
    public function getIdSalleDeFormation(): ?array
    {
        return $this->container['id_salle_de_formation'];
    }

    /**
     * Sets id_salle_de_formation
     *
     * @param int[]|null $id_salle_de_formation Entiers séparés par des virgules : une valeur non entière, seule ou dans une liste, ne retourne aucune ADF.
     *
     * @return $this
     */
    public function setIdSalleDeFormation(?array $id_salle_de_formation): static
    {
        if (is_null($id_salle_de_formation)) {
            throw new InvalidArgumentException('non-nullable id_salle_de_formation cannot be null');
        }
        $this->container['id_salle_de_formation'] = $id_salle_de_formation;

        return $this;
    }

    /**
     * Gets id_formateur
     *
     * @return int[]|null
     */
    public function getIdFormateur(): ?array
    {
        return $this->container['id_formateur'];
    }

    /**
     * Sets id_formateur
     *
     * @param int[]|null $id_formateur Entiers séparés par des virgules : une valeur non entière, seule ou dans une liste, ne retourne aucune ADF.
     *
     * @return $this
     */
    public function setIdFormateur(?array $id_formateur): static
    {
        if (is_null($id_formateur)) {
            throw new InvalidArgumentException('non-nullable id_formateur cannot be null');
        }
        $this->container['id_formateur'] = $id_formateur;

        return $this;
    }

    /**
     * Gets id_centre_de_formation
     *
     * @return int[]|null
     */
    public function getIdCentreDeFormation(): ?array
    {
        return $this->container['id_centre_de_formation'];
    }

    /**
     * Sets id_centre_de_formation
     *
     * @param int[]|null $id_centre_de_formation Entiers séparés par des virgules : une valeur non entière, seule ou dans une liste, ne retourne aucune ADF.
     *
     * @return $this
     */
    public function setIdCentreDeFormation(?array $id_centre_de_formation): static
    {
        if (is_null($id_centre_de_formation)) {
            throw new InvalidArgumentException('non-nullable id_centre_de_formation cannot be null');
        }
        $this->container['id_centre_de_formation'] = $id_centre_de_formation;

        return $this;
    }

    /**
     * Gets date_debut
     *
     * @return string|null
     */
    public function getDateDebut(): ?string
    {
        return $this->container['date_debut'];
    }

    /**
     * Sets date_debut
     *
     * @param string|null $date_debut Date (`2026-01-31`) ou date et heure (`2026-01-31 09:00:00`), précédée d'un opérateur `>=`, `<=`, `>`, `<`, `=` ou `<>`. Sans opérateur, recherche par préfixe (`2026`, `2026-01`). Une valeur qui n'est pas une date ne renvoie rien. Pour encadrer une période, passer le filtre en tableau : `filter[date_debut][]=>=2026-01-01&filter[date_debut][]=<=2026-12-31`.
     *
     * @return $this
     */
    public function setDateDebut(?string $date_debut): static
    {
        if (is_null($date_debut)) {
            throw new InvalidArgumentException('non-nullable date_debut cannot be null');
        }
        $this->container['date_debut'] = $date_debut;

        return $this;
    }

    /**
     * Gets date_fin
     *
     * @return string|null
     */
    public function getDateFin(): ?string
    {
        return $this->container['date_fin'];
    }

    /**
     * Sets date_fin
     *
     * @param string|null $date_fin Date (`2026-01-31`) ou date et heure (`2026-01-31 09:00:00`), précédée d'un opérateur `>=`, `<=`, `>`, `<`, `=` ou `<>`. Sans opérateur, recherche par préfixe (`2026`, `2026-01`). Une valeur qui n'est pas une date ne renvoie rien. Pour encadrer une période, passer le filtre en tableau : `filter[date_fin][]=>=2026-01-01&filter[date_fin][]=<=2026-12-31`.
     *
     * @return $this
     */
    public function setDateFin(?string $date_fin): static
    {
        if (is_null($date_fin)) {
            throw new InvalidArgumentException('non-nullable date_fin cannot be null');
        }
        $this->container['date_fin'] = $date_fin;

        return $this;
    }

    /**
     * Gets trashed
     *
     * @return string|null
     */
    public function getTrashed(): ?string
    {
        return $this->container['trashed'];
    }

    /**
     * Sets trashed
     *
     * @param string|null $trashed Sans ce filtre, les fiches supprimées sont exclues : `with` les inclut, `only` ne renvoie qu'elles.
     *
     * @return $this
     */
    public function setTrashed(?string $trashed): static
    {
        if (is_null($trashed)) {
            throw new InvalidArgumentException('non-nullable trashed cannot be null');
        }
        $allowedValues = self::getTrashedAllowableValues();
        if (!in_array($trashed, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'trashed', must be one of '%s'",
                    $trashed,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['trashed'] = $trashed;

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


