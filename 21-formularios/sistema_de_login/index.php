<?php
// conexão
require_once 'connection.php';
// sessão
session_start();
// checagem do clic no botão
if(isset($_POST['btn-enviar'])){
    $erros = array();
    // tratamento das informações
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    if(empty($login) or empty($senha)){
        $erros[] = "<li> O Campo login/senha precisa ser preenchido!!</li>";
    }else{
        $sql = "SELECT login FROM usuarios WHERE login = '$login'";
        $result = mysqli_query($connect, $sql);
        if(mysqli_num_rows($result) > 0){
            $senha = md5($senha);
            $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
            $result = mysqli_query($connect,$sql);
            if(mysqli_num_rows($result) == 1){
                $dados = mysqli_fetch_array($result);
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['ID'];
                header('location: home.php');
                mysqli_close($connect);
            }else{
                $erros[] = "<li>A senha não confere.</li>";
            }
        }else{
            $erros[] = "<li>Usuario Inesistente.</li>";
        }

    }
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1> Login </h1>
    <?php
    if(!empty($erros)){
        foreach($erros as $erro){
            echo $erro;
        }
    }
    ?>
    
    <hr>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Login: <input type="text" name="login"><br>
        Senha: <input type="password" name="senha"><br>
        <button type="submit" name="btn-enviar"> Entrar </button>

    </form>

    
</body>
</html>