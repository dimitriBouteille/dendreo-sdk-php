<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\HttpClient;

use Dbout\DendreoSdk\Client;
use Dbout\DendreoSdk\Config;
use Dbout\DendreoSdk\Enum\Method;
use Dbout\DendreoSdk\Exception\ConnectionException;
use Dbout\DendreoSdk\Exception\DendreoException;
use Dbout\DendreoSdk\Exception\InvalidApiKeyException;
use Dbout\DendreoSdk\Response;

readonly class CurlClient implements HttpClientInterface
{
    /**
     * @param CurlFactory $curlFactory
     */
    public function __construct(
        private CurlFactory $curlFactory = new CurlFactory(),
    ) {
    }

    /**
     * @inheritDoc
     */
    public function requestHttp(
        Config $config,
        string $requestUrl,
        Method $method,
        $params,
        array $requestOptions = null
    ): Response {
        $apiKey = $config->getApiKey();
        if ($apiKey === null || $apiKey === '') {
            throw new InvalidApiKeyException();
        }

        $curl = $this->curlFactory->create($requestUrl);
        $this->setupProxy($curl, $config->getHttpProxy());

        $rawHeaders = [
            'User-Agent' => Client::USER_AGENT,
            'Authorization' => sprintf('Token token="%s"', $apiKey),
        ];

        $customHeaders = $requestOptions['headers'] ?? null;
        if (is_array($customHeaders)) {
            $rawHeaders = array_merge($rawHeaders, $customHeaders);
        }

        $headers = [];
        foreach ($rawHeaders as $headerKey => $headerValue) {
            $headers[] = $headerKey . ': ' . $headerValue;
        }

        $curl->setOption(CURLOPT_HTTPHEADER, $headers);

        switch ($method) {
            case Method::GET:
                $curl->setOption(CURLOPT_HTTPGET, 1);
                break;
            case Method::POST:
                $curl->setOption(CURLOPT_POSTFIELDS, http_build_query($params));
                $curl->setOption(CURLOPT_POST, 1);
                break;
            case Method::PATCH:
                $curl->setOption(CURLOPT_POSTFIELDS, http_build_query($params));
                $curl->setOption(CURLOPT_CUSTOMREQUEST, 'PATCH');
                break;
            case Method::DELETE:
                $curl->setOption(CURLOPT_CUSTOMREQUEST, 'DELETE');
                break;
        }

        if ($config->getTimeout() > 0) {
            $curl->setOption(CURLOPT_TIMEOUT, $config->getTimeout());
        }

        $curl->setOption(CURLOPT_RETURNTRANSFER, 1);

        [$httpStatus, $result] = $this->executeCurl($curl);
        [$error] = $this->getCurlError($curl);

        $curl->close();

        if (!is_array($result)) {
            $result = json_decode($result, true);
        }

        if (!is_array($result)) {
            $result = [];
        }

        if (in_array($httpStatus, Client::SUCCESS_HTTP_CODES, true)) {
            return new Response($httpStatus, $result);
        }

        if ($error !== CURLE_OK) {
            $this->handleErrorFromCurl($error);
        }

        $this->handleErrorFromResult($result, $httpStatus);
    }

    /**
     * @param array<string, mixed>|null $result
     * @param mixed $httpStatus
     * @throws DendreoException
     * @return never
     */
    protected function handleErrorFromResult(?array $result, mixed $httpStatus): never
    {
        $error = $result['errors'][0] ?? $result['message'] ?? null;
        $status = $result['status'] ?? null;
        if (!is_string($error) || $error === '') {
            throw new DendreoException(
                message: 'Something went wrong',
                httpStatus: $httpStatus,
                status: $status,
            );
        }

        throw new DendreoException(
            message: $error,
            httpStatus: $httpStatus,
            status: $status,
        );
    }

    /**
     * @param int $errorNo
     * @throws ConnectionException
     * @return void
     */
    protected function handleErrorFromCurl(int $errorNo): void
    {
        $msg = match ($errorNo) {
            CURLE_COULDNT_RESOLVE_HOST, CURLE_OPERATION_TIMEOUTED => 'Could not connect to Dendreo. Please check your internet connection and try again.',
            default => 'Unexpected error communicating with Dendreo.',
        };

        throw new ConnectionException($msg);
    }

    /**
     * @param CurlRequest $curl
     * @param string|null $proxyUrl
     * @throws DendreoException
     * @return void
     */
    protected function setupProxy(CurlRequest $curl, ?string $proxyUrl): void
    {
        if ($proxyUrl === null || $proxyUrl === '') {
            return;
        }

        $urlParts = parse_url($proxyUrl);
        $host = $urlParts['host'] ?? null;
        if (!$urlParts || empty($host)) {
            throw new DendreoException(sprintf('Invalid proxy %s.', $proxyUrl));
        }

        $proxy = "";
        if (isset($urlParts['scheme'])) {
            $proxy = $urlParts['scheme'] . "://";
        }
        $proxy .= $urlParts['host'];
        if (isset($urlParts['port'])) {
            $proxy .= ":" . $urlParts['port'];
        }

        $curl->setOption(CURLOPT_PROXY, $proxy);
        if (isset($urlParts['user'], $urlParts['pass'])) {
            $curl->setOption(CURLOPT_PROXYUSERPWD, $urlParts['user'] . ":" . $urlParts['pass']);
        }
    }

    /**
     * @param CurlRequest $curl
     * @return array{0: int, 1: mixed}
     */
    protected function executeCurl(CurlRequest $curl): array
    {
        $result =  $curl->execute();
        $httpStatus = $curl->getInfo(CURLINFO_HTTP_CODE);

        return [$httpStatus, $result];
    }

    /**
     * @param CurlRequest $curl
     * @return array{0: int, 1: string}
     */
    protected function getCurlError(CurlRequest $curl): array
    {
        $errno = $curl->getErrNo();
        $message = $curl->getError();
        return [$errno, $message];
    }
}
