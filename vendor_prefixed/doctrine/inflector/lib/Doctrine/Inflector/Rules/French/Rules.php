<?php /* This file has been prefixed by <PHP-Prefixer> for "Prefixed Illuminate package" */

declare(strict_types=1);

namespace PPP_L8\Doctrine\Inflector\Rules\French;

use PPP_L8\Doctrine\Inflector\Rules\Patterns;
use PPP_L8\Doctrine\Inflector\Rules\Ruleset;
use PPP_L8\Doctrine\Inflector\Rules\Substitutions;
use PPP_L8\Doctrine\Inflector\Rules\Transformations;

final class Rules
{
    public static function getSingularRuleset(): Ruleset
    {
        return new Ruleset(
            new Transformations(...Inflectible::getSingular()),
            new Patterns(...Uninflected::getSingular()),
            (new Substitutions(...Inflectible::getIrregular()))->getFlippedSubstitutions()
        );
    }

    public static function getPluralRuleset(): Ruleset
    {
        return new Ruleset(
            new Transformations(...Inflectible::getPlural()),
            new Patterns(...Uninflected::getPlural()),
            new Substitutions(...Inflectible::getIrregular())
        );
    }
}
