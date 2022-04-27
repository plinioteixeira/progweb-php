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

    echo "<p>Total: $salario</p>"
?>

<?php 
    if ($salario < 500) {
        $salarioNovo = $salario * 1.15;
    } elseif ($salario <= 1000) {
     "<p>$salarioNovo</p>"*1.10;
    } else  {
     "<p>$salarioNovo</p>"*1.05;
    }
    echo "<p> $salarioNovo</p>";
?>
    
</body>
</html>