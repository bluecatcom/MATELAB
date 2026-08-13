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
    <input type="number" name="value" id="value">

    <button type="submit">Submit</button>
</form>

<?php

require_once __DIR__ . '/vendor/autoload.php';

echo"php ver <br>";

$opera = $_POST['operation'] ?? '';
$value = $_POST['value'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    switch ($opera) {
        case "arithmeticMean":
            $resL = arithmeticMean($value);
            echo $resL;
            break;
        case "compoundInterest":
            $resL = compoundInterest($value);
            echo $resL;
            break;
        case "currencyConversion":
            $resL = currencyConversion($value);
            echo $resL;
            break;
        case "percentage":
            $resL = percentage($value);
            echo $resL;
            break;
        case "ruleOfThree":
            $resL = ruleOfThree($value);
            echo $resL;
            break;
        case "simpleInterest":
            $resL = simpleInterest($value);
            echo $resL;
            break;
        case "temperatureConversion":
            $resL = temperatureConversion($value);
            echo $resL;
            break;
        default:
            echo"Your choice is not valid, choose again";
            break;
}
}
?>

</body>
</html>
