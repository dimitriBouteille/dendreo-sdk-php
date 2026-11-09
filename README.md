![Logo Dendreo](logo-dendreo.jpg)

<h1 align="center">Dendreo SDK for PHP</h1>

<div align="center">
    <p>
        <a href="https://github.com/dimitriBouteille/dendreo-sdk-php"><img alt="Latest Version" src="https://img.shields.io/github/v/release/dimitriBouteille/dendreo-sdk-php"></a>
        <a href="https://sonarcloud.io/summary/new_code?id=dimitriBouteille_dendreo-sdk-php"><img alt="Coverage Status" src="https://sonarcloud.io/api/project_badges/measure?project=dimitriBouteille_dendreo-sdk-php&metric=coverage"></a>
        <a href="https://packagist.org/packages/dbout/dendreo-sdk-php"><img alt="Total Downloads" src="https://img.shields.io/packagist/dt/dbout/dendreo-sdk-php"></a>
        <a href="https://github.com/dimitriBouteille/dendreo-sdk-php/actions/workflows/tests.yml"><img alt="Tests status" src="https://img.shields.io/github/actions/workflow/status/dimitriBouteille/dendreo-sdk-php/tests.yml?label=tests"></a>
    </p>
    <p>
        <a href="https://api.dendreo.com/docs-api/v2/" target="_blank">
            Click here to read the Dendreo API v2 documentation
        </a>
    </p>
</div>

---

> [!IMPORTANT]
> Version 2 targets the **Dendreo API v2** and is not compatible with version 1.x.
> Some resources of the API v1 (inscriptions, créneaux, modules, contacts...) are not available in the API v2 yet: if you need them, stay on 1.x.
> See the [upgrade guide](UPGRADE-2.0.md).

The Dendreo SDK for PHP makes it easy for developers to access the Dendreo API in their PHP code.

