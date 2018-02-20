<?php

if(isset($_POST['cadastrar'])){
include "funcoes-banco.php"; // incluir a função para cadastrar o cliente

try{ // Execute o bloco, caso houver erro execute o bloco catch
     // pegando os dados do formulário
    $dados['cpf'] = $_POST['cpf'];
	$dados['nome'] = $_POST['nome'];
	$dados['endereco'] = $_POST['endereco'];
	$dados['telefone'] = $_POST['telefone'];
	$dados['email'] = $_POST['email'];
	
	if(empty($dados['cpf'])){ // verifica se o nome está em branco
	    throw new Exception("Preencha o cpf"); // Lançando uma Exceção (Erro)
		}else if(empty($dados['nome'])){
			throw new Exception("Preencha o nome");         // empty verifica se o campo está em branco
		}else if(empty($dados['endereco'])){
			throw new Exception("Preencha o endereço");
		}else if(empty($dados['telefone'])){
			throw new Exception("Preencha o telefone");
		}else if(empty($dados['email'])){
			throw new Exception("Preencha o e-mail");
		}
			
		// caso não haja nenhum erro, execute a função cadastrarCliente
	     $msg = cadastrarCliente($dados);
	
}   catch(Exception $e) {
	    $msg = $e->getMessage();
}
	finally{
		mysql_close($conexao);
	}	 
	}	 
?>