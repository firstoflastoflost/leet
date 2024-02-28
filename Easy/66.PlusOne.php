<?php
/**
 * Example 1:
 * Input: digits = [1,2,3]
 * Output: [1,2,4]
 * Explanation: The array represents the integer 123.
 * Incrementing by one gives 123 + 1 = 124.
 * Thus, the result should be [1,2,4].
 *
 * Example 2:
 *
 * Input: digits = [4,3,2,1]
 * Output: [4,3,2,2]
 * Explanation: The array represents the integer 4321.
 * Incrementing by one gives 4321 + 1 = 4322.
 * Thus, the result should be [4,3,2,2].
 *
 * Example 3:
 *
 * Input: digits = [9]
 * Output: [1,0]
 * Explanation: The array represents the integer 9.
 * Incrementing by one gives 9 + 1 = 10.
 * Thus, the result should be [1,0].
*/

function plusOne(array $digits): array
{
    if(empty($digits)){
        return [1];
    }

    $i = count($digits) - 1;
    while($i >= 0){
        if($digits[$i] + 1 < 10){
            $digits[$i]++;
            break;
        }

        $digits[$i] = 0;
        $i--;
    }

    if(empty(array_filter($digits))){
        array_unshift($digits, 1);
    }

    return $digits;
}


$a = [1,2,3,9];

$b = [9,9];

$c = [9];

$d = [];

print_r(plusOne($c));
/*print_r(plusOne($b));
print_r(plusOne($c));
print_r(plusOne($d));*/