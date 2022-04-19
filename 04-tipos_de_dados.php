<?php
/* escalares */
// string
echo "ESCALARES <br>";
$msg = "Ola mundo 123*&&¨%%$";
var_dump($msg); 
echo "<br>";
if(is_string($msg)){
    echo "É uma string";
}else{
    echo "Não é uma string";
}
echo "<br> <hr>";

//int

$idade = 27;
var_dump($idade);
echo "<br>";
if(is_int($idade)){
    echo "É um int";
}else{
    echo "Não é um int";
}
echo "<br> <hr>";

// float

$altura = 1.72;
var_dump($altura);
echo "<br>";
if(is_float($altura)){
    echo "É um float";
}else{
    echo "Não é um float";
}
echo "<br> <hr>";

// boolean

$admin = false;
var_dump($admin);
echo "<br>";
if(is_bool($admin)){
    echo "É um boolean";
}else{
    echo "Não é um boolean";
}
echo "<br> <hr>";
echo "COMPOSTOS <br>";
/* compostos */

// array
$carros =array("Gol", "Uno", "Camaro",12,20.6,true);
var_dump($carros);
echo "<br>";
if(is_array($carros)){
    echo "É um array";
}else{
    echo "Não é um array";
}
echo "<br> <hr>";

// object

class Cliente{
    public $nome;
    public function atribuirNome($nome){
        $this->$nome = $nome;
    }
}
$cliente = new Cliente();
$cliente-> atribuirNome("Marco");
var_dump($cliente);
echo "<br>";
if(is_object($cliente)){
    echo "É um objeto";
}else{
    echo "Não é um objeto";
}
echo "<br> <hr>";
echo "ESPECIAIS <br>";
/* especiais */

// NULL
$cidade = null;
var_dump($cidade);

// Resourse




