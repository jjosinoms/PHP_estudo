<?php
		include "conexao.php";
		include "funcoes-banco.php";  // Incluir a função para cadastrar o professor
		
		
		try{ //Executa o bloco, caso houver erro execute o bloco catch		
			//Pegando os dados do formulário

			$dados['nome'] = $_POST['nome'];
			$dados['area']  = $_POST['area'];
			$dados['matricula']  = $_POST['matricula'];
			$dados['endereco']  = $_POST['endereco'];
			$dados['cep']  = $_POST['cep'];
			$dados['telefone']  = $_POST['telefone'];
	
		if(empty($dados['nome'])){  //Verifica se o nome esta em branco
			throw new Exception("Preencha o nome"); // Lançando uma exceção (Erro)
		}else if(empty($dados['area'])){
			throw new Exception("Preencha o area");
		}else if(empty($dados['matricula'])){										//  EMPTY verifica se está em branco ( o campo está vazio)
			throw new Exception("Preencha o matricula");
		}else if(empty($dados['endereco'])){
			throw new Exception("Preencha o endereço");
		}else if(empty($dados['cep'])){
			throw new Exception("Preencha o cep");
		}else if(empty($dados['telefone'])){
			throw new Exception("Preencha o telefone");
		}
		
		// Caso não haka nenhum erro, executa a função cadastrarprofessor
		echo cadastrarprofessor($dados);
		
		}
		catch (Exception $e) {
			echo $e->getMessage();
		}finally{
			mysql_close($conexao);
		}
	
	


?>