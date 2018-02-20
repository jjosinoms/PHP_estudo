<?php 

	try{
			$dados = meuPlano();
	}catch(Exception $e){
		header("location: controller.php?acao=login");
	}
	?>