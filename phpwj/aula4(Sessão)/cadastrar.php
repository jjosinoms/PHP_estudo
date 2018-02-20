	
<?php
	
	session_start();
	include "estados.php";
	$id = '';
	$nome = '';
	$idade = '';
	$telefone = '';
	$endereco = '';
	$cidade = '';
	$estado = '';

if (isset($_GET['id']) && $_GET['id'] != ''){
		$id = $_GET['id'];
		$nome = $_SESSION['cadastropessoal'][$id]['nome'];
		$idade = $_SESSION['cadastropessoal'][$id]['idade'];
		$telefone = $_SESSION['cadastropessoal'][$id]['telefone'];
		$endereco = $_SESSION['cadastropessoal'][$id]['endereco'];
		$cidade = $_SESSION['cadastropessoal'][$id]['cidade'];
		$estado = $_SESSION['cadastropessoal'][$id]['estado'];
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
			<input type="number" name="idade" id="idade" value="<?php echo $idade; ?>" placeholder="Idade" class="form-control">
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
			<input type="text" name="cidade" id="cidade" value="<?php echo $cidade; ?>" placeholder="Cidade" class="form-control">
		</div>
		<div class="form-group col-md-2">
			<select name="estado" id="estado" class="form-control">
<?php 
			$uf_selecionado = $estados[0];
			if ($estado != '')
					$uf_selecionado = $estado;
			foreach ($estados as $i => $uf) {
				if ($i == $uf_selecionado)
					echo "<option value='$i' selected>$uf </option>";
				else
					echo "<option value='$i' >$uf </option>";
			}
?>
			</select>
		</div>
	</div>
	<br>
	<button type="submit" class="btn btn-primary"> Salvar</button>
	<button type="reset" class="btn btn-warning"> Limpar</button>
</form>

</div>