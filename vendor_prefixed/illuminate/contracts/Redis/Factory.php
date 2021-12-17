<?php
/* This file has been prefixed by <PHP-Prefixer> for "Prefixed Illuminate package" */

namespace PPP_L8\Illuminate\Contracts\Redis;

interface Factory
{
    /**
     * Get a Redis connection by name.
     *
     * @param  string|null  $name
     * @return \Illuminate\Redis\Connections\Connection
     */
    public function connection($name = null);
}
