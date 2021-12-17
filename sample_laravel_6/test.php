<?php
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
