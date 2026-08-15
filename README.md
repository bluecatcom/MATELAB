# MateLab

A PHP library with mathematical functions for basic calculations, geometry, financial math, and equations.

Namespace: `MATELAB\basic`

## Table of Contents

- [Basic Math](#basic-math)
- [Geometry](#geometry)
- [Equations](#equations)
- [Usage](#usage)

---

## Basic Math

### `arithmeticMean($res)`
Calculates the arithmetic mean of a list of numbers.

- **`$res`** *(string)* — Numbers separated by commas (e.g., `"10,20,30"`).
- **Returns** *(float)* — Arithmetic mean.

### `percentage($number, $percentage)`
Calculates a percentage of a number.

- **`$number`** *(float)* — Base value.
- **`$percentage`** *(float)* — Percentage to calculate.
- **Returns** *(float)* — Result of the percentage applied to the number.

### `ruleOfThree($a, $b, $c, $d)`
Solves a simple rule of three, automatically identifying which of the four values is the unknown (`"x"` or `"X"`).

- **`$a`, `$b`, `$c`, `$d`** — Three numeric values and one of them set as `"x"`.
- **Returns** *(float)* — Value of the unknown.

### `simpleInterest($c, $i, $t)`
Calculates simple interest.

- **`$c`** *(float)* — Principal.
- **`$i`** *(float)* — Interest rate.
- **`$t`** *(float)* — Time.
- **Returns** *(float)* — Interest amount.

### `compoundInterest($c, $i, $t)`
Calculates compound interest.

- **`$c`** *(float)* — Principal.
- **`$i`** *(float)* — Interest rate.
- **`$t`** *(float)* — Time.
- **Returns** *(float)* — Final amount.

### `currencyConversion($value, $currency)`
Converts a value using the exchange rate of the given currency.

- **`$value`** *(float)* — Value to convert.
- **`$currency`** *(string)* — Currency code (`"USD"`, `"EUR"`, `"BRL"`, etc.).
- **Returns** *(float|null)* — Converted value, or `null` if the currency is not supported.

Supported currencies: USD, EUR, GBP, JPY, CNY, BRL, CAD, AUD, CHF, INR, KRW, MXN, ARS.

### `temperatureConversion($value, $temperature1, $temperature2)`
Converts temperature between Celsius, Fahrenheit, and Kelvin.

- **`$value`** *(float)* — Temperature value.
- **`$temperature1`** *(string)* — Source unit (`"C"`, `"F"`, or `"K"`).
- **`$temperature2`** *(string)* — Target unit (`"C"`, `"F"`, or `"K"`).
- **Returns** *(float|null)* — Converted value, or `null` if the units are invalid.

---

## Geometry

### Circle
- **`circler($r, $ap)`** — Area (`"A"`) or perimeter (`"P"`) from the radius.
- **`circled($d, $rp)`** — Radius (`"R"`) or perimeter (`"P"`) from the diameter.

### Cone
- **`conerh($r, $h, $vg)`** — Volume (`"V"`) from radius and height, or slant height (`"G"`).
- **`conerg($r, $g)`** — Lateral surface area from radius and slant height.

### Cube
- **`cube($l, $vas)`** — Volume (`"V"`), surface area (`"A"`), or sum of edges (`"S"`) from the side length.

### Cylinder
- **`cylinder($r, $h, $va)`** — Volume (`"V"`) or surface area (`"A"`) from radius and height.

### Distance and Pythagoras
- **`distance($xb, $xa, $yb, $ya)`** — Distance between two points `(xa, ya)` and `(xb, yb)`.
- **`pythagorean($a, $b)`** — Hypotenuse from legs `a` and `b`.

### Rectangle
- **`rectangle($c, $l, $ap)`** — Area (`"A"`) or perimeter (`"P"`) from length and width.

### Rhombus
- **`rhombusd($D, $d)`** — Area from the major (`D`) and minor (`d`) diagonals.
- **`rhombusl($l)`** — Perimeter from the side length.

### Sphere
- **`sphere($r, $va)`** — Volume (`"V"`) or surface area (`"A"`) from the radius.

### Square
- **`square($l, $ap)`** — Area (`"A"`) or perimeter (`"P"`) from the side length.

### Trapezoid
- **`trapezoidb($B, $b, $h)`** — Area from the major base (`B`), minor base (`b`), and height (`h`).
- **`trapezoidl($B, $b, $l1, $l2)`** — Perimeter from the bases and the two slanted sides.

For functions with a mode parameter (`ap`, `rp`, `vg`, `va`, `vas`), options accept uppercase or lowercase letters (e.g., `"A"` or `"a"`). An unrecognized value returns `null`.

---

## Equations

### `firstDegreeEquation($a, $b)`
Solves a first-degree equation (`ax + b = 0`).

- **`$a`, `$b`** *(float)* — Equation coefficients.
- **Returns** *(float|null)* — The equation's root, or `null` if `a = 0` (no unique solution).

### `secondDegreeEquation($a, $b, $c)`
Solves a second-degree equation (`ax² + bx + c = 0`) using the quadratic formula.

- **`$a`, `$b`, `$c`** *(float)* — Equation coefficients.
- **Returns**:
  - If `delta < 0`: returns the delta value (negative), indicating there are no real roots.
  - If `delta == 0`: returns the single root.
  - If `delta > 0`: returns an associative array `["x1" => ..., "x2" => ...]` with the two roots.

---

## Usage

```php
<?php

require_once 'vendor/autoload.php';

use function MATELAB\basic\currencyConversion;
use function MATELAB\basic\secondDegreeEquation;

echo currencyConversion(100, "BRL"); // 507

$roots = secondDegreeEquation(1, -5, 6);
print_r($roots); // ["x1" => 3, "x2" => 2]
```

## Requirements

- PHP 7.4 or higher (uses the `**` exponentiation operator).