<?php
require_once("conecta.php");
require_once("class/produto.php");

function listaProdutos($conexao) {
$produtos = array();
$resultado = mysqli_query($conexao, "select * from produtos");

while($produto_array = mysqli_fetch_assoc($resultado)) {
    
$produto = new Produto();
$produto->id = $produto_array['id'];
$produto->nome = $produto_array['nome'];
$produto->quantidade = $produto_array['quantidade'];
$produto->valor = $produto_array['valor'];
$produto->modelo = $produto_array['modelo'];

array_push($produtos, $produto);
}
return $produtos;
}

function insereProduto($conexao, Produto $produto) {
$query = "insert into produtos (nome, quantidade,valor,modelo) 
        values ('{$produto->nome}', {$produto->quantidade},
        {$produto->valor},{$produto->modelo})";
 return mysqli_query($conexao, $query);
}
function buscaProduto($conexao, $id){
$query = "select * from produtos where id = ($id)";
$resultado = mysqli_query($conexao, $query);
return mysqli_fetch_assoc($resultado);
}

function removeProduto($conexao, $id) {
$query = "delete from produtos where id = {$id}";
return mysqli_query($conexao, $query);
}
function alteraProduto($conexao,$produto){

$query = "update produtos set nome='{$produto->nome}', quantidade = {$produto->quantidade},
 valor={$produto->valor}, modelo={$produto->modelo} where id='{$produto->id}'";
return mysqli_query($conexao, $query);

}

