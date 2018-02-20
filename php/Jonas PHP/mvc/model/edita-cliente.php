<?php 
	
	try{
		$id = $_GET['id'];
		include "funcoes-banco.php";
		$cliente = editaCliente($id);
		
		
	}catch(Exception $e){
		$msg = "Cliente não encontrado";
	}
		


 ?>
