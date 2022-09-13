<?php

namespace HexletBasics\Loops\AgregationNumber;

// BEGIN (write your solution here)
function multiplyNumbersFromRange($firstNumber, $lastNumber)
{
    $i = $firstNumber;
    $increase = 1;
    while ($i <= $lastNumber) {
        $increase = $increase * $i;
        $i = $i + 1;
    }
    return $increase;
}
// END