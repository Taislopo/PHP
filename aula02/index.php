<?php
include './template/header.php';

//O isset() serve para verificar se uma variável existe e se ela não é nula (ou seja, se tem algum valor dentro). 
// O empty() verifica se uma variável está vazia.
// Se sim, eles retorna true.
// Se não, eles retorna false.

//além de verificar se o parâmetro existe, ele também verifica se o valor de erro é exatamente igual a 'sim'.

if (isset($_GET['erro']) && $_GET['erro'] == 'sim') {
    echo '<h1>A senha que você digitou esta errado</h1>';
}

$nome = "";
$telefone = "";
$usuario = "";
$tituloForm = "";
$actionFormulario = "";


//!na frente do empty é um não uma negação
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id_form = $_GET['id'];
    $dsn = 'mysql:dbname=db_form;host=127.0.0.1';
    $usuario = "root";
    $senha = "";

    $conn = new PDO($dsn, $usuario, $senha);

    $scriptSelect = "SELECT * FROM tb_form WHERE id_form = $id_form";

    $dadosSelect = $conn->query($scriptSelect)->fetch();

    $nome = $dadosSelect['nome'];
    $telefone = $dadosSelect['telefone'];
    $usuario = $dadosSelect['usuario'];
    $tituloForm = "Atualizar Usuario";
    $actionFormulario = "./form-update.php";
}

?>



<h1 class="tilt"><?= $tituloForm ?></h1>
<form action="<?= $actionFormulario ?>" method="post">

    <input type="hidden" value="<?= $id_form ?>">
    <div class="form">
        <label for="">Nome</label>
        <input value="<?= $nome ?>" name="nome" type="text">
        <label for="">Telefone</label>
        <input value="<?= $telefone ?>" name="telefone" type="text">
        <label for="">Usuário</label>
        <input value="<?= $usuario ?>" name="usuario" type="text">
        <label for="">Senha</label>
        <input name="senha" type="password">
        <label for="">Confirmar Senha</label>
        <input name="confirmar-senha" type="password">
        <button class="btn btn-primary" type="submit">Enviar</button>
    </div>
</form>


    <?php
    include './template/footer.php';

    ?>