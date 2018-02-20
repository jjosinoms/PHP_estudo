<?php
	include "topo.php"; 
	include "menu.php";

?>
<div class="container" id="conteudo">
	<h1> Listagem de Clientes</h1>
	<form method="post" action="controller.php?acao=pesquisar-nome-cliente">
	
	<label> Nome </label>
	<input type="text" name="nome" size="35" /> <br/>
	
	<label></label>
	<input type="submit" name="pesquisar" value="pesquisar" />
	</form>
</div>

<?php 

	include "rodape.php";

 ?>
 
 