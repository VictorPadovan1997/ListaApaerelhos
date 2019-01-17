 <?php
require_once("conecta.php");
require_once("banco-produto.php");
require_once("class/produto.php");

?>

<table  class="table">
<div class="pull-right">
<a  href="./produto-formulario.php" class="btn btn-success">Novo Registro</a>
</div>
<tr>
    <th class="text-center">Aparelho</th>
    <th class="text-center">Quantidade</th>
    <th class="text-center">Valor Do Produto</th>
    <th class="text-center">Modelo Do Aparelho</th>
    <th class="text-center">Opções</th>
</tr>
<tr>
<?php

    $produtos = listaProdutos($conexao);
    foreach($produtos as $produto) :
?>
    <td class="text-center"> <?= $produto->nome ?></td>
    <td class="text-center"><?= $produto->quantidade ?></td>
    <td class="text-center"><?= $produto->valor ?></td>
    <td class="text-center"><?= $produto->modelo ?></td>
    <td class="text-center">

 
    <a  title="Remover" href="remove-produto.php?id=<?=$produto->id?>" class="glyphicon glyphicon-remove"></a>
    <a title="Alterar" href="produto-altera-formulario.php?id=<?=$produto->id?>" class="glyphicon glyphicon-plus"></a>
    <a title="Visualizar" data-toggle="modal" data-target="#myModal" class="glyphicon glyphicon-search"></a>
    
    
  <!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog">
    
    <!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Visualizar Produto</h4>
</div>
<div class="modal-body">
<table  class="table">
<tr>
    <th class="text-center">Aparelho</th>
    <th class="text-center">Quantidade</th>
    <th class="text-center">Valor Do Produto</th>
    <th class="text-center">Modelo Do Aparelho</th>
</tr>
<tr>
    <td class="text-center"> <?= $produto->nome ?></td>
    <td class="text-center"><?= $produto->quantidade ?></td>
    <td class="text-center"><?= $produto->valor ?></td>
    <td class="text-center"><?= $produto->modelo ?></td>
<tr>
</table>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>

</div>
 </div>
</div>
 </td>
</tr>
<?php
endforeach
?>
</table>


