<?php
//$string = "contato@gmail.com.br";

$data = "13/05/2003";

//$padrao = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br)$/i";
$padraoData = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/";
 
if(preg_match($padraoData, $data)){
    echo "Valido";
    echo "<hr>";
    echo $data;
}else{
    echo "invalido";
    echo "<hr>";
}