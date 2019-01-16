<?php
include("cabecalho.php");
include("conecta.php");
include("banco-produto.php"); 
require_once("class/produto.php");
?>

<?php
$produto = new Produto();
$produto->nome = $_GET["nome"];
$produto->quantidade = $_GET["quantidade"];
$produto->valor = $_GET["valor"];
$produto->modelo = $_GET["modelo"];

if(insereProduto($conexao, $produto)) { ?>
<p class="text-success">O produto <?= $produto->nome; ?>, <?= $produto->valor; ?> adicionado com sucesso!</p>
<a href="./index.php" class="btn btn-danger">Voltar</a>

<?php } else {
    
?>
<p class="text-danger">O produto <?= $produto->nome; ?> não foi adicionado: </p>
<a href="./index.php" class="btn btn-danger">Voltar</a>

<?php
}
?>

<?php include("rodape.php"); ?>
