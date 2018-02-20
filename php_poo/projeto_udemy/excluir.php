<?php
  session_start();
  //<!-- INICIO PAGINA RESTRITA   -->

if(!isset($verificacao)){
    exit;
}

 require_once("connection.php");
 require_once("listar_planilha.php");

 $id = $_GET['id'];

 if (isset($id)) {
 	$query = $mysqli -> query ("DELETE FROM planilha WHERE id='$id'");

 }

 ?>