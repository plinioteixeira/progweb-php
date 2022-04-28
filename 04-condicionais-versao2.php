<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais PHP (Versão 2)</title>

    <style>
        .aprovado {color: blue;}
        .reprovado { color: red;}
        .recuperacao {color: orangered;}
    </style>

</head>
<body>
    <h1>Condicionais (Versão 2)</h1>
    <hr>

    <h2>Condicional simples</h2>
    <?php 
    $numero = 5;
    $outroNumero= 1;

    if ($numero > $outroNumero) { //início do if
     ?>
     <p><?=$numero?> é maior que <?=$outroNumero?>!</p>   
     <?php
    } // fim do if
    ?>

    <h2>Condicionais compostas</h2>
    <?php 
    $nota1 = 7;
    $nota2 = 9;
    $media = ($nota1 + $nota2) / 2;
    ?>
    <p>Média: <?=$media?></p>
    <?php
    if ($media >= 7) {
    ?>
        <p class='aprovado'>Aprovado</p>
    <?php
    } else {
    ?>
        <p class='reprovado'>Reprovado</p>
    <?php
    }
    ?>

    <h2>Condicionais encadeadas</h2>
    <?php 
    if ($media >= 7) {
    ?>
        <p class='aprovado'>Aprovado</p>
    <?php
    } elseif ($media >= 6 && $media < 7) { /* && significa E */
    ?>
         <p class='recuperacao'>Recuperação</p>
    <?php
    } else {
    ?>
        <p class='reprovado'>Reprovado</p>
    <?php
    }
    ?>

    <h2>Switch/case</h2>

    <?php 
    $opcao = 3;

    switch ($opcao){
        case 1: $assunto = "Reclamação"; break;
        case 2: $assunto = "Elogio"; break;
        case 3: $assunto = "Informações"; break;
        default: $assunto = "Falar com um humano"; break;
    }
    ?>
    <p><?=$assunto?></p>
    

</body>
</html>