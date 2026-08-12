<?php

function rectangle($c, $l, $ap)
{
    switch ($ap) {
        case "A":
        case "a":
            $resL = $c * $l;
            break;
        case "P":
        case "p":
            $resL = 2 * ($c + $l);
            break;
        default:
            $resL = null;
            break;
    }
    return $resL;
}
