<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <h2 style="text-align: center;">Exercício 3</h2>

<?php 
    $salario = 600;

    echo "<p>Salário antigo: <span style='color:red; font-size: 25px'>R$$salario</span></p>"
?>

<?php 
    if ($salario < 500) {
        $salarioNovo = $salario * 1.15;
    } elseif ($salario <= 1000) {
     $salarioNovo = $salario *1.10;
    } else  {
     $salarioNovo = $salario *1.05;
    }
    
    echo "<p>Salário reajustado: <span style='color:blue; font-size: 25px'>R$$salarioNovo</span></p>";
?>
<!-- number_format (
    valor,
    quantidades de casas decimais,
    "separador de casa decimal"
    "separador de milhar"
) -->
<p>R$ <?=number_format($salario,2,",",".")?> e R$ <?=number_format($salarioNovo,2,",",".")?> </p>

    
</body>
</html>