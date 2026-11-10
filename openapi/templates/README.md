# Custom templates

These templates override the default `php-nextgen` templates of OpenAPI Generator.
Every template that is not in this directory comes from the generator itself.

**Base version: OpenAPI Generator `v7.14.0`** (same as the image in `../compose.yaml`).

## Modifications

### `api.mustache`

| Change | Why |
|---|---|
| The constructor takes the SDK `Client` (`__construct(DendreoClient $client)`) instead of a Guzzle client + `Configuration` | Services are instantiated as `new ParticipantsApi($client)`; the generated `Configuration` stays internal |
| `use GuzzleHttp\Client` removed, `use {{invokerPackage}}\Client as DendreoClient` added | Consequence of the constructor change |
| Public methods return the success type only (`{{returnType}}`, `void` when there is none) instead of the union of every response type | Error responses are thrown as exceptions, they are never returned |
| The request body is validated (`valid()`) before being sent, an `InvalidArgumentException` lists the invalid properties | Otherwise a missing required field ends in a `TypeError` during serialization |
| `throw new ApiException(...)` replaced by `throw \{{invokerPackage}}\Exception\ExceptionFactory::create(...)` (same arguments) | Typed exceptions (`ValidationException`, `NotFoundException`...) |

### `ObjectSerializer.mustache`

| Change | Why |
|---|---|
| `toQueryValue()`: a model is converted with `sanitizeForSerialization()` instead of `(array)` | Fixes the `deepObject` serialization of models (`filter[ * container][id]...`) and only sends the fields that are set |
| `toQueryValue()`: in `deepObject` style, a list is sent comma-separated | Dendreo format: `filter[id]=12,15` instead of `filter[id][0]=12&filter[id][1]=15` |
| `setTimezone()` and `formatDateTime()` added: received date-times are created in this timezone, sent ones are converted to it | Dendreo returns date-times without offset, in Paris time (`Client` sets `Europe/Paris`) |
| `deserialize()`: the fields absent from the model are stored in the model container | The schemas have `additionalProperties: true` (additional fields of the account), the generator ignores them; they are readable with `$model['field']` |

### `model_generic.mustache`

| Change | Why |
|---|---|
| `offsetExists()`, `offsetGet()`, `offsetSet()`, `offsetUnset()`: `@param string $offset` instead of `integer` | The offsets are field names (`$participant['my_additional_field']`): with `integer`, static analysis (PHPStan) rejects reading the additional fields |

## Upgrading OpenAPI Generator

1. Extract the default templates of the new version:
   ```bash
   docker run --rm -v "$PWD/var/templates:/out" openapitools/openapi-generator-cli:vX.Y.Z author template -g php-nextgen -o /out
   ```
2. Copy `api.mustache`, `ObjectSerializer.mustache` and `model_generic.mustache` from `var/templates/` here, and apply the modifications listed above again.
3. Update the image version in `../compose.yaml` and the base version in this file.
4. Run `composer generate` and the tests, then review the diff of the generated files in `src/` (the ones with the "do not edit manually" notice).
