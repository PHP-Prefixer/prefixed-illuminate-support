<?php
/* This file has been prefixed by <PHP-Prefixer> for "Prefixed Illuminate package" */

namespace PPP_L8\Illuminate\Contracts\Cache;

interface Factory
{
    /**
     * Get a cache store instance by name.
     *
     * @param  string|null  $name
     * @return \Illuminate\Contracts\Cache\Repository
     */
    public function store($name = null);
}
