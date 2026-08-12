<?php

function square($l, $ap)
{
    switch ($ap) {
        case "A":
        case "a":
            $resL = $l ** 2;
            break;
        case "P":
        case "p":
            $resL = 4 * $l;
            break;
        default:
            $resL = null;
            break;
    }
    return $resL;
}
