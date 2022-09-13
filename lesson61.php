<?php

namespace HexletBasics\Loops\IterationOverString;

// BEGIN (write your solution here)
function printReversedWordBySymbol($word)
{
    $reverse = strrev($word);
    $i = 0;
    while ($i < strlen($reverse))
    {
        print_r("$reverse[$i]\n");
        $i = $i + 1;
    }
}
// END