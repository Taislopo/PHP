<?php

echo'<h1>form-delete.php</h1>';

$id_form = $_GET['idDelete'];

var_dump($id_form);

$dsn = 'mysql:dbname=db_form;host=127.0.0.1';
$usuario = "root";
$senha = "";

$conn= new PDO($dsn, $usuario, $senha);

$scriptDelete = 'DELETE FROM tb_form where id_form = :id_form';

$scriptPreparado = $conn->prepare($scriptDelete);
$scriptPreparado->execute([':id_form' => $id_form]);

if($scriptPreparado->rowCount() > 0){
    echo '<h2>Resgistro apagado com sucesso!!</h2>';
    header('location:tabela.php');
}

else{
    echo"<h2>Algo deu errado!!!</h2>";
}