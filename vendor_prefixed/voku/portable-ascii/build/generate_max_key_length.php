<?php /* This file has been prefixed by <PHP-Prefixer> for "Prefixed Illuminate package" */

require __DIR__ . '/../vendor/autoload.php';

$languages = \PPP_L7\voku\helper\ASCII::getAllLanguages();

$languagesKeyLengths = [];
foreach ($languages as $language) {
    $langSpecific = \PPP_L7\voku\helper\ASCII::charsArrayWithOneLanguage($language, false, false);

    $langSpecificKeyLength = \array_map('\mb_strlen', \array_keys($langSpecific));

    if (count($langSpecificKeyLength) === 0) {
        $languagesKeyLengths[$language] = 0;
    } else {
        $languagesKeyLengths[$language] = \max($langSpecificKeyLength);
    }
}

//var_export($languagesKeyLengths);
