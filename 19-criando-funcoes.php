<?php
// funções
function exibirNome($nome){
    echo "Meu nome é $nome.";
}

exibirNome("Osvaldo");
echo "<hr>";
//////////////

function calcularMedia($Nome, $n1, $n2, $n3, $n4){
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    if($media >= 7) {
        echo "Aluno(a) $Nome Aprovado(a), com média $media. <br>";
    }else{
        echo "Aluno(a) $Nome Reprovado(a), com média $media. <br>";
    }
}
calcularMedia("Marco", 8, 6, 7, 10);
calcularMedia("Ana", 4, 6, 3, 8);