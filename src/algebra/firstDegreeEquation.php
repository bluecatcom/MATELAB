<?php

function firstDegreeEquation($a, $b)
{
    if ($a == 0) {
        $resL = null;
        return $resL;
    } else {
        $resL = -$b / $a;
        return $resL;
    }
}
