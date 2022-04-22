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
// filtros de sanitização
/*
funções (filter_input - filter_var)
FILTER_SANITIZE_SPECIAL_CHARS
FILTER_SANITIZE_NUMBER_INT
FILTER_SANITIZE_EMAIL
FILTER_SANITIZE_URL
*/
?>

<?php
if(isset($_POST['enviar_form'])){
    // array de erros
    $erros = array();

    // sanitizações
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    if(filter_var($idade, FILTER_VALIDATE_INT)){
        $erros[] = "A idade precisar ser um numero inteiro!!!";
    }

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $erros[] = "O email precisar ter um formato valido!!!";
    }

    $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
    if(filter_var($url, FILTER_VALIDATE_URL)){
        $erros[] = "A url precisar ter um formato valido!!!";
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
        Nome: <input type="text" name="nome"><br>
        Idade: <input type="text" name="idade"><br>
        Email: <input type="email" name="email"><br> 
        URL: <input type="text" name="url"><br>

        <button type="submit" name="enviar_form"> Enviar </button>
    </form>
</body>
</html>