<?php 

	session_start();
	if(isset($_POST) && count($_POST)){
		//var_dump($_POST);
		 $_SESSION[''][] = $_POST;
	}
header('Location: listar.php');
	
	

?>