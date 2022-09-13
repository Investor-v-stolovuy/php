<?php

namespace HexletBasics\Loops\WhileLoop;

function printNumbers($firstNumber)
{
    // BEGIN (write your solution here)
    $i = 0;
    while ($i < $firstNumber)
    {
        print_r($firstNumber - $i);
        print_r("\n");
        $i = $i + 1;
    }
    print_r('finished!');
    // END
}