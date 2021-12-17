<?php
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
