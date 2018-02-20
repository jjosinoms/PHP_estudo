<?php include "topo.php"; ?>

<div class="container" id="conteudo">

	<h3>Login </h3>
    <form method="post" action="autenticar-usuario.php">
    
    <label> Usuário </label>
    <input type="text" name="usuario" size="15" /> <br/>
    
    <label> Senha </label>
    <input type="password" name="senha" size="15" /> <br/>
    
    <label></label>
    <input type="submit" name="botao" value="Entrar" />
    <label></label>
    <span>
    	<?php 
			if (isset($_GET['erro'])) { echo "Usuário Inválido";}
		?>
        
   </span>
    
    </form>
    
</div>
<?php include "rodape.php"; ?>