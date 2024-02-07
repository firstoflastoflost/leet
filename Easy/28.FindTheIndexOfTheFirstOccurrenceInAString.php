<?php
/**
 * Example 1:
 *
 * Input: haystack = "sadbutsad", needle = "sad"
 * Output: 0
 * Explanation: "sad" occurs at index 0 and 6.
 * The first occurrence is at index 0, so we return 0.
 *
 * Example 2:
 *
 * Input: haystack = "leetcode", needle = "leeto"
 * Output: -1
 * Explanation: "leeto" did not occur in "leetcode", so we return -1.
 */


function strSt($haystack, $needle)
{
    $lengthNeedle = strlen($needle);
    $firstSymbolNeedle = $needle[0];
    $result = -1;

    for ($i = 0; $i < strlen($haystack); $i++) {
        if ($haystack[$i] === $firstSymbolNeedle) {
            if (substr($haystack, $i, $lengthNeedle) === $needle) {
                $result = $i;
                break;
            }
        }
    }

    return $result;
}


#$haystack = "asadbutsad";
$haystack = "leetcode";
#$needle = "sad";
$needle = "leetco";

echo strSt($haystack, $needle);