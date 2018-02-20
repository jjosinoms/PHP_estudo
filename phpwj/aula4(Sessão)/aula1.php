<?php
	
	session_start();
	//session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulário - Sessao</title>
</head>
<body>
<form method="post">
	<table border="0">
		<tr>
			<td><input type="text" name="nome" placeholder="Nome"></td>
		</tr>
		<tr>
			<td><input type="number" name="idade" placeholder="Idade"></td>
		</tr>
		<tr>
			<td><input type="text" name="telefone" placeholder="Telefone"></td>
		</tr>
		<tr>
			<td><input type="submit" value="enviar"></td>
		</tr>
	</table>
</form>
<br>
<hr>

<?php
	
	if (isset($_POST) && count($_POST)){
	$_SESSION['cadastro'][] = $_POST;
		//var_dump($_POST);

		if(count($_SESSION['cadastro'])){
			echo "<table border='0'>";
			foreach ($_SESSION['cadastro'] as $pessoa) {
				echo "<tr>";
				foreach ($pessoa as $atr => $valor) {
					echo "<td><b> $atr </b> </td>";
					echo "<td> $valor  </td>";
				}

				echo "</tr>";
			}

			echo "</table>";
		}

	}else{
		echo "<h4>Não há ninguém cadastrado! </h4>";
	}

?>

</body>
</html>