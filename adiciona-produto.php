<?php
require_once("cabecalho.php");
require_once("conecta.php");
require_once("banco-produto.php"); 
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


<?php } 
else {
    
?>
<p class="text-danger">O produto <?= $produto->nome; ?> não foi adicionado: </p>


<?php
}
?>

<?php include("rodape.php"); ?>
