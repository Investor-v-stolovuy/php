<?php

namespace HexletBasics\Conditionals\Elvis;

// BEGIN (write your solution here)
function generateAmount($thingCount, $auditCost)
{
    $amount = $thingCount ?: $auditCost * 3;
    return $amount;
}
// END