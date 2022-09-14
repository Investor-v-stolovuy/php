<?php

namespace HexletBasics\Loops\SyntaxSugar;

// BEGIN (write your solution here)
function filterString($str, $chr)
{
    $i = 0;
    $replace = '';
    while ($i <= strlen($str))
    {
        $result = str_replace($chr, $replace, $str);
        return $result;
        $i += 1;
    }
}
// END