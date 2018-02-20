
<?php
	
	session_start();
	//session_destroy();
	$pessoas = [];
	if (isset($_SESSION['']))
		$pessoas = $_SESSION[''];

?>

<div class="container">
		<table class='table table-hover'">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Login</th>
					<th scope="col">Senha </th>
					<th scope="col">Ações</th>
				</tr>
			</thead>
			<tbody>
			<form action="sair.php">
				<button type="submit" value="sair" >Sair</button>
			</form>
<?php 
		//var_dump($_SESSION['']);
		foreach ($pessoas as $i => $p) {
			echo "<tr>";
				echo "<th scope='row'>". $i . "</th>";
				echo "<td>" . $p['login'] . " </td>";
				echo "<td>" . $p['senha'] . " </td>";
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