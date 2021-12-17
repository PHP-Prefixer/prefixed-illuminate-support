<?php /* This file has been prefixed by <PHP-Prefixer> for "Prefixed Illuminate package" */

declare(strict_types=1);

namespace PPP_L8\Doctrine\Inflector;

interface WordInflector
{
    public function inflect(string $word): string;
}
