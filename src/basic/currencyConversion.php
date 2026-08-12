<?php

namespace MATELAB\basic;

function currencyConversion($value, $currency)
{
    $cotation = [
    "USD" => 1,
    "EUR" => 0.8778,
    "GBP" => 0.7490,
    "JPY" => 163.50,
    "CNY" => 6.77,
    "BRL" => 5.07,
    "CAD" => 1.41,
    "AUD" => 1.43,
    "CHF" => 0.82,
    "INR" => 96.60,
    "KRW" => 1473.00,
    "MXN" => 17.46,
    "ARS" => 1300.00,
    "CLP" => 950.00,
    "COP" => 4000.00,
    "ZAR" => 15.90,
    "SEK" => 9.74,
    "NOK" => 9.62,
    "DKK" => 6.56,
    "PLN" => 3.80,
    "TRY" => 40.00,
    "RUB" => 80.00,
    "SGD" => 1.27,
    "HKD" => 7.82,
    "NZD" => 1.55,
    "AED" => 3.67,
    "SAR" => 3.75,
    "THB" => 32.00,
    "IDR" => 16500.00
    ];

    switch ($currency) {
        case "USD":
            $currency = $cotation["USD"];
            break;
        case "EUR":
            $currency = $cotation["EUR"];
            break;
        case "GBP":
            $currency = $cotation["GBP"];
            break;
        case "JPY":
            $currency = $cotation["JPY"];
            break;
        case "CNY":
            $currency = $cotation["CNY"];
            break;
        case "BRL":
            $currency = $cotation["BRL"];
            break;
        case "CAD":
            $currency = $cotation["CAD"];
            break;
        case "AUD":
            $currency = $cotation["AUD"];
            break;
        case "CHF":
            $currency = $cotation["CHF"];
            break;
        case "INR":
            $currency = $cotation["INR"];
            break;
        case "KRW":
            $currency = $cotation["KRW"];
            break;
        case "MXN":
            $currency = $cotation["MXN"];
            break;
        case "ARS":
            $currency = $cotation["ARS"];
            break;
        default:
            $currency = null;
            break;
    }
    if ($currency != null) {
        $resL = $value * $currency;
    } else {
        $resL = null;
    }
    return $resL;
}
