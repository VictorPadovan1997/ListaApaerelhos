<?php 
include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");

$id = $_GET['id'];
removeProduto($conexao, $id);
header("Location: index.php");
die();
?>


