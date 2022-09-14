<?php

namespace HexletBasics\Loops\Mutators;

// BEGIN (write your solution here)
function makeItFunny($text, $int)
{
$i = 0;
$result ='';
while ($i < strlen($text))
{
    $basic = $text[$i];
    if (($i + 1) % $int === 0)
    {
        $upper = strtoupper($basic);
        $result = "{$result}{$upper}";
    }
    else
    {
        $result = "{$result}{$basic}";
    }
    $i++;
    }
return $result;
}
// END