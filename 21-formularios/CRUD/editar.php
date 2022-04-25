<?php
// conexão
include_once 'php_action/connection.php';
//header
include_once 'includes/header.php';
// select
if(isset($_GET['id'])){
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM cliente WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($result);
}
?>
<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light"> Editar Cliente </h3>
        <form action="php_action/update.php" method="POST">
        <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome" value="<?php echo $dados['nome'];?>">
                <label for="nome">Nome</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome'];?>">
                <label for="sobrenome">Sobrenome</label>
            </div>

            <div class="input-field col s12">
                <input type="email" name="email" id="email" value="<?php echo $dados['email'];?>">
                <label for="email">Email</label>
            </div>

            <div class="input-field col s12">
                <input type="number" name="idade" id="idade" value="<?php echo $dados['idade'];?>">
                <label for="idade">Idade</label>
            </div>

            <button type="submit" class="btn" name="btn-editar">Atualizar</button>
            <a href="index.php" class="btn purple">Lista de Clientes</a>
        </form>
    </div>
</div>


<?php
//footer
include_once 'includes/footer.php';
?>