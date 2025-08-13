<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<?php
   $dsn = 'mysql:dbname=db_form;host=127.0.0.1';
   $usuario="root";
   $senha="";

   $conexaoBanco = new PDO($dsn, $usuario,$senha);
   $scriptConsulta = "SELECT * FROM tb_form";
   $resultadoConsulta =$conexaoBanco->query($scriptConsulta)->fetchAll();
 
//    echo"<pre>";
//    //ajudar a ler o codigo
//    var_dump($resultadoConsulta);
   
?>

<body>

    <section>
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
                <?php foreach($resultadoConsulta as $linha)   { ?>
                    <tr>
                        <th scope="row"> <?= $linha['id_form'] ?> </th>
                        <td><?= $linha['nome'] ?></td>
                        <td><?= $linha['telefone'] ?></td>
                        <td><?= $linha['usuario'] ?></td>
                        <td><?= $linha['senha'] ?></td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles">
                                <button type="button" class="btn btn-success">Abrir</button>
                                <button type="button" class="btn btn-warning">Editar</button>
                                <button type="button" class="btn btn-danger">Fechar</button>
                            </div>
                        </td>
                    </tr>
                <?php }?>
            
            </tbody>
        </table>
    </section>


</body>

</html>