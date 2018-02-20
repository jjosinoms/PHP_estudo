<?php  				//excluir-professor.php


	$id = $_GET['id'];
	
	include "conexao.php";
	
	$sql = "DELETE FROM professor WHERE id = $id;";
	
	mysql_query ($sql) or die (mysql_error());
	
	echo "Excluido com sucesso </br></br>";
	echo '<a href="lista-professor.php"> Voltar</a>';



?>