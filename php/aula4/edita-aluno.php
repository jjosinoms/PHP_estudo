<?php 					//edita-aluno.php

include "conexao.php";

	$id = $_GET['id'];
	$sql = "SELECT * FROM aluno WHERE id = $id";
	$result = mysql_query($sql);
	
	while ($fetch = mysql_fetch_row($result)){
		$id = $fetch[0];
		$matricula = $fetch[1];
		$nome = $fetch[2];
		$endereco = $fetch[3];
		$telefone = $fetch[4];
		$cep = $fetch[5];
	}
	?>

<?php include "topo.php"; ?>
<?php include "menu.php"; ?>

<div class="container" id="conteudo">
    <h3>Cadastro de Alunos</h3>
    <form method="post" action="atualizar-aluno.php">
	
	    <label>Matricula</label>
		<input type="text" name="matricula" size="15" value="<?php echo $matricula; ?>" /> <br/>
		
		<label>Nome</label>
		<input type="text" name="nome" size="30" value="<?php echo $nome; ?>" /> <br/>
		
		<label>Endereço</label>
		<input type="text" name="endereco" size="25" value="<?php echo $endereco; ?>" /> <br/>
		
		<label>CEP</label>
		<input type="text" name="cep" size="10" value="<?php echo $cep; ?>" /> <br/>
		
		<label>Telefone</label>
		<input type="text" name="telefone" size="15" value="<?php echo $telefone; ?>" /> <br/>
        <input type="hidden" name="id" value="<?php echo $id; ?>" /> <br/>
		
		<label></label>
		<input type="submit" name="botao" value="Atualizar" <?php ?> /> 
	
	</form
	
></div>

<?php include "rodape.php"; ?>



?>