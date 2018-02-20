<?php		// funcoes-banco.php
		
		function cadastrarprofessor($dados){
			
			$nome = $dados ['nome'];
			$area = $dados['area'];
			$matricula = $dados['matricula'];
			$endereco = $dados['endereco'];
			$cep = $dados['cep'];
			$telefone = $dados['telefone'];
 
 			$sql = "INSERT INTO professor VALUES
					(null, '$matricula', '$area','$nome','$endereco','$cep','$telefone')";
					
			mysql_query($sql) or die (mysql_error());
			return "Cadastrado com sucesso";
 
		}
		
		
		function cadastraraluno($dados){
			
		$nome = $dados['nome'];
		$matricula = $dados['matricula'];
		$endereco = $dados['endereco'];
		$cep = $dados['cep'];
		$telefone = $dados['telefone'];
	
	
		$sql = "INSERT INTO aluno VALUES
	            (null, '$matricula','$nome','$endereco','$cep','$telefone')";
				
	mysql_query($sql) or die (mysql_error());
	echo "Cadastrado com sucesso";		
			
			
		}
		
		
	function listaprofessor(){
		$query = "SELECT * from professor";
		$lista = mysql_query($query);
		
		return $lista;
	}	
	
	
	
	function listaaluno(){
		$query = "SELECT * from aluno";
		$lista = mysql_query($query);
		
		return $lista;
	}	
	
	
	function atualizarprofessor ($dados){
		
			$id = $dados['id'];
			$nome = $dados ['nome'];
			$area = $dados['area'];
			$matricula = $dados['matricula'];
			$endereco = $dados['endereco'];
			$cep = $dados['cep'];
			$telefone = $dados['telefone'];
 
 			$sql = "UPDATE professor SET
		matricula = '$matricula', area = '$area', nome = '$nome', endereco = '$endereco', cep = '$cep',
		telefone = '$telefone' WHERE id = $id;";
					
			mysql_query($sql) or die (mysql_error());
			return "Atualizado com sucesso";
 
		}
	
	
	function atualizaraluno ($dados){
		
			$id = $dados['id'];
			$nome = $dados ['nome'];
			$matricula = $dados['matricula'];
			$endereco = $dados['endereco'];
			$cep = $dados['cep'];
			$telefone = $dados['telefone'];
 
 			$sql = "UPDATE aluno SET
		matricula = '$matricula', nome = '$nome', endereco = '$endereco', cep = '$cep',
		telefone = '$telefone' WHERE id = $id;";
					
			mysql_query($sql) or die (mysql_error());
			return "Atualizado com sucesso";
 
		}
		
		
	function excluirprofessor ($id){
		$sql = "Delete from professor WHERE id = $id";
		mysql_query($sql) or die (mysql_error());
		echo "Excluido com sucesso";
	}
	
		function excluiraluno ($id){
		$sql = "Delete from aluno WHERE id = $id";
		mysql_query($sql) or die (mysql_error());
		echo "Excluido com sucesso";
	}
	
	
?>