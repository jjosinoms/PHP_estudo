<?php
	
	try{
		$dados = gerarListaCliente();
		$colunas = gerarColunaListaCliente();
		$link = "visualiza-cliente";
	}catch(Exception $e){
		header("location: controller.php?acao=login");
		
	
	}


?>