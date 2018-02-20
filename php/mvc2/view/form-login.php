<?php include "view/topo.php"; ?>

<div class="container" id="conteudo">
    <h3>Login</h3>
    <form method="post" action="controller.php">
	
	    <label>Matricula</label>
		<input type="text" name="matricula" size="15" /> <br/>
		
		<label>Senha</label>
		<input type="password" name="senha" size="15" /> <br/>
		
		<label></label>
		<input type="submit" name="logar" value="Entrar" />  <br/>
		
		<label></label>
		<span>
		
		    <?php
			    if(isset($msg) or !empty($msg)) { echo $msg;}
			?>
		
		</span>
	
	</form>
	
</div>

<?php include "view/rodape.php"; ?>