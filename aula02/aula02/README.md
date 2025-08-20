### PHP - COMANDOS
 No html tem um extensão do sql onde você pode ver seus bancos e tabelas hospedados no computador, na parte connection você pode ver o host, o usuario e senha que vai ser importante para fazer a conexão do banco com o progama

Para fazer a conexão é nescessario então criar as variaveis do host local do banco de dados, no caso criamos  
```php

   $dsn = 'mysql:dbname=db_form;host=127.0.0.1';
   $usuario="root";
   $senha="";
```
   na frente do dbname= é nescessario colocar o nome do seu banco de dados como um endereço.

   Depois é nescessario criar uma variavel onde sera amarzenados o dsn, usuario e senha, uma variavel para armazenar a consulta da tabela do banco de dados aonde voce quer pegar os dados, uma variavel para fazer a conexao dos dois tanto colocando a variavel do banco e da consulta usando o query e o fechAll

  
 ```php 
   $conexaoBanco = new PDO($dsn, $usuario,$senha);
   $scriptConsulta = "SELECT * FROM tb_form";
   $resultadoConsulta =$conexaoBanco->query($scriptConsulta)->fetchAll();
  ```
  e depois usar o foreach especialmente usado para arrays 
```php
   <?php foreach($resultadoConsulta as $linha)   { ?>
                    <tr>
                        <th scope="row"> <?= $linha['id_form'] ?> </th>
                        <td><?= $linha['nome'] ?></td>
                        <td><?= $linha['telefone'] ?></td>
                        <td><?= $linha['usuario'] ?></td>
                        <td><?= $linha['senha'] ?></td>
                        <td>
                           </td>
                    </tr>
     <?php }?>
 ```    
 ### Diferenças da requisição GET e POST

       ##🧠 Quando usar cada um?

      Situação	Melhor método:

      Pesquisas, filtros, navegação	GET
      Formulários de login/senha	POST
      Envio de arquivos	POST
      URLs compartilháveis	GET
      Dados sensíveis	POST



