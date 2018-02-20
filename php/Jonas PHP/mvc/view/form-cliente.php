<?php 
	include "topo.php";
	include "menu.php";
  ?>
<div class="container" id="conteudo">
    <h3>Cadastro de Clientes</h3>
    <form method="post" action="controller.php?acao=cadastro-cliente">
	
	    <label>CPF</label>
		<input type="text" name="cpf" size="15" /> <br/>
		
		<label>Nome</label>
		<input type="text" name="nome" size="30" /> <br/>
		
		<label>Endereço</label>
		<input type="text" name="endereco" size="25" /> <br/>
		
		<label>Telefone</label>
		<input type="text" name="telefone" size="15" /> <br/>
		
		<label>E-mail</label>
		<input type="text" name="email" size="30" /> <br/>
		
		<label></label>
		<input type="submit" name="cadastrar" value="Cadastrar" /> 
	
	</form>
	
</div>

<?php  include "rodape.php";   ?>