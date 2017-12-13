<!-- import head and header -->
<?php
    $head_title = "MirrorFashion | Início";
    include("header.php"); 
?>

<!-- Content -->
<!-- Inicio bloco de destaque -->
<div class="container destaque">

    <!-- Caixa de busca -->
    <section class="busca">
        <h2>Busca</h2>

        <form>
            <input type="search">
            <input type="image" src="img/busca.png">
        </form>

    </section>
    <!-- Fim .busca -->

    <!-- Menu de departamentos -->
    <section class="menu-departamentos">

        <h2>Departamentos</h2>

        <nav>
            <ul>
                <li>
                    <a href="#">Blusas e Camisas</a>
                    <ul>
                        <li><a href="#">Manga curta</a></li>
                        <li><a href="#">Manga comprida</a></li>
                        <li><a href="#">Camisa social</a></li>
                        <li><a href="#">Camisa casual</a></li>
                    </ul>
                </li>
                <li><a href="#">Calças</a></li>
                <li><a href="#">Saias</a></li>
                <li><a href="#">Vestidos</a></li>
                <li><a href="#">Sapatos</a></li>
                <li><a href="#">Bolsas e Carteiras</a></li>
                <li><a href="#">Acessórios</a></li>
            </ul>
        </nav>

    </section>
    <!-- Fim .departamentos -->

    <img src="img/destaque-home.png" alt="Promoção: Big City Night">

</div>
<!-- Fim .container .destaque -->

<!-- Inicio paineis -->
<div class="container paineis">

    <section class="painel novidades">
        
        <h2>Novidades</h2>

        <!-- Lista de produtos -->
        <ol>
            <!--Primeiro produto -->
            <li>
                <a href="produto.php">
                    <figure>
                        <img src="img/produtos/miniatura1.png" alt="Fuzz Gardin">
                        <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                    </figure>
                </a>
            </li> <!--Fim primeiro produto -->

            <!--Segundo produto -->
            <li>
                <a href="produto-2.html">
                    <figure>
                        <img src="img/produtos/miniatura2.png" alt="Camisa Estampada">
                        <figcaption>Camisa estampada por R$ 52,90</figcaption>
                    </figure>
                </a>
            </li><!--Fim segundo produto-->

            <!--Terceiro produto-->
            <li>
                <a href="produto-3.html">
                    <figure>
                        <img src="img/produtos/miniatura3.png" alt="Moletom Verde">
                        <figcaption>Moletom Verde por R$ 82,90</figcaption>
                    </figure>
                </a>
            </li><!--fim terceiro produto-->

            <!--Quarto produto-->
            <li>
                <a href="produto-4.html">
                    <figure>
                        <img src="img/produtos/miniatura4.png" alt="Casaco Marrom">
                        <figcaption>Casaco Marrom por R$ 104,90</figcaption>
                    </figure>
                </a>
            </li><!--Fim quarto produto -->

            <!--Quinto produto-->
            <li>
                <a href="produto-5.html">
                    <figure>
                        <img src="img/produtos/miniatura5.png" alt="Regata Feminina Azul">
                        <figcaption>Regata Feminina Azul por R$ 34,80</figcaption>
                    </figure>
                </a>
            </li><!--Fim quinto produto -->

            <!--Sexto produto-->
            <li>
                <a href="produto-6.html">
                    <figure>
                        <img src="img/produtos/miniatura6.png" alt="Vestido Rosa">
                        <figcaption>Vestido Rosa por R$ 42,90</figcaption>
                    </figure>
                </a>
            </li><!--Fim sexto produto -->

        </ol>

    </section><!-- Fim de .novidades-->

    <!--Inicio mais vendidos -->
    <section class="painel mais-vendidos">
        
        <h2>Mais Vendidos</h2>
        
        <!-- Lista de produtos -->
        <ol>
            <!--Primeiro produto -->
            <li>
                <a href="produto-4.html">
                    <figure>
                        <img src="img/produtos/miniatura4.png" alt="Casaco Marrom">
                        <figcaption>Casaco Marrom por R$ 104,90</figcaption>
                    </figure>
                </a>
            </li> <!--Fim primeiro produto -->

            <!--Segundo produto -->
            <li>
                <a href="produto-8.html">
                    <figure>
                        <img src="img/produtos/miniatura8.png" alt="Camisa Básica Verde Oliva">
                        <figcaption>Camisa Básica Verde Oliva por R$ 22,90</figcaption>
                    </figure>
                </a>
            </li><!--Fim segundo produto-->

            <!--Terceiro produto-->
            <li>
                <a href="produto-9.html">
                    <figure>
                        <img src="img/produtos/miniatura9.png" alt="Camiseta Feminina Xadrez">
                        <figcaption>Camiseta Feminina Xadrez por R$ 72,90</figcaption>
                    </figure>
                </a>
            </li><!--fim terceiro produto-->

            <!--Quarto produto-->
            <li>
                <a href="produto.html">
                    <figure>
                        <img src="img/produtos/miniatura1.png" alt="Fuzz Gardin">
                        <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                    </figure>
                </a>
            </li><!--Fim quarto produto -->

            <!--Quinto produto-->
            <li>
                <a href="produto-6.html">
                    <figure>
                        <img src="img/produtos/miniatura6.png" alt="Vestido Rosa">
                        <figcaption>Vestido Rosa por R$ 42,90</figcaption>
                    </figure>
                </a>
            </li><!--Fim quinto produto -->

            <!--Sexto produto-->
            <li>
                <a href="produto-10.html">
                    <figure>
                        <img src="img/produtos/miniatura10.png" alt="Camisa de Manga Longa Feminina">
                        <figcaption>Manga Longa Feminina por R$ 52,90</figcaption>
                    </figure>
                </a>
            </li><!--Fim sexto produto -->

        </ol>

    </section><!--fim .mais-vendidos-->

</div>

<!-- Import footer -->
<?php include("footer.php"); ?>
