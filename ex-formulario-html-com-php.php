<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>

celular
samsung, penalty, natura, nestlé
valor de 100 até 10000 acrescentando centavos
quantidade de produtos 
descrever porque quer

<h1>Formulário de cadastro</h1>
<hr>

<form action="">

    <p>
        <label for="nome">Nome:</label>
        <input required type="text" name="nome" id="nome">
    </p>

    <div>
        <p>Fabricante: <br></p>

        <input type="radio" name="fabricante" id="samsung" value="samsung">
            <label for="samsung">Samsung</label>

        <input type="radio" name="fabricante" id="penalty" value="penalty">
            <label for="penalty">Penalty</label>

        <input type="radio" name="fabricante" id="natura" value="natura">
            <label for="natura">Natura</label>

        <input type="radio" name="fabricante" id="nestlé" value="nestlé">
            <label for="nestlé">Nestlé</label>

    </div>

    <div>
        
    <p>
            <label for="preco">R$ </label>
            <input type="number" name="preco" id="preco" min="100" max="10000">
            <option value="Preço"></option>
        </p>
    </div>

</form>
    
</body>
</html>