<?php

namespace HexletBasics\Conditionals\IfStatement;

// BEGIN (write your solution here)
function guessNumber($int)
{
    $wishNumber = 42;
    if($int === $wishNumber)
    {
        return 'You win!';
    }
    return 'Try again!';
}
// END