<?php
	$servername = 'localhost';
	$username = 'root';
	$password= '';
	$dbname = 'cadastro';

	//criando a conexao

	$conn = @new mysqli($servername, $username, $password, $dbname);

	//Verificar conexao

	if($conn -> connect_error){
		die('Connection failed: ' . $conn ->connect_error);
	}
?>