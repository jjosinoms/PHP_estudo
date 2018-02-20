<?php
  
  session_start();
 require_once("connection.php");

 $verificacao = 'ok';

  $page = isset($_SESSION['emailSession']) && isset($_SESSION['senhaSession']);

if (($page)){
	include ("restrito.php");
  }else{
	include ("usuarios.php");
	}
?>

