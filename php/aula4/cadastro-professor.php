<?php include "topo.php"; ?>
<?php include "menu.php"; ?>

<div class="container" id="conteudo">
    <h3>Cadastro de Professores</h3>
    <form method="post" action="cadastrar-professor.php">
	
	    <label>Matricula</label>
		<input type="text" name="matricula" size="15" /> <br/>
		
		<label>Area</label>
		<input type="text" name="area" size="30" /> <br/>
		
		<label>Nome</label>
		<input type="text" name="nome" size="30" /> <br/>
		
		<label>Endereço</label>
		<input type="text" name="endereco" size="25" /> <br/>
		
		<label>CEP</label>
		<input type="text" name="cep" size="10" /> <br/>
		
		<label>Telefone</label>
		<input type="text" name="telefone" size="15" /> <br/>
		
		<label></label>
		<input type="submit" name="botao" value="Cadastrar" /> 
	
	</form
	
</div>

<?php include "rodape.php"; ?>