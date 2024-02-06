<?php
/**
 * Example 1:
 *
 * Input: strs = ["flower","flow","flight"]
 * Output: "fl"
 *
 * Example 2:
 *
 * Input: strs = ["dog","racecar","car"]
 * Output: ""
 * Explanation: There is no common prefix among the input strings.
 *
 * @param array $words
 * @return string
 */

function longestCommonPrefix(array $words): string
{
    $shortestIndexWord = getShortestWordIndex($words);
    $shortestWord = $words[$shortestIndexWord];
    unset($words[$shortestIndexWord]);
    $words = array_values($words);
    $result = "";

    $needContinue = true;
    for ($i = 0; $i < strlen($shortestWord); $i++) {
        $matches = 0;
        if (!$needContinue) {
            break;
        }
        foreach ($words as $word) {
            if ($shortestWord[$i] === $word[$i]) {
                $matches++;
            } else {
                $needContinue = false;
            }
        }

        if ($matches === count($words)) {
            $result .= $shortestWord[$i];
        }
    }

    return $result;
}

function getShortestWordIndex(array $words): int
{
    $shortestIndex = 0;
    for ($i = 1; $i < count($words); $i++) {
        if (strlen($words[$i]) < strlen($words[$shortestIndex])) {
            $shortestIndex = $i;
        }
    }

    return $shortestIndex;
}

$words1 = ["flower", "flow", "flight", "fly"];

$words2 = ["dog", "racecar", "car"];

$words3 = ["crow", "craft", "crewww"];

print_r(longestCommonPrefix($words3));