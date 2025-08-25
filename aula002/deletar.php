<?php

echo'<h1>deletar.php</h1>';

$ID = $_GET['idDelete'];

var_dump($ID);

$dsn = 'mysql:dbname=db_salas;host=127.0.0.1';
$usuario = "root";
$senha = "";

$conn= new PDO($dsn, $usuario, $senha);

$scriptDelete = 'DELETE FROM tb_salas where ID = :ID';

$scriptPreparado = $conn->prepare($scriptDelete);
$scriptPreparado->execute(["ID" => $ID]);

if($scriptPreparado->rowCount() > 0){
    echo '<h2>Resgistro apagado com sucesso!!</h2>';
    header('location:tabela-sala.php');
}

else{
    echo"<h2>Algo deu errado!!!</h2>";
}