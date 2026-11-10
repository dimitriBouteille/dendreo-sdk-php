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
 * ParticipantsUpdateRequest Class Doc Comment
 *
 * Generated from the Dendreo OpenAPI specification, do not edit manually.
 *
 * @package  Dbout\DendreoSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ParticipantsUpdateRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ParticipantsUpdateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id_entreprise' => 'string',
        'nom' => 'string',
        'prenom' => 'string',
        'nom_naissance' => 'string',
        'statut_bpf' => 'string',
        'civilite' => 'string',
        'fonction' => 'string',
        'email' => 'string',
        'langue_principale' => 'string',
        'secondaries_languages' => 'string[]',
        'newsletter_optin' => 'bool',
        'portable' => 'string',
        'id_contact' => 'string',
        'formateur_lie_id' => 'string',
        'responsable_id' => 'float',
        'responsable_type' => 'string',
        'date_de_naissance' => 'string',
        'pays_naissance_alpha2' => 'string',
        'ville_naissance' => 'string',
        'departement_naissance' => 'string',
        'niveau_diplome' => 'string',
        'adresse' => 'string',
        'code_postal' => 'string',
        'ville' => 'string',
        'pays_alpha2' => 'string',
        'commentaires' => 'string',
        'infos_adf' => 'string',
        'num_forprev' => 'string',
        'numero_compte_client' => 'string',
        'numero_compte_client_auxiliaire' => 'string',
        'id_externe' => 'string',
        'numero_secu' => 'string',
        'message_extranet' => 'string',
        'entreprise_raison_sociale' => 'string',
        'entreprise_id_externe' => 'string',
        'entreprise_siret' => 'string',
        'date_changement_entreprise' => 'string',
        'date_changement_entreprise_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id_entreprise' => null,
        'nom' => null,
        'prenom' => null,
        'nom_naissance' => null,
        'statut_bpf' => null,
        'civilite' => null,
        'fonction' => null,
        'email' => null,
        'langue_principale' => null,
        'secondaries_languages' => null,
        'newsletter_optin' => null,
        'portable' => null,
        'id_contact' => null,
        'formateur_lie_id' => null,
        'responsable_id' => null,
        'responsable_type' => null,
        'date_de_naissance' => null,
        'pays_naissance_alpha2' => null,
        'ville_naissance' => null,
        'departement_naissance' => null,
        'niveau_diplome' => null,
        'adresse' => null,
        'code_postal' => null,
        'ville' => null,
        'pays_alpha2' => null,
        'commentaires' => null,
        'infos_adf' => null,
        'num_forprev' => null,
        'numero_compte_client' => null,
        'numero_compte_client_auxiliaire' => null,
        'id_externe' => null,
        'numero_secu' => null,
        'message_extranet' => null,
        'entreprise_raison_sociale' => null,
        'entreprise_id_externe' => null,
        'entreprise_siret' => null,
        'date_changement_entreprise' => null,
        'date_changement_entreprise_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id_entreprise' => false,
        'nom' => false,
        'prenom' => false,
        'nom_naissance' => true,
        'statut_bpf' => false,
        'civilite' => true,
        'fonction' => true,
        'email' => true,
        'langue_principale' => false,
        'secondaries_languages' => false,
        'newsletter_optin' => true,
        'portable' => true,
        'id_contact' => true,
        'formateur_lie_id' => true,
        'responsable_id' => true,
        'responsable_type' => false,
        'date_de_naissance' => true,
        'pays_naissance_alpha2' => true,
        'ville_naissance' => true,
        'departement_naissance' => true,
        'niveau_diplome' => true,
        'adresse' => true,
        'code_postal' => true,
        'ville' => true,
        'pays_alpha2' => true,
        'commentaires' => true,
        'infos_adf' => true,
        'num_forprev' => true,
        'numero_compte_client' => true,
        'numero_compte_client_auxiliaire' => true,
        'id_externe' => true,
        'numero_secu' => true,
        'message_extranet' => true,
        'entreprise_raison_sociale' => true,
        'entreprise_id_externe' => true,
        'entreprise_siret' => true,
        'date_changement_entreprise' => true,
        'date_changement_entreprise_id' => true
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
        'id_entreprise' => 'id_entreprise',
        'nom' => 'nom',
        'prenom' => 'prenom',
        'nom_naissance' => 'nom_naissance',
        'statut_bpf' => 'statut_bpf',
        'civilite' => 'civilite',
        'fonction' => 'fonction',
        'email' => 'email',
        'langue_principale' => 'langue_principale',
        'secondaries_languages' => 'secondaries_languages',
        'newsletter_optin' => 'newsletter_optin',
        'portable' => 'portable',
        'id_contact' => 'id_contact',
        'formateur_lie_id' => 'formateur_lie_id',
        'responsable_id' => 'responsable_id',
        'responsable_type' => 'responsable_type',
        'date_de_naissance' => 'date_de_naissance',
        'pays_naissance_alpha2' => 'pays_naissance_alpha2',
        'ville_naissance' => 'ville_naissance',
        'departement_naissance' => 'departement_naissance',
        'niveau_diplome' => 'niveau_diplome',
        'adresse' => 'adresse',
        'code_postal' => 'code_postal',
        'ville' => 'ville',
        'pays_alpha2' => 'pays_alpha2',
        'commentaires' => 'commentaires',
        'infos_adf' => 'infos_adf',
        'num_forprev' => 'num_forprev',
        'numero_compte_client' => 'numero_compte_client',
        'numero_compte_client_auxiliaire' => 'numero_compte_client_auxiliaire',
        'id_externe' => 'id_externe',
        'numero_secu' => 'numero_secu',
        'message_extranet' => 'message_extranet',
        'entreprise_raison_sociale' => 'entreprise_raison_sociale',
        'entreprise_id_externe' => 'entreprise_id_externe',
        'entreprise_siret' => 'entreprise_siret',
        'date_changement_entreprise' => 'date_changement_entreprise',
        'date_changement_entreprise_id' => 'date_changement_entreprise_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id_entreprise' => 'setIdEntreprise',
        'nom' => 'setNom',
        'prenom' => 'setPrenom',
        'nom_naissance' => 'setNomNaissance',
        'statut_bpf' => 'setStatutBpf',
        'civilite' => 'setCivilite',
        'fonction' => 'setFonction',
        'email' => 'setEmail',
        'langue_principale' => 'setLanguePrincipale',
        'secondaries_languages' => 'setSecondariesLanguages',
        'newsletter_optin' => 'setNewsletterOptin',
        'portable' => 'setPortable',
        'id_contact' => 'setIdContact',
        'formateur_lie_id' => 'setFormateurLieId',
        'responsable_id' => 'setResponsableId',
        'responsable_type' => 'setResponsableType',
        'date_de_naissance' => 'setDateDeNaissance',
        'pays_naissance_alpha2' => 'setPaysNaissanceAlpha2',
        'ville_naissance' => 'setVilleNaissance',
        'departement_naissance' => 'setDepartementNaissance',
        'niveau_diplome' => 'setNiveauDiplome',
        'adresse' => 'setAdresse',
        'code_postal' => 'setCodePostal',
        'ville' => 'setVille',
        'pays_alpha2' => 'setPaysAlpha2',
        'commentaires' => 'setCommentaires',
        'infos_adf' => 'setInfosAdf',
        'num_forprev' => 'setNumForprev',
        'numero_compte_client' => 'setNumeroCompteClient',
        'numero_compte_client_auxiliaire' => 'setNumeroCompteClientAuxiliaire',
        'id_externe' => 'setIdExterne',
        'numero_secu' => 'setNumeroSecu',
        'message_extranet' => 'setMessageExtranet',
        'entreprise_raison_sociale' => 'setEntrepriseRaisonSociale',
        'entreprise_id_externe' => 'setEntrepriseIdExterne',
        'entreprise_siret' => 'setEntrepriseSiret',
        'date_changement_entreprise' => 'setDateChangementEntreprise',
        'date_changement_entreprise_id' => 'setDateChangementEntrepriseId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id_entreprise' => 'getIdEntreprise',
        'nom' => 'getNom',
        'prenom' => 'getPrenom',
        'nom_naissance' => 'getNomNaissance',
        'statut_bpf' => 'getStatutBpf',
        'civilite' => 'getCivilite',
        'fonction' => 'getFonction',
        'email' => 'getEmail',
        'langue_principale' => 'getLanguePrincipale',
        'secondaries_languages' => 'getSecondariesLanguages',
        'newsletter_optin' => 'getNewsletterOptin',
        'portable' => 'getPortable',
        'id_contact' => 'getIdContact',
        'formateur_lie_id' => 'getFormateurLieId',
        'responsable_id' => 'getResponsableId',
        'responsable_type' => 'getResponsableType',
        'date_de_naissance' => 'getDateDeNaissance',
        'pays_naissance_alpha2' => 'getPaysNaissanceAlpha2',
        'ville_naissance' => 'getVilleNaissance',
        'departement_naissance' => 'getDepartementNaissance',
        'niveau_diplome' => 'getNiveauDiplome',
        'adresse' => 'getAdresse',
        'code_postal' => 'getCodePostal',
        'ville' => 'getVille',
        'pays_alpha2' => 'getPaysAlpha2',
        'commentaires' => 'getCommentaires',
        'infos_adf' => 'getInfosAdf',
        'num_forprev' => 'getNumForprev',
        'numero_compte_client' => 'getNumeroCompteClient',
        'numero_compte_client_auxiliaire' => 'getNumeroCompteClientAuxiliaire',
        'id_externe' => 'getIdExterne',
        'numero_secu' => 'getNumeroSecu',
        'message_extranet' => 'getMessageExtranet',
        'entreprise_raison_sociale' => 'getEntrepriseRaisonSociale',
        'entreprise_id_externe' => 'getEntrepriseIdExterne',
        'entreprise_siret' => 'getEntrepriseSiret',
        'date_changement_entreprise' => 'getDateChangementEntreprise',
        'date_changement_entreprise_id' => 'getDateChangementEntrepriseId'
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

    public const STATUT_BPF_SALARIE = 'salarie';
    public const STATUT_BPF_AGENT_PUBLIC = 'agent_public';
    public const STATUT_BPF_NON_SALARIE = 'non_salarie';
    public const STATUT_BPF_RECHERCHE_EMPLOI = 'recherche_emploi';
    public const STATUT_BPF_BENEVOLE = 'benevole';
    public const STATUT_BPF_APPRENTI = 'apprenti';
    public const STATUT_BPF_AUTRE = 'autre';
    public const STATUT_BPF_HORS_BPF = 'hors_bpf';
    public const CIVILITE_M = 'M.';
    public const CIVILITE_MME = 'Mme';
    public const CIVILITE_DR = 'Dr';
    public const CIVILITE_PR = 'Pr';
    public const CIVILITE_ME = 'Me';
    public const CIVILITE_NS = 'Ns';
    public const NIVEAU_DIPLOME_SANS = 'sans';
    public const NIVEAU_DIPLOME_CQP = 'cqp';
    public const NIVEAU_DIPLOME_CAP_BEP = 'cap-bep';
    public const NIVEAU_DIPLOME_BAC = 'bac';
    public const NIVEAU_DIPLOME_BAC2 = 'bac+2';
    public const NIVEAU_DIPLOME_BAC3 = 'bac+3';
    public const NIVEAU_DIPLOME_BAC5 = 'bac+5';
    public const NIVEAU_DIPLOME_BAC8 = 'bac+8';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public static function getStatutBpfAllowableValues()
    {
        return [
            self::STATUT_BPF_SALARIE,
            self::STATUT_BPF_AGENT_PUBLIC,
            self::STATUT_BPF_NON_SALARIE,
            self::STATUT_BPF_RECHERCHE_EMPLOI,
            self::STATUT_BPF_BENEVOLE,
            self::STATUT_BPF_APPRENTI,
            self::STATUT_BPF_AUTRE,
            self::STATUT_BPF_HORS_BPF,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public static function getCiviliteAllowableValues()
    {
        return [
            self::CIVILITE_M,
            self::CIVILITE_MME,
            self::CIVILITE_DR,
            self::CIVILITE_PR,
            self::CIVILITE_ME,
            self::CIVILITE_NS,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public static function getNiveauDiplomeAllowableValues()
    {
        return [
            self::NIVEAU_DIPLOME_SANS,
            self::NIVEAU_DIPLOME_CQP,
            self::NIVEAU_DIPLOME_CAP_BEP,
            self::NIVEAU_DIPLOME_BAC,
            self::NIVEAU_DIPLOME_BAC2,
            self::NIVEAU_DIPLOME_BAC3,
            self::NIVEAU_DIPLOME_BAC5,
            self::NIVEAU_DIPLOME_BAC8,
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
        $this->setIfExists('id_entreprise', $data ?? [], null);
        $this->setIfExists('nom', $data ?? [], null);
        $this->setIfExists('prenom', $data ?? [], null);
        $this->setIfExists('nom_naissance', $data ?? [], null);
        $this->setIfExists('statut_bpf', $data ?? [], null);
        $this->setIfExists('civilite', $data ?? [], null);
        $this->setIfExists('fonction', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('langue_principale', $data ?? [], null);
        $this->setIfExists('secondaries_languages', $data ?? [], null);
        $this->setIfExists('newsletter_optin', $data ?? [], null);
        $this->setIfExists('portable', $data ?? [], null);
        $this->setIfExists('id_contact', $data ?? [], null);
        $this->setIfExists('formateur_lie_id', $data ?? [], null);
        $this->setIfExists('responsable_id', $data ?? [], null);
        $this->setIfExists('responsable_type', $data ?? [], null);
        $this->setIfExists('date_de_naissance', $data ?? [], null);
        $this->setIfExists('pays_naissance_alpha2', $data ?? [], null);
        $this->setIfExists('ville_naissance', $data ?? [], null);
        $this->setIfExists('departement_naissance', $data ?? [], null);
        $this->setIfExists('niveau_diplome', $data ?? [], null);
        $this->setIfExists('adresse', $data ?? [], null);
        $this->setIfExists('code_postal', $data ?? [], null);
        $this->setIfExists('ville', $data ?? [], null);
        $this->setIfExists('pays_alpha2', $data ?? [], null);
        $this->setIfExists('commentaires', $data ?? [], null);
        $this->setIfExists('infos_adf', $data ?? [], null);
        $this->setIfExists('num_forprev', $data ?? [], null);
        $this->setIfExists('numero_compte_client', $data ?? [], null);
        $this->setIfExists('numero_compte_client_auxiliaire', $data ?? [], null);
        $this->setIfExists('id_externe', $data ?? [], null);
        $this->setIfExists('numero_secu', $data ?? [], null);
        $this->setIfExists('message_extranet', $data ?? [], null);
        $this->setIfExists('entreprise_raison_sociale', $data ?? [], null);
        $this->setIfExists('entreprise_id_externe', $data ?? [], null);
        $this->setIfExists('entreprise_siret', $data ?? [], null);
        $this->setIfExists('date_changement_entreprise', $data ?? [], null);
        $this->setIfExists('date_changement_entreprise_id', $data ?? [], null);
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

        $allowedValues = self::getStatutBpfAllowableValues();
        if (!is_null($this->container['statut_bpf']) && !in_array($this->container['statut_bpf'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'statut_bpf', must be one of '%s'",
                $this->container['statut_bpf'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = self::getCiviliteAllowableValues();
        if (!is_null($this->container['civilite']) && !in_array($this->container['civilite'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'civilite', must be one of '%s'",
                $this->container['civilite'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = self::getNiveauDiplomeAllowableValues();
        if (!is_null($this->container['niveau_diplome']) && !in_array($this->container['niveau_diplome'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'niveau_diplome', must be one of '%s'",
                $this->container['niveau_diplome'],
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
     * Gets id_entreprise
     *
     * @return string|null
     */
    public function getIdEntreprise(): ?string
    {
        return $this->container['id_entreprise'];
    }

    /**
     * Sets id_entreprise
     *
     * @param string|null $id_entreprise L'identifiant de l'entreprise du participant. Non obligatoire si `entreprise_raison_sociale`, `entreprise_id_externe` ou `entreprise_siret` est fourni.
     *
     * @return $this
     */
    public function setIdEntreprise(?string $id_entreprise): static
    {
        if (is_null($id_entreprise)) {
            throw new InvalidArgumentException('non-nullable id_entreprise cannot be null');
        }
        $this->container['id_entreprise'] = $id_entreprise;

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
     * @param string|null $nom Le nom du participant. Max : 200 caractères.
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
     * @param string|null $prenom Le prénom du participant. Max : 200 caractères.
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
     * @param string|null $nom_naissance Le nom de naissance du participant. Max : 200 caractères.
     *
     * @return $this
     */
    public function setNomNaissance(?string $nom_naissance): static
    {
        if (is_null($nom_naissance)) {
            array_push($this->openAPINullablesSetToNull, 'nom_naissance');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nom_naissance', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nom_naissance'] = $nom_naissance;

        return $this;
    }

    /**
     * Gets statut_bpf
     *
     * @return string|null
     */
    public function getStatutBpf(): ?string
    {
        return $this->container['statut_bpf'];
    }

    /**
     * Sets statut_bpf
     *
     * @param string|null $statut_bpf Le statut BPF du participant.
     *
     * @return $this
     */
    public function setStatutBpf(?string $statut_bpf): static
    {
        if (is_null($statut_bpf)) {
            throw new InvalidArgumentException('non-nullable statut_bpf cannot be null');
        }
        $allowedValues = self::getStatutBpfAllowableValues();
        if (!in_array($statut_bpf, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'statut_bpf', must be one of '%s'",
                    $statut_bpf,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['statut_bpf'] = $statut_bpf;

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
     * @param string|null $civilite La civilité du participant.
     *
     * @return $this
     */
    public function setCivilite(?string $civilite): static
    {
        if (is_null($civilite)) {
            array_push($this->openAPINullablesSetToNull, 'civilite');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('civilite', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = self::getCiviliteAllowableValues();
        if (!is_null($civilite) && !in_array($civilite, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'civilite', must be one of '%s'",
                    $civilite,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['civilite'] = $civilite;

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
     * @param string|null $fonction La fonction du participant. Max : 200 caractères.
     *
     * @return $this
     */
    public function setFonction(?string $fonction): static
    {
        if (is_null($fonction)) {
            array_push($this->openAPINullablesSetToNull, 'fonction');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fonction', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param string|null $email L'adresse email du participant. Doit être une adresse e-mail valide.
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
     * Gets langue_principale
     *
     * @return string|null
     */
    public function getLanguePrincipale(): ?string
    {
        return $this->container['langue_principale'];
    }

    /**
     * Sets langue_principale
     *
     * @param string|null $langue_principale La langue principale du participant. Code ISO 639-1. fsl pour language des signes
     *
     * @return $this
     */
    public function setLanguePrincipale(?string $langue_principale): static
    {
        if (is_null($langue_principale)) {
            throw new InvalidArgumentException('non-nullable langue_principale cannot be null');
        }
        $this->container['langue_principale'] = $langue_principale;

        return $this;
    }

    /**
     * Gets secondaries_languages
     *
     * @return string[]|null
     */
    public function getSecondariesLanguages(): ?array
    {
        return $this->container['secondaries_languages'];
    }

    /**
     * Sets secondaries_languages
     *
     * @param string[]|null $secondaries_languages Les langues secondaires du participant. Code ISO 639-1. fsl pour language des signes
     *
     * @return $this
     */
    public function setSecondariesLanguages(?array $secondaries_languages): static
    {
        if (is_null($secondaries_languages)) {
            throw new InvalidArgumentException('non-nullable secondaries_languages cannot be null');
        }
        $this->container['secondaries_languages'] = $secondaries_languages;

        return $this;
    }

    /**
     * Gets newsletter_optin
     *
     * @return bool|null
     */
    public function getNewsletterOptin(): ?bool
    {
        return $this->container['newsletter_optin'];
    }

    /**
     * Sets newsletter_optin
     *
     * @param bool|null $newsletter_optin Consentement à la newsletter (0/1).
     *
     * @return $this
     */
    public function setNewsletterOptin(?bool $newsletter_optin): static
    {
        if (is_null($newsletter_optin)) {
            array_push($this->openAPINullablesSetToNull, 'newsletter_optin');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('newsletter_optin', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['newsletter_optin'] = $newsletter_optin;

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
     * @param string|null $portable Le numéro de téléphone portable du participant.
     *
     * @return $this
     */
    public function setPortable(?string $portable): static
    {
        if (is_null($portable)) {
            array_push($this->openAPINullablesSetToNull, 'portable');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('portable', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['portable'] = $portable;

        return $this;
    }

    /**
     * Gets id_contact
     *
     * @return string|null
     */
    public function getIdContact(): ?string
    {
        return $this->container['id_contact'];
    }

    /**
     * Sets id_contact
     *
     * @param string|null $id_contact Identifiant du contact associé au participant. Doit correspondre à un contact existant.
     *
     * @return $this
     */
    public function setIdContact(?string $id_contact): static
    {
        if (is_null($id_contact)) {
            array_push($this->openAPINullablesSetToNull, 'id_contact');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_contact', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id_contact'] = $id_contact;

        return $this;
    }

    /**
     * Gets formateur_lie_id
     *
     * @return string|null
     */
    public function getFormateurLieId(): ?string
    {
        return $this->container['formateur_lie_id'];
    }

    /**
     * Sets formateur_lie_id
     *
     * @param string|null $formateur_lie_id Identifiant du formateur lié au participant. Doit correspondre à un formateur existant.
     *
     * @return $this
     */
    public function setFormateurLieId(?string $formateur_lie_id): static
    {
        if (is_null($formateur_lie_id)) {
            array_push($this->openAPINullablesSetToNull, 'formateur_lie_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('formateur_lie_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['formateur_lie_id'] = $formateur_lie_id;

        return $this;
    }

    /**
     * Gets responsable_id
     *
     * @return float|null
     */
    public function getResponsableId(): ?float
    {
        return $this->container['responsable_id'];
    }

    /**
     * Sets responsable_id
     *
     * @param float|null $responsable_id Identifiant du responsable. Obligatoire si `responsable_type` est fourni. Ce champ est requis lorsque <code>responsable_type</code> est présent.
     *
     * @return $this
     */
    public function setResponsableId(?float $responsable_id): static
    {
        if (is_null($responsable_id)) {
            array_push($this->openAPINullablesSetToNull, 'responsable_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('responsable_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['responsable_id'] = $responsable_id;

        return $this;
    }

    /**
     * Gets responsable_type
     *
     * @return string|null
     */
    public function getResponsableType(): ?string
    {
        return $this->container['responsable_type'];
    }

    /**
     * Sets responsable_type
     *
     * @param string|null $responsable_type Type du responsable. Obligatoire si `responsable_id` est fourni. Doit correspondre à une des valeurs suivantes : `contact`, `participant`.
     *
     * @return $this
     */
    public function setResponsableType(?string $responsable_type): static
    {
        if (is_null($responsable_type)) {
            throw new InvalidArgumentException('non-nullable responsable_type cannot be null');
        }
        $this->container['responsable_type'] = $responsable_type;

        return $this;
    }

    /**
     * Gets date_de_naissance
     *
     * @return string|null
     */
    public function getDateDeNaissance(): ?string
    {
        return $this->container['date_de_naissance'];
    }

    /**
     * Sets date_de_naissance
     *
     * @param string|null $date_de_naissance Date de naissance du participant (format YYYY-MM-DD). Doit être une date valide au format <code>YYYY-MM-DD</code>.
     *
     * @return $this
     */
    public function setDateDeNaissance(?string $date_de_naissance): static
    {
        if (is_null($date_de_naissance)) {
            array_push($this->openAPINullablesSetToNull, 'date_de_naissance');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date_de_naissance', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['date_de_naissance'] = $date_de_naissance;

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
     * @param string|null $pays_naissance_alpha2 Pays de naissance (code ISO alpha-2). Doit correspondre à un pays existant.
     *
     * @return $this
     */
    public function setPaysNaissanceAlpha2(?string $pays_naissance_alpha2): static
    {
        if (is_null($pays_naissance_alpha2)) {
            array_push($this->openAPINullablesSetToNull, 'pays_naissance_alpha2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pays_naissance_alpha2', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pays_naissance_alpha2'] = $pays_naissance_alpha2;

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
     * @param string|null $ville_naissance Ville de naissance du participant. Max : 200 caractères.
     *
     * @return $this
     */
    public function setVilleNaissance(?string $ville_naissance): static
    {
        if (is_null($ville_naissance)) {
            array_push($this->openAPINullablesSetToNull, 'ville_naissance');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ville_naissance', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param string|null $departement_naissance Département de naissance du participant. Max : 100 caractères.
     *
     * @return $this
     */
    public function setDepartementNaissance(?string $departement_naissance): static
    {
        if (is_null($departement_naissance)) {
            array_push($this->openAPINullablesSetToNull, 'departement_naissance');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('departement_naissance', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['departement_naissance'] = $departement_naissance;

        return $this;
    }

    /**
     * Gets niveau_diplome
     *
     * @return string|null
     */
    public function getNiveauDiplome(): ?string
    {
        return $this->container['niveau_diplome'];
    }

    /**
     * Sets niveau_diplome
     *
     * @param string|null $niveau_diplome Niveau de diplôme du participant.
     *
     * @return $this
     */
    public function setNiveauDiplome(?string $niveau_diplome): static
    {
        if (is_null($niveau_diplome)) {
            array_push($this->openAPINullablesSetToNull, 'niveau_diplome');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('niveau_diplome', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = self::getNiveauDiplomeAllowableValues();
        if (!is_null($niveau_diplome) && !in_array($niveau_diplome, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'niveau_diplome', must be one of '%s'",
                    $niveau_diplome,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['niveau_diplome'] = $niveau_diplome;

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
     * @param string|null $adresse Adresse postale du participant. Max : 200 caractères.
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
     * @param string|null $code_postal Code postal du participant. Max : 191 caractères.
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
     * @param string|null $ville Ville du participant. Max : 191 caractères.
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
     * @param string|null $pays_alpha2 Pays (code ISO alpha-2).
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
     * @param string|null $commentaires Commentaires internes sur le participant. Max : 10000 caractères.
     *
     * @return $this
     */
    public function setCommentaires(?string $commentaires): static
    {
        if (is_null($commentaires)) {
            array_push($this->openAPINullablesSetToNull, 'commentaires');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('commentaires', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param string|null $infos_adf Informations ADF associées au participant. Max : 1000 caractères.
     *
     * @return $this
     */
    public function setInfosAdf(?string $infos_adf): static
    {
        if (is_null($infos_adf)) {
            array_push($this->openAPINullablesSetToNull, 'infos_adf');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('infos_adf', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['infos_adf'] = $infos_adf;

        return $this;
    }

    /**
     * Gets num_forprev
     *
     * @return string|null
     */
    public function getNumForprev(): ?string
    {
        return $this->container['num_forprev'];
    }

    /**
     * Sets num_forprev
     *
     * @param string|null $num_forprev Numéro Forprev du participant. Max : 200 caractères.
     *
     * @return $this
     */
    public function setNumForprev(?string $num_forprev): static
    {
        if (is_null($num_forprev)) {
            array_push($this->openAPINullablesSetToNull, 'num_forprev');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('num_forprev', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['num_forprev'] = $num_forprev;

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
     * @param string|null $numero_compte_client Numéro de compte client (comptabilité). Max : 100 caractères.
     *
     * @return $this
     */
    public function setNumeroCompteClient(?string $numero_compte_client): static
    {
        if (is_null($numero_compte_client)) {
            array_push($this->openAPINullablesSetToNull, 'numero_compte_client');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('numero_compte_client', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param string|null $numero_compte_client_auxiliaire Numéro de compte client auxiliaire (comptabilité). Max : 100 caractères.
     *
     * @return $this
     */
    public function setNumeroCompteClientAuxiliaire(?string $numero_compte_client_auxiliaire): static
    {
        if (is_null($numero_compte_client_auxiliaire)) {
            array_push($this->openAPINullablesSetToNull, 'numero_compte_client_auxiliaire');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('numero_compte_client_auxiliaire', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['numero_compte_client_auxiliaire'] = $numero_compte_client_auxiliaire;

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
     * @param string|null $id_externe Identifiant externe du participant. Max : 36 caractères.
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
     * Gets numero_secu
     *
     * @return string|null
     */
    public function getNumeroSecu(): ?string
    {
        return $this->container['numero_secu'];
    }

    /**
     * Sets numero_secu
     *
     * @param string|null $numero_secu Numéro de sécurité sociale du participant. Validé au format français (13 ou 15 chiffres, clé contrôlée) si le pays de résidence et de naissance sont en France ou DOM ; longueur libre (≤ 30 caractères) sinon.
     *
     * @return $this
     */
    public function setNumeroSecu(?string $numero_secu): static
    {
        if (is_null($numero_secu)) {
            array_push($this->openAPINullablesSetToNull, 'numero_secu');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('numero_secu', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['numero_secu'] = $numero_secu;

        return $this;
    }

    /**
     * Gets message_extranet
     *
     * @return string|null
     */
    public function getMessageExtranet(): ?string
    {
        return $this->container['message_extranet'];
    }

    /**
     * Sets message_extranet
     *
     * @param string|null $message_extranet Message de l'extranet associé au participant. Max : 10000 caractères.
     *
     * @return $this
     */
    public function setMessageExtranet(?string $message_extranet): static
    {
        if (is_null($message_extranet)) {
            array_push($this->openAPINullablesSetToNull, 'message_extranet');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('message_extranet', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['message_extranet'] = $message_extranet;

        return $this;
    }

    /**
     * Gets entreprise_raison_sociale
     *
     * @return string|null
     */
    public function getEntrepriseRaisonSociale(): ?string
    {
        return $this->container['entreprise_raison_sociale'];
    }

    /**
     * Sets entreprise_raison_sociale
     *
     * @param string|null $entreprise_raison_sociale La raison sociale de l'entreprise (permet de résoudre `id_entreprise` si `id_entreprise` n'est pas fourni). Max : 191 caractères.
     *
     * @return $this
     */
    public function setEntrepriseRaisonSociale(?string $entreprise_raison_sociale): static
    {
        if (is_null($entreprise_raison_sociale)) {
            array_push($this->openAPINullablesSetToNull, 'entreprise_raison_sociale');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('entreprise_raison_sociale', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['entreprise_raison_sociale'] = $entreprise_raison_sociale;

        return $this;
    }

    /**
     * Gets entreprise_id_externe
     *
     * @return string|null
     */
    public function getEntrepriseIdExterne(): ?string
    {
        return $this->container['entreprise_id_externe'];
    }

    /**
     * Sets entreprise_id_externe
     *
     * @param string|null $entreprise_id_externe L'identifiant externe de l'entreprise (permet de résoudre `id_entreprise` si `id_entreprise` et `entreprise_raison_sociale` ne sont pas fournis). Max : 36 caractères.
     *
     * @return $this
     */
    public function setEntrepriseIdExterne(?string $entreprise_id_externe): static
    {
        if (is_null($entreprise_id_externe)) {
            array_push($this->openAPINullablesSetToNull, 'entreprise_id_externe');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('entreprise_id_externe', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['entreprise_id_externe'] = $entreprise_id_externe;

        return $this;
    }

    /**
     * Gets entreprise_siret
     *
     * @return string|null
     */
    public function getEntrepriseSiret(): ?string
    {
        return $this->container['entreprise_siret'];
    }

    /**
     * Sets entreprise_siret
     *
     * @param string|null $entreprise_siret Le SIRET de l'entreprise (permet de résoudre `id_entreprise` via une recherche sur `legal_identifier` — Numéro d'identification entreprise). Max : 30 caractères.
     *
     * @return $this
     */
    public function setEntrepriseSiret(?string $entreprise_siret): static
    {
        if (is_null($entreprise_siret)) {
            array_push($this->openAPINullablesSetToNull, 'entreprise_siret');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('entreprise_siret', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['entreprise_siret'] = $entreprise_siret;

        return $this;
    }

    /**
     * Gets date_changement_entreprise
     *
     * @return string|null
     */
    public function getDateChangementEntreprise(): ?string
    {
        return $this->container['date_changement_entreprise'];
    }

    /**
     * Sets date_changement_entreprise
     *
     * @param string|null $date_changement_entreprise Date de changement d'Entreprise (format YYYY-MM-DD). Ce champ est requis lorsque <code>date_changement_entreprise_id</code> est présent. Doit être une date valide au format <code>YYYY-MM-DD</code>.
     *
     * @return $this
     */
    public function setDateChangementEntreprise(?string $date_changement_entreprise): static
    {
        if (is_null($date_changement_entreprise)) {
            array_push($this->openAPINullablesSetToNull, 'date_changement_entreprise');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date_changement_entreprise', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['date_changement_entreprise'] = $date_changement_entreprise;

        return $this;
    }

    /**
     * Gets date_changement_entreprise_id
     *
     * @return int|null
     */
    public function getDateChangementEntrepriseId(): ?int
    {
        return $this->container['date_changement_entreprise_id'];
    }

    /**
     * Sets date_changement_entreprise_id
     *
     * @param int|null $date_changement_entreprise_id Id de l'Entreprise concerné par la date de changement d'Entreprise. Ce champ est requis lorsque <code>date_changement_entreprise</code> est présent.
     *
     * @return $this
     */
    public function setDateChangementEntrepriseId(?int $date_changement_entreprise_id): static
    {
        if (is_null($date_changement_entreprise_id)) {
            array_push($this->openAPINullablesSetToNull, 'date_changement_entreprise_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date_changement_entreprise_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['date_changement_entreprise_id'] = $date_changement_entreprise_id;

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


