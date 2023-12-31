# Issue tracking for Laravel apps

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sauromates/track-it.svg?style=flat-square)](https://packagist.org/packages/sauromates/track-it)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/sauromates/track-it/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/sauromates/track-it/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/sauromates/track-it/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/sauromates/track-it/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/sauromates/track-it.svg?style=flat-square)](https://packagist.org/packages/sauromates/track-it)

## Installation

You can install the package via composer:

```bash
composer require sauromates/track-it
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="track-it-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="track-it-config"
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Vsevolod Girenko](https://github.com/sauromates)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
