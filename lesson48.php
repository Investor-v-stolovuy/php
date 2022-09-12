<?php

namespace HexletBasics\Logic\LogicalOperators;

// BEGIN (write your solution here)
function isLeapYear($number)
{
    $result = $number % 400 === 0 || ($number % 4 === 0 && $number % 100 !== 0);
    return $result;
};
// END