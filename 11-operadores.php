<?php
// operadores
echo 10 + 10;
echo "<br>";
echo 15 - 7;
echo "<br>";
echo 9 * 7;
echo "<br>";
echo 25 / 5;
echo "<br>";
echo 17 % 5;
echo "<br>";
echo 3 ** 2;

echo "<hr>";

$a = 20;
$b = 10;
$c = 5;
$d = 6;

$adicao = $a + $b;

echo $adicao;
echo "<hr>";

$subtracao = $b - $c;
echo $subtracao;
echo "<hr>";

$multiplicacao = $a * $b;
echo $multiplicacao;
echo "<hr>";

$divisao = $a / $c;
echo $divisao;
echo "<hr>";

$modulo = $a % $d;
echo $modulo;
echo "<hr>";

$expo = $a ** $d;
echo $expo;
echo "<hr>";

echo (5 + 7 + 9 + 8) / 4;

// operadores incremento e decremento

$valor = 20;
echo "<hr>";
// pré-incremento
echo ++$valor;
$valor = 20;
echo "<br>";
// pos-incremento
echo $valor++;
$valor = 20;
echo "<br>";
// pré-decremento
echo --$valor;
$valor = 20;
echo "<br>";
// pos-decremento
echo $valor--;