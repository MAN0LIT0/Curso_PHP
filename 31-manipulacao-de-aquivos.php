<?php
// manipulação de arquivos

$arquivo  = 'arquivo.txt';
$conteudo = "conteudo de teste \r\n";
$tamanhoArquivo = filesize($arquivo);

//$arquivoAberto = fopen($arquivo, 'a');
$arquivoAberto = fopen($arquivo, 'r');
while(!feof($arquivoAberto)){
    $linha = fgets($arquivoAberto, $tamanhoArquivo);

    echo $linha."<br>";
}
//fwrite($arquivoAberto, $conteudo);
fclose($arquivoAberto);


