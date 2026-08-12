<?php

function temperatureConversion($value, $temperature1, $temperature2)
{
    $CFK = [
        "C" => "C",
        "F" => "F",
        "K" => "K"
    ];
    switch ($temperature1) {
        case "C":
        case "c":
            $temperature1 = $CFK["C"];
            break;
        case "F":
        case "f":
            $temperature1 = $CFK["F"];
            break;
        case "K":
        case "k":
            $temperature1 = $CFK["K"];
            break;
        default:
            $resL = null;
            break;
    }
    switch ($temperature2) {
        case "C":
        case "c":
            $temperature2 = $CFK["C"];
            break;
        case "F":
        case "f":
            $temperature2 = $CFK["F"];
            break;
        case "K":
        case "k":
            $temperature2 = $CFK["K"];
            break;
        default:
            $resL = null;
            break;
    }
    if ($temperature1 == $CFK["C"] && $temperature2 == $CFK["F"]) {
        $resL = ($value * 9 / 5) + 32;
    } elseif ($temperature1 == $CFK["F"] && $temperature2 == $CFK["C"]) {
        $resL = ($value - 32) * 5 / 9;
    } elseif ($temperature1 == $CFK["C"] && $temperature2 == $CFK["K"]) {
        $resL = $value + 273.15;
    } elseif ($temperature1 == $CFK["K"] && $temperature2 == $CFK["C"]) {
        $resL = $value - 273.15;
    } elseif ($temperature1 == $CFK["F"] && $temperature2 == $CFK["K"]) {
        $resL = ($value - 32) * 5 / 9 + 273.15;
    } elseif ($temperature1 == $CFK["K"] && $temperature2 == $CFK["F"]) {
        $resL = ($value - 273.15) * 9 / 5 + 32;
    } else {
        return null;
    };
    return $resL;
}
