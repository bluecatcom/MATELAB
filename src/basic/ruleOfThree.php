<?php

function ruleOfThree($a, $b, $c, $d)
{
    if ($a == "x" || $a == "X") {
        $b = (int) ($b);
        $c = (int) ($c);
        $d = (int) ($d);
        $resL = $b * $c / $d;
    } elseif ($b == "x" || $b == "X") {
        $a = (int) ($a);
        $c = (int) ($c);
        $d = (int) ($d);
        $resL = $a * $d / $c;
    } elseif ($c == "x" || $c == "X") {
        $b = (int) ($b);
        $a = (int) ($a);
        $d = (int) ($d);
        $resL = $a * $d / $b;
    } elseif ($d == "x" || $d == "X") {
        $b = (int) ($b);
        $c = (int) ($c);
        $a = (int) ($a);
        $resL = $b * $c / $a;
    }
    return $resL;
}
