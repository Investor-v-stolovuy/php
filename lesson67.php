<?php

namespace HexletBasics\Loops\ReturnFromLoop;

// BEGIN (write your solution here)
function hasChar($str, $chr)
{
$i = 0;
while($i < strlen($str)) {
if($chr === $str[$i++]){
return true;
}
}
}
// END