<!DOCTYPE html>
<html>

    <head>

        <title><?php print $head_title; ?></title>
        <meta charset="utf-8">

        <!-- Arquivos css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="css/main.css" type="text/css">
        <link rel="stylesheet" href="css/mobile.css" media="(max-width: 990px)">
        <link rel="stylesheet" href="css/framework.css" type="text/css">
        <?php print @$head_css; ?>

        <!--Arquivos Js -->
        <?php print @$head_js; ?>

        <!-- Responsividade -->
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">

    </head>

    <body>
        <!-- Inicio do menu de navegação - Header -->
        <header id="menu-navegacao" class="fixed-top">
            
            <nav class="navbar navbar-expand-md navbar-dark bg-primary">
                
                <div class="container">
                    
                    <h1>
                        <a class="navbar-brand text-white" href="index.php"> <img src="img/logo.png" alt="Logo da Empresa"></a>
                    </h1>

                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span> 
                    </button>
                    
                    <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
                    
                        <!-- Lista de links -->
                        <ul class="navbar-nav nav">
                            
                            <li class="nav-item">
                                <a class="nav-link" href="index.php#inicio" target=""> Início</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sua Conta</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#">Lista de Desejos</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#">Cartão Fidelidade</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="sobre.php">Sobre</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#">Ajuda</a>
                            </li>
                        </ul> <!-- Fim da lista de links -->

                    </div>
                </div>
            </nav>
        </header> <!-- Fim do header -->