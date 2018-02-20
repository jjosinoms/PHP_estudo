<!--
<?php
	if(!isset($verificacao)){
   	exit;
}
?>
<?php

if (isset($_POST) && count($_POST)) {
	
	$nome = $_POST['nome'];
	$valor = $_POST['valor'];
	$vencimento = $_POST['vencimento'];
	$situacao = $_POST['situacao'];

	$sql = "UPDATE planilha SET (nome, valor, vencimento, situacao) VALUES ('$nome','$valor','$vencimento','$situacao')";

	if($conn -> query($sql) ==  TRUE){
		echo "Atualizado com sucesso";
	}else{
		echo "Erro" . $sql . "<br>" . $conn->error;
	}
}

?>

<div class="container">
<form method="post" id="form-cadastro" hidden="hidden">
	<div class="row">
	<h3>Inserir conta</h3>
		<div class="col-md-4">
           	 <input type="text" class="form-control" id="nome" aria-describedby="emailHelp" placeholder="Nome" name="nome" required="required">
      	</div>
      	<div class="col-md-4">
      		 <input type="number" step="any" class="form-control" id="valor" aria-describedby="emailHelp" placeholder="Valor" name="valor" required="required">
      	 </div>
      </div>
      <div class="row">
      	<br>  
      	 <div class="col-md-4">

      		 <input type="date" class="form-control" id="vencimento" aria-describedby="emailHelp" placeholder="Vencimento" name="vencimento" required="required">
   		</div>
   		<div class="col-md-4">
		<input type="text" class="form-control" id="situacao" aria-describedby="emailHelp" placeholder="Situação da Conta" name="situacao" required="required">
 			 </select>
  		</div>	
		<br><br><br><br><br>
      	 <button type="submit" class="btn btn-danger" id="atualizado" > Atualizar </button>
   		<br>
	</div>
	<hr>
	</form>

</div>

-->