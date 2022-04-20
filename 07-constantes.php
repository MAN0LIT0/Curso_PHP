<?php
// constantes
define("NOME", "Marco Gondim");
define("IDADE", 18);
define("ALTURA", 1.72);
define("CASADO", true);

define("TIMES", ['vasco','corintians','flamengo']);

echo 'Meu nome é '.NOME.', minha idade é '.IDADE.' e minha altura é '.ALTURA.'.';
echo "<hr>";
echo TIMES[0]."<br>";
echo TIMES[1]."<br>";
echo TIMES[2]."<br>";
var_dump(TIMES);
echo "<hr>";

function exibeNome(){
    echo NOME;
}
exibeNome();