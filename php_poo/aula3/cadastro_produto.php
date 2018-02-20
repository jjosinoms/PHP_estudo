<?php 
	
	require_once("produto.php");
	include("topo.php");

 ?>
<?php

if (isset($_POST) && count($_POST)) {
	# code...

	$id = $_POST['id'];
	$nome  = $_POST['nome'];
	$marca = $_POST['marca'];
	$preco = $_POST['preco'];
	$validade = $_POST['validade'];
	$categoria = $_POST['categoria'];

$sql = "INSERT INTO produto (nome, marca, preco, validade, categoria) VALUES ('$nome', '$marca','$preco','$validade','$categoria')";

	if($conn -> query($sql) ==  TRUE){
	echo "Criado com sucesso";
	}else{
	echo "Erro" . $sql . "<br>" . $conn->error;
	}

	}
?>


<div class="container">
	<div class="row">
		<div class="col-md-3">
			<h2>Cadastro Produto</h2>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
<form method="post">
  <div class="form-group">
    <label>Nome</label>
    <input type="text" class="form-control" id="nome" name="nome" required="required" placeholder="Nome">
    <small id="emailHelp" class="form-text text-muted">Digite o nome do produto</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Marca</label>
    <input type="text" class="form-control" name="marca" id="marca" required="required" placeholder="Marca">
    <small id="emailHelp" class="form-text text-muted">Digite a marca</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Preço</label>
    <input type="text" class="form-control" name="preco" id="preco" required="required" placeholder="Preço">
    <small id="emailHelp" class="form-text text-muted" >Digite o preço</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Validade</label>
    <input type="text" class="form-control" name="validade" id="validade" required="required" placeholder="Validade">
    <small id="emailHelp" class="form-text text-muted">Digite a validade</small>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Categoria</label>
    <input type="text" class="form-control" name="categoria" id="categoria" required="required" placeholder="Categoria">
    <small id="emailHelp" class="form-text text-muted">Digite a categoria</small>
  </div>
  <div class="form-check">
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form><br><br>
		</div>
	</div>
</div>