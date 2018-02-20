<?php

//realizando a conexão
$conexao = mysql_connect("localhost","root","");
// seleciono a base de dados
mysql_select_db("academia");

// verifica se não foi conectado
if(!$conexao){
    echo "Não Conectado";
}

			// faz com que os caracteres sejam exibidos naturalmente

mysql_query("SET NAMES 'utf8'");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_results=utf8");
?>