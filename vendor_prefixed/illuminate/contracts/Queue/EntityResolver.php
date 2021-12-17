<?php
/* This file has been prefixed by <PHP-Prefixer> for "Prefixed Illuminate package" */

namespace PPP_L8\Illuminate\Contracts\Queue;

interface EntityResolver
{
    /**
     * Resolve the entity for the given ID.
     *
     * @param  string  $type
     * @param  mixed  $id
     * @return mixed
     */
    public function resolve($type, $id);
}
