<?php
include("cabecalho.php");
include("conecta.php");
include("banco-produto.php"); ?>
<?php
$id = $_GET["id"];
$nome = $_GET["nome"];
$quantidade = $_GET["quantidade"];
$valor = $_GET["valor"];
$modelo = $_GET["modelo"];

if(alteraProduto($conexao, $id, $nome, $quantidade, $valor, $modelo )) { ?>
<p class="text-success">Produto <?= $nome; ?>, <?= $valor; ?> Alterado!</p>
<?php } else {
    
?>
<p class="text-danger">O produto <?= $nome; ?> não foi alterado: <?= $msg ?></p>
<?php
}
?>

<?php include("rodape.php"); ?>
