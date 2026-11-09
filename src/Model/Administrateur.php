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
 * Administrateur Class Doc Comment
 *
 * Generated from the Dendreo OpenAPI specification, do not edit manually.
 *
 * @package  Dbout\DendreoSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class Administrateur implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Administrateur';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'civilite' => 'string',
        'nom' => 'string',
        'prenom' => 'string',
        'nom_complet' => 'string',
        'niveau' => 'int',
        'fonction' => 'string',
        'email' => 'string',
        'telephone' => 'string',
        'date_derniere_connexion' => '\DateTime',
        'use_email' => 'bool',
        'use_signature' => 'bool',
        'default_cdf_id' => 'bool',
        'unread_notifications_count' => 'int',
        'created_at' => '\DateTime',
        'id_add' => 'int',
        'updated_at' => '\DateTime',
        'id_edit' => 'int',
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
        'civilite' => null,
        'nom' => null,
        'prenom' => null,
        'nom_complet' => null,
        'niveau' => null,
        'fonction' => null,
        'email' => null,
        'telephone' => null,
        'date_derniere_connexion' => 'date-time',
        'use_email' => null,
        'use_signature' => null,
        'default_cdf_id' => null,
        'unread_notifications_count' => null,
        'created_at' => 'date-time',
        'id_add' => null,
        'updated_at' => 'date-time',
        'id_edit' => null,
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
        'civilite' => false,
        'nom' => false,
        'prenom' => false,
        'nom_complet' => false,
        'niveau' => false,
        'fonction' => false,
        'email' => false,
        'telephone' => false,
        'date_derniere_connexion' => true,
        'use_email' => false,
        'use_signature' => false,
        'default_cdf_id' => false,
        'unread_notifications_count' => false,
        'created_at' => true,
        'id_add' => true,
        'updated_at' => true,
        'id_edit' => true,
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
        'civilite' => 'civilite',
        'nom' => 'nom',
        'prenom' => 'prenom',
        'nom_complet' => 'nom_complet',
        'niveau' => 'niveau',
        'fonction' => 'fonction',
        'email' => 'email',
        'telephone' => 'telephone',
        'date_derniere_connexion' => 'date_derniere_connexion',
        'use_email' => 'use_email',
        'use_signature' => 'use_signature',
        'default_cdf_id' => 'default_cdf_id',
        'unread_notifications_count' => 'unread_notifications_count',
        'created_at' => 'created_at',
        'id_add' => 'id_add',
        'updated_at' => 'updated_at',
        'id_edit' => 'id_edit',
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
        'civilite' => 'setCivilite',
        'nom' => 'setNom',
        'prenom' => 'setPrenom',
        'nom_complet' => 'setNomComplet',
        'niveau' => 'setNiveau',
        'fonction' => 'setFonction',
        'email' => 'setEmail',
        'telephone' => 'setTelephone',
        'date_derniere_connexion' => 'setDateDerniereConnexion',
        'use_email' => 'setUseEmail',
        'use_signature' => 'setUseSignature',
        'default_cdf_id' => 'setDefaultCdfId',
        'unread_notifications_count' => 'setUnreadNotificationsCount',
        'created_at' => 'setCreatedAt',
        'id_add' => 'setIdAdd',
        'updated_at' => 'setUpdatedAt',
        'id_edit' => 'setIdEdit',
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
        'civilite' => 'getCivilite',
        'nom' => 'getNom',
        'prenom' => 'getPrenom',
        'nom_complet' => 'getNomComplet',
        'niveau' => 'getNiveau',
        'fonction' => 'getFonction',
        'email' => 'getEmail',
        'telephone' => 'getTelephone',
        'date_derniere_connexion' => 'getDateDerniereConnexion',
        'use_email' => 'getUseEmail',
        'use_signature' => 'getUseSignature',
        'default_cdf_id' => 'getDefaultCdfId',
        'unread_notifications_count' => 'getUnreadNotificationsCount',
        'created_at' => 'getCreatedAt',
        'id_add' => 'getIdAdd',
        'updated_at' => 'getUpdatedAt',
        'id_edit' => 'getIdEdit',
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
        $this->setIfExists('civilite', $data ?? [], null);
        $this->setIfExists('nom', $data ?? [], null);
        $this->setIfExists('prenom', $data ?? [], null);
        $this->setIfExists('nom_complet', $data ?? [], null);
        $this->setIfExists('niveau', $data ?? [], null);
        $this->setIfExists('fonction', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('telephone', $data ?? [], null);
        $this->setIfExists('date_derniere_connexion', $data ?? [], null);
        $this->setIfExists('use_email', $data ?? [], null);
        $this->setIfExists('use_signature', $data ?? [], null);
        $this->setIfExists('default_cdf_id', $data ?? [], null);
        $this->setIfExists('unread_notifications_count', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('id_add', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('id_edit', $data ?? [], null);
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
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return $this
     */
    public function setId(?int $id): static
    {
        if (is_null($id)) {
            throw new InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets civilite
     *
     * @return string|null
     */
    public function getCivilite(): ?string
    {
        return $this->container['civilite'];
    }

    /**
     * Sets civilite
     *
     * @param string|null $civilite civilite
     *
     * @return $this
     */
    public function setCivilite(?string $civilite): static
    {
        if (is_null($civilite)) {
            throw new InvalidArgumentException('non-nullable civilite cannot be null');
        }
        $this->container['civilite'] = $civilite;

        return $this;
    }

    /**
     * Gets nom
     *
     * @return string|null
     */
    public function getNom(): ?string
    {
        return $this->container['nom'];
    }

    /**
     * Sets nom
     *
     * @param string|null $nom nom
     *
     * @return $this
     */
    public function setNom(?string $nom): static
    {
        if (is_null($nom)) {
            throw new InvalidArgumentException('non-nullable nom cannot be null');
        }
        $this->container['nom'] = $nom;

        return $this;
    }

    /**
     * Gets prenom
     *
     * @return string|null
     */
    public function getPrenom(): ?string
    {
        return $this->container['prenom'];
    }

    /**
     * Sets prenom
     *
     * @param string|null $prenom prenom
     *
     * @return $this
     */
    public function setPrenom(?string $prenom): static
    {
        if (is_null($prenom)) {
            throw new InvalidArgumentException('non-nullable prenom cannot be null');
        }
        $this->container['prenom'] = $prenom;

        return $this;
    }

    /**
     * Gets nom_complet
     *
     * @return string|null
     */
    public function getNomComplet(): ?string
    {
        return $this->container['nom_complet'];
    }

    /**
     * Sets nom_complet
     *
     * @param string|null $nom_complet nom_complet
     *
     * @return $this
     */
    public function setNomComplet(?string $nom_complet): static
    {
        if (is_null($nom_complet)) {
            throw new InvalidArgumentException('non-nullable nom_complet cannot be null');
        }
        $this->container['nom_complet'] = $nom_complet;

        return $this;
    }

    /**
     * Gets niveau
     *
     * @return int|null
     */
    public function getNiveau(): ?int
    {
        return $this->container['niveau'];
    }

    /**
     * Sets niveau
     *
     * @param int|null $niveau niveau
     *
     * @return $this
     */
    public function setNiveau(?int $niveau): static
    {
        if (is_null($niveau)) {
            throw new InvalidArgumentException('non-nullable niveau cannot be null');
        }
        $this->container['niveau'] = $niveau;

        return $this;
    }

    /**
     * Gets fonction
     *
     * @return string|null
     */
    public function getFonction(): ?string
    {
        return $this->container['fonction'];
    }

    /**
     * Sets fonction
     *
     * @param string|null $fonction fonction
     *
     * @return $this
     */
    public function setFonction(?string $fonction): static
    {
        if (is_null($fonction)) {
            throw new InvalidArgumentException('non-nullable fonction cannot be null');
        }
        $this->container['fonction'] = $fonction;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return $this
     */
    public function setEmail(?string $email): static
    {
        if (is_null($email)) {
            throw new InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets telephone
     *
     * @return string|null
     */
    public function getTelephone(): ?string
    {
        return $this->container['telephone'];
    }

    /**
     * Sets telephone
     *
     * @param string|null $telephone telephone
     *
     * @return $this
     */
    public function setTelephone(?string $telephone): static
    {
        if (is_null($telephone)) {
            throw new InvalidArgumentException('non-nullable telephone cannot be null');
        }
        $this->container['telephone'] = $telephone;

        return $this;
    }

    /**
     * Gets date_derniere_connexion
     *
     * @return \DateTime|null
     */
    public function getDateDerniereConnexion(): ?\DateTime
    {
        return $this->container['date_derniere_connexion'];
    }

    /**
     * Sets date_derniere_connexion
     *
     * @param \DateTime|null $date_derniere_connexion date_derniere_connexion
     *
     * @return $this
     */
    public function setDateDerniereConnexion(?\DateTime $date_derniere_connexion): static
    {
        if (is_null($date_derniere_connexion)) {
            array_push($this->openAPINullablesSetToNull, 'date_derniere_connexion');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date_derniere_connexion', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['date_derniere_connexion'] = $date_derniere_connexion;

        return $this;
    }

    /**
     * Gets use_email
     *
     * @return bool|null
     */
    public function getUseEmail(): ?bool
    {
        return $this->container['use_email'];
    }

    /**
     * Sets use_email
     *
     * @param bool|null $use_email use_email
     *
     * @return $this
     */
    public function setUseEmail(?bool $use_email): static
    {
        if (is_null($use_email)) {
            throw new InvalidArgumentException('non-nullable use_email cannot be null');
        }
        $this->container['use_email'] = $use_email;

        return $this;
    }

    /**
     * Gets use_signature
     *
     * @return bool|null
     */
    public function getUseSignature(): ?bool
    {
        return $this->container['use_signature'];
    }

    /**
     * Sets use_signature
     *
     * @param bool|null $use_signature use_signature
     *
     * @return $this
     */
    public function setUseSignature(?bool $use_signature): static
    {
        if (is_null($use_signature)) {
            throw new InvalidArgumentException('non-nullable use_signature cannot be null');
        }
        $this->container['use_signature'] = $use_signature;

        return $this;
    }

    /**
     * Gets default_cdf_id
     *
     * @return bool|null
     */
    public function getDefaultCdfId(): ?bool
    {
        return $this->container['default_cdf_id'];
    }

    /**
     * Sets default_cdf_id
     *
     * @param bool|null $default_cdf_id default_cdf_id
     *
     * @return $this
     */
    public function setDefaultCdfId(?bool $default_cdf_id): static
    {
        if (is_null($default_cdf_id)) {
            throw new InvalidArgumentException('non-nullable default_cdf_id cannot be null');
        }
        $this->container['default_cdf_id'] = $default_cdf_id;

        return $this;
    }

    /**
     * Gets unread_notifications_count
     *
     * @return int|null
     */
    public function getUnreadNotificationsCount(): ?int
    {
        return $this->container['unread_notifications_count'];
    }

    /**
     * Sets unread_notifications_count
     *
     * @param int|null $unread_notifications_count unread_notifications_count
     *
     * @return $this
     */
    public function setUnreadNotificationsCount(?int $unread_notifications_count): static
    {
        if (is_null($unread_notifications_count)) {
            throw new InvalidArgumentException('non-nullable unread_notifications_count cannot be null');
        }
        $this->container['unread_notifications_count'] = $unread_notifications_count;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at created_at
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
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at updated_at
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
     * Gets deleted_at
     *
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->container['deleted_at'];
    }

    /**
     * Sets deleted_at
     *
     * @param \DateTime|null $deleted_at deleted_at
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


