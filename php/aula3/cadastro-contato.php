<?php
    include "topo.php";
	include "menu.php";
?>
<div class="container" id="conteudo">
<h1> Cadastrar Contato</h1>
<form action="cadastrar-contato.php" method="post">

    <label>Nome: </label>
	<input type="text" size="50" name="nome" /> <br />
	
	<label>Telefone: </label>
	<input type="text" size="20" name="telefone" /> <br />
	
	<label>E-mail: </label>
	<input type="text" size="20" name="email" /> <br />
	
	<label></label>
	<input type="submit" value="Cadastrar" name="acao" /> <br />
</form>
</div>

<?php
    include "rodape.php";
?>