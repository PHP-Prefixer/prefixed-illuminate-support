<?php /* This file has been prefixed by <PHP-Prefixer> for "Prefixed Illuminate package" */

declare(strict_types=1);

namespace PPP_L8\Doctrine\Inflector\Rules\Spanish;

use PPP_L8\Doctrine\Inflector\Rules\Pattern;

final class Uninflected
{
    /**
     * @return Pattern[]
     */
    public static function getSingular(): iterable
    {
        yield from self::getDefault();
    }

    /**
     * @return Pattern[]
     */
    public static function getPlural(): iterable
    {
        yield from self::getDefault();
    }

    /**
     * @return Pattern[]
     */
    private static function getDefault(): iterable
    {
        yield new Pattern('lunes');
        yield new Pattern('rompecabezas');
        yield new Pattern('crisis');
    }
}
