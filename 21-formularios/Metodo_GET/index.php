<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms Test</title>
</head>
<body>
    <form action="dados.php" method="GET">
        Nome: <input type="text" name="nome"><br>
        <br>
        Email: <input type="email" name="email"><br>
        <br>
        <button type="submit"> Enviar </button>
    </form>
    <br>
    <hr>
    <a href="dados.php?idade=18&altura=1.72">Enviar Dados</a>
</body>
</html>