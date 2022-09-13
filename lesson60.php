<?php

namespace HexletBasics\Loops\AgregationString;

// BEGIN (write your solution here)
function joinNumbersFromRange($firstNumber, $lastNumber)
{
    $result = '';
    $i = $firstNumber;
    while ($i <= $lastNumber) {
        $result = "{$result}{$i}";
        $i = $i + 1;
    }
    return $result;
}
// END