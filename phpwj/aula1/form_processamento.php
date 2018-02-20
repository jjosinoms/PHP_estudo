<?php
	// $_GET e o $_POST

	$dados = $_POST;

	echo "<p>Nome: ". $dados['nome'] ."</p>";
	echo "<p>Idade: ". $dados['idade'] ."</p>";
	echo "<p>Cidade: ". $dados['cidade'] ."</p>";
	echo "<p>Endereço: ". $dados['endereco'] ."</p>";


?>