<?php

namespace HexletBasics\Logic\LogicalNegation;

use function HexletBasics\Functions\mb_strrev;

// BEGIN (write your solution here)
function isPalindrome($word)
{
    $lowerWord = strtolower($word);
    $result = $lowerWord === strrev($lowerWord);
    return $result;
}
function isNotPalindrome($word)
{
    $result = !isPalindrome($word);
    return $result;
}
// END