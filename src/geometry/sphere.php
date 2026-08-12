<?php

function sphere($r, $va)
{
    switch ($va) {
        case "V":
        case "v":
            $resL = (4 * pi() * $r ** 3) / 3;
            break;
        case "A":
        case "a":
            $resL = 4 * pi() * $r ** 2;
            break;
        default:
            $resL = null;
            break;
    }
    return $resL;
}
