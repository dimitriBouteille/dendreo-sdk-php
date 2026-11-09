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
 * FinanceurContactsInner Class Doc Comment
 *
 * Generated from the Dendreo OpenAPI specification, do not edit manually.
 *
 * @package  Dbout\DendreoSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class FinanceurContactsInner implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Financeur_contacts_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'id_entreprise' => 'int',
        'civilite' => 'string',
        'nom' => 'string',
        'prenom' => 'string',
        'fonction' => 'string',
        'telephone_direct' => 'string',
        'portable' => 'string',
        'email' => 'string',
        'commentaires' => 'string',
        'particulier' => 'int',
        'id_externe' => 'string',
        'id_centre_de_formation' => 'int',
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
        'id_entreprise' => null,
        'civilite' => null,
        'nom' => null,
        'prenom' => null,
        'fonction' => null,
        'telephone_direct' => null,
        'portable' => null,
        'email' => null,
        'commentaires' => null,
        'particulier' => null,
        'id_externe' => null,
        'id_centre_de_formation' => null,
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
        'id_entreprise' => false,
        'civilite' => false,
        'nom' => false,
        'prenom' => false,
        'fonction' => false,
        'telephone_direct' => false,
        'portable' => false,
        'email' => false,
        'commentaires' => false,
        'particulier' => false,
        'id_externe' => true,
        'id_centre_de_formation' => false,
        'created_at' => true,
        'id_add' => false,
        'updated_at' => true,
        'id_edit' => false,
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
        'id_entreprise' => 'id_entreprise',
        'civilite' => 'civilite',
        'nom' => 'nom',
        'prenom' => 'prenom',
        'fonction' => 'fonction',
        'telephone_direct' => 'telephone_direct',
        'portable' => 'portable',
        'email' => 'email',
        'commentaires' => 'commentaires',
        'particulier' => 'particulier',
        'id_externe' => 'id_externe',
        'id_centre_de_formation' => 'id_centre_de_formation',
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
        'id_entreprise' => 'setIdEntreprise',
        'civilite' => 'setCivilite',
        'nom' => 'setNom',
        'prenom' => 'setPrenom',
        'fonction' => 'setFonction',
        'telephone_direct' => 'setTelephoneDirect',
        'portable' => 'setPortable',
        'email' => 'setEmail',
        'commentaires' => 'setCommentaires',
        'particulier' => 'setParticulier',
        'id_externe' => 'setIdExterne',
        'id_centre_de_formation' => 'setIdCentreDeFormation',
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
        'id_entreprise' => 'getIdEntreprise',
        'civilite' => 'getCivilite',
        'nom' => 'getNom',
        'prenom' => 'getPrenom',
        'fonction' => 'getFonction',
        'telephone_direct' => 'getTelephoneDirect',
        'portable' => 'getPortable',
        'email' => 'getEmail',
        'commentaires' => 'getCommentaires',
        'particulier' => 'getParticulier',
        'id_externe' => 'getIdExterne',
        'id_centre_de_formation' => 'getIdCentreDeFormation',
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
        $this->setIfExists('id_entreprise', $data ?? [], null);
        $this->setIfExists('civilite', $data ?? [], null);
        $this->setIfExists('nom', $data ?? [], null);
        $this->setIfExists('prenom', $data ?? [], null);
        $this->setIfExists('fonction', $data ?? [], null);
        $this->setIfExists('telephone_direct', $data ?? [], null);
        $this->setIfExists('portable', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('commentaires', $data ?? [], null);
        $this->setIfExists('particulier', $data ?? [], null);
        $this->setIfExists('id_externe', $data ?? [], null);
        $this->setIfExists('id_centre_de_formation', $data ?? [], null);
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
     * Gets telephone_direct
     *
     * @return string|null
     */
    public function getTelephoneDirect(): ?string
    {
        return $this->container['telephone_direct'];
    }

    /**
     * Sets telephone_direct
     *
     * @param string|null $telephone_direct telephone_direct
     *
     * @return $this
     */
    public function setTelephoneDirect(?string $telephone_direct): static
    {
        if (is_null($telephone_direct)) {
            throw new InvalidArgumentException('non-nullable telephone_direct cannot be null');
        }
        $this->container['telephone_direct'] = $telephone_direct;

        return $this;
    }

    /**
     * Gets portable
     *
     * @return string|null
     */
    public function getPortable(): ?string
    {
        return $this->container['portable'];
    }

    /**
     * Sets portable
     *
     * @param string|null $portable portable
     *
     * @return $this
     */
    public function setPortable(?string $portable): static
    {
        if (is_null($portable)) {
            throw new InvalidArgumentException('non-nullable portable cannot be null');
        }
        $this->container['portable'] = $portable;

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
     * Gets commentaires
     *
     * @return string|null
     */
    public function getCommentaires(): ?string
    {
        return $this->container['commentaires'];
    }

    /**
     * Sets commentaires
     *
     * @param string|null $commentaires commentaires
     *
     * @return $this
     */
    public function setCommentaires(?string $commentaires): static
    {
        if (is_null($commentaires)) {
            throw new InvalidArgumentException('non-nullable commentaires cannot be null');
        }
        $this->container['commentaires'] = $commentaires;

        return $this;
    }

    /**
     * Gets particulier
     *
     * @return int|null
     */
    public function getParticulier(): ?int
    {
        return $this->container['particulier'];
    }

    /**
     * Sets particulier
     *
     * @param int|null $particulier particulier
     *
     * @return $this
     */
    public function setParticulier(?int $particulier): static
    {
        if (is_null($particulier)) {
            throw new InvalidArgumentException('non-nullable particulier cannot be null');
        }
        $this->container['particulier'] = $particulier;

        return $this;
    }

    /**
     * Gets id_externe
     *
     * @return string|null
     */
    public function getIdExterne(): ?string
    {
        return $this->container['id_externe'];
    }

    /**
     * Sets id_externe
     *
     * @param string|null $id_externe id_externe
     *
     * @return $this
     */
    public function setIdExterne(?string $id_externe): static
    {
        if (is_null($id_externe)) {
            array_push($this->openAPINullablesSetToNull, 'id_externe');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_externe', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id_externe'] = $id_externe;

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
            throw new InvalidArgumentException('non-nullable id_add cannot be null');
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
            throw new InvalidArgumentException('non-nullable id_edit cannot be null');
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


