<?php
		include "verificar-usuario.php";
		include "conexao.php";
		include "funcoes-banco.php";  // Incluir a função para cadastrar o cliente
		
		
		try{ //Executa o bloco, caso houver erro execute o bloco catch		
			//Pegando os dados do formulário

			$dados['cpf'] = $_POST['cpf'];
			$dados['nome']  = $_POST['nome'];
			$dados['endereco']  = $_POST['endereco'];
			$dados['telefone']  = $_POST['telefone'];
			$dados['email']  = $_POST['email'];
	
		if(empty($dados['cpf'])){  //Verifica se o nome esta em branco
			throw new Exception("Preencha o cpf"); // Lançando uma exceção (Erro)
		}else if(empty($dados['nome'])){										//  EMPTY verifica se está em branco (o campo está vazio)
			throw new Exception("Preencha o nome");
		}else if(empty($dados['endereco'])){
			throw new Exception("Preencha o endereço");
		}else if(empty($dados['telefone'])){
			throw new Exception("Preencha o telefone");
		}else if(empty($dados['email'])){
			throw new Exception("Preencha o email");
		}
		
		// Caso não haka nenhum erro, executa a função cadastrarprofessor
		echo cadastrarcliente($dados);
		
		}
		catch (Exception $e) {
			echo $e->getMessage();
		}finally{
			mysql_close($conexao);
		}
	
	


?>