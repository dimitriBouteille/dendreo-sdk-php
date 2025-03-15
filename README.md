<p align="center" style="background: #fff">
    <img src="./dendreo-logo.svg" width="350" style="padding: 20px 0;" alt="Logo Dendreo">
</p>

<h1 align="center">Dendreo SDK for PHP</h1>

<div align="center">
    <p>
        <a href="https://github.com/dimitriBouteille/dendreo-sdk-php">
            <img alt="Latest Version" src="https://img.shields.io/github/v/release/dimitriBouteille/dendreo-sdk-php">
        </a>
        <a href="https://sonarcloud.io/summary/new_code?id=dimitriBouteille_dendreo-sdk-php">
            <img alt="Coverage Status" src="https://sonarcloud.io/api/project_badges/measure?project=dimitriBouteille_dendreo-sdk-php&metric=coverage">
        </a>
        <a href="https://packagist.org/packages/dbout/dendreo-sdk-php">
            <img alt="Total Downloads" src="https://img.shields.io/packagist/dt/dbout/dendreo-sdk-php">
        </a>
        <a href="https://github.com/dimitriBouteille/dendreo-sdk-php/actions/workflows/tests.yml">
            <img alt="Tests status" src="https://img.shields.io/github/actions/workflow/status/dimitriBouteille/dendreo-sdk-php/tests.yml?label=tests">
        </a>
    </p>
    <p>
        <a href="https://developers.dendreo.com" target="_blank">
            Click here to read the Dendreo API documentation
        </a> 
    </p>
</div>

---

> [!WARNING] 
> This version is considered a beta release. While we have done our best to ensure stability and functionality, there may still be bugs, incomplete features, or breaking changes in future updates.

The Dendreo SDK for PHP makes it easy for developers to access Dendreo Web Services in their PHP code. You can get started in minutes by installing the SDK through Composer or by downloading a single zip or phar file from our latest release.

Dendreo is developed by a French company, so the majority of the code (`models`, `properties`,...) are in French to keep consistency with the API.

> Please note that this SDK is developed by a developer who does not work at Dendreo. If you have any questions directly related to Dendreo, please contact support : https://www.dendreo.com/contact.

### Resources

- [API documentations](https://developers.dendreo.com/) - For details about operations, parameters, and responses
- [User guides](https://doc.dendreo.com/)
- [Issues](https://github.com/dimitriBouteille/dendreo-sdk-php/issues) - Report issues, submit pull requests, and get involved
- [Roadmap](https://portail.dendreo.com/roadmap) - Check the next developments

## Supported API

The library supports all APIs under the following services. 

Several APIs are not developed at the moment. If you want to use an API that is not available, you can [open an issue](https://github.com/dimitriBouteille/dendreo-sdk-php/issues/new/choose).

| Service                                                                    | Endpoint            |
|----------------------------------------------------------------------------|---------------------|
| [Actions de Formation](https://developers.dendreo.com/#actions-de-formation)                       | `/api/actions_de_formation.php` |
| [Contacts](https://developers.dendreo.com/#contacts)                       | `/api/contacts.php` |
| [Modules/Produits](https://developers.dendreo.com/#particuliers)                    | `/api/modules.php` |
| [Participants](https://developers.dendreo.com/#participants)               | `/api/participants.php` |
| [Salles de formation](https://developers.dendreo.com/#salles-de-formation) | `/api/salles_de_formation.php`                 |

## Installation

### Requirements

- [Dendreo username](https://developers.dendreo.com/#fonctionnement-general)
- [API key](https://pro.dendreo.com/redirect/api)
- PHP 8.2 or later
- cURL with SSL support
- The PHP extensions: `ctype`, `curl`, `json`, `mbstring` and `openssl`.

### Installation

You can use [Composer](https://getcomposer.org/). Follow the [installation instructions](https://getcomposer.org/doc/00-intro.md) if you do not already have composer installed.

~~~bash
composer require dbout/dendreo-sdk-php
~~~

In your PHP script, make sure you include the autoloader:

~~~php
require __DIR__ . '/vendor/autoload.php';
~~~

## Getting help/support

This SDK is developed by a developer who does not work at Dendreo. Thus:

- For any questions or requests related to the SDK (feature request, bug, technical problem,...), [please create an issue here](https://github.com/dimitriBouteille/dendreo-sdk-php/issues/new/choose).
- For any questions regarding Dendreo or the operation of the API, [please contact Dendreo support](https://www.dendreo.com/contact).

## Contributing

💕 🦄 We encourage you to contribute to this repository, so everyone can benefit from new features, bug fixes, and any other improvements. Have a look at our [contributing guidelines](CONTRIBUTING.md) to find out how to raise a pull request.

## Licence

Licensed under the MIT license, see [LICENSE](LICENSE).