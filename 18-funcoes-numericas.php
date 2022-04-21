<?php
// number_format
$db = 1234.56;
$preco = number_format($db, 2, ",", ".");
echo "O valor do produto é $preco";
echo "<hr>";

// round "arredonda conforme as leis da matematica"
echo round(3.4);
echo "<hr>";

// ceil "arrendoda sempre pra mais"
echo ceil(3.10);
echo "<hr>";

// floor "arredonda sempre pra menos"
echo floor(5.9);
echo "<hr>";

// rand "gera numeros aleatorios"
echo rand(1,100);