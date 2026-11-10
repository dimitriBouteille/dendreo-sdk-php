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
 * Devis Class Doc Comment
 *
 * Generated from the Dendreo OpenAPI specification, do not edit manually.
 *
 * @description Les champs additionnels du compte sont ajoutés à la ressource, sous leur nom de champ.
 * @package  Dbout\DendreoSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class Devis implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Devis';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'opportunite_id' => 'int',
        'parent_id' => 'int',
        'numero_complet' => 'string',
        'numero_perso' => 'string',
        'numero' => 'string',
        'numero_auto' => 'string',
        'locked_at' => '\DateTime',
        'sent_at' => '\DateTime',
        'accepted_at' => '\DateTime',
        'declined_at' => '\DateTime',
        'doc_type_id' => 'int',
        'linked' => 'string',
        'formation_id' => 'int',
        'type' => 'string',
        'pricing' => 'string',
        'participants' => 'string',
        'mode_participants' => 'string',
        'remarques' => 'string',
        'commentaires_internes' => 'string',
        'raison_devis_id' => 'int',
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
        'opportunite_id' => null,
        'parent_id' => null,
        'numero_complet' => null,
        'numero_perso' => null,
        'numero' => null,
        'numero_auto' => null,
        'locked_at' => 'date-time',
        'sent_at' => 'date-time',
        'accepted_at' => 'date-time',
        'declined_at' => 'date-time',
        'doc_type_id' => null,
        'linked' => null,
        'formation_id' => null,
        'type' => null,
        'pricing' => null,
        'participants' => null,
        'mode_participants' => null,
        'remarques' => null,
        'commentaires_internes' => null,
        'raison_devis_id' => null,
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
        'opportunite_id' => false,
        'parent_id' => true,
        'numero_complet' => false,
        'numero_perso' => false,
        'numero' => false,
        'numero_auto' => false,
        'locked_at' => true,
        'sent_at' => true,
        'accepted_at' => true,
        'declined_at' => true,
        'doc_type_id' => true,
        'linked' => false,
        'formation_id' => true,
        'type' => false,
        'pricing' => false,
        'participants' => false,
        'mode_participants' => false,
        'remarques' => false,
        'commentaires_internes' => false,
        'raison_devis_id' => true,
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
        'opportunite_id' => 'opportunite_id',
        'parent_id' => 'parent_id',
        'numero_complet' => 'numero_complet',
        'numero_perso' => 'numero_perso',
        'numero' => 'numero',
        'numero_auto' => 'numero_auto',
        'locked_at' => 'locked_at',
        'sent_at' => 'sent_at',
        'accepted_at' => 'accepted_at',
        'declined_at' => 'declined_at',
        'doc_type_id' => 'doc_type_id',
        'linked' => 'linked',
        'formation_id' => 'formation_id',
        'type' => 'type',
        'pricing' => 'pricing',
        'participants' => 'participants',
        'mode_participants' => 'mode_participants',
        'remarques' => 'remarques',
        'commentaires_internes' => 'commentaires_internes',
        'raison_devis_id' => 'raison_devis_id',
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
        'opportunite_id' => 'setOpportuniteId',
        'parent_id' => 'setParentId',
        'numero_complet' => 'setNumeroComplet',
        'numero_perso' => 'setNumeroPerso',
        'numero' => 'setNumero',
        'numero_auto' => 'setNumeroAuto',
        'locked_at' => 'setLockedAt',
        'sent_at' => 'setSentAt',
        'accepted_at' => 'setAcceptedAt',
        'declined_at' => 'setDeclinedAt',
        'doc_type_id' => 'setDocTypeId',
        'linked' => 'setLinked',
        'formation_id' => 'setFormationId',
        'type' => 'setType',
        'pricing' => 'setPricing',
        'participants' => 'setParticipants',
        'mode_participants' => 'setModeParticipants',
        'remarques' => 'setRemarques',
        'commentaires_internes' => 'setCommentairesInternes',
        'raison_devis_id' => 'setRaisonDevisId',
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
        'opportunite_id' => 'getOpportuniteId',
        'parent_id' => 'getParentId',
        'numero_complet' => 'getNumeroComplet',
        'numero_perso' => 'getNumeroPerso',
        'numero' => 'getNumero',
        'numero_auto' => 'getNumeroAuto',
        'locked_at' => 'getLockedAt',
        'sent_at' => 'getSentAt',
        'accepted_at' => 'getAcceptedAt',
        'declined_at' => 'getDeclinedAt',
        'doc_type_id' => 'getDocTypeId',
        'linked' => 'getLinked',
        'formation_id' => 'getFormationId',
        'type' => 'getType',
        'pricing' => 'getPricing',
        'participants' => 'getParticipants',
        'mode_participants' => 'getModeParticipants',
        'remarques' => 'getRemarques',
        'commentaires_internes' => 'getCommentairesInternes',
        'raison_devis_id' => 'getRaisonDevisId',
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
        $this->setIfExists('opportunite_id', $data ?? [], null);
        $this->setIfExists('parent_id', $data ?? [], null);
        $this->setIfExists('numero_complet', $data ?? [], null);
        $this->setIfExists('numero_perso', $data ?? [], null);
        $this->setIfExists('numero', $data ?? [], null);
        $this->setIfExists('numero_auto', $data ?? [], null);
        $this->setIfExists('locked_at', $data ?? [], null);
        $this->setIfExists('sent_at', $data ?? [], null);
        $this->setIfExists('accepted_at', $data ?? [], null);
        $this->setIfExists('declined_at', $data ?? [], null);
        $this->setIfExists('doc_type_id', $data ?? [], null);
        $this->setIfExists('linked', $data ?? [], null);
        $this->setIfExists('formation_id', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('pricing', $data ?? [], null);
        $this->setIfExists('participants', $data ?? [], null);
        $this->setIfExists('mode_participants', $data ?? [], null);
        $this->setIfExists('remarques', $data ?? [], null);
        $this->setIfExists('commentaires_internes', $data ?? [], null);
        $this->setIfExists('raison_devis_id', $data ?? [], null);
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
     * Gets opportunite_id
     *
     * @return int|null
     */
    public function getOpportuniteId(): ?int
    {
        return $this->container['opportunite_id'];
    }

    /**
     * Sets opportunite_id
     *
     * @param int|null $opportunite_id opportunite_id
     *
     * @return $this
     */
    public function setOpportuniteId(?int $opportunite_id): static
    {
        if (is_null($opportunite_id)) {
            throw new InvalidArgumentException('non-nullable opportunite_id cannot be null');
        }
        $this->container['opportunite_id'] = $opportunite_id;

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
     * Gets numero_perso
     *
     * @return string|null
     */
    public function getNumeroPerso(): ?string
    {
        return $this->container['numero_perso'];
    }

    /**
     * Sets numero_perso
     *
     * @param string|null $numero_perso numero_perso
     *
     * @return $this
     */
    public function setNumeroPerso(?string $numero_perso): static
    {
        if (is_null($numero_perso)) {
            throw new InvalidArgumentException('non-nullable numero_perso cannot be null');
        }
        $this->container['numero_perso'] = $numero_perso;

        return $this;
    }

    /**
     * Gets numero
     *
     * @return string|null
     */
    public function getNumero(): ?string
    {
        return $this->container['numero'];
    }

    /**
     * Sets numero
     *
     * @param string|null $numero numero
     *
     * @return $this
     */
    public function setNumero(?string $numero): static
    {
        if (is_null($numero)) {
            throw new InvalidArgumentException('non-nullable numero cannot be null');
        }
        $this->container['numero'] = $numero;

        return $this;
    }

    /**
     * Gets numero_auto
     *
     * @return string|null
     */
    public function getNumeroAuto(): ?string
    {
        return $this->container['numero_auto'];
    }

    /**
     * Sets numero_auto
     *
     * @param string|null $numero_auto numero_auto
     *
     * @return $this
     */
    public function setNumeroAuto(?string $numero_auto): static
    {
        if (is_null($numero_auto)) {
            throw new InvalidArgumentException('non-nullable numero_auto cannot be null');
        }
        $this->container['numero_auto'] = $numero_auto;

        return $this;
    }

    /**
     * Gets locked_at
     *
     * @return \DateTime|null
     */
    public function getLockedAt(): ?\DateTime
    {
        return $this->container['locked_at'];
    }

    /**
     * Sets locked_at
     *
     * @param \DateTime|null $locked_at Heure de Paris (Europe/Paris), heure d'été comprise.
     *
     * @return $this
     */
    public function setLockedAt(?\DateTime $locked_at): static
    {
        if (is_null($locked_at)) {
            array_push($this->openAPINullablesSetToNull, 'locked_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('locked_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['locked_at'] = $locked_at;

        return $this;
    }

    /**
     * Gets sent_at
     *
     * @return \DateTime|null
     */
    public function getSentAt(): ?\DateTime
    {
        return $this->container['sent_at'];
    }

    /**
     * Sets sent_at
     *
     * @param \DateTime|null $sent_at Heure de Paris (Europe/Paris), heure d'été comprise.
     *
     * @return $this
     */
    public function setSentAt(?\DateTime $sent_at): static
    {
        if (is_null($sent_at)) {
            array_push($this->openAPINullablesSetToNull, 'sent_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sent_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sent_at'] = $sent_at;

        return $this;
    }

    /**
     * Gets accepted_at
     *
     * @return \DateTime|null
     */
    public function getAcceptedAt(): ?\DateTime
    {
        return $this->container['accepted_at'];
    }

    /**
     * Sets accepted_at
     *
     * @param \DateTime|null $accepted_at Heure de Paris (Europe/Paris), heure d'été comprise.
     *
     * @return $this
     */
    public function setAcceptedAt(?\DateTime $accepted_at): static
    {
        if (is_null($accepted_at)) {
            array_push($this->openAPINullablesSetToNull, 'accepted_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('accepted_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['accepted_at'] = $accepted_at;

        return $this;
    }

    /**
     * Gets declined_at
     *
     * @return \DateTime|null
     */
    public function getDeclinedAt(): ?\DateTime
    {
        return $this->container['declined_at'];
    }

    /**
     * Sets declined_at
     *
     * @param \DateTime|null $declined_at Heure de Paris (Europe/Paris), heure d'été comprise.
     *
     * @return $this
     */
    public function setDeclinedAt(?\DateTime $declined_at): static
    {
        if (is_null($declined_at)) {
            array_push($this->openAPINullablesSetToNull, 'declined_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('declined_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['declined_at'] = $declined_at;

        return $this;
    }

    /**
     * Gets doc_type_id
     *
     * @return int|null
     */
    public function getDocTypeId(): ?int
    {
        return $this->container['doc_type_id'];
    }

    /**
     * Sets doc_type_id
     *
     * @param int|null $doc_type_id doc_type_id
     *
     * @return $this
     */
    public function setDocTypeId(?int $doc_type_id): static
    {
        if (is_null($doc_type_id)) {
            array_push($this->openAPINullablesSetToNull, 'doc_type_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('doc_type_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['doc_type_id'] = $doc_type_id;

        return $this;
    }

    /**
     * Gets linked
     *
     * @return string|null
     */
    public function getLinked(): ?string
    {
        return $this->container['linked'];
    }

    /**
     * Sets linked
     *
     * @param string|null $linked linked
     *
     * @return $this
     */
    public function setLinked(?string $linked): static
    {
        if (is_null($linked)) {
            throw new InvalidArgumentException('non-nullable linked cannot be null');
        }
        $this->container['linked'] = $linked;

        return $this;
    }

    /**
     * Gets formation_id
     *
     * @return int|null
     */
    public function getFormationId(): ?int
    {
        return $this->container['formation_id'];
    }

    /**
     * Sets formation_id
     *
     * @param int|null $formation_id formation_id
     *
     * @return $this
     */
    public function setFormationId(?int $formation_id): static
    {
        if (is_null($formation_id)) {
            array_push($this->openAPINullablesSetToNull, 'formation_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('formation_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['formation_id'] = $formation_id;

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
     * Gets pricing
     *
     * @return string|null
     */
    public function getPricing(): ?string
    {
        return $this->container['pricing'];
    }

    /**
     * Sets pricing
     *
     * @param string|null $pricing pricing
     *
     * @return $this
     */
    public function setPricing(?string $pricing): static
    {
        if (is_null($pricing)) {
            throw new InvalidArgumentException('non-nullable pricing cannot be null');
        }
        $this->container['pricing'] = $pricing;

        return $this;
    }

    /**
     * Gets participants
     *
     * @return string|null
     */
    public function getParticipants(): ?string
    {
        return $this->container['participants'];
    }

    /**
     * Sets participants
     *
     * @param string|null $participants participants
     *
     * @return $this
     */
    public function setParticipants(?string $participants): static
    {
        if (is_null($participants)) {
            throw new InvalidArgumentException('non-nullable participants cannot be null');
        }
        $this->container['participants'] = $participants;

        return $this;
    }

    /**
     * Gets mode_participants
     *
     * @return string|null
     */
    public function getModeParticipants(): ?string
    {
        return $this->container['mode_participants'];
    }

    /**
     * Sets mode_participants
     *
     * @param string|null $mode_participants mode_participants
     *
     * @return $this
     */
    public function setModeParticipants(?string $mode_participants): static
    {
        if (is_null($mode_participants)) {
            throw new InvalidArgumentException('non-nullable mode_participants cannot be null');
        }
        $this->container['mode_participants'] = $mode_participants;

        return $this;
    }

    /**
     * Gets remarques
     *
     * @return string|null
     */
    public function getRemarques(): ?string
    {
        return $this->container['remarques'];
    }

    /**
     * Sets remarques
     *
     * @param string|null $remarques remarques
     *
     * @return $this
     */
    public function setRemarques(?string $remarques): static
    {
        if (is_null($remarques)) {
            throw new InvalidArgumentException('non-nullable remarques cannot be null');
        }
        $this->container['remarques'] = $remarques;

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
     * Gets raison_devis_id
     *
     * @return int|null
     */
    public function getRaisonDevisId(): ?int
    {
        return $this->container['raison_devis_id'];
    }

    /**
     * Sets raison_devis_id
     *
     * @param int|null $raison_devis_id raison_devis_id
     *
     * @return $this
     */
    public function setRaisonDevisId(?int $raison_devis_id): static
    {
        if (is_null($raison_devis_id)) {
            array_push($this->openAPINullablesSetToNull, 'raison_devis_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('raison_devis_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['raison_devis_id'] = $raison_devis_id;

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


