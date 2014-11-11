<?php

/**
* Abbreviates a string into the:
* [first letter] + [number of letters removed] + [last letter]
*
* Examples:
* internationalization => i18n
* localization => l10n
* hello => h3o
*
* @param string $str The string to abbreviate
* @return string The abbreviated string
*/

$str = "Danielle";
function abbrevify($str) {
    $length = strlen($str);
    return $str[0] . (strlen($str)-2) . $str[$length-1];

}

echo abbrevify("Danielle");