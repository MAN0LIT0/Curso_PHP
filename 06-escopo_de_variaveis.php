<?php
// Escopo global
$nome = "Marco Gondim";
$a = 1;
$b = 3;
$c = 20;

function exibeNome(){
    global $nome;
    echo $nome;
}
exibeNome();
echo "<hr>";
////////////////////

function exibeCidade(){
    // Escopo local
    global $cidade;
    $cidade = "Guararapes";
}

exibeCidade();
echo $cidade;
echo "<hr>";
//////////////////////

function soma(){
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();