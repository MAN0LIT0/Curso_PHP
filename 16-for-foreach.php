<?php

for ($contador = 0; $contador <= 10; $contador++){
    echo "9 X $contador = ". ($contador*9)."<br>";
}
echo "<hr>";

$cores = array("Azul", "Branco", "Verde", "Amarelo", "Preto");

foreach($cores as $cor){
    echo "A cor é $cor <br>";
}
echo "<br>";

foreach($cores as $indice => $cor){
    echo "A cor é $indice-$cor <br>";
}