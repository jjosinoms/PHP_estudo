<?php 
	include "topo.php";
	include "menu.php";
  ?>
  
  <?php
		
		while($fetch = mysql_fetch_row($cliente)){
		
  ?>
<div class="container" id="conteudo">
    <h3>Cadastro de Clientes</h3>
    <form method="post" 
			action="controller.php?acao=atualizar-cliente&id=<?php echo $fetch[0]; ?>">
		<input type="hidden" name="id" value="<?php echo $fetch[0]; ?>" />
		
	    <label>CPF</label>
		<input type="text" name="cpf" size="15" value="<?php echo $fetch[1]; ?>" /> <br/>
		
		<label>Nome</label>
		<input type="text" name="nome" size="30" value="<?php echo $fetch[2]; ?>" /> <br/>
		
		<label>Endereço</label>
		<input type="text" name="endereco" size="25" value="<?php echo $fetch[3]; ?>" /> <br/>
		
		<label>Telefone</label>
		<input type="text" name="telefone" size="15" value="<?php echo $fetch[4]; ?>" /> <br/>
		
		<label>E-mail</label>
		<input type="text" name="email" size="30" value="<?php echo $fetch[5]; ?>" /> <br/>
		
		<label></label>
		<input type="submit" name="atualizar" value="Atualizar" /> 
	
	</form>
	
</div>
		<?php } ?>
<?php  include "rodape.php";   ?>