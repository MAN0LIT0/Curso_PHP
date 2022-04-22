<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms Test</title>
</head>
<body>
    <?php
    // upload imagem
    if(isset($_POST['enviar_files'])){
        // definindo os formatos
        $formatosPermitidos = array("png", "jpeg", "jpg", "gif", "PNG");
        $quantidadeArquivos = count($_FILES['file']['name']);
        $contador = 0;
        while($contador < $quantidadeArquivos){
            // pegando a extensao do arquivo
            $extensao = pathinfo($_FILES['file']['name'][$contador], PATHINFO_EXTENSION);
            // checando a extensao
            if(in_array($extensao, $formatosPermitidos)){
                $pasta = "arquivos/";
                $temporario = $_FILES['file']['tmp_name'][$contador];
                $novoNome = uniqid().".$extensao";
                // movendo para a pasta ja com o novo nome
                if(move_uploaded_file($temporario, $pasta.$novoNome)){
                     echo "Upload feito com sucesso para $pasta$novoNome<br>";
                }else{
                    echo "Erro, não foi possivel enviar o arquivo $temporario<br>";
                }
            }else{
                echo "$extensao não é permitida <br>";
            }
            $contador++;
        }   
    }
    
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"
     enctype="multipart/form-data">
        <input type="file" name="file[]" multiple><br>
    
        <button type="submit" name="enviar_files"> Enviar </button>
    </form>
</body>
</html>