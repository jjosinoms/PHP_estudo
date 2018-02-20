<?php 
	SESSION_start();
	
	include "conexao.php";
	
	if(!isset($_SESSION['usuario'])){
			$acao ="login";
	}else if(isset($_GET['acao'])){
		$acao = $_GET['acao'];
	}else{
		$acao = "inicial";   
	}
	
	switch($acao){
		case "login":
			$model = "autenticar-usuario.php";
			$view = "form-login.php";
			break;
		case "logoff":
			$model = "logoff-usuario.php";
			$view = "form-login.php";
			break;
		
		case "cadastro-cliente":
			$model = "cadastrar-cliente.php";
			$view = "form-cliente.php";
			break;
			
		case "lista-cliente":
			$model = "listar-cliente.php";
			$view = "lista-cliente.php";
			break;
			
		case "excluir-cliente":
			$model = "excluir-cliente.php";
			$view = "lista-cliente.php";
			break;
		
		case "atualizar-cliente":
			$model = "atualizar-cliente.php";
			$view = "form-edita-cliente.php";
			break;
			
		case "edita-cliente":
			$model = "edita-cliente.php";
			$view = "form-edita-cliente.php";
			break;
			
		case "pesquisar-nome-cliente":
			$model = "pesquisar-nome-cliente.php";
			$view = "lista-cliente.php";
			break;
			
		case "busca-nome-cliente":
			$model = "";
			$view = "form-busca-cliente.php";
			break;
		
		case "inicial":
			$model = "";
			$view ="inicial.php";
			break;
			
		default:
			$model = "";
			$view = "erro404.php";
			break;
			
	}
	if(!empty($model))
		include "model/".$model;
		
	if(!empty($view))
	include "view/".$view;
	
?>