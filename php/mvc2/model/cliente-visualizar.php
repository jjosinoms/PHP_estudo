<?php

    try{
		$dados = visualizaCliente();
	}catch(Exception $e){
		header("location: controller.php?acao=login");
	}

?>