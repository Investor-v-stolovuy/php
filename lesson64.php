<?php

namespace HexletBasics\Loops\EdgeCases;

// BEGIN (write your solution here)
function isArgumentsForSubstrCorrect($str, $i, $lenght)
{
        if ($lenght <= 0)
        {
            return false;
        }
        elseif ($i <= 0)
        {
            return false;
        }
        elseif ($i > strlen($str))
        {
            return false;
        }
        elseif ($i + $lenght > strlen($str))
        {
            return false;
        }
        else
        {
            return true;
        }
        }
// END