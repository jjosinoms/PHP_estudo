<?php
	
	$pagina = "";

	if(isset($_GET['pagina'])){

		$pagina = $_GET['pagina'].".php";

	}else{
		$pagina = "home.php";
	}

	if(!file_exists($pagina)){
		$pagina = "erro.php";
	}

	include("menu.php");		// Menu
	include($pagina);			//Página solicitada (variável)
	include("rodape.php");		//Rodapé
	
?>