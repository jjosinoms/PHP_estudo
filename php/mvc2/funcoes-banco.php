<?php

function autenticarCliente($lista){
	
	while($fetch = mysql_fetch_row($lista)){
		$_SESSION['idcliente'] = $fetch[0];
		$_SESSION['matriculacliente'] = $fetch[1];
		$_SESSION['nomecliente'] = $fetch[3];
	}
}

function visualizaCliente(){
	$id = $_SESSION['idcliente'];
	$query = "SELECT * from cliente WHERE idcliente = $id";
	$cliente = mysql_query($query);
	
	while($fetch = mysql_fetch_row($cliente)){
		$dados['idcliente'] = $fetch[0];
		$dados['matricula'] = $fetch[1];
		$dados['cpf'] = $fetch[2];
		$dados['nome'] = $fetch[3];
		$dados['endereco'] = $fetch[4];
		$dados['numero_endereco'] = $fetch[5];
		$dados['bairro'] = $fetch[6];
		$dados['cidade'] = $fetch[7];
		$dados['cep'] = $fetch[8];
		$dados['telefone'] = $fetch[9];
		$dados['celular'] = $fetch[10];
		$dados['email'] = $fetch[11];
		
	}
	
	return $dados;
}
function meuPlano (){
		$idcliente = $_SESSION['idcliente'];
		$sql = "SELECT
				a.idmodalidade,
				a.nomeModalidade,
				b.idplano,
				b.preco
			FROM modalidade a inner join plano b
				where a.idmodalidade = b.modalidade_idmodalidade
				and cliente_idcliente = $idcliente";
			$plano = mysql_query($sql);
			return $plano;
		
}

?>
