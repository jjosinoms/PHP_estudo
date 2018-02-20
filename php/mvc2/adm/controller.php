<?php  
    SESSION_start();
    include "conexao.php";
	include "funcoes-banco.php";
	
	if(!isset($_SESSION['iduser'])){
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
		case "cliente":
		    $model = "gerar-lista-cliente.php";
			$view = "lista-cliente.php";
			break;
		case "modalidade":
		    $model = "gerar-lista-modalidade.php";
			$view = "lista-modalidade.php";
			break;
		case "cliente-cadastrar":
		    $model = "cliente-cadastrar.php";
			$view = "form-cliente-cadastro.php";
			break;
		case "horario":
		    $model = "gerar-horario.php";
			$view = "inicial.php";
			break;
		case "usuario":
		    $model = "gerar-lista-usuario.php";
			$view = "inicial.php";
			break;
		case "inicial":
		    $model = "";
			$view = "inicial.php";
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