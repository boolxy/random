# Random

![Tests](https://github.com/boolxy/random/workflows/Tests/badge.svg)
[![StyleCI](https://github.styleci.io/repos/330243715/shield?branch=main)](https://github.styleci.io/repos/330243715?branch=main)
[![Latest Stable Version](https://poser.pugx.org/boolxy/random/v/stable?format=flat)](https://packagist.org/packages/boolxy/random)
[![License](https://poser.pugx.org/boolxy/random/license?format=flat)](https://packagist.org/packages/boolxy/random)

Generates random values

## Installation

This package can be installed via Composer:

```bash
composer require boolxy/random
```

## Usage

```php
use Boolxy\Random\Random;
```

```php
// Number (Example result: 5793)
// Default length = 4
$result = Random::number($length);

// String (Example result: drkmwmlr)
// Default length = 8
$result = Random::str($length);

// Alphanumeric (Example result: Y20U89C9KEYSqcKw)
// Default length = 16
$result = Random::alpha($length);
```

## Composer scripts

With reviewing the tests, you can learn more about the package.
Before testing: Copy phpunit.xml.dist as phpunit.xml and update it. After then you can start the testing.

- Run the tests

  ```bash
  composer test
  ```

- Check for PSR-2 standards

  ```bash
  composer check
  ```

- Apply PSR-2 standards
  ```bash
  composer fix
  ```

## Credits

- [Sezai Ozarslan](https://github.com/sezaiozarslan)
- [All Contributors](https://github.com/boolxy/random/graphs/contributors)

## License

The MIT License (MIT).
Please see [License File](https://github.com/boolxy/random/blob/master/LICENSE.md) for more information.