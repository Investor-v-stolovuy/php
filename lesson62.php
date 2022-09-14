<?php

namespace HexletBasics\Loops\ConditionsInsideLoops;

// BEGIN (write your solution here)
function countChars($str, $chr)
{
    $i = 0;
    $count = 0;
    $word = strtolower($str);
    $char = strtolower($chr);
    while ($i < strlen($word))
    {
        if ($word[$i] === $char)
        {
            $count = $count + 1;
        }
        $i = $i + 1;
    }
    return $count;
}
// END