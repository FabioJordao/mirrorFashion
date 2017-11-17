<!-- Import head and header -->
<?php 
    $head_title = "MirrorFashion | Produto";
    $head_css = "<link rel='stylesheet' href='css/produto.css'>";
    include("header.php"); 
?>
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

            <input type="submit" class="comprar" value="Comprar">
        </form>
    </div>
</div>

<!-- Import footer -->
<?php include("footer.php"); ?>
