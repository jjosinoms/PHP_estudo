<?php 					//edita-cliente.php
include "verificar-usuario.php";
include "conexao.php";

	$id = $_GET['id'];
	$sql = "SELECT * FROM cliente WHERE id = $id";
	$result = mysql_query($sql);
	
	while ($fetch = mysql_fetch_row($result)){
		$id = $fetch[0];
		$cpf = $fetch[1];
		$nome = $fetch[2];
		$endereco = $fetch[3];
		$telefone = $fetch[4];
		$email = $fetch[5];
	}
	?>

<?php include "topo.php"; ?>
<?php include "menu.php"; ?>

<div class="container" id="conteudo">
    <h3>Cadastro de Clientes</h3>
    <form method="post" action="atualizar-cliente.php">
	
	    <label>CPF</label>
		<input type="text" name="cpf" size="15" value="<?php echo $cpf; ?>" /> <br/>
		
		<label>Nome</label>
		<input type="text" name="nome" size="30" value="<?php echo $nome; ?>" /> <br/>
		
		<label>Endereço</label>
		<input type="text" name="endereco" size="25" value="<?php echo $endereco; ?>" /> <br/>
		
		<label>Telefone</label>
		<input type="text" name="telefone" size="10" value="<?php echo $telefone; ?>" /> <br/>
		
		<label>Email</label>
		<input type="text" name="email" size="15" value="<?php echo $email; ?>" /> <br/>
        <input type="hidden" name="id" value="<?php echo $id; ?>" /> <br/>
		
		<label></label>
		<input type="submit" name="botao" value="Atualizar" <?php ?> /> 
	
	</form
	
></div>

<?php include "rodape.php"; ?>



