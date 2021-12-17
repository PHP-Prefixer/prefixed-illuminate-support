<?php
/* This file has been prefixed by <PHP-Prefixer> for "Prefixed Illuminate package" */

namespace PPP_L8\Illuminate\Contracts\Validation;

interface UncompromisedVerifier
{
    /**
     * Verify that the given data has not been compromised in data leaks.
     *
     * @param  array  $data
     * @return bool
     */
    public function verify($data);
}
