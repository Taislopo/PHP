<?php
include './template/header.php';
?>

<?php


$dsn = 'mysql:dbname=db_form;host=127.0.0.1';
$usuario = "root";
$senha = "";

$conexaoBanco = new PDO($dsn, $usuario, $senha);
$scriptConsulta = "SELECT * FROM tb_form";
$resultadoConsulta = $conexaoBanco->query($scriptConsulta)->fetchAll();


//    echo"<pre>";
//    //ajudar a ler o codigo
//    var_dump($resultadoConsulta);

?>



<section class="fundo">
    <h1>Tabela de Usuários</h1><br>
    <br><br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">Usuário</th>
                <th scope="col">Senha</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($resultadoConsulta as $linha) { ?>
                <tr>
                    <th scope="row"> <?= $linha['id_form'] ?> </th>
                    <td><?= $linha['nome'] ?></td>
                    <td><?= $linha['telefone'] ?></td>
                    <td><?= $linha['usuario'] ?></td>
                    <td><?= $linha['senha'] ?></td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles">
                            <a href="./impressao.php?idConsulta=<?= $linha['id_form'] ?>" class="btn btn-success">Abrir</a>
                            <a type="button" class="btn btn-warning">Editar</a>
                            <a type="button" class="btn btn-danger">Fechar</a>
                        </div>
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</section>

<?php
include './template/footer.php';

?>