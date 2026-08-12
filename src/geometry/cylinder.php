<?php

function cylinder($r, $h, $va)
{
    switch ($va) {
        case "V":
        case "v":
            $resL = pi() * $r ** 2 * $h;
            break;
        case "A":
        case "a":
            $resL = 2 * pi() * $r * ($r + $h);
            break;
        default:
            $resL = null;
            break;
    }
    return $resL;
}
