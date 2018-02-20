<?php

	session_start();
	//var_dump($_POST);
		if(isset($_POST) && count($_POST)){
			if($_SESSION['login'] = $_POST['login'] && $_SESSION['senha'] = $_POST['senha'] ){
			
			header('Location: listar.php');
			}
		}else{
			
			echo "usuário ou senha incorretos!!<br><br>";
			echo "<a href='index.php'>Voltar </a>";
		
		}
?>