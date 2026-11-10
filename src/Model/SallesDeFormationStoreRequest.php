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
 * SallesDeFormationStoreRequest Class Doc Comment
 *
 * Generated from the Dendreo OpenAPI specification, do not edit manually.
 *
 * @package  Dbout\DendreoSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class SallesDeFormationStoreRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'SallesDeFormationStoreRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'emplacement_cible' => 'string',
        'emplacement_id' => 'int',
        'intitule' => 'string',
        'id_externe' => 'string',
        'id_centre_de_formation' => 'object',
        'color' => 'string',
        'capacite_max' => 'int',
        'no_conflits' => 'bool',
        'invisible_catalogue' => 'bool',
        'commentaires_internes' => 'string',
        'nom_contact' => 'string',
        'adresse' => 'string',
        'code_postal' => 'string',
        'ville' => 'string',
        'pays' => 'string',
        'pays_alpha2' => 'string',
        'telephone' => 'string',
        'email' => 'string',
        'lien_google_maps' => 'string',
        'url_connexion' => 'string',
        'acces_handicapes' => 'bool',
        'acces_handicapes_desc' => 'string',
        'acces' => 'string',
        'accueil' => 'string',
        'champs_additionnels' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'emplacement_cible' => null,
        'emplacement_id' => null,
        'intitule' => null,
        'id_externe' => null,
        'id_centre_de_formation' => null,
        'color' => null,
        'capacite_max' => null,
        'no_conflits' => null,
        'invisible_catalogue' => null,
        'commentaires_internes' => null,
        'nom_contact' => null,
        'adresse' => null,
        'code_postal' => null,
        'ville' => null,
        'pays' => null,
        'pays_alpha2' => null,
        'telephone' => null,
        'email' => null,
        'lien_google_maps' => null,
        'url_connexion' => null,
        'acces_handicapes' => null,
        'acces_handicapes_desc' => null,
        'acces' => null,
        'accueil' => null,
        'champs_additionnels' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'emplacement_cible' => false,
        'emplacement_id' => true,
        'intitule' => true,
        'id_externe' => true,
        'id_centre_de_formation' => true,
        'color' => true,
        'capacite_max' => true,
        'no_conflits' => true,
        'invisible_catalogue' => true,
        'commentaires_internes' => true,
        'nom_contact' => true,
        'adresse' => true,
        'code_postal' => true,
        'ville' => true,
        'pays' => true,
        'pays_alpha2' => true,
        'telephone' => true,
        'email' => true,
        'lien_google_maps' => true,
        'url_connexion' => true,
        'acces_handicapes' => true,
        'acces_handicapes_desc' => true,
        'acces' => true,
        'accueil' => true,
        'champs_additionnels' => false
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
        'emplacement_cible' => 'emplacement_cible',
        'emplacement_id' => 'emplacement_id',
        'intitule' => 'intitule',
        'id_externe' => 'id_externe',
        'id_centre_de_formation' => 'id_centre_de_formation',
        'color' => 'color',
        'capacite_max' => 'capacite_max',
        'no_conflits' => 'no_conflits',
        'invisible_catalogue' => 'invisible_catalogue',
        'commentaires_internes' => 'commentaires_internes',
        'nom_contact' => 'nom_contact',
        'adresse' => 'adresse',
        'code_postal' => 'code_postal',
        'ville' => 'ville',
        'pays' => 'pays',
        'pays_alpha2' => 'pays_alpha2',
        'telephone' => 'telephone',
        'email' => 'email',
        'lien_google_maps' => 'lien_google_maps',
        'url_connexion' => 'url_connexion',
        'acces_handicapes' => 'acces_handicapes',
        'acces_handicapes_desc' => 'acces_handicapes_desc',
        'acces' => 'acces',
        'accueil' => 'accueil',
        'champs_additionnels' => 'champs_additionnels'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'emplacement_cible' => 'setEmplacementCible',
        'emplacement_id' => 'setEmplacementId',
        'intitule' => 'setIntitule',
        'id_externe' => 'setIdExterne',
        'id_centre_de_formation' => 'setIdCentreDeFormation',
        'color' => 'setColor',
        'capacite_max' => 'setCapaciteMax',
        'no_conflits' => 'setNoConflits',
        'invisible_catalogue' => 'setInvisibleCatalogue',
        'commentaires_internes' => 'setCommentairesInternes',
        'nom_contact' => 'setNomContact',
        'adresse' => 'setAdresse',
        'code_postal' => 'setCodePostal',
        'ville' => 'setVille',
        'pays' => 'setPays',
        'pays_alpha2' => 'setPaysAlpha2',
        'telephone' => 'setTelephone',
        'email' => 'setEmail',
        'lien_google_maps' => 'setLienGoogleMaps',
        'url_connexion' => 'setUrlConnexion',
        'acces_handicapes' => 'setAccesHandicapes',
        'acces_handicapes_desc' => 'setAccesHandicapesDesc',
        'acces' => 'setAcces',
        'accueil' => 'setAccueil',
        'champs_additionnels' => 'setChampsAdditionnels'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'emplacement_cible' => 'getEmplacementCible',
        'emplacement_id' => 'getEmplacementId',
        'intitule' => 'getIntitule',
        'id_externe' => 'getIdExterne',
        'id_centre_de_formation' => 'getIdCentreDeFormation',
        'color' => 'getColor',
        'capacite_max' => 'getCapaciteMax',
        'no_conflits' => 'getNoConflits',
        'invisible_catalogue' => 'getInvisibleCatalogue',
        'commentaires_internes' => 'getCommentairesInternes',
        'nom_contact' => 'getNomContact',
        'adresse' => 'getAdresse',
        'code_postal' => 'getCodePostal',
        'ville' => 'getVille',
        'pays' => 'getPays',
        'pays_alpha2' => 'getPaysAlpha2',
        'telephone' => 'getTelephone',
        'email' => 'getEmail',
        'lien_google_maps' => 'getLienGoogleMaps',
        'url_connexion' => 'getUrlConnexion',
        'acces_handicapes' => 'getAccesHandicapes',
        'acces_handicapes_desc' => 'getAccesHandicapesDesc',
        'acces' => 'getAcces',
        'accueil' => 'getAccueil',
        'champs_additionnels' => 'getChampsAdditionnels'
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

    public const EMPLACEMENT_CIBLE_INTERNE = 'interne';
    public const EMPLACEMENT_CIBLE_CDF_OUTSIDE = 'cdf_outside';
    public const EMPLACEMENT_CIBLE_ELEARNING = 'elearning';
    public const EMPLACEMENT_CIBLE_CLIENT = 'client';
    public const EMPLACEMENT_CIBLE_CLIENT_OUTSIDE = 'client_outside';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public static function getEmplacementCibleAllowableValues()
    {
        return [
            self::EMPLACEMENT_CIBLE_INTERNE,
            self::EMPLACEMENT_CIBLE_CDF_OUTSIDE,
            self::EMPLACEMENT_CIBLE_ELEARNING,
            self::EMPLACEMENT_CIBLE_CLIENT,
            self::EMPLACEMENT_CIBLE_CLIENT_OUTSIDE,
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
        $this->setIfExists('emplacement_cible', $data ?? [], null);
        $this->setIfExists('emplacement_id', $data ?? [], null);
        $this->setIfExists('intitule', $data ?? [], null);
        $this->setIfExists('id_externe', $data ?? [], null);
        $this->setIfExists('id_centre_de_formation', $data ?? [], null);
        $this->setIfExists('color', $data ?? [], null);
        $this->setIfExists('capacite_max', $data ?? [], null);
        $this->setIfExists('no_conflits', $data ?? [], null);
        $this->setIfExists('invisible_catalogue', $data ?? [], null);
        $this->setIfExists('commentaires_internes', $data ?? [], null);
        $this->setIfExists('nom_contact', $data ?? [], null);
        $this->setIfExists('adresse', $data ?? [], null);
        $this->setIfExists('code_postal', $data ?? [], null);
        $this->setIfExists('ville', $data ?? [], null);
        $this->setIfExists('pays', $data ?? [], null);
        $this->setIfExists('pays_alpha2', $data ?? [], null);
        $this->setIfExists('telephone', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('lien_google_maps', $data ?? [], null);
        $this->setIfExists('url_connexion', $data ?? [], null);
        $this->setIfExists('acces_handicapes', $data ?? [], null);
        $this->setIfExists('acces_handicapes_desc', $data ?? [], null);
        $this->setIfExists('acces', $data ?? [], null);
        $this->setIfExists('accueil', $data ?? [], null);
        $this->setIfExists('champs_additionnels', $data ?? [], null);
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

        if ($this->container['emplacement_cible'] === null) {
            $invalidProperties[] = "'emplacement_cible' can't be null";
        }
        $allowedValues = self::getEmplacementCibleAllowableValues();
        if (!is_null($this->container['emplacement_cible']) && !in_array($this->container['emplacement_cible'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'emplacement_cible', must be one of '%s'",
                $this->container['emplacement_cible'],
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
     * Gets emplacement_cible
     *
     * @return string
     */
    public function getEmplacementCible(): string
    {
        return $this->container['emplacement_cible'];
    }

    /**
     * Sets emplacement_cible
     *
     * @param string $emplacement_cible Type d'emplacement de la salle : `interne` (dans un centre de formation), `cdf_outside` (externe, adresse libre), `elearning` (salle virtuelle), `client` (dans l'entreprise) ou `client_outside` (externe, rattachée à une entreprise).
     *
     * @return $this
     */
    public function setEmplacementCible(string $emplacement_cible): static
    {
        if (is_null($emplacement_cible)) {
            throw new InvalidArgumentException('non-nullable emplacement_cible cannot be null');
        }
        $allowedValues = self::getEmplacementCibleAllowableValues();
        if (!in_array($emplacement_cible, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'emplacement_cible', must be one of '%s'",
                    $emplacement_cible,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['emplacement_cible'] = $emplacement_cible;

        return $this;
    }

    /**
     * Gets emplacement_id
     *
     * @return int|null
     */
    public function getEmplacementId(): ?int
    {
        return $this->container['emplacement_id'];
    }

    /**
     * Sets emplacement_id
     *
     * @param int|null $emplacement_id L'identifiant du centre de formation pour `interne`, celui d'une entreprise active pour `client` et `client_outside`, où il est obligatoire. Pour `interne`, facultatif en mono-centre (centre principal) et obligatoire en multi-centres, où il désigne le sous-centre de la salle. Refusé pour `cdf_outside` et `elearning`, sauf à `0`. Min : 0. Max : 2147483647.
     *
     * @return $this
     */
    public function setEmplacementId(?int $emplacement_id): static
    {
        if (is_null($emplacement_id)) {
            array_push($this->openAPINullablesSetToNull, 'emplacement_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('emplacement_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['emplacement_id'] = $emplacement_id;

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
     * @param string|null $intitule Intitulé de la salle. Obligatoire, sauf quand `emplacement_cible` vaut `client` : la salle prend alors le nom de l'entreprise. Max : 200 caractères.
     *
     * @return $this
     */
    public function setIntitule(?string $intitule): static
    {
        if (is_null($intitule)) {
            array_push($this->openAPINullablesSetToNull, 'intitule');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('intitule', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['intitule'] = $intitule;

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
     * @param string|null $id_externe Identifiant externe pour synchronisation. Max : 36 caractères.
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
     * @return object|null
     */
    public function getIdCentreDeFormation(): ?object
    {
        return $this->container['id_centre_de_formation'];
    }

    /**
     * Sets id_centre_de_formation
     *
     * @param object|null $id_centre_de_formation Centres de formation dans lesquels la salle est visible, identifiants séparés par des virgules. Vide, la salle est visible dans tous les centres.
     *
     * @return $this
     */
    public function setIdCentreDeFormation(?object $id_centre_de_formation): static
    {
        if (is_null($id_centre_de_formation)) {
            array_push($this->openAPINullablesSetToNull, 'id_centre_de_formation');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_centre_de_formation', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id_centre_de_formation'] = $id_centre_de_formation;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string|null
     */
    public function getColor(): ?string
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string|null $color Couleur de la salle, code hexadécimal de 6 caractères, avec ou sans `#`. Doit respecter l'expression régulière <code>/^#?[0-9a-fA-F]{6}$/</code>.
     *
     * @return $this
     */
    public function setColor(?string $color): static
    {
        if (is_null($color)) {
            array_push($this->openAPINullablesSetToNull, 'color');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('color', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets capacite_max
     *
     * @return int|null
     */
    public function getCapaciteMax(): ?int
    {
        return $this->container['capacite_max'];
    }

    /**
     * Sets capacite_max
     *
     * @param int|null $capacite_max Capacité maximum de la salle. Min : 0.
     *
     * @return $this
     */
    public function setCapaciteMax(?int $capacite_max): static
    {
        if (is_null($capacite_max)) {
            array_push($this->openAPINullablesSetToNull, 'capacite_max');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('capacite_max', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['capacite_max'] = $capacite_max;

        return $this;
    }

    /**
     * Gets no_conflits
     *
     * @return bool|null
     */
    public function getNoConflits(): ?bool
    {
        return $this->container['no_conflits'];
    }

    /**
     * Sets no_conflits
     *
     * @param bool|null $no_conflits Désactive la détection de conflits pour cette salle.
     *
     * @return $this
     */
    public function setNoConflits(?bool $no_conflits): static
    {
        if (is_null($no_conflits)) {
            array_push($this->openAPINullablesSetToNull, 'no_conflits');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('no_conflits', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['no_conflits'] = $no_conflits;

        return $this;
    }

    /**
     * Gets invisible_catalogue
     *
     * @return bool|null
     */
    public function getInvisibleCatalogue(): ?bool
    {
        return $this->container['invisible_catalogue'];
    }

    /**
     * Sets invisible_catalogue
     *
     * @param bool|null $invisible_catalogue Masque la salle sur le Catalogue Public.
     *
     * @return $this
     */
    public function setInvisibleCatalogue(?bool $invisible_catalogue): static
    {
        if (is_null($invisible_catalogue)) {
            array_push($this->openAPINullablesSetToNull, 'invisible_catalogue');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('invisible_catalogue', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['invisible_catalogue'] = $invisible_catalogue;

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
     * @param string|null $commentaires_internes Commentaires internes.
     *
     * @return $this
     */
    public function setCommentairesInternes(?string $commentaires_internes): static
    {
        if (is_null($commentaires_internes)) {
            array_push($this->openAPINullablesSetToNull, 'commentaires_internes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('commentaires_internes', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['commentaires_internes'] = $commentaires_internes;

        return $this;
    }

    /**
     * Gets nom_contact
     *
     * @return string|null
     */
    public function getNomContact(): ?string
    {
        return $this->container['nom_contact'];
    }

    /**
     * Sets nom_contact
     *
     * @param string|null $nom_contact Nom du contact sur place (emplacement externe). Max : 191 caractères.
     *
     * @return $this
     */
    public function setNomContact(?string $nom_contact): static
    {
        if (is_null($nom_contact)) {
            array_push($this->openAPINullablesSetToNull, 'nom_contact');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nom_contact', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nom_contact'] = $nom_contact;

        return $this;
    }

    /**
     * Gets adresse
     *
     * @return string|null
     */
    public function getAdresse(): ?string
    {
        return $this->container['adresse'];
    }

    /**
     * Sets adresse
     *
     * @param string|null $adresse Adresse (emplacement externe).
     *
     * @return $this
     */
    public function setAdresse(?string $adresse): static
    {
        if (is_null($adresse)) {
            array_push($this->openAPINullablesSetToNull, 'adresse');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('adresse', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['adresse'] = $adresse;

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
     * @param string|null $code_postal Code postal (emplacement externe). Max : 10 caractères.
     *
     * @return $this
     */
    public function setCodePostal(?string $code_postal): static
    {
        if (is_null($code_postal)) {
            array_push($this->openAPINullablesSetToNull, 'code_postal');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('code_postal', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param string|null $ville Ville (emplacement externe). Max : 100 caractères.
     *
     * @return $this
     */
    public function setVille(?string $ville): static
    {
        if (is_null($ville)) {
            array_push($this->openAPINullablesSetToNull, 'ville');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ville', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ville'] = $ville;

        return $this;
    }

    /**
     * Gets pays
     *
     * @return string|null
     */
    public function getPays(): ?string
    {
        return $this->container['pays'];
    }

    /**
     * Sets pays
     *
     * @param string|null $pays Libellé du pays, reconnu selon la norme ISO 3166. Ignoré quand `pays_alpha2` est envoyé.
     *
     * @return $this
     */
    public function setPays(?string $pays): static
    {
        if (is_null($pays)) {
            array_push($this->openAPINullablesSetToNull, 'pays');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pays', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param string|null $pays_alpha2 Code ISO 3166-1 alpha-2 du pays.
     *
     * @return $this
     */
    public function setPaysAlpha2(?string $pays_alpha2): static
    {
        if (is_null($pays_alpha2)) {
            array_push($this->openAPINullablesSetToNull, 'pays_alpha2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pays_alpha2', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pays_alpha2'] = $pays_alpha2;

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
     * @param string|null $telephone Numéro de téléphone, au format international (E.164) de préférence. Refusé si le numéro ne peut pas être reconnu.
     *
     * @return $this
     */
    public function setTelephone(?string $telephone): static
    {
        if (is_null($telephone)) {
            array_push($this->openAPINullablesSetToNull, 'telephone');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('telephone', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['telephone'] = $telephone;

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
     * @param string|null $email Email de contact.
     *
     * @return $this
     */
    public function setEmail(?string $email): static
    {
        if (is_null($email)) {
            array_push($this->openAPINullablesSetToNull, 'email');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('email', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets lien_google_maps
     *
     * @return string|null
     */
    public function getLienGoogleMaps(): ?string
    {
        return $this->container['lien_google_maps'];
    }

    /**
     * Sets lien_google_maps
     *
     * @param string|null $lien_google_maps URL Google Maps.
     *
     * @return $this
     */
    public function setLienGoogleMaps(?string $lien_google_maps): static
    {
        if (is_null($lien_google_maps)) {
            array_push($this->openAPINullablesSetToNull, 'lien_google_maps');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lien_google_maps', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['lien_google_maps'] = $lien_google_maps;

        return $this;
    }

    /**
     * Gets url_connexion
     *
     * @return string|null
     */
    public function getUrlConnexion(): ?string
    {
        return $this->container['url_connexion'];
    }

    /**
     * Sets url_connexion
     *
     * @param string|null $url_connexion URL de connexion d'une salle virtuelle (`emplacement_cible` à `elearning`).
     *
     * @return $this
     */
    public function setUrlConnexion(?string $url_connexion): static
    {
        if (is_null($url_connexion)) {
            array_push($this->openAPINullablesSetToNull, 'url_connexion');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('url_connexion', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['url_connexion'] = $url_connexion;

        return $this;
    }

    /**
     * Gets acces_handicapes
     *
     * @return bool|null
     */
    public function getAccesHandicapes(): ?bool
    {
        return $this->container['acces_handicapes'];
    }

    /**
     * Sets acces_handicapes
     *
     * @param bool|null $acces_handicapes Accès aux personnes en situation de handicap.
     *
     * @return $this
     */
    public function setAccesHandicapes(?bool $acces_handicapes): static
    {
        if (is_null($acces_handicapes)) {
            array_push($this->openAPINullablesSetToNull, 'acces_handicapes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('acces_handicapes', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['acces_handicapes'] = $acces_handicapes;

        return $this;
    }

    /**
     * Gets acces_handicapes_desc
     *
     * @return string|null
     */
    public function getAccesHandicapesDesc(): ?string
    {
        return $this->container['acces_handicapes_desc'];
    }

    /**
     * Sets acces_handicapes_desc
     *
     * @param string|null $acces_handicapes_desc Précisions sur l'accessibilité (HTML).
     *
     * @return $this
     */
    public function setAccesHandicapesDesc(?string $acces_handicapes_desc): static
    {
        if (is_null($acces_handicapes_desc)) {
            array_push($this->openAPINullablesSetToNull, 'acces_handicapes_desc');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('acces_handicapes_desc', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['acces_handicapes_desc'] = $acces_handicapes_desc;

        return $this;
    }

    /**
     * Gets acces
     *
     * @return string|null
     */
    public function getAcces(): ?string
    {
        return $this->container['acces'];
    }

    /**
     * Sets acces
     *
     * @param string|null $acces Informations pratiques d'accès (HTML). Pour une salle interne, une valeur vide reprend celle du centre.
     *
     * @return $this
     */
    public function setAcces(?string $acces): static
    {
        if (is_null($acces)) {
            array_push($this->openAPINullablesSetToNull, 'acces');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('acces', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['acces'] = $acces;

        return $this;
    }

    /**
     * Gets accueil
     *
     * @return string|null
     */
    public function getAccueil(): ?string
    {
        return $this->container['accueil'];
    }

    /**
     * Sets accueil
     *
     * @param string|null $accueil Informations d'accueil (HTML). Pour une salle interne, une valeur vide reprend celle du centre.
     *
     * @return $this
     */
    public function setAccueil(?string $accueil): static
    {
        if (is_null($accueil)) {
            array_push($this->openAPINullablesSetToNull, 'accueil');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('accueil', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['accueil'] = $accueil;

        return $this;
    }

    /**
     * Gets champs_additionnels
     *
     * @return object|null
     */
    public function getChampsAdditionnels(): ?object
    {
        return $this->container['champs_additionnels'];
    }

    /**
     * Sets champs_additionnels
     *
     * @param object|null $champs_additionnels Champs additionnels de la salle, selon la configuration OF.
     *
     * @return $this
     */
    public function setChampsAdditionnels(?object $champs_additionnels): static
    {
        if (is_null($champs_additionnels)) {
            throw new InvalidArgumentException('non-nullable champs_additionnels cannot be null');
        }
        $this->container['champs_additionnels'] = $champs_additionnels;

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


