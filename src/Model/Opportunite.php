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
 * Opportunite Class Doc Comment
 *
 * Generated from the Dendreo OpenAPI specification, do not edit manually.
 *
 * @package  Dbout\DendreoSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class Opportunite implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Opportunite';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'numero_complet' => 'string',
        'entreprise_id' => 'int',
        'contact_id' => 'int',
        'assigned_to' => 'string',
        'opportunite_etape_id' => 'int',
        'source_id' => 'int',
        'id_centre_de_formation' => 'int',
        'description' => 'string',
        'commentaires_internes' => 'string',
        'closed_at' => '\DateTime',
        'lost_at' => '\DateTime',
        'created_at' => '\DateTime',
        'created_by' => 'string',
        'updated_at' => '\DateTime',
        'edited_by' => 'string',
        'deleted_at' => '\DateTime',
        'id_delete' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'numero_complet' => null,
        'entreprise_id' => null,
        'contact_id' => null,
        'assigned_to' => null,
        'opportunite_etape_id' => null,
        'source_id' => null,
        'id_centre_de_formation' => null,
        'description' => null,
        'commentaires_internes' => null,
        'closed_at' => 'date-time',
        'lost_at' => 'date-time',
        'created_at' => 'date-time',
        'created_by' => null,
        'updated_at' => 'date-time',
        'edited_by' => null,
        'deleted_at' => 'date-time',
        'id_delete' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'numero_complet' => false,
        'entreprise_id' => false,
        'contact_id' => true,
        'assigned_to' => false,
        'opportunite_etape_id' => false,
        'source_id' => true,
        'id_centre_de_formation' => false,
        'description' => false,
        'commentaires_internes' => false,
        'closed_at' => true,
        'lost_at' => true,
        'created_at' => true,
        'created_by' => false,
        'updated_at' => true,
        'edited_by' => false,
        'deleted_at' => true,
        'id_delete' => true
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
        'numero_complet' => 'numero_complet',
        'entreprise_id' => 'entreprise_id',
        'contact_id' => 'contact_id',
        'assigned_to' => 'assigned_to',
        'opportunite_etape_id' => 'opportunite_etape_id',
        'source_id' => 'source_id',
        'id_centre_de_formation' => 'id_centre_de_formation',
        'description' => 'description',
        'commentaires_internes' => 'commentaires_internes',
        'closed_at' => 'closed_at',
        'lost_at' => 'lost_at',
        'created_at' => 'created_at',
        'created_by' => 'created_by',
        'updated_at' => 'updated_at',
        'edited_by' => 'edited_by',
        'deleted_at' => 'deleted_at',
        'id_delete' => 'id_delete'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'numero_complet' => 'setNumeroComplet',
        'entreprise_id' => 'setEntrepriseId',
        'contact_id' => 'setContactId',
        'assigned_to' => 'setAssignedTo',
        'opportunite_etape_id' => 'setOpportuniteEtapeId',
        'source_id' => 'setSourceId',
        'id_centre_de_formation' => 'setIdCentreDeFormation',
        'description' => 'setDescription',
        'commentaires_internes' => 'setCommentairesInternes',
        'closed_at' => 'setClosedAt',
        'lost_at' => 'setLostAt',
        'created_at' => 'setCreatedAt',
        'created_by' => 'setCreatedBy',
        'updated_at' => 'setUpdatedAt',
        'edited_by' => 'setEditedBy',
        'deleted_at' => 'setDeletedAt',
        'id_delete' => 'setIdDelete'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'numero_complet' => 'getNumeroComplet',
        'entreprise_id' => 'getEntrepriseId',
        'contact_id' => 'getContactId',
        'assigned_to' => 'getAssignedTo',
        'opportunite_etape_id' => 'getOpportuniteEtapeId',
        'source_id' => 'getSourceId',
        'id_centre_de_formation' => 'getIdCentreDeFormation',
        'description' => 'getDescription',
        'commentaires_internes' => 'getCommentairesInternes',
        'closed_at' => 'getClosedAt',
        'lost_at' => 'getLostAt',
        'created_at' => 'getCreatedAt',
        'created_by' => 'getCreatedBy',
        'updated_at' => 'getUpdatedAt',
        'edited_by' => 'getEditedBy',
        'deleted_at' => 'getDeletedAt',
        'id_delete' => 'getIdDelete'
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
        $this->setIfExists('numero_complet', $data ?? [], null);
        $this->setIfExists('entreprise_id', $data ?? [], null);
        $this->setIfExists('contact_id', $data ?? [], null);
        $this->setIfExists('assigned_to', $data ?? [], null);
        $this->setIfExists('opportunite_etape_id', $data ?? [], null);
        $this->setIfExists('source_id', $data ?? [], null);
        $this->setIfExists('id_centre_de_formation', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('commentaires_internes', $data ?? [], null);
        $this->setIfExists('closed_at', $data ?? [], null);
        $this->setIfExists('lost_at', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('created_by', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('edited_by', $data ?? [], null);
        $this->setIfExists('deleted_at', $data ?? [], null);
        $this->setIfExists('id_delete', $data ?? [], null);
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
     * Gets entreprise_id
     *
     * @return int|null
     */
    public function getEntrepriseId(): ?int
    {
        return $this->container['entreprise_id'];
    }

    /**
     * Sets entreprise_id
     *
     * @param int|null $entreprise_id entreprise_id
     *
     * @return $this
     */
    public function setEntrepriseId(?int $entreprise_id): static
    {
        if (is_null($entreprise_id)) {
            throw new InvalidArgumentException('non-nullable entreprise_id cannot be null');
        }
        $this->container['entreprise_id'] = $entreprise_id;

        return $this;
    }

    /**
     * Gets contact_id
     *
     * @return int|null
     */
    public function getContactId(): ?int
    {
        return $this->container['contact_id'];
    }

    /**
     * Sets contact_id
     *
     * @param int|null $contact_id contact_id
     *
     * @return $this
     */
    public function setContactId(?int $contact_id): static
    {
        if (is_null($contact_id)) {
            array_push($this->openAPINullablesSetToNull, 'contact_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('contact_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['contact_id'] = $contact_id;

        return $this;
    }

    /**
     * Gets assigned_to
     *
     * @return string|null
     */
    public function getAssignedTo(): ?string
    {
        return $this->container['assigned_to'];
    }

    /**
     * Sets assigned_to
     *
     * @param string|null $assigned_to assigned_to
     *
     * @return $this
     */
    public function setAssignedTo(?string $assigned_to): static
    {
        if (is_null($assigned_to)) {
            throw new InvalidArgumentException('non-nullable assigned_to cannot be null');
        }
        $this->container['assigned_to'] = $assigned_to;

        return $this;
    }

    /**
     * Gets opportunite_etape_id
     *
     * @return int|null
     */
    public function getOpportuniteEtapeId(): ?int
    {
        return $this->container['opportunite_etape_id'];
    }

    /**
     * Sets opportunite_etape_id
     *
     * @param int|null $opportunite_etape_id opportunite_etape_id
     *
     * @return $this
     */
    public function setOpportuniteEtapeId(?int $opportunite_etape_id): static
    {
        if (is_null($opportunite_etape_id)) {
            throw new InvalidArgumentException('non-nullable opportunite_etape_id cannot be null');
        }
        $this->container['opportunite_etape_id'] = $opportunite_etape_id;

        return $this;
    }

    /**
     * Gets source_id
     *
     * @return int|null
     */
    public function getSourceId(): ?int
    {
        return $this->container['source_id'];
    }

    /**
     * Sets source_id
     *
     * @param int|null $source_id source_id
     *
     * @return $this
     */
    public function setSourceId(?int $source_id): static
    {
        if (is_null($source_id)) {
            array_push($this->openAPINullablesSetToNull, 'source_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('source_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['source_id'] = $source_id;

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
     * Gets description
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return $this
     */
    public function setDescription(?string $description): static
    {
        if (is_null($description)) {
            throw new InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets commentaires_internes
     *
     * @return string|null
     */
    public function getCommentairesInternes(): ?string
    {
        return $this->container['commentaires_internes'];
    }

    /**
     * Sets commentaires_internes
     *
     * @param string|null $commentaires_internes commentaires_internes
     *
     * @return $this
     */
    public function setCommentairesInternes(?string $commentaires_internes): static
    {
        if (is_null($commentaires_internes)) {
            throw new InvalidArgumentException('non-nullable commentaires_internes cannot be null');
        }
        $this->container['commentaires_internes'] = $commentaires_internes;

        return $this;
    }

    /**
     * Gets closed_at
     *
     * @return \DateTime|null
     */
    public function getClosedAt(): ?\DateTime
    {
        return $this->container['closed_at'];
    }

    /**
     * Sets closed_at
     *
     * @param \DateTime|null $closed_at Heure de Paris (Europe/Paris), heure d'été comprise.
     *
     * @return $this
     */
    public function setClosedAt(?\DateTime $closed_at): static
    {
        if (is_null($closed_at)) {
            array_push($this->openAPINullablesSetToNull, 'closed_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('closed_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['closed_at'] = $closed_at;

        return $this;
    }

    /**
     * Gets lost_at
     *
     * @return \DateTime|null
     */
    public function getLostAt(): ?\DateTime
    {
        return $this->container['lost_at'];
    }

    /**
     * Sets lost_at
     *
     * @param \DateTime|null $lost_at Heure de Paris (Europe/Paris), heure d'été comprise.
     *
     * @return $this
     */
    public function setLostAt(?\DateTime $lost_at): static
    {
        if (is_null($lost_at)) {
            array_push($this->openAPINullablesSetToNull, 'lost_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lost_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['lost_at'] = $lost_at;

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
     * Gets created_by
     *
     * @return string|null
     */
    public function getCreatedBy(): ?string
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param string|null $created_by created_by
     *
     * @return $this
     */
    public function setCreatedBy(?string $created_by): static
    {
        if (is_null($created_by)) {
            throw new InvalidArgumentException('non-nullable created_by cannot be null');
        }
        $this->container['created_by'] = $created_by;

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
     * Gets edited_by
     *
     * @return string|null
     */
    public function getEditedBy(): ?string
    {
        return $this->container['edited_by'];
    }

    /**
     * Sets edited_by
     *
     * @param string|null $edited_by edited_by
     *
     * @return $this
     */
    public function setEditedBy(?string $edited_by): static
    {
        if (is_null($edited_by)) {
            throw new InvalidArgumentException('non-nullable edited_by cannot be null');
        }
        $this->container['edited_by'] = $edited_by;

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
     * Gets id_delete
     *
     * @return int|null
     */
    public function getIdDelete(): ?int
    {
        return $this->container['id_delete'];
    }

    /**
     * Sets id_delete
     *
     * @param int|null $id_delete id_delete
     *
     * @return $this
     */
    public function setIdDelete(?int $id_delete): static
    {
        if (is_null($id_delete)) {
            array_push($this->openAPINullablesSetToNull, 'id_delete');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_delete', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id_delete'] = $id_delete;

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


