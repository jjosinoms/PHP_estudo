	
<?php
	
	session_start();
	$id = '';
	$nome = '';
	$bairro = '';
	$endereco = '';
	$telefone = '';
	$situacao = '';

if (isset($_GET['id']) && $_GET['id'] != ''){
		$id = $_GET['id'];
		$nome = $_SESSION['cadastromercado'][$id]['nome'];
		$bairro = $_SESSION['cadastromercado'][$id]['bairro'];
		$endereco = $_SESSION['cadastromercado'][$id]['endereco'];
		$telefone = $_SESSION['cadastromercado'][$id]['telefone'];
		$situacao = $_SESSION['cadastromercado'][$id]['situacao'];
	}
?>
	

<div class="container">
	<h2>Cadastro</h2><br>
		<form style="text-align: left" method="post" action="salvar.php">
		<input type="hidden" name="id" value="<?php echo id; ?>">
			<div class="row ">
				<div class="form-group col-md-8">
					<input type="text" name="nome" id="nome" value="<?php echo $nome; ?>" placeholder="Nome" class="form-control">
				</div>
			</div>
	<div class="row">
		<div class="form-group col-md-4">
			<input type="text" name="bairro" id="bairro" value="<?php echo $bairro; ?>" placeholder="Bairro" class="form-control">
		</div>
		<div class="form-group col-md-4">
			<input type="text" name="telefone" id="telefone" value="<?php echo $telefone; ?>" placeholder="Telefone" class="form-control">
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-8">
			<input type="text" name="endereco" id="endereco" value="<?php echo $endereco; ?>" placeholder="Endereço" class="form-control">
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-6">
			<label type="text" name="situacao" id="situacao" value="<?php echo $situacao; ?>" placeholder="Situação" class="form-control">Aberto / Fechado </label>
		</div>
	</div>
	<br>
	<button type="submit" class="btn btn-primary"> Salvar</button>
	<button type="reset" class="btn btn-warning"> Limpar</button>
</form>

</div>