<?php
// if/else/elseif
$numero = 11;

if($numero == 10){
    echo "É igual a 10";
}elseif($numero <= 9){
    echo "É menor ou igual a 9"; 
}
else{
    echo "É maior que 10"; 
}
echo "<hr>";

$media = 5;

echo ($media >= 7) ? "Aprovado!" : "Reprovado!";
echo "<hr>";

// switch case
$cor = "amarelo";
switch($cor):
    case "vermelho":
        echo "A cor é vermelho";
    break;
    case "verde":
        echo "A cor é verde";
    break;
    case "azul":
        echo "A cor é azul";
    break;
    default:
        echo "sua cor não esta no catalogo";
endswitch;