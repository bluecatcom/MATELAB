# MateLab

Biblioteca PHP com funções matemáticas para cálculos básicos, geometria, física financeira e equações.

Namespace: `MATELAB\basic`

## Índice

- [Matemática Básica](#matemática-básica)
- [Geometria](#geometria)
- [Equações](#equações)
- [Uso](#uso)

---

## Matemática Básica

### `arithmeticMean($res)`
Calcula a média aritmética de uma lista de números.

- **`$res`** *(string)* — Números separados por vírgula (ex: `"10,20,30"`).
- **Retorno** *(float)* — Média aritmética.

### `percentage($number, $percentage)`
Calcula a porcentagem de um número.

- **`$number`** *(float)* — Valor base.
- **`$percentage`** *(float)* — Percentual a ser calculado.
- **Retorno** *(float)* — Resultado do percentual sobre o número.

### `ruleOfThree($a, $b, $c, $d)`
Resolve regra de três simples, identificando automaticamente qual dos quatro valores é a incógnita (`"x"` ou `"X"`).

- **`$a`, `$b`, `$c`, `$d`** — Três valores numéricos e um deles como `"x"`.
- **Retorno** *(float)* — Valor da incógnita.

### `simpleInterest($c, $i, $t)`
Calcula juros simples.

- **`$c`** *(float)* — Capital.
- **`$i`** *(float)* — Taxa de juros.
- **`$t`** *(float)* — Tempo.
- **Retorno** *(float)* — Valor dos juros.

### `compoundInterest($c, $i, $t)`
Calcula juros compostos.

- **`$c`** *(float)* — Capital.
- **`$i`** *(float)* — Taxa de juros.
- **`$t`** *(float)* — Tempo.
- **Retorno** *(float)* — Montante final.

### `currencyConversion($value, $currency)`
Converte um valor para a cotação da moeda informada.

- **`$value`** *(float)* — Valor a ser convertido.
- **`$currency`** *(string)* — Código da moeda (`"USD"`, `"EUR"`, `"BRL"`, etc.).
- **Retorno** *(float|null)* — Valor convertido, ou `null` se a moeda não for suportada.

Moedas suportadas: USD, EUR, GBP, JPY, CNY, BRL, CAD, AUD, CHF, INR, KRW, MXN, ARS.

### `temperatureConversion($value, $temperature1, $temperature2)`
Converte temperatura entre Celsius, Fahrenheit e Kelvin.

- **`$value`** *(float)* — Valor da temperatura.
- **`$temperature1`** *(string)* — Unidade de origem (`"C"`, `"F"` ou `"K"`).
- **`$temperature2`** *(string)* — Unidade de destino (`"C"`, `"F"` ou `"K"`).
- **Retorno** *(float|null)* — Valor convertido, ou `null` se as unidades forem inválidas.

---

## Geometria

### Círculo
- **`circler($r, $ap)`** — Área (`"A"`) ou perímetro (`"P"`) a partir do raio.
- **`circled($d, $rp)`** — Raio (`"R"`) ou perímetro (`"P"`) a partir do diâmetro.

### Cone
- **`conerh($r, $h, $vg)`** — Volume (`"V"`) a partir de raio e altura, ou geratriz (`"G"`).
- **`conerg($r, $g)`** — Área lateral a partir de raio e geratriz.

### Cubo
- **`cube($l, $vas)`** — Volume (`"V"`), área (`"A"`) ou soma das arestas (`"S"`) a partir do lado.

### Cilindro
- **`cylinder($r, $h, $va)`** — Volume (`"V"`) ou área (`"A"`) a partir de raio e altura.

### Distância e Pitágoras
- **`distance($xb, $xa, $yb, $ya)`** — Distância entre dois pontos `(xa, ya)` e `(xb, yb)`.
- **`pythagorean($a, $b)`** — Hipotenusa a partir dos catetos `a` e `b`.

### Retângulo
- **`rectangle($c, $l, $ap)`** — Área (`"A"`) ou perímetro (`"P"`) a partir de comprimento e largura.

### Losango
- **`rhombusd($D, $d)`** — Área a partir das diagonais maior (`D`) e menor (`d`).
- **`rhombusl($l)`** — Perímetro a partir do lado.

### Esfera
- **`sphere($r, $va)`** — Volume (`"V"`) ou área (`"A"`) a partir do raio.

### Quadrado
- **`square($l, $ap)`** — Área (`"A"`) ou perímetro (`"P"`) a partir do lado.

### Trapézio
- **`trapezoidb($B, $b, $h)`** — Área a partir das bases maior (`B`) e menor (`b`) e altura (`h`).
- **`trapezoidl($B, $b, $l1, $l2)`** — Perímetro a partir das bases e dos lados oblíquos.

Para as funções com parâmetro de modo (`ap`, `rp`, `vg`, `va`, `vas`), as opções aceitam letras maiúsculas ou minúsculas (ex: `"A"` ou `"a"`). Um valor não reconhecido retorna `null`.

---

## Equações

### `firstDegreeEquation($a, $b)`
Resolve equação do 1º grau (`ax + b = 0`).

- **`$a`, `$b`** *(float)* — Coeficientes da equação.
- **Retorno** *(float|null)* — Raiz da equação, ou `null` se `a = 0` (equação sem solução única).

### `secondDegreeEquation($a, $b, $c)`
Resolve equação do 2º grau (`ax² + bx + c = 0`) usando Bhaskara.

- **`$a`, `$b`, `$c`** *(float)* — Coeficientes da equação.
- **Retorno**:
  - Se `delta < 0`: retorna o valor do delta (negativo), indicando que não há raízes reais.
  - Se `delta == 0`: retorna a raiz única.
  - Se `delta > 0`: retorna um array associativo `["x1" => ..., "x2" => ...]` com as duas raízes.

---

## Uso

```php
<?php

require_once 'vendor/autoload.php';

use function MATELAB\basic\currencyConversion;
use function MATELAB\basic\secondDegreeEquation;

echo currencyConversion(100, "BRL"); // 507

$roots = secondDegreeEquation(1, -5, 6);
print_r($roots); // ["x1" => 3, "x2" => 2]
```

## Requisitos

- PHP 7.4 ou superior (uso do operador `**` para potenciação).
