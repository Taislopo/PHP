<?php 
include'./template/header.php'
?>

<?php 

    $dsn = 'mysql:dbname=db_salas;host=127.0.0.1';
    $usuario = "root";
    $senha = "";

    $conn = new PDO($dsn, $usuario, $senha);
    $scriptConsulta = "SELECT * FROM tb_salas";
    $resultadoConsulta = $conn->query($scriptConsulta)->fetchAll(); 

?>


<section class="fundo">
    <table  class="table tabela">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Salas</th>
                <th scope="col">Professor</th>
                <th scope="col">Turma</th>
                <th scope="col">Ações</th>
                
            </tr>
        </thead>
        <tbody>
            <?php  foreach($resultadoConsulta as $linha) {?>
            <tr>
                <th scope="row"><?= $linha['ID'] ?></th>
                
                <td><?= $linha['salas'] ?></td>
                <td><?= $linha['professor'] ?></td>
                <td><?= $linha['turma'] ?></td>
                <td>
                <a href="./usar.php?idUsar=<?= $linha["ID"]?>" class="btn btn-success">Usar</a>
                <button type="button" class="btn btn-warning">Cadastrar</button>
                <a href="./deletar.php?idDelete=<?= $linha["ID"]?>" class="btn btn-danger">Deletar</a>
            </td>
              <?php   }?>
                  
              
    </table>
</section>

</body>
</html>