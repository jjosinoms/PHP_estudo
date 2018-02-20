<?php 
	
	require_once("mercado.php");
	include ("topo.php");

 ?>

<?php  

if (isset($_POST) && count($_POST)) {
	# code...

	$nome = $_POST['nome'];
	$regiao = $_POST['regiao'];
	$bairro = $_POST['bairro'];
	$endereco = $_POST['endereco'];

$sql = "INSERT INTO mercado (nome, regiao, bairro, endereco) VALUES ('$nome','$regiao','$bairro','$endereco')";
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
			<h2>Cadastro Mercado</h2>
			<hr>
		</div>
	</div>
	<div class="row">
  <div class="col-md-6">
<form method="post">
  <div class="form-group">
    <label>Nome</label>
    <input type="text" class="form-control" id="nome" name="nome" required="required" placeholder="Nome">
    <small id="emailHelp" class="form-text text-muted">Digite o nome do mercado</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Regiao</label>
    <input type="text" class="form-control" name="regiao" id="regiao" required="required" placeholder="Região">
    <small id="emailHelp" class="form-text text-muted">Digite a região</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Bairro</label>
    <input type="text" class="form-control" name="bairro" id="bairro" required="required" placeholder="Bairro">
    <small id="emailHelp" class="form-text text-muted" >Digite o bairro</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Endereço</label>
    <input type="text" class="form-control" name="endereco" id="endereco" required="required" placeholder="Endereço">
    <small id="emailHelp" class="form-text text-muted">Digite o endereço</small>
  </div>
  <div class="form-check">
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
</div>
	</div><br><br>
</div>