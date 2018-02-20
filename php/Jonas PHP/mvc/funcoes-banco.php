<?php

function cadastrarCliente($dados){

    $cpf = $dados ['cpf'];
	$nome = $dados ['nome'];
	$endereco =  $dados['endereco'];
	$telefone = $dados ['telefone'];
	$email = $dados ['email'];
	
	
	
	$seila = "INSERT INTO cliente VALUES
	            (null, '$cpf','$nome','$endereco','$telefone','$email')";
				
	mysql_query($seila) or die (mysql_error());
	return "Cadastrado com sucesso";

}

function listarCliente(){
	$query = "SELECT * from cliente";
	$lista = mysql_query($query);
	return $lista;
}

function atualizarCliente($dados){

    $id = $dados ['id'];
	$cpf = $dados ['cpf'];
	$nome = $dados ['nome'];
	$endereco = $dados ['endereco'];
	$telefone = $dados ['telefone'];
	$email = $dados ['email'];

	$sql = "UPDATE cliente SET
	            cpf= '$cpf', nome = '$nome',
				endereco = '$endereco', telefone = '$telefone',
				email = '$email' WHERE id = $id";
				
		mysql_query($sql) or die (mysql_error());
		return "Atualizado com sucesso";
}

function excluirCliente($id){
	$sql = "Delete from cliente WHERE id = $id";
	mysql_query($sql) or die (mysql_error());
	return "Excluído com sucesso";
}

function editaCliente($id){
	$query = "SELECT * from cliente WHERE id = $id";
	$cliente = mysql_query($query);
	return $cliente;
}

function pesquisaNomeCliente($nome){
	$query = "SELECT * from cliente where nome like '%$nome%'";
	$cliente = mysql_query($query);
	return $cliente;
}

?>
