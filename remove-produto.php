<?php 
include("cabecalho.php");
require_once("conecta.php");
require_once("banco-produto.php");

$id = $_GET['id'];
removeProduto($conexao, $id);
header("Location: index.php");
die();
?>


