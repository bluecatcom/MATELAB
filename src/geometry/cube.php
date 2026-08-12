<?php

function cube($l, $vas)
{
    switch ($vas) {
        case "V":
        case "v":
            $resL = $l ** 3;
            break;
        case "A":
        case "a":
            $resL = 6 * $l ** 2;
            break;
        case "S":
        case "s":
            $resL = 12 * $l;
            break;
        default:
            $resL = null;
            break;
    }
    return $resL;
}
