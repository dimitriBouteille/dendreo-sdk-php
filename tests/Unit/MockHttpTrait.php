<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

declare(strict_types=1);

namespace Dbout\DendreoSdk\Tests\Unit;

use Dbout\DendreoSdk\Client;
use Dbout\DendreoSdk\Config;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\RequestInterface;

/**
 * Builds a Client whose HTTP calls are answered by a queue of fake responses, and keeps
 * the sent requests. No request reaches the real API.
 */
trait MockHttpTrait
{
    /**
     * @var list<RequestInterface> requests sent through the mocked client
     */
    private array $requests = [];

    /**
     * @param list<Response|\Throwable> $responses
     */
    private function mockClient(array $responses): Client
    {
        $this->requests = [];
        $stack = HandlerStack::create(new MockHandler($responses));
        $stack->push(Middleware::tap(function (RequestInterface $request): void {
            $this->requests[] = $request;
        }));

        return new Client(
            (new Config())->setApiKey('the-api-key')->setUsername('my-account'),
            new GuzzleClient(['handler' => $stack]),
        );
    }

    /**
     * @param array<mixed> $body
     * @param array<string, string> $headers
     */
    private static function jsonResponse(int $status, array $body, array $headers = []): Response
    {
        return new Response($status, ['Content-Type' => 'application/json'] + $headers, (string) json_encode($body));
    }

    private function lastRequest(): RequestInterface
    {
        $last = end($this->requests);
        self::assertNotFalse($last, 'No request was sent.');

        return $last;
    }

    /**
     * Decoded query string, e.g. `['filter[id]' => '12,15', 'include' => 'entreprise']`.
     *
     * @return array<string, string>
     */
    private function lastQuery(): array
    {
        $query = [];
        foreach (explode('&', $this->lastRequest()->getUri()->getQuery()) as $pair) {
            [$name, $value] = explode('=', $pair, 2) + [1 => ''];
            $query[rawurldecode($name)] = rawurldecode($value);
        }

        return $query;
    }
}
