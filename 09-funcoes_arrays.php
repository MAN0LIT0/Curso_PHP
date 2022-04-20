<?php
$nomes = array("Primo" =>"Marco", "Prima" =>"Maria", "tiu" =>"Carlos");
// is_array
if(is_array($nomes)){
    echo "É um array";
}else{
    echo "Não é um array";
}
echo "<br>";
echo "<hr>";
// in_array
if(in_array("Marco", $nomes)){
    echo "existe no array";
}else{
    echo "não existe no array";
}
echo "<br>";
echo "<hr>";

// array_keys
$keys =  array_keys($nomes);
print_r($keys);
echo "<br>";
echo "<hr>";

// array_values
$values = array_values($nomes);
print_r($values);
echo "<br>";
echo "<hr>";

// array merge
$Carros = array("Camaro", "Uno", "Gol");
$Motos = array("z1000", "hornet", "s1000rr");

$veiculos = array_merge($Carros, $Motos);

print_r($veiculos);
echo "<br>";
echo "<hr>";

// array_pop(remove do começo) e array_shift(remove do final) 
$Pessoas = array("Marco", "Pedro", "jobson");
print_r($Pessoas);
echo "<br>";
echo array_pop($Pessoas);
echo "<br>";
print_r($Pessoas);
echo "<br>";
echo array_shift($Pessoas);
echo "<br>";
print_r($Pessoas);
echo "<br>";
echo "<hr>";

// array_unshift(adiciona no começo) e array_push(adiciona no final)
$frutas = array("uva", "laranja", "banana");
print_r($frutas);
echo "<br>";
array_unshift($frutas, "mixirica", "abacaxi");
print_r($frutas);
echo "<br>";
array_push($frutas, "acerola", "maçã");
print_r($frutas);
echo "<br>";
echo "<hr>";

// array_combine 
$keys = array("Campeão", "vice", "terceiro");
$values = array("Vasco", "flamengo", "botafogo");

$times = array_combine($keys, $values);
print_r($times);
echo "<br>";
echo "<hr>";

// array_sum
$soma = array(5.6,6,8.7,7,3);
$total = array_sum($soma);
echo $total;
echo "<br>";
echo "<hr>";

// explode
$data = "30/02/2022";
$novaData = explode('/', $data);
print_r($novaData);
echo "<br>";

$frase = "meu nome não é joao";
$array_frase = explode(' ', $frase);
print_r($array_frase);
echo "<br>";
echo count($array_frase);
echo "<br>";
echo "<hr>";

// implode
$frase_junta = implode(" ", $array_frase);
print_r($array_frase);
echo "<br>";
echo $frase_junta;