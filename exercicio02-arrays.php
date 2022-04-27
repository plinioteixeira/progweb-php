<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>

<?php 
    $dados1 = [
        "nome" => "Roberto",
        "idade" => 55,
        "email" => "roberto@gmail.com",
        "sexo" => "masculino"
    ]
?>
<?php 
    $dados2 = [
        "nome" => "Lauana",
        "idade" => 15,
        "email" => "lauana@gmail.com",
        "sexo" => "feminino"
    ]
?>
<h1 style="text-align: center; text-shadow: 2px 2px 5px black;">Exercício 2</h1>

<p style="background-color: lightblue; box-shadow: 1px 1px 10px lightblue;"> Bom dia, boa tarde, boa moite meu nome é <b style="text-shadow: 3px 3px 4px black;"><?=$dados1["nome"]?></b> e tenho apenas <?=$dados1["idade"]?> anos ainda  se precisar contatar anote meu email, que seria <i style="text-shadow: 2px 2px 10px black;"><?=$dados1["email"]?></i> </p>

<p style="background-color: lightcoral; box-shadow: 1px 1px 10px lightcoral;"> Bom dia, boa tarde, boa moite meu nome é <b style="text-shadow: 3px 3px 4px black;"><?=$dados2["nome"]?></b> e já tenho <?=$dados2["idade"]?> anos se quiser pode anotar meu email, que é <i style="text-shadow: 2px 2px 10px black;"><?=$dados2["email"]?></i> </p>
    
</body>
</html>
