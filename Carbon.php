<?php
/* This file has been prefixed by <PHP-Prefixer> for "Prefixed Illuminate package" */

namespace PPP_L8\Illuminate\Support;

use PPP_L8\Carbon\Carbon as BaseCarbon;
use PPP_L8\Carbon\CarbonImmutable as BaseCarbonImmutable;

class Carbon extends BaseCarbon
{
    /**
     * {@inheritdoc}
     */
    public static function setTestNow($testNow = null)
    {
        BaseCarbon::setTestNow($testNow);
        BaseCarbonImmutable::setTestNow($testNow);
    }
}
