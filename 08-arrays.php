<?php
// Arrays numericos
$Carros = array(1=>"BMW", 4=>"Camaro", 3=>"Ferrari");
$Carros[] = "Ram2500"; 
$Carros[8] = "Mustang"; 
print_r($Carros);
echo "<br>";
echo $Carros[1]."<br>";
echo $Carros[4]."<br>";
echo $Carros[3]."<br>";
echo $Carros[5]."<br>";
echo $Carros[8]."<br>";
echo count($Carros);
///////////////
echo "<hr>";
$motos = array();
$motos[] = "hornet";
$motos[] = "z1000";
$motos[] = "s1000rr";
$motos[6] = "xj6";
print_r($motos);
echo "<br>";
echo $motos[0]."<br>";
echo $motos[1]."<br>";
echo $motos[2]."<br>";
echo $motos[6]."<br>";
echo count($motos);
echo "<br>";
$clientes = ["Marco", "Juceli", "Fernanda"];
print_r($clientes);
echo "<br>";
echo count($clientes);
echo "<hr>";

// Count

$total_Motos = count($motos);
echo $total_Motos;
echo "<hr>";
// foreach
foreach($Carros as $carro){
    echo $carro."<br>";
}
echo "<hr>";

// Arrays associativos
$Pessoa = array("nome"=> "Marco", "idade"=> 18, "altura"=>1.75);
$Pessoa["cidade"] = "Guararapes";
echo $Pessoa["nome"]."<br>";
echo $Pessoa["idade"]."<br>";
echo $Pessoa["altura"]."<br>";
echo $Pessoa["cidade"]."<br>";
print_r($Pessoa);
echo "<hr>";

foreach($Pessoa as $indice => $valor){
    echo $indice.": ".$valor."<br>";
}
echo "<hr>";
// arrays multidimencionais
$times = array(
    "cariocas" => array("campeao" =>"vasco","vice" =>"flamengo","terceiro" =>"botafogo"),
    "paulistas" => array("santos", "saopaulo", "palmeiras"),
    "baianos" => array("bahia", "vitoria", "caetité")
);

echo $times["paulistas"][0];
echo "<br>";
echo "<br>";

foreach($times["cariocas"] as $indice => $valor){
    echo $indice.": ".$valor."<br>";
}
echo "<hr>";
foreach($times["paulistas"] as $valor){
    echo $valor."<br>";
}
echo "<hr>";
foreach($times["cariocas"] as $valor){
    echo $valor."<br>";
}
