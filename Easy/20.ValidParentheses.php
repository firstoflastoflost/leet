<?php
/**
 *
 * Example 1:
 *
 * Input: s = "()"
 * Output: true
 *
 * Example 2:
 *
 * Input: s = "()[]{}"
 * Output: true
 *
 * Example 3:
 *
 * Input: s = "(]"
 * Output: false
 *
 * @param string $str
 * @return bool
 */

function isValid(string $str): bool
{
    $stack = [];

    for ($i = 0; $i <= strlen($str) - 1; $i++) { // (
        $currentSymbol = $str[$i];
        if (isOpen($currentSymbol)) {
            if (!isset($str[$i + 1])) {
                return false;
            }
            $stack[] = $currentSymbol;
        } else {
            if (end($stack) !== closeToOpen($currentSymbol)) {
                return false;
            } else {
                array_pop($stack);
            }
        }
    }

    return count($stack) === 0;
}

function isOpen(string $symbol): bool
{
    $mapOpen = ['(', '[', '{'];
    return in_array($symbol, $mapOpen);
}

function closeToOpen(string $symbol): string
{
    $map = ['}' => '{', ']' => '[', ')' => '('];

    return $map[$symbol];
}


var_dump(isValid("]"));