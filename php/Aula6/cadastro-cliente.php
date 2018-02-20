<?php include "verificar-usuario.php"; ?>
<?php include "topo.php"; ?>
<?php include "menu.php"; ?>

<div class="container" id="conteudo">
    <h3>Cadastro de Clientes</h3>
    <form method="post" action="cadastrar-cliente.php">
	
	    <label>CPF</label>
		<input type="text" name="cpf" size="15" /> <br/>
		
		<label>Nome</label>
		<input type="text" name="nome" size="30" /> <br/>
		
		<label>Endereço</label>
		<input type="text" name="endereco" size="25" /> <br/>
		
		<label>Telefone</label>
		<input type="text" name="telefone" size="10" /> <br/>
		
		<label>Email</label>
		<input type="text" name="email" size="15" /> <br/>
		
		<label></label>
		<input type="submit" name="botao" value="Cadastrar" /> 
	
	</form
	
></div>

<?php include "rodape.php"; ?>