<?php 
/* Parte 1: Identificar o arquivo aberto
 $_SERVER['PHP_SELF'] -> traz os daods completos do endereço
   basename($_SERVER['PHP_SELF']) -> extrai apenas o nome.extensão  */
   $pagina = basename($_SERVER['PHP_SELF']);
  // echo $pagina;

  /* Parte 2: Condicional para avaliar qual página está aberta e definir qual título usar. */
   switch ($pagina) {
       case 'index.php': $titulo = "Página Inicial"; break;
       case 'produtos.php': $titulo = "Produtos"; break;
       case 'servicos.php': $titulo = "Serviços"; break;
       default: $titulo = "Contato"; break;
   }
  // echo $titulo;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Parte 3: colocar a variável mo title -->
    <title><?=$titulo?> - Site ABC</title>
    <link rel="stylesheet" href="includes/estilos.css">
</head>
<body>
    <header>
        <h1>Site ABC</h1>
        <nav>
        <a href="index.php">Home</a>
        <a href="produtos.php">Produtos</a>
        <a href="servicos.php">Serviços</a>
        <a href="contato.php">Contato</a>
        </nav>
    </header>

    <main>