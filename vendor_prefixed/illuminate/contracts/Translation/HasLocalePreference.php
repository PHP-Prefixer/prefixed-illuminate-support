<?php
/* This file has been prefixed by <PHP-Prefixer> for "Prefixed Illuminate package" */

namespace PPP_L8\Illuminate\Contracts\Translation;

interface HasLocalePreference
{
    /**
     * Get the preferred locale of the entity.
     *
     * @return string|null
     */
    public function preferredLocale();
}
