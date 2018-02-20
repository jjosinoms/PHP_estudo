<?php

//	verifica se foi enviado o formulário
if(isset($_POST['cadastrar'])){
// se foi enviado execute o código
	try{
		$dados['matricula'] = $_POST['matricula'];
		$dados['cpf'] = $_POST['cpf'];
		$dados['nome'] = $_POST['nome'];
		$dados['endereco'] = $_POST['endereco'];
		$dados['numero_endereco'] = $_POST['numero_endereco'];
		$dados['bairro'] = $_POST['bairro'];
		$dados['cidade'] = $_POST['cidade'];
		$dados['cep'] = $_POST['cep'];
		$dados['telefone'] = $_POST['telefone'];
		$dados['celular'] = $_POST['celular'];
		$dados['email'] = $_POST['email'];
		$dados['senha'] = $_POST['senha'];
		
		//validação dados
		// ---------//	
			$msg = cadastrarCliente($dados);
		
		}catch(Excepetion $e){
		$msg = $e->getMessage();
		}
}else{
	$dados['matricula'] = "";
	$dados['cpf'] = "";
	$dados['nome'] = "";
	$dados['endereco'] = "";
	$dados['numero_endereco'] = "";
	$dados['bairro'] = "";
	$dados['cidade'] = "";
	$dados['cep'] = "";
	$dados['telefone'] = "";
	$dados['celular'] = "";
	$dados['email'] = "";
	$dados['senha'] = "";
}

?>