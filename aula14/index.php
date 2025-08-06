<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 14 PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php
    echo '<h1> Aqui estou usando o comando php </h1>';
    $nome = 'AC shadows';
    $lancamento = 2025;
    $valor = 349.49;    
    $verdadeiro = false;
    // para se criar variaveis é só usar o $

    echo $nome;
    echo $lancamento;
    echo $valor;
    echo $verdadeiro;
    // sempre que for escrever usar o camando echo

    echo 'o nome do jogo é' . $nome .', foi lancado em' .$lancamento .', como o valor de' . $valor;
    echo "o nome do jogo pe {$nome}, foi lancado em {$lancamento}, com o valor de {$valor} ";
    echo "o nome do jogo pe $nome, foi lancado em $lancamento, com o valor de $valor ";
    // tem essas 3 formas de concatenar 

    $lista = [
  
        [" Carro: Ford mustang", " Cor: preto", " Preço: 60.000"],
        [" Carro: Maverick Gt 1975", " Cor: vermelho", " Preço: 80.000"],
        [" Carro: Chevrolet Opala", " Cor: preto", " Preço: 30.000"],
        [" Carro: Chevette"," Cor: azul ", " Preço: 25.000"],
        [" Carro: Passat", " Cor: amarelo", " Preço: 15.000 "]
    ];


    ?>



    <sectionc class="fundo">
        <h1>CARROS ANTIGOS</h1>
        <img class="img1" src="./img/ford-maverick.jpg" alt="carro maverick preto">
        <img class="img2" src="./img/mustang.jpg" alt="carro mustang vermelho">
        <p>Carros antigos, para muitos, são mais do que simples veículos, são símbolos de história, paixão e nostalgia. Eles evocam memórias afetivas e representam um período da indústria automotiva que desperta admiração e colecionismo. A paixão por carros antigos, muitas vezes, é passada de geração em geração, criando laços familiares e impulsionando a preservação desses veículos. Z</p>

       <ul>
           <?php    
           //count conta quantos elementos tem
             for ($i=0; $i<5; $i++){
                for ($j=0; $j<5; $j++) {
                    
                    echo "lista[".$i."] [".$j."]= " .$lista[$i][$j]."<br>";
                }
             }

            ?>     
        </ul>
   
        

    </section>
    
</body>
</html>