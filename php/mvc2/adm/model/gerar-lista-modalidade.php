<?php 
	
	try{
		$dados = gerarListaModalidade();
		$colunas = gerarColunaListaModalidade();
		$link = "visualiza-cliente";
		}catch(Exception $e){
			header("location: controller.php?acao=login");
		}