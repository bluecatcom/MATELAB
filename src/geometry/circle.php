<?php

function circler($r, $ap)
{
    switch ($ap) {
        case "A":
        case "a":
            $resL = pi() * $r ** 2;
            break;
        case "P":
        case "p":
            $resL = 2 * pi() * $r;
            break;
        default:
            $resL = null;
            break;
    }
    return $resL;
}

function circled($d, $rp)
{
    switch ($rp) {
        case "R":
        case "r":
            $resL = $d / 2;
            break;
        case "P":
        case "p":
            $resL = pi() * $d;
            break;
        default:
            $resL = null;
            break;
    }
    return $resL;
}
