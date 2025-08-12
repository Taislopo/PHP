<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impressao</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php
    $nomeForm = $_POST['nome'];
    $telefoneForm = $_POST['telefone'];
    $usuarioForm = $_POST['usuario'];
    $senhaForm = $_POST['senha'];
    $confirmar_senhaForm = $_POST['confirmar-senha'];

    // echo'<pre>';
    // var_dump($_POST);
    // echo'</pre>';

    ?>
        <h1>Impressão</h1>
        <div class="form">

        <h3>Nome</h3>
        <p><?= $nomeForm ?> </p>
        <h3>Telefone </h3>
        <p><?= $telefoneForm ?></p>
        <h3>Nome do Usuário</h3>
        <p><?= $usuarioForm ?></p>
        <h3>Senha</h3>
        <p><?= $senhaForm ?></p>
        <h3>Confirmar senha</h3>
        <p><?= $confirmar_senhaForm ?></p>
        
    </div>



</body>

</html>