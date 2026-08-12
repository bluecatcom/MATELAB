<?php

function distance($xb, $xa, $yb, $ya)
{
    $resL = sqrt(($xb - $xa) ** 2 + ($yb - $ya) ** 2);
    return $resL;
}
