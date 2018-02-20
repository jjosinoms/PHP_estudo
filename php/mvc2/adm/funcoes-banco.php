<?php

function autenticarAdm($lista){
	
	while($fetch = mysql_fetch_row($lista)){
		$_SESSION['iduser'] = $fetch[0];
		$_SESSION['nomeUser'] = $fetch[1];
		$_SESSION['user'] = $fetch[2];
		
	}
}
function gerarListaCliente(){
	
	$sql = "select idcliente, matricula, nome, telefone, celular, email
					from cliente";
	$cliente = mysql_query($sql);
		
		return $cliente;
	}
	

function gerarColunaListaCliente(){
	$col[0] = "ID";
	$col[1] = "Matricula";
	$col[2] = "Nome";
	$col[3] = "Telefone";
	$col[4] = "Celular";
	$col[5] = "Email";
	
	return $col;
	
}
function gerarListaModalidade(){
	
	$sql = "select * from modalidade";
	$cliente = mysql_query($sql);
		
		return $cliente;
	}
	
function gerarColunaListaModalidade(){
	$col[0] = "ID";
	$col[1] = "Nome";
	$col[2] = "Valor";
	return $col;
	
}
function cadastrarCliente($dados){
	$matricula = $dados['matricula'];
	$cpf = $dados['cpf'];
	$nome = $dados['nome'];
	$endereco = $dados['endereco'];
	$numero_endereco = $dados['numero_endereco'];
	$bairro = $dados['bairro'];
	$cidade = $dados['cidade'];
	$cep = $dados['cep'];
	$telefone = $dados['telefone'];
	$celular = $dados['celular'];
	$email = $dados['email'];
	$senha = $dados['senha'];
		
		$sql = "INSERT INTo cliente VALUES (default, '$matricula','$cpf','$nome',
					'$endereco','$numero_endereco','$bairro','$cidade','$cep','$telefone',
					'$celular','$email','$senha')";
		mysql_query($sql) or die(mysql_error());
		return "Cadastrado com sucesso";
		
}
?>
