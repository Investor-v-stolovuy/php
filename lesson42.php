<?php

namespace HexletBasics\DefineFunctions\Parameters;

// BEGIN (write your solution here)
function truncate($str, $chr)
{
   $result = substr($str, 0, $chr);
   return "{$result}...";
}
// END