<?php include "estados.php" ?>
<?php
	
	session_start();
	$pessoas = [];
	if (isset($_SESSION['cadastropessoal']))
		$pessoas = $_SESSION['cadastropessoal'];

?>

<div class="container">
		<table class='table table-hover'">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nome</th>
					<th scope="col">Idade</th>
					<th scope="col">Telefone</th>
					<th scope="col">Endereço</th>
					<th scope="col">Cidade</th>
					<th scope="col">Estado</th>
					<th scope="col">Ações</th>
				</tr>
			</thead>
			<tbody>
<?php 
		//var_dump($_SESSION['cadastropessoal'])
		foreach ($pessoas as $i => $p) {
			$uf = $estados [$p['estado']];
			echo "<tr>";
				echo "<th scope='row'>". $i . "</th>";
				echo "<td>" . $p['nome'] . " </td>";
				echo "<td>" . $p['idade'] . " </td>";
				echo "<td>" . $p['telefone'] . " </td>";
				echo "<td>" . $p['endereco'] . " </td>";
				echo "<td>" . $p['cidade'] . " </td>";
				echo "<td>" . $uf . " </td>";
				echo "<td>";
				echo "<a href='index.php?id=$i&pagina=cadastrar ' class='btn btn-warning'>Editar</a><br><br>";
				echo "<a href='apagar.php?id=$i 'class='btn btn-danger'> Excluir</a>";
				echo  "</td>";
			echo "</tr>";
		}
?>
		 </tbody>
		 </table>
</div>