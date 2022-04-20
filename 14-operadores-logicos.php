<?php

$idade = 17;
$nome = "Torin";

if(($idade == 16) && ($nome == "Torin")){
    echo "É o Vulgo Torin";
}else{
    echo "Não é o Torin";
}
echo "<br>";
echo "<hr>";


if(($idade == 16) || ($nome == "Torin")){
    echo "É o Vulgo Torin";
}else{
    echo "Não é o Torin";
}
echo "<br>";
echo "<hr>";

if(($idade == 16) xor ($nome == "Torin")){
    echo "É o Vulgo Torin";
}else{
    echo "Não é o Torin";
}
echo "<br>";
echo "<hr>";


if(!($idade == 14) xor !($nome == "Marco")){
    echo "É o Vulgo Torin";
}else{
    echo "Não é o Torin";
}