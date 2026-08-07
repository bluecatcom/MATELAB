<?php

function arithmeticMean($res)
{
    $read = explode(",", $res);
    $proc = array_reduce(
        $read,
        fn($acum, $value) => $acum + $value,
        0
    );
    $resl = $proc / count($read);
    return $resl;
}
