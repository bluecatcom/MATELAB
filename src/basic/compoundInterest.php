<?php

function compoundInterest(int $c, int $i, int $t)
{
    $resl = $c * (1 + $i) ** t;
    return $resl;
}
