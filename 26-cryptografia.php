<?php
// criptografias
// base64
$senha = "123456";

$novaSenha = base64_encode($senha);

echo "base64: ".$novaSenha."<br>";
echo "Sua senha é ". base64_decode($novaSenha);
echo "<hr>";

//md5 "32 caracteres"
echo "Md5: ". md5($senha)."<br>"; 
echo "<hr>";

// Sha1
echo "Sha1: ". sha1($senha)."<br>"; 
echo "<hr>";

// password hash
$options = [
    'cost' => 10, 
];
$senha_db = '$2y$10$yjycdX.21BoDx0uZuzLQ0uwHNrAeiVXzojHGQPaf6lWO.9Es28Flq';

$senha_segura = password_hash($senha, PASSWORD_DEFAULT, $options); 
echo $senha_segura."<br>";

if(password_verify($senha, $senha_db)){
    echo "senha valida";
}else{
    echo "senha invalida";
}
