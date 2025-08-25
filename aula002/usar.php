<?php
echo"<h1>Usar</h1>"; 

$professor = $_POST ["professor"];
$turma = $_POST ["turma"];

$dsn = 'mysql:dbname=db_form;host=127.0.0.1';
$usuario = 'root';
$senha = '';

$conn = new PDO($dsn, $usuario, $senha);

$scriptUsar = 

"UPDATE
 tb_salas

SET
 professor = :professor,
 turma = :turma,

WHERE
  ID = :ID
";

$scriptPreparado = $conn->prepare($scriptUsar);

$scriptPreparado->execute( [
    ':professor'=> $professor,
    ':turma' => $turma,
]);

header('location:tabela.php');


?>