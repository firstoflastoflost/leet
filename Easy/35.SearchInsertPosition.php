<?php
/**
 * Example 1:
 *
 * Input: nums = [1,3,5,6], target = 5
 * Output: 2
 *
 * Example 2:
 *
 * Input: nums = [1,3,5,6], target = 2
 * Output: 1
 *
 * Example 3:
 *
 * Input: nums = [1,3,5,6], target = 7
 * Output: 4
 */


function searchInsert(array $nums, int $target): int
{
    if (empty($nums)) {
        return 0;
    }
    $left = 0;
    $right = count($nums) - 1;

    while ($left <= $right) {
        $middle = floor(($left + $right) / 2);
        if ($nums[$middle] > $target) {
            $right = $middle - 1;
        } elseif ($target > $nums[$middle]) {
            $left = $middle + 1;
        } else {
            return $middle;
        }
    }
    return $left;
}


/*$nums = [1, 3, 5, 6];
$target = 5;

$nums = [1, 3, 5, 6];
$target = 2;

$nums = [1, 3, 5, 6];
$target = 7;*/

$nums = [1, 3, 5, 7, 9];
$target = 6;

echo searchInsert($nums, $target);
echo PHP_EOL;