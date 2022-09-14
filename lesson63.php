<?php

namespace HexletBasics\Loops\ReverseString;

// BEGIN (write your solution here)
function mysubstr($str, $lenght)
{
    $i = 0;
    $result = '';
    while ($i < $lenght)
    {
        $result = "{$result}{$str[$i]}";
        $i = $i + 1;
    }
    return $result;
}
// END