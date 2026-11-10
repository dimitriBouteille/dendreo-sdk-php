# Contribution guidelines

## How to contribute step-by-step

1. Fork the `dbout/dendreo-sdk-php` repository.
2. Create a new branch from `main` in your fork. This makes it easier for you to keep track of your changes.
3. Make the desired changes to the code.
    * If you are adding new functionality or fixing a bug, we recommend you add unit tests that cover it.
    * Do not edit the generated code manually, see [Generated code](#generated-code).
4. Push the changes to your fork.
5. Create a pull request to the `dbout/dendreo-sdk-php` repository.
6. In your pull request, please describe in detail:
    * What problem you’re solving
    * Your approach to fixing the problem
    * Any tests you wrote
7. Check Allow edits from maintainers.
8. Create the pull request.
9. Ensure that all checks have passed.

After you create your pull request, one of the code owners will review your code.

## Quality

```bash
composer csFixer      # PHP CS Fixer (dry-run), `composer fix:csFixer` to apply
composer rector       # Rector (dry-run)
composer phpstan      # PHPStan, level 8
composer test:unit    # PHPUnit
```

The generated code is skipped by these tools.

## Generated code

Most of the SDK is generated from the [OpenAPI specification of the Dendreo API v2](https://api.dendreo.com/docs-api/v2/openapi.yaml) with [OpenAPI Generator](https://openapi-generator.tech) (`php-nextgen` generator).

| Path                                                                 | Content                                    |
|----------------------------------------------------------------------|--------------------------------------------|
| `src/Api/`, `src/Model/`, `src/ApiException.php`, `src/Configuration.php`, `src/FormDataProcessor.php`, `src/HeaderSelector.php`, `src/ObjectSerializer.php` | **Generated**: never edit them manually |
| `src/Client.php`, `src/Config.php`, `src/Exception/`                 | Hand-written                               |
| `openapi/`                                                           | Generation tooling (not shipped in the package) |

Every generated file contains the notice `Generated from the Dendreo OpenAPI specification, do not edit manually.` A manual change would be lost at the next generation: the `Generated code` workflow fails if `src/` does not match the generation.

To change the generated code, change the generation instead: the specification pre-processing, the templates or the generator configuration (see below), then regenerate.

### Generating the SDK

Requirements: PHP 8.2+, Composer and Docker (with Docker Compose).

```bash
composer install
composer openapi:fetch   # optional: download the latest specification into openapi/openapi.yaml
composer generate        # generate the SDK into src/
```

Then review and commit the changes of `openapi/openapi.yaml` and `src/`.

`composer generate` runs three steps:

1. `openapi/preprocess.php`: adapts the specification before the generation, into `var/openapi/openapi.yaml`:
    * groups the `filter[xxx]` parameters of each list into one filter object (`ParticipantFilter`...);
    * extracts the inline responses with stable names (`AuthenticationError`, `BudgetsDestroy422Response`...);
    * names every request body after the operationId (`ParticipantsStoreRequest`), whatever its name in the specification;
    * declares the `Y-m-d H:i:s` date-times as `date-time`;
    * creates one service per resource (`ParticipantsApi`...).
2. OpenAPI Generator, through Docker Compose (`openapi/compose.yaml`), with the configuration `openapi/config.yaml` and the templates of `openapi/templates/`, into `var/openapi/out/`.
3. `openapi/postprocess.php`: installs the generated files into `src/`, with the package header and the "do not edit" notice. The files of the previous generation (recognized by the notice) are removed first, so a resource removed from the specification also disappears from the SDK. A hand-written file is never overwritten: the script fails before changing anything if a generated file has the same name.

### Specification updates

The `OpenAPI specification update` workflow (`.github/workflows/openapi-update.yml`) downloads the specification twice a week (Monday and Thursday). When it changed, it regenerates the SDK and opens a pull request to `develop` (branch `openapi/update-spec`), described by `openapi/changes.php`: operations, schemas, properties and generated classes added or removed. It can also be run manually from the *Actions* tab.

A removed class or property is a breaking change: check the description of the pull request before merging it.

### Templates and generator version

Two templates of the generator are overridden in `openapi/templates/` (`api.mustache` and `ObjectSerializer.mustache`). Their changes, and the procedure to upgrade OpenAPI Generator, are described in [openapi/templates/README.md](openapi/templates/README.md).

The generator version is pinned in `openapi/compose.yaml`.