The SDK is generated from the [official OpenAPI specification](https://api.dendreo.com/docs-api/v2/openapi.yaml) of the Dendreo API, so it follows the API closely. Dendreo is developed by a French company, so most of the code (`models`, `properties`...) is in French, to stay consistent with the API.

> Please note that this SDK is developed by a developer who does not work at Dendreo. If you have any questions directly related to Dendreo, please contact support: https://www.dendreo.com/contact.

### Resources

- [API v2 documentation](https://api.dendreo.com/docs-api/v2/) - For details about operations, parameters, and responses
- [User guides](https://doc.dendreo.com/)
- [Issues](https://github.com/dimitriBouteille/dendreo-sdk-php/issues) - Report issues, submit pull requests, and get involved
- [Roadmap](https://portail.dendreo.com/roadmap) - Check the next developments

## Supported API

Every resource of the API v2 is supported. Each resource has its own service, in the `Dbout\DendreoSdk\Api` namespace:

| Resource              | Endpoint                    | Service                  | Methods                                                         |
|-----------------------|-----------------------------|--------------------------|-----------------------------------------------------------------|
| Actions commerciales  | `/v2/actions-commerciales`  | `ActionsCommercialesApi` | `index`, `show`                                                 |
| Actions de formation  | `/v2/actions-de-formation`  | `ActionsDeFormationApi`  | `index`, `show`, `store`, `update`, `destroy`, `restore`        |
| Administrateurs       | `/v2/administrateurs`       | `AdministrateursApi`     | `index`, `show`, `store`, `update`, `destroy`, `restore`        |
| Budgets               | `/v2/budgets`               | `BudgetsApi`             | `index`, `show`, `store`, `update`, `destroy`                   |
| Catégories de module  | `/v2/module-categories`     | `ModuleCategoriesApi`    | `index`, `show`, `store`, `update`, `destroy`, `restore`        |
| Centres de formation  | `/v2/centres-de-formation`  | `CentresDeFormationApi`  | `index`, `show`                                                 |
| Entreprises           | `/v2/entreprises`           | `EntreprisesApi`         | `index`, `show`                                                 |
| Étapes ADF            | `/v2/adf-etapes`            | `AdfEtapesApi`           | `index`, `show`, `store`, `update`, `destroy`                   |
| Étapes d'opportunité  | `/v2/opportunite-etapes`    | `OpportuniteEtapesApi`   | `index`, `show`, `store`, `update`, `destroy`, `restore`        |
| Financeurs            | `/v2/financeurs`            | `FinanceursApi`          | `index`, `show`, `update`                                       |
| Participants          | `/v2/participants`          | `ParticipantsApi`        | `index`, `show`, `store`, `update`, `destroy`, `restore`, `taches` |
| Salles de formation   | `/v2/salles-de-formation`   | `SallesDeFormationApi`   | `index`, `show`, `store`, `update`, `destroy`, `restore`        |
| Sessions permanentes  | `/v2/sessions-permanentes`  | `SessionsPermanentesApi` | `index`, `show`, `store`, `update`, `destroy`, `restore`        |
| Sources               | `/v2/sources`               | `SourcesApi`             | `index`, `show`, `store`, `update`, `destroy`                   |
| Tâches                | `/v2/taches`                | `TachesApi`              | `index`                                                         |
| Types de produit      | `/v2/produit-types`         | `ProduitTypesApi`        | `index`, `show`, `store`, `update`, `destroy`, `restore`        |

If a resource you need is missing, it is probably not available in the API v2 yet: [ask Dendreo](https://www.dendreo.com/contact), it will be added to the SDK as soon as it is published.

## Installation

### Requirements

- An [API key](https://pro.dendreo.com/redirect/api)
- Your account identifier: what follows `pro.dendreo.com/` in the address of your Dendreo space
- PHP 8.2 or later, with the `json` extension

### Installation

You can use [Composer](https://getcomposer.org/). Follow the [installation instructions](https://getcomposer.org/doc/00-intro.md) if you do not already have composer installed.

~~~bash
composer require dbout/dendreo-sdk-php
~~~

In your PHP script, make sure you include the autoloader:

~~~php
require __DIR__ . '/vendor/autoload.php';
~~~

## Using the library

### Client

Create a `Client` once, with your credentials. It is then given to every service:

```php
use Dbout\DendreoSdk\Client;
use Dbout\DendreoSdk\Config;

$client = new Client(
    (new Config())
        ->setApiKey('the-api-key')     // sent as `Authorization: Bearer the-api-key`
        ->setUsername('my-account')    // sent as the `of` header
);
```

`Config` also accepts:

| Method               | Default                   | Description                         |
|----------------------|---------------------------|-------------------------------------|
| `setTimeout(float)`  | `30`                      | Request timeout, in seconds         |
| `setProxy(?string)`  | `null`                    | Proxy, e.g. `http://my-proxy:3128`  |
| `setHost(string)`    | `https://api.dendreo.com` | API host                            |

The HTTP requests are sent with [Guzzle](https://docs.guzzlephp.org). You can give your own Guzzle client (middlewares, retries, logs...) as the second argument of the `Client`; the `timeout` and `proxy` options of `Config` then have to be set on your client.

```php
$client = new Client($config, new \GuzzleHttp\Client(['timeout' => 10]));
```

### Services

All services work the same way:

```php
use Dbout\DendreoSdk\Api\ParticipantsApi;

$participants = new ParticipantsApi($client);
```

#### List

`index()` returns one page of results. Filters are set on a filter object (`ParticipantFilter`, `EntrepriseFilter`...), `include` loads related resources, `sort` sorts the list (prefix a field by `-` for a descending order):

```php
use Dbout\DendreoSdk\Model\ParticipantFilter;

$filter = (new ParticipantFilter())
    ->setNom('Dupont')
    ->setId([12, 15])                       // several values
    ->setCreatedAt('>=2026-01-01');         // date filters accept an operator: >=, <=, >, <, =, <>

$result = $participants->index(
    filter: $filter,
    include: ['entreprise', 'centres'],
    sort: ['-created_at'],
    page: 1,
    per_page: 50,                           // 15 by default, 100 at most
);

foreach ($result->getData() as $participant) {
    echo $participant->getPrenom() . ' ' . $participant->getNom();
}
```

The available filters, `include` and `sort` values of each resource are listed in the [API documentation](https://api.dendreo.com/docs-api/v2/).

To go through every page, follow `links.next` until it is `null`:

```php
$page = 1;
do {
    $result = $participants->index(filter: $filter, page: $page++, per_page: 100);
    foreach ($result->getData() as $participant) {
        // ...
    }
} while ($result->getLinks()->getNext() !== null);
```

#### Retrieve

```php
$participant = $participants->show(42, include: ['entreprise'])->getData();
```

#### Create

```php
use Dbout\DendreoSdk\Model\ParticipantsStoreRequest;

$request = (new ParticipantsStoreRequest())
    ->setIdEntreprise('7')
    ->setNom('Dupont')
    ->setPrenom('Marie')
    ->setStatutBpf(ParticipantsStoreRequest::STATUT_BPF_SALARIE)
    ->setEmail('marie.dupont@example.com');

$participant = $participants->store($request)->getData();
```

The request is validated before being sent: a missing required field throws an `InvalidArgumentException` listing the invalid properties.

#### Update, delete, restore

```php
use Dbout\DendreoSdk\Model\ParticipantsUpdateRequest;

$participants->update(42, (new ParticipantsUpdateRequest())->setPortable('0601020304'));
$participants->destroy(42);
$participants->restore(42);
```

### Dates

Dates are returned as `\DateTime` objects. The API sends date-times without timezone (`2026-01-31 09:00:00`): they are read in the default timezone of PHP (`date.timezone`).

### Errors

Every error throws an exception extending `Dbout\DendreoSdk\ApiException`, with the message returned by Dendreo:

| HTTP status        | Exception                                          |
|--------------------|----------------------------------------------------|
| No response        | `Dbout\DendreoSdk\Exception\ConnectionException`   |
| 400                | `Dbout\DendreoSdk\Exception\BadRequestException`   |
| 401                | `Dbout\DendreoSdk\Exception\AuthenticationException` |
| 403                | `Dbout\DendreoSdk\Exception\ForbiddenException`    |
| 404                | `Dbout\DendreoSdk\Exception\NotFoundException`     |
| 409                | `Dbout\DendreoSdk\Exception\ConflictException`     |
| 422                | `Dbout\DendreoSdk\Exception\ValidationException`   |
| 429                | `Dbout\DendreoSdk\Exception\RateLimitException`    |
| 5xx                | `Dbout\DendreoSdk\Exception\ServerException`       |

```php
use Dbout\DendreoSdk\ApiException;
use Dbout\DendreoSdk\Exception\NotFoundException;
use Dbout\DendreoSdk\Exception\RateLimitException;
use Dbout\DendreoSdk\Exception\ValidationException;

try {
    $participants->store($request);
} catch (ValidationException $e) {
    $e->getErrors();            // ['email' => ['Cet email est déjà utilisé.']]
} catch (NotFoundException $e) {
    // ...
} catch (RateLimitException $e) {
    $e->getRetryAfter();        // seconds to wait, when the API sends the `Retry-After` header
} catch (ApiException $e) {
    $e->getCode();              // HTTP status
    $e->getResponseBody();
}
```

The API allows 100 requests per 10 seconds, see the [rate limits](https://api.dendreo.com/docs-api/v2/).

### Extending a service

Services can be extended, for example to add your own shortcuts:

```php
use Dbout\DendreoSdk\Api\ParticipantsApi;
use Dbout\DendreoSdk\Model\ParticipantFilter;

class MyParticipantsApi extends ParticipantsApi
{
    public function findByEmail(string $email): array
    {
        return $this->index(filter: (new ParticipantFilter())->setEmail($email))->getData();
    }
}

$participants = new MyParticipantsApi($client);
```

## Upgrading from 1.x

See the [upgrade guide](UPGRADE-2.0.md).

## Getting help/support

This SDK is developed by a developer who does not work at Dendreo. Thus:

- For any questions or requests related to the SDK (feature request, bug, technical problem,...), [please create an issue here](https://github.com/dimitriBouteille/dendreo-sdk-php/issues/new/choose).
- For any questions regarding Dendreo or the operation of the API, [please contact Dendreo support](https://www.dendreo.com/contact).

## Contributing

💕 🦄 We encourage you to contribute to this repository, so everyone can benefit from new features, bug fixes, and any other improvements. Have a look at our [contributing guidelines](CONTRIBUTING.md) to find out how to raise a pull request.

## Licence

Licensed under the MIT license, see [LICENSE](LICENSE).
