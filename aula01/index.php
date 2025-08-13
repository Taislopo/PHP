<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 01 PHP</title>
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

    echo 'o nome do jogo é' . $nome . ', foi lancado em' . $lancamento . ', como o valor de' . $valor;
    echo "o nome do jogo pe {$nome}, foi lancado em {$lancamento}, com o valor de {$valor} ";
    echo "o nome do jogo pe $nome, foi lancado em $lancamento, com o valor de $valor ";
    // tem essas 3 formas de concatenar 

    $matriz = [

        [" Ford mustang",      " preto",    "  60.000"],
        [" Maverick Gt 1975",  " vermelho", "  80.000"],
        [" Chevrolet Opala",   " preto",    "  30.000"],
        [" Chevette",          " azul ",    "  25.000"],
        [" Passat",            "  amarelo", "  15.000"]
        // matriz php
    ];


    ?>



    <sectionc class="fundo">
        <h1>CARROS ANTIGOS</h1>
        <img class="img1" src="./img/ford-maverick.jpg" alt="carro maverick preto">
        <img class="img2" src="./img/mustang.jpg" alt="carro mustang vermelho">
        <p>Carros antigos, para muitos, são mais do que simples veículos, são símbolos de história, paixão e nostalgia. Eles evocam memórias afetivas e representam um período da indústria automotiva que desperta admiração e colecionismo. A paixão por carros antigos, muitas vezes, é passada de geração em geração, criando laços familiares e impulsionando a preservação desses veículos. Z</p>

        <table>
            <thead>
                <tr>
                    <th>Carro</th>
                    <th>Cor</th>
                    <th>Preço</th>

                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < count($matriz); $i++) { ?>
                    <tr>
                        <!-- <td> <?php echo $matriz[$i][0] ?>  imprimir na tela </td> -->
                        <td><?= $matriz[$i][0] ?></td>
                        <!-- pode usar o = para imprimir na tela tbm em vez de usar o echo-->
                        <td><?= $matriz[$i][1] ?></td>
                        <td><?= $matriz[$i][2] ?></td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
        <ul>
            <?php
            //count conta quantos elementos tem
            //for ($i = 0; $i < count($matriz); $i++) {
            //  var_dump($matriz{$i});
            //}
            //var_dump($nome) debugar nosso codigo, ver oq esta acontecendo//
            ?>
        </ul>

        



        </section>

</body>

</html>