<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  
    <form action="./impressao.php" method="post">
        <h1>Formulário</h1>
            <div class="form">
            <label for="">Nome</label>
            <input name="nome" type="text">
            <label for="">Telefone</label>
            <input name="telefone" type="text">
            <label for="">Usuário</label>
            <input name="usuario" type="text">
            <label for="">Senha</label>
            <input name="senha" type="password">
            <label for="">Confirmar Senha</label>
            <input name="confirmar-senha" type="password">
            <button class="btn btn-primary" type="submit">Enviar</button>
        </div>
    </form>



</body>

</html>