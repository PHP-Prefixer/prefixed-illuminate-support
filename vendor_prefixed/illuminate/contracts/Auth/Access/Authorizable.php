<?php
/* This file has been prefixed by <PHP-Prefixer> for "Prefixed Illuminate package" */

namespace PPP_L6\Illuminate\Contracts\Auth\Access;

interface Authorizable
{
    /**
     * Determine if the entity has a given ability.
     *
     * @param  string  $ability
     * @param  array|mixed  $arguments
     * @return bool
     */
    public function can($ability, $arguments = []);
}
