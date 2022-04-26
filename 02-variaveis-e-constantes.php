<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e constantes</title>
</head>
<body>
    <h1>Manipulando dados na memória</h1>
    <hr>


    <?php
    // Variáveis
    $curso = "Programador Web";
    $ano = 2022;
    $preco = 2500.42;

    echo "<h2>Saída de dados completa</h2>";
    echo "<p>$curso</p>";
    echo '<p>$curso</p>';
    echo "<div>$ano</div>";
    echo "<p><b>$preco</b></p>";
    ?>
    <h2>Saída de dados intercalando HTML e PHP</h2>
    <p> <?php echo $curso ?> </p>
    <p> <?=$curso?> </p> <!-- sintaxe abreviada de saída -->
    <div> <?=$ano?> </div>
    <p> <b> <?=$preco?> </b> </p>
    <p>
        Estamos fazendo o curso de <?=$curso;?> no ano de <?=$ano?>
    </p>


    <?php 
    // constante
    // forma 1:
        define("MEU_NOME", "Plinio");

        // forma 2:
        const ESCOLA = "Senac penha";

        // obs.: precisa concatenar (ponto .)
        echo "<p>".MEU_NOME."</p>";
        echo "<p>".ESCOLA."</p>";
    ?>
        <p> <?=MEU_NOME?> </p>
        <p> <?=ESCOLA?> </p>
    


    
</body>
</html>