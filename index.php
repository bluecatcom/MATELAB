<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
    <label for="operation">Choose the operation:</label>

    <select name="operation" id="operation">
        <option value="arithmeticMean">Arithmetic Mean</option>
        <option value="compoundInterest">Compound Interest</option>
        <option value="currencyConversion">Currency Conversion</option>
        <option value="percentage">Percentage</option>
        <option value="ruleOfThree">Rule Of Three</option>
        <option value="simpleInterest">Simple Interest</option>
        <option value="temperatureConversion">Temperature Conversion</option>
    </select>

    <label for="value">Choose the values:</label>

    <?php

    require_once __DIR__ . '/vendor/autoload.php';

    $opera = $_POST['operation'] ?? '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        switch ($opera) {
            case "arithmeticMean":
                ?>
                <input type="text" name="value" id="value">
                <button type="submit">Submit</button>
                <?php
                $value = $_POST['value'] ?? '';
                $resL = arithmeticMean($value);
                echo"The value chosen was {$value} and the result was {$resL}";
                break;
            case "compoundInterest":
                ?>
                <input type="number" name="capital" id="c">
                <input type="number" name="tax" id="i">
                <input type="number" name="time" id="t">
                <button type="submit">Submit</button>
                <?php
                $c = $_POST['capital'] ?? '';
                $i = $_POST['tax'] ?? '';
                $t = $_POST['time'] ?? '';
                $resL = compoundInterest($c, $i, $t);
                echo"The value chosen was {$c}, {$i}, {$t} and the result was {$resL}";
                break;
            case "currencyConversion":
                ?>
                <input type="number" name="value" id="value">
                <input type="number" name="currency" id="currency">
                <button type="submit">Submit</button>
                <?php
                $value = $_POST['value'] ?? '';
                $currency = $_POST['currency'] ?? '';
                $resL = currencyConversion($value, $currency);
                echo"The value chosen was {$value}, {$currency} and the result was {$resL}";
                break;
            case "percentage":
                ?>
                <input type="number" name="number" id="number">
                <input type="number" name="percentage" id="percentage">
                <button type="submit">Submit</button>
                <?php
                $number = $_POST['number'] ?? '';
                $percentage = $_POST['percentage'] ?? '';
                $resL = percentage($number, $percentage);
                echo"The value chosen was {$number}, {$percentage} and the result was {$resL}";
                break;
            case "ruleOfThree":
                ?>
                <input type="number" name="a" id="a">
                <input type="number" name="b" id="b">
                <input type="number" name="c" id="c">
                <input type="number" name="d" id="d">
                <button type="submit">Submit</button>
                <?php
                $a = $_POST['a'] ?? '';
                $b = $_POST['b'] ?? '';
                $c = $_POST['c'] ?? '';
                $d = $_POST['d'] ?? '';
                $resL = ruleOfThree($a, $b, $c, $d);
                echo"The value chosen was {$a}, {$b}, {$c}, {$d} and the result was {$resL}";
                break;
            case "simpleInterest":
                ?>
                <input type="number" name="c" id="c">
                <input type="number" name="i" id="i">
                <input type="number" name="t" id="t">
                <button type="submit">Submit</button>
                <?php
                $c = $_POST['c'] ?? '';
                $i = $_POST['i'] ?? '';
                $t = $_POST['t'] ?? '';
                $resL = simpleInterest($c, $i, $t);
                echo"The value chosen was {$c}, {$i}, {$t} and the result was {$resL}";
                break;
            case "temperatureConversion":
                ?>
                <input type="number" name="value" id="value">
                <input type="text" name="temperature1" id="temperature1">
                <input type="text" name="temperature2" id="temperature2">
                <button type="submit">Submit</button>
                <?php
                $value = $_POST['value'] ?? '';
                $temperature1 = $_POST['temperature1'] ?? '';
                $temperature2 = $_POST['temperature2'] ?? '';
                $resL = temperatureConversion($value, $temperature1, $temperature2);
                echo"The value chosen was {$value}, {$temperature1}, {$temperature2} and the result was {$resL}";
                break;
            default:
                echo"Your choice is not valid, choose again";
                break;
        }
    }
    ?>
</form>

</body>
</html>
