<?php
		
	$pagina ="";       // variável que vai armazenar o nome da página
	
	if(isset($_GET['pagina'])) { 			//  Verificar se foi enviado a variável
		$pagina = $_GET['pagina'].".php";		//	Se for enviado, pega o nome da página na url e atribui a extensão .php
		
		
	} 
	else{
		$pagina = "home.php";		// Caso não seja enviado nada, a página a ser mostrada é home.php 
		
	}

	if (!file_exists($pagina)) {	//Verifica se NÃO existe o arquivo ($pagina)
		$pagina = "erro.php";			//Caso o arquivo solicitado não exista, a página mostrada é erro.php
		
	}



		// TEMPLATES !!! 
		
	include("header.php");		// Cabeçalho da página
	include("menu.php");		// Menu
	include($pagina);			//Página solicitada (variável)
	include("rodape.php");		//Rodapé
	


?>