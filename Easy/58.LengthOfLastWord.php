<?php
/**
 * Example 1:
 *
 * Input: s = "Hello World"
 * Output: 5
 * Explanation: The last word is "World" with length 5.
 *
 * Example 2:
 *
 * Input: s = "   fly me   to   the moon  "
 * Output: 4
 * Explanation: The last word is "moon" with length 4.
 *
 * Example 3:
 *
 * Input: s = "luffy is still joyboy"
 * Output: 6
 * Explanation: The last word is "joyboy" with length 6.
 */


/*function lengthOfLastWord($s): int
{
    $s = trim($s);
    $words = explode(" ",$s);

    if (!count($words)) {
        return 0;
    }

    return strlen(end($words));
}*/

function lengthOfLastWord(string $s): int
{
    $length = strlen($s);
    $lastIndex = $length - 1;
    $result = 0;

    while($lastIndex >= 0 && $s[$lastIndex] === " ") {
        $lastIndex--;
    }

    while ($lastIndex >= 0 && $s[$lastIndex] != " ") {
        $lastIndex--;
        $result++;
    }

    return $result;
}


$s = "Hello World";
lengthOfLastWord($s);

$s = "  fly me   to   the moon  ";
lengthOfLastWord($s);

$s = "luffy is still joyboy";
lengthOfLastWord($s);
