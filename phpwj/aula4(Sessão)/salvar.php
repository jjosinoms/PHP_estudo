<?php 

	session_start();
	if(isset($_POST) && count($_POST)){
		//var_dump($_POST);
		 $_SESSION['cadastropessoal'][] = $_POST;
	}

	header('Location: index.php?pagina=listar');
	

?>