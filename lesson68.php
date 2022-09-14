<?php

namespace HexletBasics\Loops\ForLoop;

// BEGIN (write your solution here)
function sumOfSeries($firstNumber, $lastNumber)
{
    $result = 0;
    if ($firstNumber < $lastNumber)
    {
    for ($firstNumber; $firstNumber <= $lastNumber; $firstNumber++)
    {
        $result += $firstNumber;
        }
        return $result;
    }
        else 
        {
            return $firstNumber;
        }
    }
// END