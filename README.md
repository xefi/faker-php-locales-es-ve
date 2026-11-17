# Faker PHP — es_VE locale

Venezuelan Spanish (`es_VE`) locale for [Faker PHP](https://github.com/xefi/faker-php).

## Installation

```bash
composer require --dev xefi/faker-php-locales-es-ve
```

The service provider is discovered automatically through Composer.

## Usage

```php
use Xefi\Faker\Faker;

$faker = new Faker('es_VE');

$faker->name();
$faker->fullAddress();
$faker->cedula();
```

The package provides `es_VE` variants of the address, colors, company, financial, person, phone and text
extensions. Generators without a `es_VE` variant fall back to the default locale.

### Locale-specific generators

| Method | Extension | Description |
| --- | --- | --- |
| `cedula()` | `PersonExtension` | Cédula de identidad, `V-12345678` or `E-81234567` |
| `rif()` | `CompanyExtension` | RIF with a valid check digit, e.g. `J-12345678-9` |
| `state()` | `AddressExtension` | One of the 23 states or the Distrito Capital |
| `postcode()` | `AddressExtension` | 4-digit código postal |
| `iban()` | `FinancialExtension` | IBAN-shaped number built around a 20-digit bank account (`VE`; Venezuela has no IBAN) |

## Contributing

1. Fork the repository and create a branch from `main`.
2. Add or update an extension under `src/Extensions/` and register it in `FakerEsVeServiceProvider::boot()`.
3. Add a test under `tests/Unit/`.
4. Run the suite with `vendor/bin/phpunit` (or `docker compose run php vendor/bin/phpunit`).
5. Open a pull request against `main`.

## License

MIT
