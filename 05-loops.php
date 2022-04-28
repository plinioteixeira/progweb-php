<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops PHP</title>
</head>
<body>
    <h1>Loops (ou laços de repetição)</h1>
    <hr>

    <h2>while (enquanto)</h2>
<?php 
$i = 1;
while ($i <= 3) { // ou se $i < 4
?>
    <p><?=$i?></p>
<?php
    $i++; // Atualizar a variável de controle
}
?>

<h2>do/while (faça/enquanto)</h2>

<?php 
$j = 1;
do {
?>
<div style="border: solid 1px;">
    <h3>Exemplo <?=$j?> </h3>
</div>

<?php
    $j++;
} while ($j <= 5);
?>

<h2>for (para)</h2>
<?php 
// inicialização, condição, atualização
for ($i=1; $i <= 3; $i++) { 
    ?>
<p>Valor de i é <b><?=$i?></b></p>

<?php
}
?>

<h2>Exercício array e loop</h2>
<p>Crie um array contendo os nomes dos 12 meses do ano</p>
<p>usando um loop, faça o nome dos meses aparecer em uma lista ordenada</p>

<ol>
<?php 
    $array = array(
        1 => "janeiro",
        2 => "fevereiro",
        3 => "março",
        4 => "abril",
        5 => "maio",
        6 => "junho",
        7 => "julho",
        8 => "agosto",
        9 => "setembro",
        10 => "outubro",
        11 => "novembro",
        12 => "dezembro",
    );
    $n = 1;
    do {?>
        <li><?=$array[$n]?></li>
    <?php
    $n++;
    } while ($n <= 12);
?>
<?php 

    ?>
    
<?php

?>
</ol>

</body>
</html>