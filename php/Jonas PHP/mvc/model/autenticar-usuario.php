<?php

	// execute
	try{	
	//caso seja enviado o formulário não será feito nada
		if(!isset($_POST['logar'])){
			throw new Exception("");
		}
		
	// verificando se o usuario e senha foram preenchidos
		if(!isset($_POST['usuario']) or !isset($_POST['senha'])){ 
			throw new Exception("Usuario ou senha Inválido");
		}
	
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	
	$sql = "SELECT * FROM usuario WHERE
	    login = '$usuario' and senha = '$senha'";
		
	$res = mysql_query($sql);
	
	if(mysql_num_rows($res)>0){
		$_SESSION['usuario'] = $usuario;
		header ("location: controller.php");
	}else{
		// Usuario Inválido
		throw new Exception ("Usuário ou senha inválidos");
	}
	// Caso houver erro
	}catch(Exception $e){
			$msg = $e -> getMessage();
	}
	
?>