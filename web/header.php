<!DOCTYPE html>
<html>

    <head>

        <title><?php print $head_title; ?></title>
        <meta charset="utf-8">

        <!-- Arquivos css -->
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/reset.css">
        <?php print @$head_css; ?>

        <!-- Responsividade -->
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">

    </head>

    <body>
        <!-- Inicio <header> -->
        <header id="inicio-pagina" class="container">

        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Logo da empresa -->
        <h1>
            <a href="index.php"><img src="img/logo.png" alt="Logo Marca da Empresa"></a>
        </h1> <!-- Fim logo da empresa -->

        <!--Inicio Sacola -->
        <p class="sacola">
            Nenhum item na sacola de compras
        </p> <!-- Fim .sacola -->

        <!-- Menu de navegação -->
        <nav class="menu-navegacao">
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="#">Sua Conta</a></li>
                <li><a href="#">Lista de Desejos</a></li>
                <li><a href="#">Cartão Fidelidade</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="#">Ajuda</a></li>
            </ul>
        </nav> <!-- Fim .menu-navegacao -->

        <!-- Atalho para inicio da página -->
        <p class="atalho-inicio">
            <a href="#inicio-pagina"><img src="img/inicio.png" title="Retorne ao Inicio da Página"></a>
        </p> <!--Fim .atalho-inicio -->

        </header> <!-- Fim <header> -->