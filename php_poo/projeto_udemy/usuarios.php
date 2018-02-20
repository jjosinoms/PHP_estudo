<?php


// CADASTRO
if (isset($_POST) && count($_POST)) {

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	//var_dump($_POST);
	$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome','$email', '$senha')";

	if($conn -> query($sql) ==  TRUE){
		echo "Criado com sucesso";
	}else{
		echo "Erro" . $sql . "<br>" . $conn->error;
	}
}

?>
<!-- INICIO SCRIPT -->
<script type="text/javascript">
  $( document ).ready(function() {



    
});

</script>
<!-- FINAL SCRIPT -->
<div class="container">
  <div class="row">
    <div class="col-md-4">
    <h1>Cadastrar</h1>
      <form method="post">
      	 <input type="text" class="form-control" id="nome" aria-describedby="emailHelp" placeholder="Nome" name="nome" required="required">
   <br>
      	 <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" name="email" required="required">
   <br>
      	 <input type="password" class="form-control" id="senha" aria-describedby="emailHelp" placeholder="Senha" name="senha" required="required">
   <br>
      	 <input type="password" class="form-control" id="senhaconf" aria-describedby="emailHelp" placeholder="Confirmar Senha" name="senhaconf" required="required">
   <br>
      	 <button type="submit" class="btn btn-danger" id="cadastrar" > Cadastrar </button>
   <br>
      </form>
    </div>
    <div class="col-md-1" >
    </div>
    <div class="col-md-1" ><br><br>
    	<div class="vertical-line" style="height: 300px;"></div>
    	
    </div>
    <div class="col-md-4">
    <h1>Login</h1>
      <form method="post" action="index.php?pagina=logar">
      	 <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" name="email" required="required">
   <br>
      	 <input type="password" class="form-control" id="senha" aria-describedby="emailHelp" placeholder="Senha" name="senha" required="required">
   <br>
      	 <button type="submit" class="btn btn-danger" id="entrar" > Entrar </button>
         <label class="msg"></label>
   <br>
      </form>
    </div>
  </div>
</div>