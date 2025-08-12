<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Execicios php</title>
</head>

<body>
    <?php
    //Escreva um programa que verifique se um número fornecido pelo usuário é positivo, negativo ou zero.
    $numero = 15;

    if ($numero > 0) {
        echo " O numero é positivo";
    } else {
        echo " O numero é negativo";
    }
    ?>

    <?php
    //Crie um programa que leia a idade de uma pessoa e informe se ela é maior de idade (18 anos ou mais) ou menor de idade.
    $idade = 20;

    if ($idade > 18) {
        echo "Você é maior de idade";
    } else {
        echo "Você é menor de idade";
    }
    ?>

    <?php
    //Escreva um programa que verifique se um número fornecido pelo usuário é par ou ímpar. resolver
    $num = 5;

    if (($num / 2)) {
        echo " Esse numero é Par";
    } else {
        echo " Esse numero é Ímpar";
    }
    ?>

    <?php
    // Imprima os números de 1 a 10 utilizando um laço de repetição.
    for ($i = 0; $i < 11; $i++) {

        echo $i;
    }
    ?>

    <?php
    //Imprima todos os números pares de 1 a 20 utilizando um laço de repetição. resolver
    for ($n = 2; $n <= 20; $n += 2) {

        echo $n;
    }
    ?>
    <?php
    //Calcule a soma de todos os números de 1 a 100 utilizando um laço de repetição.(5050)
    $soma = 0;
    for ($i = 0; $i < 101; $i++) {
        $soma = $soma + $i;
    }
    echo " A soma de 1 a 100 é {$soma}";
    ?>
    <?php
    //Escreva um programa que verifique se uma letra fornecida pelo usuário é uma vogal ou uma consoante.
    $letra = 'b';
    if ($letra = ["a", "e", "i", "o", "u"]) {
        echo "A letra é vogal";
    } else {
        echo "A letra é consoante";
    }
    ?>

    <?php
    //Escreva um programa que leia um mês do ano e informe quantos dias ele tem.

    $meses = [
        "janeiro" => "30",
        "fevereiro" => "28",
        "março" => "31",
        "abril" => "30",
        "maio" => "31",
        "junho" => "30",
        "julho" => "31",
        "agosto" => "30",
        "setembro" => "31",
        "outubro" => "30",
        "novenbro" => "31",
        "dezembro" => "30"
    ];
    $mes = "janeiro";
    $meses[$mes][$mes];

    ?>
    <?php
    //Escreva um programa que leia o salário de um funcionário e aplique um aumento de acordo com a seguinte regra: salários menores que R$1000 recebem 20% de aumento, entre R$1000 e R$2000 recebem 15%, e acima de R$2000 recebem 10%.
    $salario = 1500;

    if ($salario < 1000) {
        $novoSalario = $salario + ($salario * 0.20);
    } elseif ($salario <= 2000) {
        $novoSalario = $salario + ($salario * 0.15);
    } else {
        $novoSalario = $salario + ($salario * 0.10);
    }

    echo "Salário original: R$ $salario\n";
    echo "Novo salário: R$ $novoSalario\n";

    ?>

    <?php
    //Imprima os primeiros 10 números da sequência de Fibonacci utilizando um laço de repetição.
    $a = 0;
    $b = 1;

    echo "Sequência de Fibonacci (10 primeiros números):\n";

    for ($i = 0; $i < 10; $i++) {
        echo $a . "\n";

        // Próximo número é a soma dos dois anteriores
        $proximo = $a + $b;
        $a = $b;
        $b = $proximo;
    }

    ?>




</body>

</html>