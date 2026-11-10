<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Api;

use InvalidArgumentException;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Dbout\DendreoSdk\ApiException;
use Dbout\DendreoSdk\Client as DendreoClient;
use Dbout\DendreoSdk\Configuration;
use Dbout\DendreoSdk\HeaderSelector;
use Dbout\DendreoSdk\FormDataProcessor;
use Dbout\DendreoSdk\ObjectSerializer;

/**
 * ParticipantsApi Class Doc Comment
 *
 * Generated from the Dendreo OpenAPI specification, do not edit manually.
 *
 * @package  Dbout\DendreoSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ParticipantsApi
{
    /**
     * @var ClientInterface
     */
    protected ClientInterface $client;

    /**
     * @var Configuration
     */
    protected Configuration $config;

    /**
     * @var HeaderSelector
     */
    protected HeaderSelector $headerSelector;

    /**
     * @var int Host index
     */
    protected int $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'destroy' => [
            'application/json',
        ],
        'index' => [
            'application/json',
        ],
        'restore' => [
            'application/json',
        ],
        'show' => [
            'application/json',
        ],
        'store' => [
            'application/json',
        ],
        'taches' => [
            'application/json',
        ],
        'update' => [
            'application/json',
        ],
    ];

    /**
     * @param DendreoClient $client
     */
    public function __construct(DendreoClient $client)
    {
        $this->client = $client->getHttpClient();
        $this->config = $client->getConfiguration();
        $this->headerSelector = new HeaderSelector();
        $this->hostIndex = 0;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex(int $hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex(): int
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig(): Configuration
    {
        return $this->config;
    }

    /**
     * Operation destroy
     *
     * Supprimer un participant
     *
     * @param  int $id  (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['destroy'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return void
     */
    public function destroy(
        int $id,
        string $contentType = self::contentTypes['destroy'][0]
    ): void
    {
        $this->destroyWithHttpInfo($id, $contentType);
    }

    /**
     * Operation destroyWithHttpInfo
     *
     * Supprimer un participant
     *
     * @param  int $id  (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['destroy'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function destroyWithHttpInfo(
        int $id,
        string $contentType = self::contentTypes['destroy'][0]
    ): array
    {
        $request = $this->destroyRequest($id, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw \Dbout\DendreoSdk\Exception\ExceptionFactory::create(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw \Dbout\DendreoSdk\Exception\ExceptionFactory::create(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Dbout\DendreoSdk\Model\AuthenticationError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Dbout\DendreoSdk\Model\ApiKeyError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Dbout\DendreoSdk\Model\ErrorMessage',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        
            throw $e;
        }
    }

    /**
     * Operation destroyAsync
     *
     * Supprimer un participant
     *
     * @param  int $id  (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['destroy'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function destroyAsync(
        int $id,
        string $contentType = self::contentTypes['destroy'][0]
    ): PromiseInterface
    {
        return $this->destroyAsyncWithHttpInfo($id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation destroyAsyncWithHttpInfo
     *
     * Supprimer un participant
     *
     * @param  int $id  (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['destroy'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function destroyAsyncWithHttpInfo(
        int $id,
        string $contentType = self::contentTypes['destroy'][0]
    ): PromiseInterface
    {
        $returnType = '';
        $request = $this->destroyRequest($id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw \Dbout\DendreoSdk\Exception\ExceptionFactory::create(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'destroy'
     *
     * @param  int $id  (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['destroy'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function destroyRequest(
        int $id,
        string $contentType = self::contentTypes['destroy'][0]
    ): Request
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $id when calling destroy'
            );
        }


        $resourcePath = '/v2/participants/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('of');
        if ($apiKey !== null) {
            $headers['of'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'DELETE',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation index
     *
     * Lister les participants
     *
     * @param  \Dbout\DendreoSdk\Model\ParticipantFilter|null $filter Filtres de la liste. (optional)
     * @param  string[]|null $include Relations à inclure dans la réponse, séparées par des virgules. &#x60;media&#x60; ajoute &#x60;photo_url&#x60;. (optional)
     * @param  string[]|null $sort Champs de tri, séparés par des virgules. Préfixer un champ par &#x60;-&#x60; pour un ordre décroissant. Sans &#x60;sort&#x60;, tri par nom si le compte affiche les noms au format « Nom Prénom », par prénom sinon. (optional)
     * @param  int|null $page Numéro de la page, à partir de 1. (optional, default to 1)
     * @param  int|null $per_page Nombre d&#39;éléments par page, 15 par défaut et 100 au plus : une valeur supérieure est ramenée à 100. (optional, default to 15)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['index'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Dbout\DendreoSdk\Model\ParticipantCollection
     */
    public function index(
        ?\Dbout\DendreoSdk\Model\ParticipantFilter $filter = null,
        ?array $include = null,
        ?array $sort = null,
        ?int $page = 1,
        ?int $per_page = 15,
        string $contentType = self::contentTypes['index'][0]
    ): \Dbout\DendreoSdk\Model\ParticipantCollection
    {
        list($response) = $this->indexWithHttpInfo($filter, $include, $sort, $page, $per_page, $contentType);
        return $response;
    }

    /**
     * Operation indexWithHttpInfo
     *
     * Lister les participants
     *
     * @param  \Dbout\DendreoSdk\Model\ParticipantFilter|null $filter Filtres de la liste. (optional)
     * @param  string[]|null $include Relations à inclure dans la réponse, séparées par des virgules. &#x60;media&#x60; ajoute &#x60;photo_url&#x60;. (optional)
     * @param  string[]|null $sort Champs de tri, séparés par des virgules. Préfixer un champ par &#x60;-&#x60; pour un ordre décroissant. Sans &#x60;sort&#x60;, tri par nom si le compte affiche les noms au format « Nom Prénom », par prénom sinon. (optional)
     * @param  int|null $page Numéro de la page, à partir de 1. (optional, default to 1)
     * @param  int|null $per_page Nombre d&#39;éléments par page, 15 par défaut et 100 au plus : une valeur supérieure est ramenée à 100. (optional, default to 15)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['index'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Dbout\DendreoSdk\Model\ParticipantCollection, HTTP status code, HTTP response headers (array of strings)
     */
    public function indexWithHttpInfo(
        ?\Dbout\DendreoSdk\Model\ParticipantFilter $filter = null,
        ?array $include = null,
        ?array $sort = null,
        ?int $page = 1,
        ?int $per_page = 15,
        string $contentType = self::contentTypes['index'][0]
    ): array
    {
        $request = $this->indexRequest($filter, $include, $sort, $page, $per_page, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw \Dbout\DendreoSdk\Exception\ExceptionFactory::create(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw \Dbout\DendreoSdk\Exception\ExceptionFactory::create(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\Dbout\DendreoSdk\Model\ParticipantCollection',
                        $request,
                        $response,
                    );
                case 400:
                    return $this->handleResponseWithDataType(
                        '\Dbout\DendreoSdk\Model\ErrorMessage',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\Dbout\DendreoSdk\Model\AuthenticationError',
                        $request,
                        $response,
                    );
                case 403:
                    return $this->handleResponseWithDataType(
                        '\Dbout\DendreoSdk\Model\ApiKeyError',
                        $request,
                        $response,
                    );
            }
            

            if ($statusCode < 200 || $statusCode > 299) {
                throw \Dbout\DendreoSdk\Exception\ExceptionFactory::create(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\Dbout\DendreoSdk\Model\ParticipantCollection',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Dbout\DendreoSdk\Model\ParticipantCollection',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Dbout\DendreoSdk\Model\ErrorMessage',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Dbout\DendreoSdk\Model\AuthenticationError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Dbout\DendreoSdk\Model\ApiKeyError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        
            throw $e;
        }
    }

    /**
     * Operation indexAsync
     *
     * Lister les participants
     *
     * @param  \Dbout\DendreoSdk\Model\ParticipantFilter|null $filter Filtres de la liste. (optional)
     * @param  string[]|null $include Relations à inclure dans la réponse, séparées par des virgules. &#x60;media&#x60; ajoute &#x60;photo_url&#x60;. (optional)
     * @param  string[]|null $sort Champs de tri, séparés par des virgules. Préfixer un champ par &#x60;-&#x60; pour un ordre décroissant. Sans &#x60;sort&#x60;, tri par nom si le compte affiche les noms au format « Nom Prénom », par prénom sinon. (optional)
     * @param  int|null $page Numéro de la page, à partir de 1. (optional, default to 1)
     * @param  int|null $per_page Nombre d&#39;éléments par page, 15 par défaut et 100 au plus : une valeur supérieure est ramenée à 100. (optional, default to 15)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['index'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function indexAsync(
        ?\Dbout\DendreoSdk\Model\ParticipantFilter $filter = null,
        ?array $include = null,
        ?array $sort = null,
        ?int $page = 1,
        ?int $per_page = 15,
        string $contentType = self::contentTypes['index'][0]
    ): PromiseInterface
    {
        return $this->indexAsyncWithHttpInfo($filter, $include, $sort, $page, $per_page, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation indexAsyncWithHttpInfo
     *
     * Lister les participants
     *
     * @param  \Dbout\DendreoSdk\Model\ParticipantFilter|null $filter Filtres de la liste. (optional)
     * @param  string[]|null $include Relations à inclure dans la réponse, séparées par des virgules. &#x60;media&#x60; ajoute &#x60;photo_url&#x60;. (optional)
     * @param  string[]|null $sort Champs de tri, séparés par des virgules. Préfixer un champ par &#x60;-&#x60; pour un ordre décroissant. Sans &#x60;sort&#x60;, tri par nom si le compte affiche les noms au format « Nom Prénom », par prénom sinon. (optional)
     * @param  int|null $page Numéro de la page, à partir de 1. (optional, default to 1)
     * @param  int|null $per_page Nombre d&#39;éléments par page, 15 par défaut et 100 au plus : une valeur supérieure est ramenée à 100. (optional, default to 15)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['index'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function indexAsyncWithHttpInfo(
        ?\Dbout\DendreoSdk\Model\ParticipantFilter $filter = null,
        ?array $include = null,
        ?array $sort = null,
        ?int $page = 1,
        ?int $per_page = 15,
        string $contentType = self::contentTypes['index'][0]
    ): PromiseInterface
    {
        $returnType = '\Dbout\DendreoSdk\Model\ParticipantCollection';
        $request = $this->indexRequest($filter, $include, $sort, $page, $per_page, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if (in_array($returnType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw \Dbout\DendreoSdk\Exception\ExceptionFactory::create(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'index'
     *
     * @param  \Dbout\DendreoSdk\Model\ParticipantFilter|null $filter Filtres de la liste. (optional)
     * @param  string[]|null $include Relations à inclure dans la réponse, séparées par des virgules. &#x60;media&#x60; ajoute &#x60;photo_url&#x60;. (optional)
     * @param  string[]|null $sort Champs de tri, séparés par des virgules. Préfixer un champ par &#x60;-&#x60; pour un ordre décroissant. Sans &#x60;sort&#x60;, tri par nom si le compte affiche les noms au format « Nom Prénom », par prénom sinon. (optional)
     * @param  int|null $page Numéro de la page, à partir de 1. (optional, default to 1)
     * @param  int|null $per_page Nombre d&#39;éléments par page, 15 par défaut et 100 au plus : une valeur supérieure est ramenée à 100. (optional, default to 15)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['index'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function indexRequest(
        ?\Dbout\DendreoSdk\Model\ParticipantFilter $filter = null,
        ?array $include = null,
        ?array $sort = null,
        ?int $page = 1,
        ?int $per_page = 15,
        string $contentType = self::contentTypes['index'][0]
    ): Request
    {




        if ($page !== null && $page < 1) {
            throw new InvalidArgumentException('invalid value for "$page" when calling ParticipantsApi.index, must be bigger than or equal to 1.');
        }
        
        if ($per_page !== null && $per_page > 100) {
            throw new InvalidArgumentException('invalid value for "$per_page" when calling ParticipantsApi.index, must be smaller than or equal to 100.');
        }
        if ($per_page !== null && $per_page < 1) {
            throw new InvalidArgumentException('invalid value for "$per_page" when calling ParticipantsApi.index, must be bigger than or equal to 1.');
        }
        

        $resourcePath = '/v2/participants';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $filter,
            'filter', // param base name
            'object', // openApiType
            'deepObject', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $include,
            'include', // param base name
            'array', // openApiType
            'form', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sort,
            'sort', // param base name
            'array', // openApiType
            'form', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page,
            'page', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $per_page,
            'per_page', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('of');
        if ($apiKey !== null) {
            $headers['of'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation restore
     *
     * Restaurer un participant
     *
     * @param  int $id  (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['restore'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Dbout\DendreoSdk\Model\ParticipantResponse
     */
    public function restore(
        int $id,
        string $contentType = self::contentTypes['restore'][0]
    ): \Dbout\DendreoSdk\Model\ParticipantResponse
    {
        list($response) = $this->restoreWithHttpInfo($id, $contentType);
        return $response;
    }

    /**
     * Operation restoreWithHttpInfo
     *
     * Restaurer un participant
     *
     * @param  int $id  (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['restore'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Dbout\DendreoSdk\Model\ParticipantResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function restoreWithHttpInfo(
        int $id,
        string $contentType = self::contentTypes['restore'][0]
    ): array
    {
        $request = $this->restoreRequest($id, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw \Dbout\DendreoSdk\Exception\ExceptionFactory::create(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw \Dbout\DendreoSdk\Exception\ExceptionFactory::create(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\Dbout\DendreoSdk\Model\ParticipantResponse',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\Dbout\DendreoSdk\Model\AuthenticationError',
                        $request,
                        $response,
                    );
                case 403:
                    return $this->handleResponseWithDataType(
                        '\Dbout\DendreoSdk\Model\ApiKeyError',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\Dbout\DendreoSdk\Model\ErrorMessage',
                        $request,
                        $response,
                    );
            }
            

            if ($statusCode < 200 || $statusCode > 299) {
                throw \Dbout\DendreoSdk\Exception\ExceptionFactory::create(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\Dbout\DendreoSdk\Model\ParticipantResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Dbout\DendreoSdk\Model\ParticipantResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Dbout\DendreoSdk\Model\AuthenticationError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Dbout\DendreoSdk\Model\ApiKeyError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Dbout\DendreoSdk\Model\ErrorMessage',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        
            throw $e;
        }
    }

    /**
     * Operation restoreAsync
     *
     * Restaurer un participant
     *
     * @param  int $id  (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['restore'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function restoreAsync(
        int $id,
        string $contentType = self::contentTypes['restore'][0]
    ): PromiseInterface
    {
        return $this->restoreAsyncWithHttpInfo($id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation restoreAsyncWithHttpInfo
     *
     * Restaurer un participant
     *
     * @param  int $id  (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['restore'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function restoreAsyncWithHttpInfo(
        int $id,
        string $contentType = self::contentTypes['restore'][0]
    ): PromiseInterface
    {
        $returnType = '\Dbout\DendreoSdk\Model\ParticipantResponse';
        $request = $this->restoreRequest($id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if (in_array($returnType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw \Dbout\DendreoSdk\Exception\ExceptionFactory::create(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'restore'
     *
     * @param  int $id  (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['restore'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function restoreRequest(
        int $id,
        string $contentType = self::contentTypes['restore'][0]
    ): Request
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $id when calling restore'
            );
        }


        $resourcePath = '/v2/participants/{id}/restore';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('of');
        if ($apiKey !== null) {
            $headers['of'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation show
     *
     * Récupérer un participant
     *
     * @param  int $id  (required)
     * @param  string[]|null $include Relations à inclure dans la réponse, séparées par des virgules. &#x60;media&#x60; ajoute &#x60;photo_url&#x60;. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['show'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Dbout\DendreoSdk\Model\ParticipantResponse
     */
    public function show(
        int $id,
        ?array $include = null,
        string $contentType = self::contentTypes['show'][0]
    ): \Dbout\DendreoSdk\Model\ParticipantResponse
    {
        list($response) = $this->showWithHttpInfo($id, $include, $contentType);
        return $response;
    }

    /**
     * Operation showWithHttpInfo
     *
     * Récupérer un participant
     *
     * @param  int $id  (required)
     * @param  string[]|null $include Relations à inclure dans la réponse, séparées par des virgules. &#x60;media&#x60; ajoute &#x60;photo_url&#x60;. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['show'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Dbout\DendreoSdk\Model\ParticipantResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function showWithHttpInfo(
        int $id,
        ?array $include = null,
        string $contentType = self::contentTypes['show'][0]
    ): array
    {
        $request = $this->showRequest($id, $include, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw \Dbout\DendreoSdk\Exception\ExceptionFactory::create(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw \Dbout\DendreoSdk\Exception\ExceptionFactory::create(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\Dbout\DendreoSdk\Model\ParticipantResponse',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\Dbout\DendreoSdk\Model\AuthenticationError',
                        $request,
                        $response,
                    );
                case 403:
                    return $this->handleResponseWithDataType(
                        '\Dbout\DendreoSdk\Model\ApiKeyError',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\Dbout\DendreoSdk\Model\ErrorMessage',
                        $request,
                        $response,
                    );
            }
            

            if ($statusCode < 200 || $statusCode > 299) {
                throw \Dbout\DendreoSdk\Exception\ExceptionFactory::create(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\Dbout\DendreoSdk\Model\ParticipantResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Dbout\DendreoSdk\Model\ParticipantResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Dbout\DendreoSdk\Model\AuthenticationError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Dbout\DendreoSdk\Model\ApiKeyError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Dbout\DendreoSdk\Model\ErrorMessage',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        
            throw $e;
        }
    }

    /**
     * Operation showAsync
     *
     * Récupérer un participant
     *
     * @param  int $id  (required)
     * @param  string[]|null $include Relations à inclure dans la réponse, séparées par des virgules. &#x60;media&#x60; ajoute &#x60;photo_url&#x60;. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['show'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function showAsync(
        int $id,
        ?array $include = null,
        string $contentType = self::contentTypes['show'][0]
    ): PromiseInterface
    {
        return $this->showAsyncWithHttpInfo($id, $include, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation showAsyncWithHttpInfo
     *
     * Récupérer un participant
     *
     * @param  int $id  (required)
     * @param  string[]|null $include Relations à inclure dans la réponse, séparées par des virgules. &#x60;media&#x60; ajoute &#x60;photo_url&#x60;. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['show'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function showAsyncWithHttpInfo(
        int $id,
        ?array $include = null,
        string $contentType = self::contentTypes['show'][0]
    ): PromiseInterface
    {
        $returnType = '\Dbout\DendreoSdk\Model\ParticipantResponse';
        $request = $this->showRequest($id, $include, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if (in_array($returnType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw \Dbout\DendreoSdk\Exception\ExceptionFactory::create(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'show'
     *
     * @param  int $id  (required)
     * @param  string[]|null $include Relations à inclure dans la réponse, séparées par des virgules. &#x60;media&#x60; ajoute &#x60;photo_url&#x60;. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['show'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function showRequest(
        int $id,
        ?array $include = null,
        string $contentType = self::contentTypes['show'][0]
    ): Request
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $id when calling show'
            );
        }



        $resourcePath = '/v2/participants/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $include,
            'include', // param base name
            'array', // openApiType
            'form', // style
            false, // explode
            false // required
        ) ?? []);


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('of');
        if ($apiKey !== null) {
            $headers['of'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation store
     *
     * Créer un participant
     *
     * @param  \Dbout\DendreoSdk\Model\ParticipantsStoreRequest $participants_store_request participants_store_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['store'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Dbout\DendreoSdk\Model\ParticipantResponse
     */
    public function store(
        \Dbout\DendreoSdk\Model\ParticipantsStoreRequest $participants_store_request,
        string $contentType = self::contentTypes['store'][0]
    ): \Dbout\DendreoSdk\Model\ParticipantResponse
    {
        list($response) = $this->storeWithHttpInfo($participants_store_request, $contentType);
        return $response;
    }

    /**
     * Operation storeWithHttpInfo
     *
     * Créer un participant
     *
     * @param  \Dbout\DendreoSdk\Model\ParticipantsStoreRequest $participants_store_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['store'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Dbout\DendreoSdk\Model\ParticipantResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function storeWithHttpInfo(
        \Dbout\DendreoSdk\Model\ParticipantsStoreRequest $participants_store_request,
        string $contentType = self::contentTypes['store'][0]
    ): array
    {
        $request = $this->storeRequest($participants_store_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw \Dbout\DendreoSdk\Exception\ExceptionFactory::create(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw \Dbout\DendreoSdk\Exception\ExceptionFactory::create(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            switch($statusCode) {
                case 201:
                    return $this->handleResponseWithDataType(
                        '\Dbout\DendreoSdk\Model\ParticipantResponse',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\Dbout\DendreoSdk\Model\AuthenticationError',
                        $request,
                        $response,
                    );
                case 403:
                    return $this->handleResponseWithDataType(
                        '\Dbout\DendreoSdk\Model\ApiKeyError',
                        $request,
                        $response,
                    );
                case 422:
                    return $this->handleResponseWithDataType(
                        '\Dbout\DendreoSdk\Model\ValidationError',
                        $request,
                        $response,
                    );
            }
            

            if ($statusCode < 200 || $statusCode > 299) {
                throw \Dbout\DendreoSdk\Exception\ExceptionFactory::create(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\Dbout\DendreoSdk\Model\ParticipantResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Dbout\DendreoSdk\Model\ParticipantResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Dbout\DendreoSdk\Model\AuthenticationError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Dbout\DendreoSdk\Model\ApiKeyError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Dbout\DendreoSdk\Model\ValidationError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        
            throw $e;
        }
    }

    /**
     * Operation storeAsync
     *
     * Créer un participant
     *
     * @param  \Dbout\DendreoSdk\Model\ParticipantsStoreRequest $participants_store_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['store'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function storeAsync(
        \Dbout\DendreoSdk\Model\ParticipantsStoreRequest $participants_store_request,
        string $contentType = self::contentTypes['store'][0]
    ): PromiseInterface
    {
        return $this->storeAsyncWithHttpInfo($participants_store_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation storeAsyncWithHttpInfo
     *
     * Créer un participant
     *
     * @param  \Dbout\DendreoSdk\Model\ParticipantsStoreRequest $participants_store_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['store'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function storeAsyncWithHttpInfo(
        \Dbout\DendreoSdk\Model\ParticipantsStoreRequest $participants_store_request,
        string $contentType = self::contentTypes['store'][0]
    ): PromiseInterface
    {
        $returnType = '\Dbout\DendreoSdk\Model\ParticipantResponse';
        $request = $this->storeRequest($participants_store_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if (in_array($returnType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw \Dbout\DendreoSdk\Exception\ExceptionFactory::create(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'store'
     *
     * @param  \Dbout\DendreoSdk\Model\ParticipantsStoreRequest $participants_store_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['store'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function storeRequest(
        \Dbout\DendreoSdk\Model\ParticipantsStoreRequest $participants_store_request,
        string $contentType = self::contentTypes['store'][0]
    ): Request
    {

        // verify the required parameter 'participants_store_request' is set
        if ($participants_store_request === null || (is_array($participants_store_request) && count($participants_store_request) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $participants_store_request when calling store'
            );
        }
        if ($participants_store_request instanceof \Dbout\DendreoSdk\Model\ModelInterface && !$participants_store_request->valid()) {
            throw new InvalidArgumentException(sprintf(
                'Invalid parameter $participants_store_request when calling store: %s',
                implode(' ', $participants_store_request->listInvalidProperties())
            ));
        }


        $resourcePath = '/v2/participants';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($participants_store_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($participants_store_request));
            } else {
                $httpBody = $participants_store_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('of');
        if ($apiKey !== null) {
            $headers['of'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation taches
     *
     * Lister les tâches en attente d&#39;un participant
     *
     * @param  int $id  (required)
     * @param  string|null $types Catégories de tâches à remonter, séparées par des virgules, parmi &#x60;esignature&#x60;, &#x60;esignature-doc&#x60;, &#x60;satisfaction&#x60; et &#x60;auto-positionnement&#x60;. Une valeur inconnue est ignorée ; si aucune catégorie valide ne subsiste, les quatre sont retournées. Max : 255 caractères. (optional)
     * @param  string|null $autologin À &#x60;1&#x60;, suffixe chaque URL du code extranet du Participant pour une connexion automatique. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['taches'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Dbout\DendreoSdk\Model\ParticipantTachesList
     */
    public function taches(
        int $id,
        ?string $types = null,
        ?string $autologin = null,
        string $contentType = self::contentTypes['taches'][0]
    ): \Dbout\DendreoSdk\Model\ParticipantTachesList
    {
        list($response) = $this->tachesWithHttpInfo($id, $types, $autologin, $contentType);
        return $response;
    }

    /**
     * Operation tachesWithHttpInfo
     *
     * Lister les tâches en attente d&#39;un participant
     *
     * @param  int $id  (required)
     * @param  string|null $types Catégories de tâches à remonter, séparées par des virgules, parmi &#x60;esignature&#x60;, &#x60;esignature-doc&#x60;, &#x60;satisfaction&#x60; et &#x60;auto-positionnement&#x60;. Une valeur inconnue est ignorée ; si aucune catégorie valide ne subsiste, les quatre sont retournées. Max : 255 caractères. (optional)
     * @param  string|null $autologin À &#x60;1&#x60;, suffixe chaque URL du code extranet du Participant pour une connexion automatique. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['taches'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Dbout\DendreoSdk\Model\ParticipantTachesList, HTTP status code, HTTP response headers (array of strings)
     */
    public function tachesWithHttpInfo(
        int $id,
        ?string $types = null,
        ?string $autologin = null,
        string $contentType = self::contentTypes['taches'][0]
    ): array
    {
        $request = $this->tachesRequest($id, $types, $autologin, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw \Dbout\DendreoSdk\Exception\ExceptionFactory::create(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw \Dbout\DendreoSdk\Exception\ExceptionFactory::create(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\Dbout\DendreoSdk\Model\ParticipantTachesList',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\Dbout\DendreoSdk\Model\AuthenticationError',
                        $request,
                        $response,
                    );
                case 403:
                    return $this->handleResponseWithDataType(
                        '\Dbout\DendreoSdk\Model\ApiKeyError',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\Dbout\DendreoSdk\Model\ErrorMessage',
                        $request,
                        $response,
                    );
            }
            

            if ($statusCode < 200 || $statusCode > 299) {
                throw \Dbout\DendreoSdk\Exception\ExceptionFactory::create(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\Dbout\DendreoSdk\Model\ParticipantTachesList',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Dbout\DendreoSdk\Model\ParticipantTachesList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Dbout\DendreoSdk\Model\AuthenticationError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Dbout\DendreoSdk\Model\ApiKeyError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Dbout\DendreoSdk\Model\ErrorMessage',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        
            throw $e;
        }
    }

    /**
     * Operation tachesAsync
     *
     * Lister les tâches en attente d&#39;un participant
     *
     * @param  int $id  (required)
     * @param  string|null $types Catégories de tâches à remonter, séparées par des virgules, parmi &#x60;esignature&#x60;, &#x60;esignature-doc&#x60;, &#x60;satisfaction&#x60; et &#x60;auto-positionnement&#x60;. Une valeur inconnue est ignorée ; si aucune catégorie valide ne subsiste, les quatre sont retournées. Max : 255 caractères. (optional)
     * @param  string|null $autologin À &#x60;1&#x60;, suffixe chaque URL du code extranet du Participant pour une connexion automatique. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['taches'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function tachesAsync(
        int $id,
        ?string $types = null,
        ?string $autologin = null,
        string $contentType = self::contentTypes['taches'][0]
    ): PromiseInterface
    {
        return $this->tachesAsyncWithHttpInfo($id, $types, $autologin, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation tachesAsyncWithHttpInfo
     *
     * Lister les tâches en attente d&#39;un participant
     *
     * @param  int $id  (required)
     * @param  string|null $types Catégories de tâches à remonter, séparées par des virgules, parmi &#x60;esignature&#x60;, &#x60;esignature-doc&#x60;, &#x60;satisfaction&#x60; et &#x60;auto-positionnement&#x60;. Une valeur inconnue est ignorée ; si aucune catégorie valide ne subsiste, les quatre sont retournées. Max : 255 caractères. (optional)
     * @param  string|null $autologin À &#x60;1&#x60;, suffixe chaque URL du code extranet du Participant pour une connexion automatique. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['taches'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function tachesAsyncWithHttpInfo(
        int $id,
        ?string $types = null,
        ?string $autologin = null,
        string $contentType = self::contentTypes['taches'][0]
    ): PromiseInterface
    {
        $returnType = '\Dbout\DendreoSdk\Model\ParticipantTachesList';
        $request = $this->tachesRequest($id, $types, $autologin, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if (in_array($returnType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw \Dbout\DendreoSdk\Exception\ExceptionFactory::create(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'taches'
     *
     * @param  int $id  (required)
     * @param  string|null $types Catégories de tâches à remonter, séparées par des virgules, parmi &#x60;esignature&#x60;, &#x60;esignature-doc&#x60;, &#x60;satisfaction&#x60; et &#x60;auto-positionnement&#x60;. Une valeur inconnue est ignorée ; si aucune catégorie valide ne subsiste, les quatre sont retournées. Max : 255 caractères. (optional)
     * @param  string|null $autologin À &#x60;1&#x60;, suffixe chaque URL du code extranet du Participant pour une connexion automatique. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['taches'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function tachesRequest(
        int $id,
        ?string $types = null,
        ?string $autologin = null,
        string $contentType = self::contentTypes['taches'][0]
    ): Request
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $id when calling taches'
            );
        }




        $resourcePath = '/v2/participants/{id}/taches';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $types,
            'types', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $autologin,
            'autologin', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('of');
        if ($apiKey !== null) {
            $headers['of'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation update
     *
     * Mettre à jour un participant
     *
     * @param  int $id  (required)
     * @param  \Dbout\DendreoSdk\Model\ParticipantsUpdateRequest|null $participants_update_request participants_update_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['update'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Dbout\DendreoSdk\Model\ParticipantResponse
     */
    public function update(
        int $id,
        ?\Dbout\DendreoSdk\Model\ParticipantsUpdateRequest $participants_update_request = null,
        string $contentType = self::contentTypes['update'][0]
    ): \Dbout\DendreoSdk\Model\ParticipantResponse
    {
        list($response) = $this->updateWithHttpInfo($id, $participants_update_request, $contentType);
        return $response;
    }

    /**
     * Operation updateWithHttpInfo
     *
     * Mettre à jour un participant
     *
     * @param  int $id  (required)
     * @param  \Dbout\DendreoSdk\Model\ParticipantsUpdateRequest|null $participants_update_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['update'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Dbout\DendreoSdk\Model\ParticipantResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateWithHttpInfo(
        int $id,
        ?\Dbout\DendreoSdk\Model\ParticipantsUpdateRequest $participants_update_request = null,
        string $contentType = self::contentTypes['update'][0]
    ): array
    {
        $request = $this->updateRequest($id, $participants_update_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw \Dbout\DendreoSdk\Exception\ExceptionFactory::create(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw \Dbout\DendreoSdk\Exception\ExceptionFactory::create(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\Dbout\DendreoSdk\Model\ParticipantResponse',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\Dbout\DendreoSdk\Model\AuthenticationError',
                        $request,
                        $response,
                    );
                case 403:
                    return $this->handleResponseWithDataType(
                        '\Dbout\DendreoSdk\Model\ApiKeyError',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\Dbout\DendreoSdk\Model\ErrorMessage',
                        $request,
                        $response,
                    );
                case 422:
                    return $this->handleResponseWithDataType(
                        '\Dbout\DendreoSdk\Model\ValidationError',
                        $request,
                        $response,
                    );
            }
            

            if ($statusCode < 200 || $statusCode > 299) {
                throw \Dbout\DendreoSdk\Exception\ExceptionFactory::create(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\Dbout\DendreoSdk\Model\ParticipantResponse',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Dbout\DendreoSdk\Model\ParticipantResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Dbout\DendreoSdk\Model\AuthenticationError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Dbout\DendreoSdk\Model\ApiKeyError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Dbout\DendreoSdk\Model\ErrorMessage',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Dbout\DendreoSdk\Model\ValidationError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        
            throw $e;
        }
    }

    /**
     * Operation updateAsync
     *
     * Mettre à jour un participant
     *
     * @param  int $id  (required)
     * @param  \Dbout\DendreoSdk\Model\ParticipantsUpdateRequest|null $participants_update_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['update'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function updateAsync(
        int $id,
        ?\Dbout\DendreoSdk\Model\ParticipantsUpdateRequest $participants_update_request = null,
        string $contentType = self::contentTypes['update'][0]
    ): PromiseInterface
    {
        return $this->updateAsyncWithHttpInfo($id, $participants_update_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateAsyncWithHttpInfo
     *
     * Mettre à jour un participant
     *
     * @param  int $id  (required)
     * @param  \Dbout\DendreoSdk\Model\ParticipantsUpdateRequest|null $participants_update_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['update'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function updateAsyncWithHttpInfo(
        int $id,
        ?\Dbout\DendreoSdk\Model\ParticipantsUpdateRequest $participants_update_request = null,
        string $contentType = self::contentTypes['update'][0]
    ): PromiseInterface
    {
        $returnType = '\Dbout\DendreoSdk\Model\ParticipantResponse';
        $request = $this->updateRequest($id, $participants_update_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if (in_array($returnType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw \Dbout\DendreoSdk\Exception\ExceptionFactory::create(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'update'
     *
     * @param  int $id  (required)
     * @param  \Dbout\DendreoSdk\Model\ParticipantsUpdateRequest|null $participants_update_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['update'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateRequest(
        int $id,
        ?\Dbout\DendreoSdk\Model\ParticipantsUpdateRequest $participants_update_request = null,
        string $contentType = self::contentTypes['update'][0]
    ): Request
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $id when calling update'
            );
        }

        if ($participants_update_request instanceof \Dbout\DendreoSdk\Model\ModelInterface && !$participants_update_request->valid()) {
            throw new InvalidArgumentException(sprintf(
                'Invalid parameter $participants_update_request when calling update: %s',
                implode(' ', $participants_update_request->listInvalidProperties())
            ));
        }


        $resourcePath = '/v2/participants/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($participants_update_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($participants_update_request));
            } else {
                $httpBody = $participants_update_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('of');
        if ($apiKey !== null) {
            $headers['of'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'PATCH',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption(): array
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }

    private function handleResponseWithDataType(
        string $dataType,
        RequestInterface $request,
        ResponseInterface $response,
    ): array {
        if (in_array($dataType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
            $content = $response->getBody(); //stream goes to serializer
        } else {
            $content = (string) $response->getBody();
            if ($dataType !== 'string') {
                try {
                    $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $exception) {
                    throw \Dbout\DendreoSdk\Exception\ExceptionFactory::create(
                        sprintf(
                            'Error JSON decoding server response (%s)',
                            $request->getUri()
                        ),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                        $content
                    );
                }
            }
        }

        return [
            ObjectSerializer::deserialize($content, $dataType, []),
            $response->getStatusCode(),
            $response->getHeaders()
        ];
    }

    private function responseWithinRangeCode(
        string $rangeCode,
        int $statusCode,
    ): bool {
        $left = (int) ($rangeCode[0].'00');
        $right = (int) ($rangeCode[0].'99');

        return $statusCode >= $left && $statusCode <= $right;
    }
}
