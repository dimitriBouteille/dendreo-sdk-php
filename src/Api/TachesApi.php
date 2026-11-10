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
 * TachesApi Class Doc Comment
 *
 * Generated from the Dendreo OpenAPI specification, do not edit manually.
 *
 * @package  Dbout\DendreoSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TachesApi
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
        'index' => [
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
     * Operation index
     *
     * Lister les tâches en attente des participants
     *
     * @param  \Dbout\DendreoSdk\Model\ParticipantTachesFilter|null $filter Filtres de la liste. (optional)
     * @param  int|null $page Numéro de la page, à partir de 1. (optional, default to 1)
     * @param  int|null $per_page Nombre d&#39;éléments par page, 15 par défaut et 100 au plus : une valeur supérieure est ramenée à 100. (optional, default to 15)
     * @param  string|null $types Catégories de tâches à remonter, séparées par des virgules, parmi &#x60;esignature&#x60;, &#x60;esignature-doc&#x60;, &#x60;satisfaction&#x60; et &#x60;auto-positionnement&#x60;. Une valeur inconnue est ignorée ; si aucune catégorie valide ne subsiste, les quatre sont retournées. Max : 255 caractères. (optional)
     * @param  string|null $autologin À &#x60;1&#x60;, suffixe chaque URL du code extranet du Participant pour une connexion automatique. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['index'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Dbout\DendreoSdk\Model\ParticipantTachesCollection
     */
    public function index(
        ?\Dbout\DendreoSdk\Model\ParticipantTachesFilter $filter = null,
        ?int $page = 1,
        ?int $per_page = 15,
        ?string $types = null,
        ?string $autologin = null,
        string $contentType = self::contentTypes['index'][0]
    ): \Dbout\DendreoSdk\Model\ParticipantTachesCollection
    {
        list($response) = $this->indexWithHttpInfo($filter, $page, $per_page, $types, $autologin, $contentType);
        return $response;
    }

    /**
     * Operation indexWithHttpInfo
     *
     * Lister les tâches en attente des participants
     *
     * @param  \Dbout\DendreoSdk\Model\ParticipantTachesFilter|null $filter Filtres de la liste. (optional)
     * @param  int|null $page Numéro de la page, à partir de 1. (optional, default to 1)
     * @param  int|null $per_page Nombre d&#39;éléments par page, 15 par défaut et 100 au plus : une valeur supérieure est ramenée à 100. (optional, default to 15)
     * @param  string|null $types Catégories de tâches à remonter, séparées par des virgules, parmi &#x60;esignature&#x60;, &#x60;esignature-doc&#x60;, &#x60;satisfaction&#x60; et &#x60;auto-positionnement&#x60;. Une valeur inconnue est ignorée ; si aucune catégorie valide ne subsiste, les quatre sont retournées. Max : 255 caractères. (optional)
     * @param  string|null $autologin À &#x60;1&#x60;, suffixe chaque URL du code extranet du Participant pour une connexion automatique. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['index'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Dbout\DendreoSdk\Model\ParticipantTachesCollection, HTTP status code, HTTP response headers (array of strings)
     */
    public function indexWithHttpInfo(
        ?\Dbout\DendreoSdk\Model\ParticipantTachesFilter $filter = null,
        ?int $page = 1,
        ?int $per_page = 15,
        ?string $types = null,
        ?string $autologin = null,
        string $contentType = self::contentTypes['index'][0]
    ): array
    {
        $request = $this->indexRequest($filter, $page, $per_page, $types, $autologin, $contentType);

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
                        '\Dbout\DendreoSdk\Model\ParticipantTachesCollection',
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
                '\Dbout\DendreoSdk\Model\ParticipantTachesCollection',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Dbout\DendreoSdk\Model\ParticipantTachesCollection',
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
     * Lister les tâches en attente des participants
     *
     * @param  \Dbout\DendreoSdk\Model\ParticipantTachesFilter|null $filter Filtres de la liste. (optional)
     * @param  int|null $page Numéro de la page, à partir de 1. (optional, default to 1)
     * @param  int|null $per_page Nombre d&#39;éléments par page, 15 par défaut et 100 au plus : une valeur supérieure est ramenée à 100. (optional, default to 15)
     * @param  string|null $types Catégories de tâches à remonter, séparées par des virgules, parmi &#x60;esignature&#x60;, &#x60;esignature-doc&#x60;, &#x60;satisfaction&#x60; et &#x60;auto-positionnement&#x60;. Une valeur inconnue est ignorée ; si aucune catégorie valide ne subsiste, les quatre sont retournées. Max : 255 caractères. (optional)
     * @param  string|null $autologin À &#x60;1&#x60;, suffixe chaque URL du code extranet du Participant pour une connexion automatique. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['index'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function indexAsync(
        ?\Dbout\DendreoSdk\Model\ParticipantTachesFilter $filter = null,
        ?int $page = 1,
        ?int $per_page = 15,
        ?string $types = null,
        ?string $autologin = null,
        string $contentType = self::contentTypes['index'][0]
    ): PromiseInterface
    {
        return $this->indexAsyncWithHttpInfo($filter, $page, $per_page, $types, $autologin, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation indexAsyncWithHttpInfo
     *
     * Lister les tâches en attente des participants
     *
     * @param  \Dbout\DendreoSdk\Model\ParticipantTachesFilter|null $filter Filtres de la liste. (optional)
     * @param  int|null $page Numéro de la page, à partir de 1. (optional, default to 1)
     * @param  int|null $per_page Nombre d&#39;éléments par page, 15 par défaut et 100 au plus : une valeur supérieure est ramenée à 100. (optional, default to 15)
     * @param  string|null $types Catégories de tâches à remonter, séparées par des virgules, parmi &#x60;esignature&#x60;, &#x60;esignature-doc&#x60;, &#x60;satisfaction&#x60; et &#x60;auto-positionnement&#x60;. Une valeur inconnue est ignorée ; si aucune catégorie valide ne subsiste, les quatre sont retournées. Max : 255 caractères. (optional)
     * @param  string|null $autologin À &#x60;1&#x60;, suffixe chaque URL du code extranet du Participant pour une connexion automatique. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['index'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function indexAsyncWithHttpInfo(
        ?\Dbout\DendreoSdk\Model\ParticipantTachesFilter $filter = null,
        ?int $page = 1,
        ?int $per_page = 15,
        ?string $types = null,
        ?string $autologin = null,
        string $contentType = self::contentTypes['index'][0]
    ): PromiseInterface
    {
        $returnType = '\Dbout\DendreoSdk\Model\ParticipantTachesCollection';
        $request = $this->indexRequest($filter, $page, $per_page, $types, $autologin, $contentType);

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
     * @param  \Dbout\DendreoSdk\Model\ParticipantTachesFilter|null $filter Filtres de la liste. (optional)
     * @param  int|null $page Numéro de la page, à partir de 1. (optional, default to 1)
     * @param  int|null $per_page Nombre d&#39;éléments par page, 15 par défaut et 100 au plus : une valeur supérieure est ramenée à 100. (optional, default to 15)
     * @param  string|null $types Catégories de tâches à remonter, séparées par des virgules, parmi &#x60;esignature&#x60;, &#x60;esignature-doc&#x60;, &#x60;satisfaction&#x60; et &#x60;auto-positionnement&#x60;. Une valeur inconnue est ignorée ; si aucune catégorie valide ne subsiste, les quatre sont retournées. Max : 255 caractères. (optional)
     * @param  string|null $autologin À &#x60;1&#x60;, suffixe chaque URL du code extranet du Participant pour une connexion automatique. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['index'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function indexRequest(
        ?\Dbout\DendreoSdk\Model\ParticipantTachesFilter $filter = null,
        ?int $page = 1,
        ?int $per_page = 15,
        ?string $types = null,
        ?string $autologin = null,
        string $contentType = self::contentTypes['index'][0]
    ): Request
    {


        if ($page !== null && $page < 1) {
            throw new InvalidArgumentException('invalid value for "$page" when calling TachesApi.index, must be bigger than or equal to 1.');
        }
        
        if ($per_page !== null && $per_page > 100) {
            throw new InvalidArgumentException('invalid value for "$per_page" when calling TachesApi.index, must be smaller than or equal to 100.');
        }
        if ($per_page !== null && $per_page < 1) {
            throw new InvalidArgumentException('invalid value for "$per_page" when calling TachesApi.index, must be bigger than or equal to 1.');
        }
        



        $resourcePath = '/v2/taches';
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
