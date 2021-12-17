<?php /* This file has been prefixed by <PHP-Prefixer> for "Prefixed Illuminate package" */

declare(strict_types=1);

namespace PPP_L8\Doctrine\Inflector\Rules;

use PPP_L8\Doctrine\Inflector\WordInflector;

class Transformations implements WordInflector
{
    /** @var Transformation[] */
    private $transformations;

    public function __construct(Transformation ...$transformations)
    {
        $this->transformations = $transformations;
    }

    public function inflect(string $word): string
    {
        foreach ($this->transformations as $transformation) {
            if ($transformation->getPattern()->matches($word)) {
                return $transformation->inflect($word);
            }
        }

        return $word;
    }
}
