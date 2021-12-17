<img src="https://php-prefixer.com/images/logo/php-prefixer-action_100.png" align="right" alt="Prefixed Illuminate Support" />

# Prefixed Illuminate Support

> **PHP-Prefixer** and **Prefixed Illuminate Support** are not affiliated with or endorsed by Laravel. The original Illuminate Support repository can be found here: <https://github.com/illuminate/support>

# Use Prefixed Libraries in your Laravel projects

The **Illuminate Support** component is one of the core [Laravel](https://laravel.com) packages. It provides essential functionality used across the platform.

**PHP-Prefixer** is a service to apply PHP prefixes to namespaces, functions, helpers, traits, interfaces, etc. You start with a Composer project and a set of dependencies and prefix all library files at once to generate a consistent prefixed codebase. PHP-Prefixer abstracts the complexity of manually applying prefixes to PHP files. The service **automates and streamlines the process of prefixing** while providing the scalability and simplicity of serverless computing.

The **Prefixed Illuminate Support** can be used in several scenarios such as system migrations, multiple PHP versions support, modernization of codebases, and more. The package contains the prefixed 6.x, 7.x, and 8.x branches. A project can simultaneously use any of these branches or the latest Illuminate Support library.

By default, the branches are prefixed in this way:

- Laravel Illuminate Support 6.x: prefix `PPP_L6`
- Laravel Illuminate Support 7.x: prefix `PPP_L7`
- Laravel Illuminate Support 8.x: prefix `PPP_L8`

The [PHP Prefixer Build Action](https://github.com/PHP-Prefixer/php-prefixer-build-action) prefixes the Illuminate Support 6.x, 7.x, and 8.x branches. The action configuration can be found here: [.github/workflows/illuminate-support-6.x.yml](https://github.com/PHP-Prefixer/prefixed-illuminate-support/blob/main/.github/workflows/illuminate-support-6.x.yml), [.github/workflows/illuminate-support-7.x.yml](https://github.com/PHP-Prefixer/prefixed-illuminate-support/blob/main/.github/workflows/illuminate-support-7.x.yml) and [.github/workflows/illuminate-support-8.x.yml](https://github.com/PHP-Prefixer/prefixed-illuminate-support/blob/main/.github/workflows/illuminate-support-8.x.yml).

## Sample Project with Prefixed Illuminate Support 6.x

The [sample_laravel_6](https://github.com/PHP-Prefixer/prefixed-illuminate-support/tree/main/sample_laravel_6) project shows the most straightforward case to use the prefixed Laravel Illuminate Support 6.x:

```php
/**

$ composer install
$ php test.php

Sample date: 2021-12-17 12:00:24

*/
require_once __DIR__.'/vendor/autoload.php';

use PPP_L6\Carbon\CarbonImmutable;
use PPP_L6\Illuminate\Support\Collection;

$immutableDate = CarbonImmutable::now();

Collection::make([$immutableDate])->each(function ($date) {
    echo "\nSample date: {$date->toDateTimeString()}\n\n";
});
```

## Sample Project with Prefixed Illuminate Support 6.x and 8.x

The [sample_laravel_6_and_8](https://github.com/PHP-Prefixer/prefixed-illuminate-support/tree/main/sample_laravel_6_and_8) project shows a case to use the prefixed Laravel Illuminate Support 6.x and 8.x at the same time:

```php
/**

$ env COMPOSER=composer_laravel_6.json composer install
$ env COMPOSER=composer_laravel_8.json composer install
$ php test.php

Sample date: 2021-12-17 12:00:24

*/
require_once __DIR__.'/vendor_laravel_6/autoload.php';
require_once __DIR__.'/vendor_laravel_8/autoload.php';

use PPP_L6\Carbon\CarbonImmutable;
use PPP_L8\Illuminate\Support\Collection;

$immutableDate = CarbonImmutable::now();

Collection::make([$immutableDate])->each(function ($date) {
    echo "\nSample date: {$date->toDateTimeString()}\n\n";
});
```

## Additional Links

- PHP-Prefixer: https://php-prefixer.com/
- Documentation: https://php-prefixer.com/docs
- Config Reference: https://php-prefixer.com/docs/config/
- API: https://php-prefixer.com/docs/rest-api-reference/
- Command Line: https://php-prefixer.com/docs/command-line/
- GitHub Action: https://github.com/PHP-Prefixer/php-prefixer-build-action

## Authors

- [Aníbal Sánchez](https://www.twitter.com/anibal_sanchez)
- [PHP-Prefixer](https://php-prefixer.com/), Desarrollos Inteligentes Virtuales, SL.

## License

MIT License Copyright (c) 2021 PHP-Prefixer.
