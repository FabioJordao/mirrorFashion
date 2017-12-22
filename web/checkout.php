
<?php
    //Capturando informações do formulário
    $id = $_POST['id'];
    $produto = $_POST['produto'];
    $valor = $_POST['valor'];
    $cor = $_POST['cor'];
    $tamanho = $_POST['tamanho'];

    // $head_css = "<link rel='stylesheet' href='css/bootstrap.css'>";
    $head_js = "<script src='js/valid-form.js'></script>";

    //Incluindo o <head> e o <header>
    include('header.php');
?>

<!--Topo da página -->
<div class="jumbotron">

    <div class="container">

        <h1>Ótima escolha!</h1>
        <p>Obrigado por comprar na Mirror Fashion!
        Preencha seus dados para efetivar a compra.</p>

    </div>

</div> <!-- Fim do topo -->


<div class="container">
    
    <div class="row">

        <!-- Detalhes da compra -->
        <div class="col-sm-6 col-md-4 col-lg-3">
            
            <div class="panel panel-default">
                
                <div class="panel-heading">
                    <h2 class="panel-title">Sua Compra</h2>
                </div>
                
                <div class="panel-body">

                    <img class="img-thumbnail img-responsive" src="img/produtos/foto<?= $id; ?>-<?= $cor;?>.png" alt="Imagem do produto">

                    <dl>
                        <dt>Produto</dt>
                        <dd><?= $produto; ?></dd>

                        <dt>Valor</dt>
                        <dd><?= $valor; ?></dd>

                        <dt>Cor</dt>
                        <dd><?= $cor; ?></dd>

                        <dt>Tamanho</dt>
                        <dd><?= print $tamanho;?></dd>
                    </dl> 

                </div>

            </div> 

        </div> <!-- Fim dos detalhes da compra -->


        <!-- Formulário <form> de captura dos dados pessoais e do cartão -->
        <form class="col-sm-6 col-md-8 col-lg-9">

            <div class="row">
                
                <!--Dados pessoais -->
                <fieldset class="col-md-6">

                    <legend> Dados Pessoais </legend>

                    <div class="form-group">
                        <label for="nome"> Nome </label>

                        <div class="input-group">
                            <span class="input-group-addon">N</span>
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome aqui. Ex: José Silva." required="" autofocus>
                        </div>
                        
                    </div>
                    
                    <div class="form-group">
                        <label for="email"> Email </label>

                        <div class="input-group">

                            <span class="input-group-addon">@</span>
                            <input type="email" class="form-control" nome="email" id="email" placeholder="Digite o seu email aqui. Ex: testando@dominio.com." required="">
                        
                        </div>
                        
                    </div>

                    <div class="form-group">
                        <label for="cpf"> CPF </label>
                        <input type="text" class="form-control" nome="cpf" id="cpf" placeholder="Digite o seu cpf aqui. Ex: 123.456.678-01." required="">
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="sim" name=spam checked>
                            Desejo receber spam da MirrorFashion.
                        </label>
                    </div>
                    
                </fieldset> <!-- Fim dos dados pessoais -->
                
                <!--Dados do cartão de crédito -->
                <fieldset class="col-md-6">
                    <legend> Cartão de Crédito</legend>

                    <div class="form-group">
                        <label for="numero-cartao">Número do Cartão</label>
                        <input type="text" class="form-control" name="numero-cartao" id="bandeira-cartao" placeholder="Digite o número do seu cartão aqui." required="">
                    </div>

                    <div class="form-group">
                        <label for="bandeira-cartao">Bandeira</label>
                        <select class="form-control" name="bandeira-cartao" id="bandeira-cartao" required="">
                            <option value="master">MasterCard</option>
                            <option value="visa">VISA</option>
                            <option value="amex">America Express</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="validate-cartao">Validade do Cartão</label>
                        <input type="month" class="form-control" name="validate-cartao" id="validade-cartao" required="">
                    </div>

                </fieldset> <!-- Fim dos dados do cartão --> 

            </div>

            <button type="submit" class="btn mx-1 btn-lg active pull-right">
                <span class="glyphincon glyphincon-thumbs-up"></span>
                Confirmar Pedido
            </button>

        </form> <!-- Fim do <form> de captura dos dados do cartão de crédito -->

    </div>

</div>

<?php 
    //Incluindo o footer
    include('footer.php'); 
?>
