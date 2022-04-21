<?php
// strtoupper e strtolower
$nome = "Marco Gondim";
$nomeUpercase = strtoupper($nome);
$nomelowercase = strtolower($nome);
echo $nomeUpercase;
echo "<br>";
echo $nomelowercase;
echo "<br>";
echo "<hr>";

// substr
$mensagem = "Olá Mundo!";
echo substr($mensagem, 4, 5);
echo "<br>";
echo "<hr>";

// str_pad
$objeto = "mouse";

$nomeObjeto = str_pad($objeto, 20, "!", STR_PAD_LEFT);
$nomeObjetoR = str_pad($objeto, 20, "*", STR_PAD_RIGHT);
$nomeObjetoB = str_pad($objeto, 20, "*", STR_PAD_BOTH);
echo $nomeObjeto;
echo "<br>";
echo $nomeObjetoR;
echo "<br>";
echo $nomeObjetoB;
echo "<br>";
echo "<hr>";

// str_repeat
$string = str_repeat("Tchuco! ", 5);
echo $string;
echo "<hr>";

// strlen
$msg = "Estou aprendendo PHP!!!";
echo strlen($msg);
echo "<hr>";

// str_replace
$texto = "Uma menima, uma vez me falou que não queria estudar, pois me disse que não valeria a pena!";
$textoCorr = str_replace("falou", "disse", $texto);
echo $textoCorr;
echo "<hr>";

// strpos
echo strpos($texto, "estudar");
