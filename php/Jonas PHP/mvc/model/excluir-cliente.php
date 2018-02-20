<?php
	
	try{
		$id = $_GET['id'];
		include "funcoes-banco.php";
		excluirCliente($id);
		$msg = "Excluido com sucesso";
		$lista = listarCliente();
	}catch(Exception $e){
		$msg = "Erro ao excluir";
	}

?>