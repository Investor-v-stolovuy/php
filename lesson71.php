<?php

namespace HexletBasics\DeepIntoStrings\StartWith;

function startsWith($text, $substr)
{
    // BEGIN (write your solution here)
    $try = mb_strpos($text, $substr);
    if ($try === 0)
    {
            return true;
        }
        else {
            return false;
        }
    }
    // END