<?php
		session_start();
		unset($_SESSION['usuario']);		//UNSET = destrói a seção usuário
		
		header("location: index.php");
		

?>