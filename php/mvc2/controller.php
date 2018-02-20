<?php  
    SESSION_start();
    include "conexao.php";
	include "funcoes-banco.php";
	
	if(!isset($_SESSION['idcliente'])){
		$acao = "login";
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
			
		case "inicial":
		    $model = "";
			$view = "inicial.php";
			break;
			
		case "meu-cadastro":
		    $model = "cliente-visualizar.php";
			$view = "form-cliente-cadastro.php";
			break;
		case "meu-plano":
			$model = "plano-visualizar.php";
			$view = "form-plano-cadastro.php";
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
	
	mysql_close();
?>