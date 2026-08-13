<?php

function secondDegreeEquation($a, $b, $c)
{
    $delta = $b ** 2 - 4 * $a * $c;
    if ($delta < 0) {
        $x = $delta;
        $resL = $x;
    } elseif ($delta == 0) {
        $x = (-$b + 0) / (2 * $a);
        $resL = $x;
    } elseif ($delta > 0) {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        return [
            "x1" => $x1,
            "x2" => $x2
        ];
    }
    return $resL;
}
