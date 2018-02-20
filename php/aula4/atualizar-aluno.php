<?php           // Atualizar-aluno.php
	
		include "conexao.php";
		include "funcoes-banco.php";  // Incluir a função para cadastrar o professor
		
		
		try{ //Executa o bloco, caso houver erro execute o bloco catch		
			//Pegando os dados do formulário
			
			$dados['id'] = $_POST['id'];
			$dados['nome'] = $_POST['nome'];
			$dados['matricula']  = $_POST['matricula'];
			$dados['endereco']  = $_POST['endereco'];
			$dados['cep']  = $_POST['cep'];
			$dados['telefone']  = $_POST['telefone'];
			
			
		if(empty($dados['id'])){  
			throw new Exception("Professor não encontrado"); 
		}else if(empty($dados['nome'])){  //Verifica se o nome esta em branco
			throw new Exception("Preencha o nome"); // Lançando uma exceção (Erro)
		}else if(empty($dados['matricula'])){										//  EMPTY verifica se está em branco ( o campo está vazio)
			throw new Exception("Preencha o matricula");
		}else if(empty($dados['endereco'])){
			throw new Exception("Preencha o endereço");
		}else if(empty($dados['cep'])){
			throw new Exception("Preencha o cep");
		}else if(empty($dados['telefone'])){
			throw new Exception("Preencha o telefone");
		}
		
		// Caso não haja nenhum erro, executa a função cadastrarprofessor
		echo atualizaraluno($dados);
		
		}
		catch (Exception $e) {
			echo $e->getMessage();
		}finally{
			mysql_close($conexao);
		}
	
	


?>