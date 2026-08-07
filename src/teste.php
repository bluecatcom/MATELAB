<?php

require "currencyConversion.php";

use MathPHP\Currency;

$usd = new Currency();
$usd->code = "USD";
$usd->name = "US Dollar";
$usd->country = "United States";
$usd->currencyValue = 1.0000;

$eur = new Currency();
$eur->code = "EUR";
$eur->name = "Euro";
$eur->country = "European Union";
$eur->currencyValue = 0.8778;

$gbp = new Currency();
$gbp->code = "GBP";
$gbp->name = "Pound Sterling";
$gbp->country = "United Kingdom";
$gbp->currencyValue = 0.7490;

$jpy = new Currency();
$jpy->code = "JPY";
$jpy->name = "Japanese Yen";
$jpy->country = "Japan";
$jpy->currencyValue = 163.50;

$cny = new Currency();
$cny->code = "CNY";
$cny->name = "Chinese Yuan";
$cny->country = "China";
$cny->currencyValue = 6.77;

$brl = new Currency();
$brl->code = "BRL";
$brl->name = "Brazilian Real";
$brl->country = "Brazil";
$brl->currencyValue = 5.07;

$cad = new Currency();
$cad->code = "CAD";
$cad->name = "Canadian Dollar";
$cad->country = "Canada";
$cad->currencyValue = 1.41;

$aud = new Currency();
$aud->code = "AUD";
$aud->name = "Australian Dollar";
$aud->country = "Australia";
$aud->currencyValue = 1.43;

$chf = new Currency();
$chf->code = "CHF";
$chf->name = "Swiss Franc";
$chf->country = "Switzerland";
$chf->currencyValue = 0.82;

$inr = new Currency();
$inr->code = "INR";
$inr->name = "Indian Rupee";
$inr->country = "India";
$inr->currencyValue = 96.60;

$krw = new Currency();
$krw->code = "KRW";
$krw->name = "South Korean Won";
$krw->country = "South Korea";
$krw->currencyValue = 1473.00;

$mxn = new Currency();
$mxn->code = "MXN";
$mxn->name = "Mexican Peso";
$mxn->country = "Mexico";
$mxn->currencyValue = 17.46;

$ars = new Currency();
$ars->code = "ARS";
$ars->name = "Argentine Peso";
$ars->country = "Argentina";
$ars->currencyValue = 1300.00;

$clp = new Currency();
$clp->code = "CLP";
$clp->name = "Chilean Peso";
$clp->country = "Chile";
$clp->currencyValue = 950.00;

$cop = new Currency();
$cop->code = "COP";
$cop->name = "Colombian Peso";
$cop->country = "Colombia";
$cop->currencyValue = 4000.00;

$zar = new Currency();
$zar->code = "ZAR";
$zar->name = "South African Rand";
$zar->country = "South Africa";
$zar->currencyValue = 15.90;

$sek = new Currency();
$sek->code = "SEK";
$sek->name = "Swedish Krona";
$sek->country = "Sweden";
$sek->currencyValue = 9.74;

$nok = new Currency();
$nok->code = "NOK";
$nok->name = "Norwegian Krone";
$nok->country = "Norway";
$nok->currencyValue = 9.62;

$dkk = new Currency();
$dkk->code = "DKK";
$dkk->name = "Danish Krone";
$dkk->country = "Denmark";
$dkk->currencyValue = 6.56;

$pln = new Currency();
$pln->code = "PLN";
$pln->name = "Polish Zloty";
$pln->country = "Poland";
$pln->currencyValue = 3.80;

$try = new Currency();
$try->code = "TRY";
$try->name = "Turkish Lira";
$try->country = "Turkey";
$try->currencyValue = 40.00;

$rub = new Currency();
$rub->code = "RUB";
$rub->name = "Russian Ruble";
$rub->country = "Russia";
$rub->currencyValue = 80.00;

$sgd = new Currency();
$sgd->code = "SGD";
$sgd->name = "Singapore Dollar";
$sgd->country = "Singapore";
$sgd->currencyValue = 1.27;

$hkd = new Currency();
$hkd->code = "HKD";
$hkd->name = "Hong Kong Dollar";
$hkd->country = "Hong Kong";
$hkd->currencyValue = 7.82;

$nzd = new Currency();
$nzd->code = "NZD";
$nzd->name = "New Zealand Dollar";
$nzd->country = "New Zealand";
$nzd->currencyValue = 1.55;

$aed = new Currency();
$aed->code = "AED";
$aed->name = "UAE Dirham";
$aed->country = "United Arab Emirates";
$aed->currencyValue = 3.67;

$sar = new Currency();
$sar->code = "SAR";
$sar->name = "Saudi Riyal";
$sar->country = "Saudi Arabia";
$sar->currencyValue = 3.75;

$thb = new Currency();
$thb->code = "THB";
$thb->name = "Thai Baht";
$thb->country = "Thailand";
$thb->currencyValue = 32.00;

$idr = new Currency();
$idr->code = "IDR";
$idr->name = "Indonesian Rupiah";
$idr->country = "Indonesia";
$idr->currencyValue = 16500.00;
