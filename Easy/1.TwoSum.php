<?php
/**
 * Example 1:
 *
 * Input: nums = [2,7,11,15], target = 9
 * Output: [0,1]
 * Explanation: Because nums[0] + nums[1] == 9, we return [0, 1].
 *
 * Example 2:
 *
 * Input: nums = [3,2,4], target = 6
 * Output: [1,2]
 *
 * Example 3:
 *
 * Input: nums = [3,3], target = 6
 * Output: [0,1]
 *
 *
 * @param $nums
 * @param $target
 * @return array
 */
function twoSum($nums, $target): array
{
    $hash = [];

    foreach ($nums as $index => $num) {
        $complement = $target - $num;

        if (array_key_exists($complement, $hash)) {
            return [$hash[$complement], $index];
        }

        $hash[$num] = $index;
    }

    return [];
}


print_r(twoSum([4, 2, 3], 7));