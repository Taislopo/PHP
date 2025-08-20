<?php
include './template/header.php';
?>
<?php

$nomeForm = $_POST['nome'];
$telefoneForm = $_POST['telefone'];
$usuarioForm = $_POST['usuario'];
$senhaForm = $_POST['senha'];
$confirmar_senhaForm = $_POST['confirmar-senha'];

// echo'<pre>';
// var_dump($idConsulta);
// echo'</pre>';


$idConsulta = $_GET['idConsulta']; //criei uma variavel para fazer a requisicao GET
$dsn = 'mysql:dbname=db_form;host=127.0.0.1';
$usuario = "root";
$senha = "";
//new PDO pegando um novo objeto
$conexaoBanco = new PDO($dsn, $usuario, $senha);
$scriptresultado = "SELECT * FROM tb_form where id_form = $idConsulta"; //varivel criada pegando a consulta do id da tabela e fazendo ela se conectar com o GET
$scriptConsulta = $conexaoBanco->query($scriptresultado)->fetch(); //fetchAll quando se pega todos os dados, fetch pega um por um
//nessa conexao pegamos a varivel que contem o endereço do banco de dados e a consulta do id o fechAll é usado em formato de matriz
?>

<h1>Impressão</h1>
<div class="form">


    <h3>Nome</h3>
    <p><?= $scriptConsulta['nome'] ?> </p>
    <h3>Telefone </h3>
    <p><?= $scriptConsulta['telefone'] ?></p>
    <h3>Nome do Usuário</h3>
    <p><?= $scriptConsulta['usuario'] ?></p>
    <h3>Senha</h3>
    <p><?= $scriptConsulta['senha'] ?></p>


</div>


<?php
include './template/footer.php';

?>