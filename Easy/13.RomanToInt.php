<?php
/**
 * Example 1:
 *
 * Input: s = "III"
 * Output: 3
 * Explanation: III = 3.
 *
 * Example 2:
 *
 * Input: s = "LVIII"
 * Output: 58
 * Explanation: L = 50, V= 5, III = 3.
 *
 * Example 3:
 *
 * Input: s = "MCMXCIV"
 * Output: 1994
 * Explanation: M = 1000, CM = 900, XC = 90 and IV = 4.
 *
 * @param string $roman
 * @return int
 */
function romanToInt(string $roman): int
{
    $dic = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000
    ];

    $total = 0;
    for ($i = 0; $i < strlen($roman); $i++) {
        if (!isset($roman[$i + 1]) || $dic[$roman[$i]] >= $dic[$roman[$i + 1]]) {
            $total += $dic[$roman[$i]];
        } else {
            $total += $dic[$roman[$i + 1]] - $dic[$roman[$i]];
            $i++;
        }
    }
    return $total;
}

# 58
$roman = "LVIII";

echo romanToInt($roman)."\n";
