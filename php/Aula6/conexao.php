<?php

//realizando a conexão
$conexao = mysql_connect("localhost","root","");
// seleciono a base de dados
mysql_select_db("dbcliente");

// verifica se não foi conectado
if(!$conexao){
    echo "Não Conectado";
}

?>