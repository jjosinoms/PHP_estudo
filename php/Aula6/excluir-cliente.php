<?php  				//excluir-cliente.php
	
	include "verificar-usuario.php";

	$id = $_GET['id'];
	
	include "conexao.php";
	include "funcoes-banco.php";
	
	excluircliente ($id);
	

	echo '<a href="listar-cliente.php"> Voltar</a>';



?>