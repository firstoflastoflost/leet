<?php


/**
 * @param Integer[] $nums
 * @return Integer
 */
function removeDuplicates(array &$nums): int
{
    $length = count($nums);
    $k = 1;
    for ($i = 1; $i < $length; $i++) {
        if ($nums[$i] !== $nums[$i - 1]) {
            $nums[$k] = $nums[$i];
            $k++;
        }
    }
    return $k;
}

$a1 = [1, 1, 2];
$a2 = [0, 0, 0, 1, 1, 1, 2, 2, 3, 3, 4];
$a3 = [1];
$a4 = [1, 2];

echo "k: " . removeDuplicates($a4) . "\n";
print_r($a4);

