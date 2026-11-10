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
 * ParticipantFilter Class Doc Comment
 *
 * Generated from the Dendreo OpenAPI specification, do not edit manually.
 *
 * @package  Dbout\DendreoSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ParticipantFilter implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ParticipantFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int[]',
        'id_externe' => 'string[]',
        'nom' => 'string',
        'prenom' => 'string',
        'email' => 'string',
        'portable' => 'string',
        'numero_compte_client' => 'string',
        'numero_compte_client_auxiliaire' => 'string',
        'nom_naissance' => 'string',
        'ville_naissance' => 'string',
        'departement_naissance' => 'string',
        'pays_naissance' => 'string[]',
        'pays_naissance_alpha2' => 'string',
        'code_postal' => 'string',
        'ville' => 'string',
        'pays' => 'string[]',
        'pays_alpha2' => 'string',
        'formateur_lie_id' => 'int[]',
        'id_contact' => 'int[]',
        'responsable_id' => 'int[]',
        'commentaires' => 'string',
        'infos_adf' => 'string',
        'ogdpc_adeli' => 'string',
        'ogdpc_rpps' => 'string',
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
        'nom' => null,
        'prenom' => null,
        'email' => null,
        'portable' => null,
        'numero_compte_client' => null,
        'numero_compte_client_auxiliaire' => null,
        'nom_naissance' => null,
        'ville_naissance' => null,
        'departement_naissance' => null,
        'pays_naissance' => null,
        'pays_naissance_alpha2' => null,
        'code_postal' => null,
        'ville' => null,
        'pays' => null,
        'pays_alpha2' => null,
        'formateur_lie_id' => null,
        'id_contact' => null,
        'responsable_id' => null,
        'commentaires' => null,
        'infos_adf' => null,
        'ogdpc_adeli' => null,
        'ogdpc_rpps' => null,
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
        'nom' => false,
        'prenom' => false,
        'email' => false,
        'portable' => false,
        'numero_compte_client' => false,
        'numero_compte_client_auxiliaire' => false,
        'nom_naissance' => false,
        'ville_naissance' => false,
        'departement_naissance' => false,
        'pays_naissance' => false,
        'pays_naissance_alpha2' => false,
        'code_postal' => false,
        'ville' => false,
        'pays' => false,
        'pays_alpha2' => false,
        'formateur_lie_id' => false,
        'id_contact' => false,
        'responsable_id' => false,
        'commentaires' => false,
        'infos_adf' => false,
        'ogdpc_adeli' => false,
        'ogdpc_rpps' => false,
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
        'nom' => 'nom',
        'prenom' => 'prenom',
        'email' => 'email',
        'portable' => 'portable',
        'numero_compte_client' => 'numero_compte_client',
        'numero_compte_client_auxiliaire' => 'numero_compte_client_auxiliaire',
        'nom_naissance' => 'nom_naissance',
        'ville_naissance' => 'ville_naissance',
        'departement_naissance' => 'departement_naissance',
        'pays_naissance' => 'pays_naissance',
        'pays_naissance_alpha2' => 'pays_naissance_alpha2',
        'code_postal' => 'code_postal',
        'ville' => 'ville',
        'pays' => 'pays',
        'pays_alpha2' => 'pays_alpha2',
        'formateur_lie_id' => 'formateur_lie_id',
        'id_contact' => 'id_contact',
        'responsable_id' => 'responsable_id',
        'commentaires' => 'commentaires',
        'infos_adf' => 'infos_adf',
        'ogdpc_adeli' => 'ogdpc_adeli',
        'ogdpc_rpps' => 'ogdpc_rpps',
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
        'nom' => 'setNom',
        'prenom' => 'setPrenom',
        'email' => 'setEmail',
        'portable' => 'setPortable',
        'numero_compte_client' => 'setNumeroCompteClient',
        'numero_compte_client_auxiliaire' => 'setNumeroCompteClientAuxiliaire',
        'nom_naissance' => 'setNomNaissance',
        'ville_naissance' => 'setVilleNaissance',
        'departement_naissance' => 'setDepartementNaissance',
        'pays_naissance' => 'setPaysNaissance',
        'pays_naissance_alpha2' => 'setPaysNaissanceAlpha2',
        'code_postal' => 'setCodePostal',
        'ville' => 'setVille',
        'pays' => 'setPays',
        'pays_alpha2' => 'setPaysAlpha2',
        'formateur_lie_id' => 'setFormateurLieId',
        'id_contact' => 'setIdContact',
        'responsable_id' => 'setResponsableId',
        'commentaires' => 'setCommentaires',
        'infos_adf' => 'setInfosAdf',
        'ogdpc_adeli' => 'setOgdpcAdeli',
        'ogdpc_rpps' => 'setOgdpcRpps',
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
        'nom' => 'getNom',
        'prenom' => 'getPrenom',
        'email' => 'getEmail',
        'portable' => 'getPortable',
        'numero_compte_client' => 'getNumeroCompteClient',
        'numero_compte_client_auxiliaire' => 'getNumeroCompteClientAuxiliaire',
        'nom_naissance' => 'getNomNaissance',
        'ville_naissance' => 'getVilleNaissance',
        'departement_naissance' => 'getDepartementNaissance',
        'pays_naissance' => 'getPaysNaissance',
        'pays_naissance_alpha2' => 'getPaysNaissanceAlpha2',
        'code_postal' => 'getCodePostal',
        'ville' => 'getVille',
        'pays' => 'getPays',
        'pays_alpha2' => 'getPaysAlpha2',
        'formateur_lie_id' => 'getFormateurLieId',
        'id_contact' => 'getIdContact',
        'responsable_id' => 'getResponsableId',
        'commentaires' => 'getCommentaires',
        'infos_adf' => 'getInfosAdf',
        'ogdpc_adeli' => 'getOgdpcAdeli',
        'ogdpc_rpps' => 'getOgdpcRpps',
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

    public const TRASHED_WITH = 'with';
    public const TRASHED_ONLY = 'only';

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
        $this->setIfExists('nom', $data ?? [], null);
        $this->setIfExists('prenom', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('portable', $data ?? [], null);
        $this->setIfExists('numero_compte_client', $data ?? [], null);
        $this->setIfExists('numero_compte_client_auxiliaire', $data ?? [], null);
        $this->setIfExists('nom_naissance', $data ?? [], null);
        $this->setIfExists('ville_naissance', $data ?? [], null);
        $this->setIfExists('departement_naissance', $data ?? [], null);
        $this->setIfExists('pays_naissance', $data ?? [], null);
        $this->setIfExists('pays_naissance_alpha2', $data ?? [], null);
        $this->setIfExists('code_postal', $data ?? [], null);
        $this->setIfExists('ville', $data ?? [], null);
        $this->setIfExists('pays', $data ?? [], null);
        $this->setIfExists('pays_alpha2', $data ?? [], null);
        $this->setIfExists('formateur_lie_id', $data ?? [], null);
        $this->setIfExists('id_contact', $data ?? [], null);
        $this->setIfExists('responsable_id', $data ?? [], null);
        $this->setIfExists('commentaires', $data ?? [], null);
        $this->setIfExists('infos_adf', $data ?? [], null);
        $this->setIfExists('ogdpc_adeli', $data ?? [], null);
        $this->setIfExists('ogdpc_rpps', $data ?? [], null);
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
     * @param string|null $nom Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
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
     * @param string|null $prenom Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
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
     * @param string|null $email Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
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
     * @param string|null $portable Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
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
     * Gets numero_compte_client
     *
     * @return string|null
     */
    public function getNumeroCompteClient(): ?string
    {
        return $this->container['numero_compte_client'];
    }

    /**
     * Sets numero_compte_client
     *
     * @param string|null $numero_compte_client Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setNumeroCompteClient(?string $numero_compte_client): static
    {
        if (is_null($numero_compte_client)) {
            throw new InvalidArgumentException('non-nullable numero_compte_client cannot be null');
        }
        $this->container['numero_compte_client'] = $numero_compte_client;

        return $this;
    }

    /**
     * Gets numero_compte_client_auxiliaire
     *
     * @return string|null
     */
    public function getNumeroCompteClientAuxiliaire(): ?string
    {
        return $this->container['numero_compte_client_auxiliaire'];
    }

    /**
     * Sets numero_compte_client_auxiliaire
     *
     * @param string|null $numero_compte_client_auxiliaire Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setNumeroCompteClientAuxiliaire(?string $numero_compte_client_auxiliaire): static
    {
        if (is_null($numero_compte_client_auxiliaire)) {
            throw new InvalidArgumentException('non-nullable numero_compte_client_auxiliaire cannot be null');
        }
        $this->container['numero_compte_client_auxiliaire'] = $numero_compte_client_auxiliaire;

        return $this;
    }

    /**
     * Gets nom_naissance
     *
     * @return string|null
     */
    public function getNomNaissance(): ?string
    {
        return $this->container['nom_naissance'];
    }

    /**
     * Sets nom_naissance
     *
     * @param string|null $nom_naissance Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setNomNaissance(?string $nom_naissance): static
    {
        if (is_null($nom_naissance)) {
            throw new InvalidArgumentException('non-nullable nom_naissance cannot be null');
        }
        $this->container['nom_naissance'] = $nom_naissance;

        return $this;
    }

    /**
     * Gets ville_naissance
     *
     * @return string|null
     */
    public function getVilleNaissance(): ?string
    {
        return $this->container['ville_naissance'];
    }

    /**
     * Sets ville_naissance
     *
     * @param string|null $ville_naissance Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setVilleNaissance(?string $ville_naissance): static
    {
        if (is_null($ville_naissance)) {
            throw new InvalidArgumentException('non-nullable ville_naissance cannot be null');
        }
        $this->container['ville_naissance'] = $ville_naissance;

        return $this;
    }

    /**
     * Gets departement_naissance
     *
     * @return string|null
     */
    public function getDepartementNaissance(): ?string
    {
        return $this->container['departement_naissance'];
    }

    /**
     * Sets departement_naissance
     *
     * @param string|null $departement_naissance Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setDepartementNaissance(?string $departement_naissance): static
    {
        if (is_null($departement_naissance)) {
            throw new InvalidArgumentException('non-nullable departement_naissance cannot be null');
        }
        $this->container['departement_naissance'] = $departement_naissance;

        return $this;
    }

    /**
     * Gets pays_naissance
     *
     * @return string[]|null
     */
    public function getPaysNaissance(): ?array
    {
        return $this->container['pays_naissance'];
    }

    /**
     * Sets pays_naissance
     *
     * @param string[]|null $pays_naissance Nom du pays de naissance (`France`). Plusieurs pays séparés par des virgules.
     *
     * @return $this
     */
    public function setPaysNaissance(?array $pays_naissance): static
    {
        if (is_null($pays_naissance)) {
            throw new InvalidArgumentException('non-nullable pays_naissance cannot be null');
        }
        $this->container['pays_naissance'] = $pays_naissance;

        return $this;
    }

    /**
     * Gets pays_naissance_alpha2
     *
     * @return string|null
     */
    public function getPaysNaissanceAlpha2(): ?string
    {
        return $this->container['pays_naissance_alpha2'];
    }

    /**
     * Sets pays_naissance_alpha2
     *
     * @param string|null $pays_naissance_alpha2 Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setPaysNaissanceAlpha2(?string $pays_naissance_alpha2): static
    {
        if (is_null($pays_naissance_alpha2)) {
            throw new InvalidArgumentException('non-nullable pays_naissance_alpha2 cannot be null');
        }
        $this->container['pays_naissance_alpha2'] = $pays_naissance_alpha2;

        return $this;
    }

    /**
     * Gets code_postal
     *
     * @return string|null
     */
    public function getCodePostal(): ?string
    {
        return $this->container['code_postal'];
    }

    /**
     * Sets code_postal
     *
     * @param string|null $code_postal Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setCodePostal(?string $code_postal): static
    {
        if (is_null($code_postal)) {
            throw new InvalidArgumentException('non-nullable code_postal cannot be null');
        }
        $this->container['code_postal'] = $code_postal;

        return $this;
    }

    /**
     * Gets ville
     *
     * @return string|null
     */
    public function getVille(): ?string
    {
        return $this->container['ville'];
    }

    /**
     * Sets ville
     *
     * @param string|null $ville Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setVille(?string $ville): static
    {
        if (is_null($ville)) {
            throw new InvalidArgumentException('non-nullable ville cannot be null');
        }
        $this->container['ville'] = $ville;

        return $this;
    }

    /**
     * Gets pays
     *
     * @return string[]|null
     */
    public function getPays(): ?array
    {
        return $this->container['pays'];
    }

    /**
     * Sets pays
     *
     * @param string[]|null $pays Nom du pays (`France`). Plusieurs pays séparés par des virgules.
     *
     * @return $this
     */
    public function setPays(?array $pays): static
    {
        if (is_null($pays)) {
            throw new InvalidArgumentException('non-nullable pays cannot be null');
        }
        $this->container['pays'] = $pays;

        return $this;
    }

    /**
     * Gets pays_alpha2
     *
     * @return string|null
     */
    public function getPaysAlpha2(): ?string
    {
        return $this->container['pays_alpha2'];
    }

    /**
     * Sets pays_alpha2
     *
     * @param string|null $pays_alpha2 Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setPaysAlpha2(?string $pays_alpha2): static
    {
        if (is_null($pays_alpha2)) {
            throw new InvalidArgumentException('non-nullable pays_alpha2 cannot be null');
        }
        $this->container['pays_alpha2'] = $pays_alpha2;

        return $this;
    }

    /**
     * Gets formateur_lie_id
     *
     * @return int[]|null
     */
    public function getFormateurLieId(): ?array
    {
        return $this->container['formateur_lie_id'];
    }

    /**
     * Sets formateur_lie_id
     *
     * @param int[]|null $formateur_lie_id Valeur exacte. Plusieurs valeurs séparées par des virgules.
     *
     * @return $this
     */
    public function setFormateurLieId(?array $formateur_lie_id): static
    {
        if (is_null($formateur_lie_id)) {
            throw new InvalidArgumentException('non-nullable formateur_lie_id cannot be null');
        }
        $this->container['formateur_lie_id'] = $formateur_lie_id;

        return $this;
    }

    /**
     * Gets id_contact
     *
     * @return int[]|null
     */
    public function getIdContact(): ?array
    {
        return $this->container['id_contact'];
    }

    /**
     * Sets id_contact
     *
     * @param int[]|null $id_contact Valeur exacte. Plusieurs valeurs séparées par des virgules.
     *
     * @return $this
     */
    public function setIdContact(?array $id_contact): static
    {
        if (is_null($id_contact)) {
            throw new InvalidArgumentException('non-nullable id_contact cannot be null');
        }
        $this->container['id_contact'] = $id_contact;

        return $this;
    }

    /**
     * Gets responsable_id
     *
     * @return int[]|null
     */
    public function getResponsableId(): ?array
    {
        return $this->container['responsable_id'];
    }

    /**
     * Sets responsable_id
     *
     * @param int[]|null $responsable_id Valeur exacte. Plusieurs valeurs séparées par des virgules.
     *
     * @return $this
     */
    public function setResponsableId(?array $responsable_id): static
    {
        if (is_null($responsable_id)) {
            throw new InvalidArgumentException('non-nullable responsable_id cannot be null');
        }
        $this->container['responsable_id'] = $responsable_id;

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
     * @param string|null $commentaires Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
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
     * Gets infos_adf
     *
     * @return string|null
     */
    public function getInfosAdf(): ?string
    {
        return $this->container['infos_adf'];
    }

    /**
     * Sets infos_adf
     *
     * @param string|null $infos_adf Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setInfosAdf(?string $infos_adf): static
    {
        if (is_null($infos_adf)) {
            throw new InvalidArgumentException('non-nullable infos_adf cannot be null');
        }
        $this->container['infos_adf'] = $infos_adf;

        return $this;
    }

    /**
     * Gets ogdpc_adeli
     *
     * @return string|null
     */
    public function getOgdpcAdeli(): ?string
    {
        return $this->container['ogdpc_adeli'];
    }

    /**
     * Sets ogdpc_adeli
     *
     * @param string|null $ogdpc_adeli Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setOgdpcAdeli(?string $ogdpc_adeli): static
    {
        if (is_null($ogdpc_adeli)) {
            throw new InvalidArgumentException('non-nullable ogdpc_adeli cannot be null');
        }
        $this->container['ogdpc_adeli'] = $ogdpc_adeli;

        return $this;
    }

    /**
     * Gets ogdpc_rpps
     *
     * @return string|null
     */
    public function getOgdpcRpps(): ?string
    {
        return $this->container['ogdpc_rpps'];
    }

    /**
     * Sets ogdpc_rpps
     *
     * @param string|null $ogdpc_rpps Recherche partielle : le champ contient la valeur. Plusieurs valeurs séparées par des virgules, dont une au moins doit correspondre.
     *
     * @return $this
     */
    public function setOgdpcRpps(?string $ogdpc_rpps): static
    {
        if (is_null($ogdpc_rpps)) {
            throw new InvalidArgumentException('non-nullable ogdpc_rpps cannot be null');
        }
        $this->container['ogdpc_rpps'] = $ogdpc_rpps;

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


