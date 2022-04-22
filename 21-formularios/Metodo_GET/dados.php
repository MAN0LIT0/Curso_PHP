<?php

if(!empty($_GET[''])){
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    
    echo "Seu nome é $nome, e seu email é $email <br>";
}

echo $_GET['idade'].", ".$_GET['altura']."<br>";

var_dump($_GET);
