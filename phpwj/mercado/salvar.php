<?php 

	session_start();
	if(isset($_POST) && count($_POST)){
		//var_dump($_POST);
		 $_SESSION['cadastromercado'][] = $_POST;
	}

	header('Location: index.php?pagina=home');
	

?>