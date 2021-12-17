<?php
/* This file has been prefixed by <PHP-Prefixer> for "Prefixed Illuminate package" */

/**
 * Thanks to https://github.com/flaushi for his suggestion:
 * https://github.com/doctrine/dbal/issues/2873#issuecomment-534956358
 */
namespace PPP_L8\Carbon\Doctrine;

use PPP_L8\Carbon\CarbonImmutable;
use Doctrine\DBAL\Types\VarDateTimeImmutableType;

class DateTimeImmutableType extends VarDateTimeImmutableType implements CarbonDoctrineType
{
    /** @use CarbonTypeConverter<CarbonImmutable> */
    use CarbonTypeConverter;

    /**
     * @return class-string<CarbonImmutable>
     */
    protected function getCarbonClassName(): string
    {
        return CarbonImmutable::class;
    }
}
