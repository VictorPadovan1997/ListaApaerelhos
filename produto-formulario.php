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
<title>Inclusão de Registro</title>
<section class="form_wrap">
<section class="cantact_info">
<section class="info_title">
<span class="fa fa-user-circle"></span>
 <h2>INCLUIR NOVO<br>APARELHO</h2>
</section>
</section>

<form  action="adiciona-produto.php" class="form_contact">
<h2>Cadastro</h2>
<div class="user_info">
<label>Nome *</label>
<input class="form-control" name="nome" type="text" placeholder="Nome Aparelho *">
<label>Quantidade</label>
<input class="form-control" name="quantidade" type="number" placeholder="Digite a Quantidade *">

<label >Valor</label>
<input class="form-control" name="valor" type="number" placeholder="Digite o Valor *">
				
<label>Modelo</label>
<input class="form-control" name="modelo" type="text" placeholder="Digite o Modelo *">
<button  class="btn btn-primary"  type="submit">Cadastrar</button></td>
</div>
</form>
</section>
</body>
</html>
