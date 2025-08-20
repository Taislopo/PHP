<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 02</title>
</head>
<body>
<?php
//Mostra na página um título grande: form-cadastro.php.
echo"<h1>form-cadastro.php</h1>";

//Mostra na tela todos os dados que vieram do formulário pelo método POST (para você ver exatamente o que foi enviado).
var_dump($_POST);

$nomeForm = $_POST['nome'];
$telefoneForm = $_POST['telefone'];
$usuarioForm = $_POST['usuario'];
$senhaForm = $_POST['senha'];
$confirmar_senhaForm = $_POST['confirmar-senha'];


//Se a senha digitada ($senhaForm) for diferente da confirmação da senha (confirmar_senhaForm), ele redireciona o usuário para a página tabela.php, sem salvar nada.
if ($senhaForm!= $confirmar_senhaForm) {
    header('location:tabela.php');
    //O header('location:tabela.php'); manda o navegador ir para outra página.
}


$dsn = 'mysql:dbname=db_form;host=127.0.0.1';
$usuario = 'root';
$senha = '';
//Cria uma conexão com o banco de dados usando as informações acima, através da classe PDO
$conn = new PDO($dsn, $usuario, $senha);

$scriptCadastro = "INSERT INTO
-- Monta uma consulta SQL para inserir (salvar) os dados dentro da tabela tb_form.
-- Os :nome, :usuario, etc, são marcadores (placeholders) que serão substituídos pelos valores reais depois — isso ajuda a evitar ataques de segurança.

    tb_form(
    nome,
    usuario,
    telefone,
    senha
    )
    VALUES(
    -- //Aqui, :nome é um placeholder — um lugar onde você vai colocar o valor real depois.
        :nome, 
        :usuario, 
        :telefone,
        :senha
    )";

// Ela prepara uma consulta SQL ($scriptCadastro) para ser executada no banco de dados usando PDO.
// Essa preparação deixa a consulta pronta para receber valores (placeholders) de forma segura.
$scriptPreparado = $conn->prepare($scriptCadastro);

// Executa a consulta preparada, substituindo os marcadores pelos valores que o usuário enviou no formulário.
// Ou seja, insere os dados preenchidos pelo usuário na tabela do banco.
$scriptPreparado->execute( [
    ':nome'=> $nomeForm,
    ':telefone' => $telefoneForm,
    ':usuario' => $usuarioForm,
    ':senha' => $senhaForm
]);
header('location:tabela.php');
//Após salvar os dados, redireciona o navegador para a página tabela.php







