<?php
	
	require_once("connection.php");

	session_start();
	if (isset($_POST) && count($_POST)) {
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		
				

		$query = "SELECT * FROM usuarios";
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
		while ($row = mysqli_fetch_assoc($result)) {

			if ($email == $row['email'] && $senha == $row['senha']) {
				
				$_SESSION['emailSession'] = $email;
				$_SESSION['senhaSession'] = $senha;
				

				header("Location: index.php?pagina=painel");
			}       	
		}
	}
?>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<h2 style="color:red;">Usuário ou senha incorretos!</h2>
			<a href="index.php?pagina=usuarios" ><button class="btn btn-danger"> Voltar </button></a>
		</div>
	</div>
</div>