<?php
	
	session_start();
	$mercados = [];
	if (isset($_SESSION['cadastromercado']))
		$mercados = $_SESSION['cadastromercado'];

?>
<div class="container">
<table class='table table-hover'">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nome</th>
					<th scope="col">Bairro</th>
					<th scope="col">Endereço</th>
					<th scope="col">Telefone</th>
					<th scope="col">Ações</th>
				</tr>
			</thead>
			<tbody>
<?php 
		//var_dump($_SESSION['cadastropessoal'])
		foreach ($mercados as $i => $p) {
			echo "<tr>";
				echo "<th scope='row'>". $i . "</th>";
				echo "<td>" . $p['nome'] . " </td>";
				echo "<td>" . $p['bairro'] . " </td>";
				echo "<td>" . $p['endereco'] . " </td>";
				echo "<td>" . $p['telefone'] . " </td>";
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