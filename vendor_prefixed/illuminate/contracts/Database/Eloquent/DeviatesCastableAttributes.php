<?php
/* This file has been prefixed by <PHP-Prefixer> for "Prefixed Illuminate package" */

namespace PPP_L8\Illuminate\Contracts\Database\Eloquent;

interface DeviatesCastableAttributes
{
    /**
     * Increment the attribute.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return mixed
     */
    public function increment($model, string $key, $value, array $attributes);

    /**
     * Decrement the attribute.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return mixed
     */
    public function decrement($model, string $key, $value, array $attributes);
}
