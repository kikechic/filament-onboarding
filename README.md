# This package allows you to design beautiful and fully integrated onboarding experiences for Filament Admin. Make it painless for your users to start using your app or SaaS and prevent them from dropping off. The package provides easy syntax inspired by the Spatie's and Caleb Porzio's Laravel Onboard.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/kikechic/filament-onboarding.svg?style=flat-square)](https://packagist.org/packages/kikechic/filament-onboarding)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/kikechic/filament-onboarding/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/kikechic/filament-onboarding/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/kikechic/filament-onboarding/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/kikechic/filament-onboarding/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/kikechic/filament-onboarding.svg?style=flat-square)](https://packagist.org/packages/kikechic/filament-onboarding)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require kikechic/filament-onboarding
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-onboarding-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-onboarding-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-onboarding-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filamentOnboarding = new Kikechic\FilamentOnboarding();
echo $filamentOnboarding->echoPhrase('Hello, Kikechic!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [kikechic](https://github.com/kikechic)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
