<?php

namespace HexletBasics\Conditionals\IfElse;

// BEGIN (write your solution here)
function normalizeUrl($url)
{
    $search = 'http://';
    $replace = 'https://';
    if (strpos($url, $search) === 0)
    {
        $result = str_replace($search, $replace, $url );
        return $result;
    }
    else 
    {
        $result = 'https://' . $url;
        return $result;
    }
}
// END