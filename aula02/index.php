<?php
include './template/header.php';

//O isset() serve para verificar se uma variável existe e se ela não é nula (ou seja, se tem algum valor dentro). 
// O empty() verifica se uma variável está vazia.
// Se sim, eles retorna true.
// Se não, eles retorna false.

//além de verificar se o parâmetro existe, ele também verifica se o valor de erro é exatamente igual a 'sim'.

if(isset($_GET['erro']) && $_GET['erro'] =='sim') {
    echo'<h1>A senha que você digitou esta errado</h1>';
}
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