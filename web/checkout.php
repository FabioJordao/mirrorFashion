
<?php

    //Capturando informações do formulário
    $produto = $_POST['produto'];
    $valor = $_POST['valor'];
    $cor = $_POST['cor'];
    $tamanho = $_POST['tamanho'];

?>


<h1>Ótima escolha!</h1>
<h4> Detalhes da compra: </h4>

<dl>
    <dt>Produto</dt>
    <dd><?= $produto ?></dd>

    <dt>Valor</dt>
    <dd><?= $valor ?></dd>

    <dt>Cor<dt>
    <dd><?= $cor;?><dd>

    <dt>Tamanho<dt>
    <dl><?= $tamanho;?><dl>
</dl>

<p>Obrigado por comprar na Mirror Fashion!
Preencha seus dados para efetivar a compra.</p>
