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

class CurlClient implements HttpClientInterface
{
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
        $curl = curl_init($requestUrl);
        $jsonRequest = json_encode($params);

        switch ($method) {
            case Method::GET:
                curl_setopt($curl, CURLOPT_HTTPGET, 1);
                break;
            case Method::POST:
                curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonRequest);
                curl_setopt($curl, CURLOPT_POST, 1);
                break;
            case Method::PATCH:
                curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonRequest);
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PATCH');
                break;
            case Method::DELETE:
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'DELETE');
                break;
        }

        $headers = [];
        $customHeaders = $requestOptions['headers'] ?? null;
        if (is_array($customHeaders)) {
            foreach ($customHeaders as $headerKey => $headerValue) {
                $headers[] = $headerKey . ': ' . $headerValue;
            }
        }

        $apiKey = $config->getApiKey();
        if (empty($apiKey)) {
            throw new InvalidApiKeyException();
        }

        $headers[] = sprintf('Authorization: Token token="%s"', $apiKey);
        $this->setupProxy($curl, $config->getHttpProxy());

        if ($config->getTimeout()) {
            curl_setopt($curl, CURLOPT_TIMEOUT, $config->getTimeout());
        }

        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        [$httpStatus, $result] = $this->executeCurl($curl);
        [$error] = $this->getCurlError($curl);

        curl_close($curl);

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
     * @param array|null $result
     * @param mixed $httpStatus
     * @throws DendreoException
     * @return void
     */
    protected function handleErrorFromResult(?array $result, mixed $httpStatus): void
    {
        $error = $result['errors'][0] ?? null;
        if (!is_string($error) || $error === '') {
            throw new DendreoException(
                message: 'Something went wrong.',
                httpStatus: $httpStatus
            );
        }

        throw new DendreoException(
            message: $error,
            httpStatus: $httpStatus
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
            CURLE_SSL_CACERT, CURLE_SSL_PEER_CERTIFICATE => 'Could not verify Dendreo SSL certificate.',
            default => 'Unexpected error communicating with Dendreo.',
        };

        throw new ConnectionException($msg);
    }

    /**
     * @param \CurlHandle $curl
     * @param string|null $proxyUrl
     * @throws DendreoException
     * @return void
     */
    protected function setupProxy(\CurlHandle $curl, ?string $proxyUrl): void
    {
        if (empty($proxyUrl)) {
            return;
        }

        $urlParts = parse_url($proxyUrl);
        $host = $urlParts['host'] ?? null;
        if (!$urlParts || empty($host)) {
            throw new DendreoException(sprintf('Invalid proxy %s.', $proxyUrl));
        }

        $proxy = "";
        if (isset($urlParts["scheme"])) {
            $proxy = $urlParts["scheme"] . "://";
        }
        $proxy .= $urlParts["host"];
        if (isset($urlParts["port"])) {
            $proxy .= ":" . $urlParts["port"];
        }
        curl_setopt($curl, CURLOPT_PROXY, $proxy);

        if (isset($urlParts["user"])) {
            curl_setopt($curl, CURLOPT_PROXYUSERPWD, $urlParts["user"] . ":" . $urlParts["pass"]);
        }
    }

    /**
     * @param \CurlHandle $curl
     * @return array
     */
    protected function executeCurl(\CurlHandle $curl): array
    {
        $result = curl_exec($curl);
        $httpStatus = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        return [
            $httpStatus,
            $result,
        ];
    }

    /**
     * @param \CurlHandle $curl
     * @return array
     */
    protected function getCurlError(\CurlHandle $curl): array
    {
        $errno = curl_errno($curl);
        $message = curl_error($curl);
        return [$errno, $message];
    }
}
