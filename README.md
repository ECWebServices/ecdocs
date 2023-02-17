# Simple API Documentation for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/elijahcruz/ecdocs.svg?style=flat-square)](https://packagist.org/packages/elijahcruz/ecdocs)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/elijahcruz/ecdocs/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/elijahcruz/ecdocs/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/elijahcruz/ecdocs/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/elijahcruz/ecdocs/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/elijahcruz/ecdocs.svg?style=flat-square)](https://packagist.org/packages/elijahcruz/ecdocs)

ECDocs is an API Documentation generator, based on dedoc/scramber. The only reason this package exists is so that way I can make the same package, but make sure that it's updated at a timely manner, and to make sure that I can add any extra features that I want to have in the original version.

## Installation

You can install the package via composer:

```bash
composer require elijahcruz/ecdocs
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="ecdocs-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="ecdocs-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="ecdocs-views"
```

## Usage

```php
$ecdocs = new ECDoc\Ecdocs();
echo $ecdocs->echoPhrase('Hello, ECDoc!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Elijah Cruz](https://github.com/elijahcruz12)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
