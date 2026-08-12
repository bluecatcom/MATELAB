<?php

function conerh($r, $h, $vg)
{
    switch ($vg) {
        case "V":
        case "v":
            $resL = (pi() * $r ** 2 * $h) / 3;
            break;
        case "G":
        case "g":
            $resL = sqrt($r ** 2 + $h ** 2);
            break;
        default:
            $resL = null;
            break;
    }
    return $resL;
}

function conerg($r, $g)
{
    $resL = pi() * $r * ($r + $g);
    return $resL;
}
