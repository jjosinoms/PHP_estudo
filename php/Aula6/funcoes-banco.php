<?php		// funcoes-banco.php
		
		function cadastrarcliente($dados){
			
			$cpf = $dados ['cpf'];
			$nome = $dados['nome'];
			$endereco = $dados['endereco'];
			$telefone = $dados['telefone'];
			$email = $dados['email'];
 
 			$sql = "INSERT INTO cliente VALUES
					(null, '$cpf', '$nome','$endereco','$telefone','$email')";
					
			mysql_query($sql) or die (mysql_error());
			return "Cadastrado com sucesso";
 
		}
		
		
		
		function listacliente(){
			$query = "SELECT * from cliente";
			$lista = mysql_query($query);
		
			return $lista;
	}	
	
	
	
	function atualizarcliente ($dados){
		
			$id = $dados['id'];
			$cpf = $dados ['cpf'];
			$nome = $dados['nome'];
			$endereco = $dados['endereco'];
			$telefone = $dados['telefone'];
			$email = $dados['email'];
 
 			$sql = "UPDATE cliente SET
		cpf = '$cpf', nome = '$nome', endereco = '$endereco', telefone = '$telefone',
		email = '$email' WHERE id = $id;";
					
			mysql_query($sql) or die (mysql_error());
			return "Atualizado com sucesso";
 
		}
		
	
	
		function excluircliente ($id){
		$sql = "Delete from cliente WHERE id = $id";
		mysql_query($sql) or die (mysql_error());
		echo "Excluido com sucesso";
	}
	
	
	
	
	
?>


		