<?php

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


print_r( twoSum([4,2,3], 7) );