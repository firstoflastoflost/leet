<?php

function isPalindrome($x): bool
{
    if ($x < 0) {
        return false;
    }

    $reversed = 0;
    $original = $x;

    while($x > 0){
        $reversed = $reversed * 10 + $x % 10;
        $x = (int)($x / 10);
    }

    return $reversed === $original;
}


printf(  "isPalindrome: %b", isPalindrome(1234325) );