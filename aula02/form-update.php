<?php

echo"<h1>form-update.php</h1>";


$nomeForm = $_POST['nome'];
$telefoneForm = $_POST['telefone'];
$usuarioForm = $_POST['usuario'];
$senhaForm = $_POST['senha'];
$confirmar_senhaForm = $_POST['confirmar-senha'];


if ($senhaForm!= $confirmar_senhaForm) {
    header('location:tabela.php');
}

$dsn = 'mysql:dbname=db_form;host=127.0.0.1';
$usuario = 'root';
$senha = '';

$conn = new PDO($dsn, $usuario, $senha);

$scriptUpdate = 

"UPDATE
 tb_form

SET
 nome = :nome,
 telefone = :telefone,
 usuario = :usuario,
 senha = :senha

WHERE
  id_form = :id_form
";
$scriptPreparado = $conn->prepare($scriptUpdate);

$scriptPreparado->execute( [
    ':nome'=> $nomeForm,
    ':telefone' => $telefoneForm,
    ':usuario' => $usuarioForm,
    ':senha' => $senhaForm
]);

header('location:tabela.php');
//Após salvar os dados, redireciona o navegador para a página tabela.php
