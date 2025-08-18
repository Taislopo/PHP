<?php
include './template/header.php';
?>

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


<?php
include './template/footer.php';

?>