<?php

function trapezoidb($B, $b, $h)
{
    $resL = ($B + $b) * $h / 2;
    return $resL;
}

function trapezoidl($B, $b, $l1, $l2)
{
    $resL = $B + $b + $l1 + $l2;
    return $resL;
}
