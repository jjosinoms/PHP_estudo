<?php

    // pegando os dados do formulário
    $nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];
	
	// incluindo os dados da conexão
	include "conexao.php";
	
	// criar o SQL
	$query = "INSERT INTO contato VALUES 
	            (null,'$nome','$telefone','$email')";
		
// executar o SQL no banco de dados		
	mysql_query($query) or die (mysql_error());
	
	echo "Cadastrado com sucesso";
	
?>