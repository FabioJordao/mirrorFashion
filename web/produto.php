<!-- Import head and header -->
<?php 
    $head_title = "MirrorFashion | Produto";
    $head_css = "<link rel='stylesheet' href='css/produto.css'>";
    include("header.php"); 
?>
<div class="produto-back">
    <div class="container">
        <div class="produto ">
            <h1> Fuzzy Cardigan </h1>
            <p> Por apenas 129,90 </p>

            <form>
                <fieldset class="cores">
                    <legend> Escolha a cor:</legend>
                    
                    <input type="radio" name="cor" id="verde" checked > 
                    <label for="verde">
                        <img src="img/produtos/foto1-verde.png" alt="Produto 1 na cor verde">
                    </label>

                    <input type="radio" name="cor" id="rosa"> 
                    <label for="rosa"> 
                        <img src="img/produtos/foto1-rosa.png" alt="Produto 1 na cor rosa">
                    </label>

                    <input type="radio" name="cor" id="azul"> 
                    <label for="azul">
                        <img src="img/produtos/foto1-azul.png" alt="Produto 1 na cor azul">
                    </label>
                </fieldset>

                <fieldset class="tamanhos"> 
                    <legend> Escolha o tamanho: </legend>

                    <input type="range" min="36" max="46" value="42" step="2"
                    name="tamanho" id="tamanho">
                </fieldset>

                <input type="submit" class="comprar" value="Comprar">
            </form>
        </div>
        <div class="detalhes-produto">
            <h2>Detalhes do Produto</h2>
            <p>
                Esse é o melhor casaco de Cardigã que você já viu. Excelente
                material italiano com estampa desenhada pelos artesãos da
                comunidade de Krotor nas ilhas gregas. Compre já e receba hoje
                mesmo pela nossa entrega a jato.
            </p>
            
            <table>
                <thead>
                    <tr>
                        <th>Característica</th>
                        <th>Detalhe</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Modelo</td>
                        <td>Cardigan 7845</td>
                    </tr>
                    <tr>
                        <td>Material</td>
                        <td>Algodão e Poliéster</td>
                    </tr>
                    <tr>
                        <td>Cores</td>
                        <td>Azul, rosa e verde</td>
                    </tr>
                    <tr>
                        <td>Lavagem</td>
                        <td>Lavar a mão</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<div>

<!-- Import footer -->
<?php include("footer.php"); ?>
