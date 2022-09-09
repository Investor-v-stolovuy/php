<?php

namespace HexletBasics\DefineFunctions\DefaultArguments;

// BEGIN (write your solution here)
function getHiddenCard($num, $int = 4)
{
    return (str_repeat('*', $int).substr($num, -4));
}
// END