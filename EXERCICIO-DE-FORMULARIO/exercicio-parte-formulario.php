<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>

<body>

    <!-- celular
samsung, penalty, natura, nestlé
valor de 100 até 10000 acrescentando centavos
quantidade de produtos 
descrever porque quer -->

    <form action="" method="">
        <p>
            <label for="nome">Nome do produto:</label>
            <input required type="text" name="nome" id="nome">
        </p>

        <!-- <div>
            
            <input type="radio" name="informativos" id="samsung" value="samsung">
            <label for="samsung">Samsung</label>
            
            <input type="radio" name="informativos" id="penalty" value="penalty">
            <label for="penalty">Penalty</label>

            <input type="radio" name="informativos" id="natura" value="natura">
            <label for="natura">Natura</label>

            <input type="radio" name="informativos" id="nestlé" value="nestlé">
            <label for="nestlé">Nestlé</label>

        </div> -->
        <?php
        $fabricantes = ["Selecione um Fabricante" , "Samsung", "apple", "motorola", "xiome"]

        ?>
 <p>Selecione uma marca</p>
        <article>
        
            <select>
           
                <?php
                foreach ($fabricantes as $fabricante) {

                ?>



                    <option><?= $fabricante ?></option>


                <?php } ?>
            </select>

        </article>




        <!--   <div>
            <label for="fabricantes">Fabricantes:</label>

            <select name="fabricante" id="fabricante">
                <option></option>
                <option>Samsung</option>
                <option>Penalty</option>
                <option>Natura</option>
                <option>Nestlé</option>
            </select>
        </div>

        <div>  -->

        <p>
            <label for="preco">Preço:</label>
            <input type="number" name="preco" id="preco" min="100" 
            step="0.01" placeholder="Ex:105.05"
            max="10000">
        </p>

        </div>
        <div>

            <p>
                <label for="quantidade">Quantidade:</label>
                <input type="number" name="quantidade" id="quantidade" min="0" max="50">
            </p>

        </div>


        <p>
            <label for="mensagem">Mensagem:</label><br>
            <textarea name="mensagem" id="mensagem" cols="30" rows="6"></textarea>
        </p>
        <button type="submit" name="enviar">Enviar dados</button>
    </form>

</body>

</html>