<?php

namespace HexletBasics\Logic\CombineExpressions;

// BEGIN (write your solution here)
function isInternationalPhone($num)
{
    $firstSymbol = $num[0];
    $isSame = '+' === $firstSymbol;
    return $isSame;
}
// END