<?php  				//autenticar-usuario.php


	session_start();
	include "conexao.php";
	
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	
	$sql = "SELECT * FROM usuario WHERE
		login = '$usuario' AND senha = '$senha'";
		
			$res = mysql_query($sql);
			
			if (mysql_num_rows($res)>0){		// Verifica se existe algum registro
				$_SESSION['usuario'] = $usuario;	// Registra a Seção do usuário
				header ("location: cadastro-cliente.php");
			}else{
				header ("location: index.php?erro=1");
			}



?>