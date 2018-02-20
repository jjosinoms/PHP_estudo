<?php 
		include "funcoes-banco.php";
		
		if(isset($_POST['nome'])){
			$nome = $_POST['nome'];
		}else if(isset($_GET['nome'])){
			$nome = $_GET['nome'];
		}else{
			header("location: controller.php?acao=busca-nome-cliente");
		};
		
		$lista = pesquisaNomeCliente($nome);
	
?>