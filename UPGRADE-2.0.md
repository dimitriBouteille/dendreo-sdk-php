# Upgrade from 1.x to 2.0

Version 2.0 is a new SDK, generated from the OpenAPI specification of the **Dendreo API v2**. Version 1.x targets the API v1 (`/api/*.php` endpoints): the two APIs are different, so is the SDK.

## Before upgrading: resources not available in the API v2

The API v2 does not cover every resource of the API v1 yet. The following v1 services have **no equivalent in 2.0**:

| 1.x service                    | API v1 endpoint             | 2.0                                                                        |
|--------------------------------|-----------------------------|----------------------------------------------------------------------------|
| `Service\Laps` (inscriptions)  | `/api/laps.php`             | ❌ Not available in the API v2                                              |
| `Service\Creneaux`             | `/api/creneaux.php`         | ❌ Not available in the API v2                                              |
| `Service\Modules`              | `/api/modules.php`          | ❌ Not available in the API v2 (only the categories: `ModuleCategoriesApi`) |
| `Service\Contacts`             | `/api/contacts.php`         | ❌ Not available in the API v2                                              |
| `Service\Particuliers`         | `/api/particuliers.php`     | ⚠️ Read-only: `EntreprisesApi` with the `particulier` filter               |

**If your project uses one of them, stay on 1.x** (`composer require dbout/dendreo-sdk-php:^1.0`): it remains available. These resources will be added to the SDK as soon as Dendreo publishes them in the API v2.

## Requirements

- The `Authorization` and `of` headers of the API v2 are used: you need an API key and your account identifier (what follows `pro.dendreo.com/` in the address of your Dendreo space), as in 1.x.
- New dependencies: `guzzlehttp/guzzle` and `guzzlehttp/psr7`.
- The `ctype`, `curl`, `mbstring` and `openssl` extensions are no longer required (only `json`). Guzzle uses cURL when it is available.

## Client and configuration

The credentials are now set on `Config`, given to the `Client`:

```php
// 1.x
$client = new \Dbout\DendreoSdk\Client($config);
$client->setUsername('my-account');
$client->setApiKey('the-api-key');

// 2.0
$client = new \Dbout\DendreoSdk\Client(
    (new \Dbout\DendreoSdk\Config())
        ->setUsername('my-account')
        ->setApiKey('the-api-key')
);
```

| 1.x                                                 | 2.0                                                         |
|-----------------------------------------------------|-------------------------------------------------------------|
| `Client::setUsername()`, `Client::setApiKey()`      | `Config::setUsername()`, `Config::setApiKey()`              |
| `Config::setProxy()`                                | `Config::setProxy()`                                        |
| `Config::set('timeout', ...)`                       | `Config::setTimeout()`                                      |
| `Config::set()` / `Config::get()`                   | Removed                                                     |
| `Client::setHttpClient(HttpClientInterface)`        | Second argument of the `Client`: a Guzzle `ClientInterface` |
| `Client::getBaseEndpoint()`                         | `Config::setHost()` / `Config::getHost()`                   |
| `HttpClient\CurlClient`, `HttpClientInterface`...   | Removed (Guzzle)                                            |

## Services

Services are in the `Dbout\DendreoSdk\Api` namespace and are still instantiated with the client:

```php
// 1.x
$service = new \Dbout\DendreoSdk\Service\Participants($client);

// 2.0
$service = new \Dbout\DendreoSdk\Api\ParticipantsApi($client);
```

| 1.x                           | 2.0                           |
|-------------------------------|-------------------------------|
| `Service\ActionsDeFormation`  | `Api\ActionsDeFormationApi`   |
| `Service\Participants`        | `Api\ParticipantsApi`         |
| `Service\SallesDeFormation`   | `Api\SallesDeFormationApi`    |

The other services of 2.0 are new, see the [list of supported resources](README.md#supported-api).

### Methods

| 1.x                                     | 2.0                                                             |
|-----------------------------------------|-----------------------------------------------------------------|
| `find(XxxFindRequest $request)`         | `index(?XxxFilter $filter, ?array $include, ?array $sort, ?int $page, ?int $per_page)` |
| `findById(int $id)`                     | `show(int $id, ?array $include)`                                |
| `create(XxxCreateRequest $request)`     | `store(XxxStoreRequest $request)`                               |
| `update(...)`                           | `update(int $id, XxxUpdateRequest $request)`                    |
| `delete(int $id)`                       | `destroy(int $id)`                                              |
| -                                       | `restore(int $id)`: restores a deleted resource                 |

### Responses

Responses are wrapped in a `data` key, and lists are paginated:

```php
// 1.x
$participant = $service->findById(42);
$participants = $service->find($request); // array

// 2.0
$participant = $service->show(42)->getData();
$result = $service->index($filter);
$participants = $result->getData();       // array, one page
$result->getMeta()->getPerPage();
$result->getLinks()->getNext();           // null on the last page
```

## Models

The models are generated from the specification, their properties follow the API v2 (some fields were renamed or removed by Dendreo between v1 and v2).

| 1.x                                                  | 2.0                                                          |
|------------------------------------------------------|--------------------------------------------------------------|
| `Model\XxxFindRequest`                               | `Model\XxxFilter` (e.g. `ParticipantFilter`), given to `index()` |
| `Model\XxxCreateRequest`                             | `Model\XxxStoreRequest` (e.g. `ParticipantsStoreRequest`)    |
| `Model\XxxUpdateRequest`                             | `Model\XxxUpdateRequest` (e.g. `ParticipantsUpdateRequest`)  |
| `Model\AbstractModel`, `Helper\*`, `Response`        | Removed                                                      |

Filters are sent as `filter[xxx]` (see the [API documentation](https://api.dendreo.com/docs-api/v2/)):

```php
// 1.x
$request = new \Dbout\DendreoSdk\Model\ParticipantsFindRequest();
$request->setEmail('marie.dupont@example.com');
$service->find($request);

// 2.0
$filter = (new \Dbout\DendreoSdk\Model\ParticipantFilter())->setEmail('marie.dupont@example.com');
$service->index(filter: $filter);
```

Date-times are `\DateTime` objects in Paris time (`Europe/Paris`), whatever the default timezone of PHP.

## Exceptions

All exceptions extend `Dbout\DendreoSdk\ApiException`.

| 1.x                                                       | 2.0                                                          |
|-----------------------------------------------------------|--------------------------------------------------------------|
| `Exception\DendreoException`                              | `ApiException`, or one of its typed subclasses below         |
| `DendreoException::getHttpStatus()`                       | `ApiException::getCode()`                                    |
| `Exception\InvalidApiKeyException`                        | `Exception\AuthenticationException` (401), `Exception\ForbiddenException` (403) |
| `Exception\ConnectionException`                           | `Exception\ConnectionException` (now extends `ApiException`) |
| -                                                         | `BadRequestException` (400), `NotFoundException` (404), `ConflictException` (409), `ValidationException` (422, `getErrors()`), `RateLimitException` (429, `getRetryAfter()`), `ServerException` (5xx) |

A missing required field in a request is detected before sending it, and throws an `InvalidArgumentException`.
