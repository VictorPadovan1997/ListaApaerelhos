<?php
require_once("cabecalho.php");
require_once("conecta.php");
require_once("banco-produto.php");
require_once("class/produto.php");
 ?>
<?php

$produto = new Produto();
$produto->id = $_GET["id"];
$produto->nome = $_GET["nome"];
$produto->quantidade = $_GET["quantidade"];
$produto->valor = $_GET["valor"];
$produto->modelo = $_GET["modelo"];

if(alteraProduto($conexao, $produto )) { ?>
<p class="text-success">Produto <?= $produto->nome ?>, <?= $produto->valor ?> Alterado!</p>
<?php } else {
    
?>
<p class="text-success">Produto <?= $produto->nome ?>, <?= $produto->valor ?>NÃO Alterado!</p>
<?php
}
?>

<?php include("rodape.php"); ?>
