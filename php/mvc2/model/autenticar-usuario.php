<?php

    // execute
    try{  
	
	    // caso não enviado o formulário não será feito nada
		if(!isset($_POST['logar'])){  
			throw new Exception("");
		}
	
    // verificando se o usuário e senha foram preenchidos
    if(!isset($_POST['matricula']) or !isset($_POST['senha'])){
		throw new Exception("Matricula ou senha inválidos");
	}
	
	$matricula = $_POST['matricula'];
	$senha = $_POST['senha'];
	
	$sql = "SELECT * FROM cliente WHERE
	    matricula = '$matricula' and senha = '$senha'";
		
	$res = mysql_query($sql);
	
	if(mysql_num_rows($res)>0){
		autenticarCliente($res);
		header ("location: controller.php?acao=inicial");
	}else{
		// Usuário inválido
		throw new Exception("Matricula ou senha inválidos");
	}
	// Caso houver erro
	}catch(Exception $e){
		$msg = $e->getMessage();
	}
?>