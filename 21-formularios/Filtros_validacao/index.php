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
// filtros de validação
/*
funções
(filter_input - filter_var)
FILTER_VALIDADE_INT
FILTER_VALIDATE_EMAIL
FILTER_VALIDATE_FLOAT
FILTER_VALIDATE_IP
FILTER_VALIDADE_URL
*/
?>
<?php
if(isset($_POST['enviar_form'])){
    // array de erros
    $erros = array();

    // validações
    if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)){
        $erros[] = "Idade precisa ser um inteiro!!";
    }

    if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){
        $erros[] = "Email precisa ser valido!!";
    }

    if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)){
        $erros[] = "Peso precisa ser um float!!";
    }

    if(!$IP = filter_input(INPUT_POST, 'IP', FILTER_VALIDATE_IP)){
        $erros[] = "O IP tem que ser valido!!";
    }

    if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)){
        $erros[] = "A url precisa ser valida";
    }

    // exibindo mensagens
    if(!empty($erros)){
        foreach ($erros as $erro){
            echo "<li> $erro </li>";
        }
    }else{
        echo "Parabens, seus dados estão corretos!";
    }

    }
   /* $idade = $_POST['idade'];
    $email = $_POST['email'];
    $peso = $_POST['peso'];
    $ip = $_POST['IP'];
    $url = $_POST['url'];*/



?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Idade: <input type="text" name="idade"><br>
        Email: <input type="email" name="email"><br>
        Peso: <input type="text" name="peso"><br>
        IP: <input type="text" name="IP"><br>
        URL: <input type="text" name="url"><br>

        <button type="submit" name="enviar_form"> Enviar </button>
    </form>
</body>
</html>