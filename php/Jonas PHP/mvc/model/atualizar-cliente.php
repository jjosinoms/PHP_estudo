<?php           // Atualizar-Cliente.php
	
		
		include "funcoes-banco.php";  // Incluir a funзгo para cadastrar o cliente
		
		
		try{ //Executa o bloco, caso houver erro execute o bloco catch		
			//Pegando os dados do formulбrio
			
			$dados['id'] = $_POST['id'];
			$dados['cpf'] = $_POST['cpf'];
			$dados['nome']  = $_POST['nome'];
			$dados['endereco']  = $_POST['endereco'];
			$dados['telefone']  = $_POST['telefone'];
			$dados['email']  = $_POST['email'];
			
			
		if(empty($dados['cpf'])){  //Verifica se o nome esta em branco
			throw new Exception("Preencha o cpf"); // Lanзando uma exceзгo (Erro)
		}else if(empty($dados['nome'])){										//  EMPTY verifica se estб em branco ( o campo estб vazio)
			throw new Exception("Preencha o nome");
		}else if(empty($dados['endereco'])){
			throw new Exception("Preencha o endereзo");
		}else if(empty($dados['telefone'])){
			throw new Exception("Preencha o telefone");
		}else if(empty($dados['email'])){
			throw new Exception("Preencha o email");
		}
		
		// Caso nгo haja nenhum erro, executa a funзгo cadastrarprofessor
		$msg = atualizarCliente($dados);
		
		}
		catch (Exception $e) {
			$msg = $e->getMessage();
		}finally{
			$cliente = editaCliente($_GET['id']);
			mysql_close($conexao);
		}
	
	


?>