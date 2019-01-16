<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/form.css">

</head>

<style>
	body {
	background-color: #F8FBEF;
	}
</style>

<body>
<?php
include ("conecta.php");
include ("banco-produto.php");

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
?>

<section class="form_wrap">
<section class="cantact_info">
<section class="info_title">
<span class="fa fa-user-circle"></span>
 <h2>ALTERAR INFORMAÇÕES<br>PRODUTO</h2>
</section>
</section>

<form  action="adiciona-produto.php" class="form_contact">
<h2>Cadastro</h2>
<div class="user_info">

<label>Nome *</label>
<div class="form-group">
<input type="hidden" name="id" value="<?=$produto['id']?>">
<input class="form-control" name="nome" value="<?=$produto['nome']?>" type="text" placeholder="Nome Aparelho *">
</div>

<label>Quantidade</label>
<div class="form-group">
<input  name="quantidade" value="<?=$produto['quantidade']?>" type="number" >
</div> 

<label >Valor</label>
<input class="form-control" name="valor" type="number" value="<?=$produto['valor']?>">

				
<label>Modelo</label>
<input class="form-control" name="modelo" value="<?=$produto['modelo']?>" type="text">
<button class="btn btn-primary" type="submit">Alterar</button>

</div>
</form>
</section>

</body>
</html>
