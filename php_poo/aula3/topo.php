<?php 

  require_once("connection.php"); 

?>

<!DOCTYPE html>
<html>
<head>
	<title>JMARKET</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="jquery-3.3.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<body>
<!--INICIO MENU(NAV) -->
      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">JMARKET</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="lista_produtos.php">Lista Produtos</a></li>
              <li><a href="cadastro_mercado.php">Cadastrar Mercado</a></li>
              <li><a href="cadastro_produto.php">Cadastrar Produto</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
<!--FINAL MENU(NAV) -->
	<div class="container">
<!-- INICIO LOGO -->
		<div class="row">
			<div class="col-md-2">
				<img src="img/logo.png" width="60px" id="logo">	
			</div>
			<div class="col-md-1">
				<h1>JMARKET</h1>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<hr id="hr_logo">
			</div>
		</div>
  </div>
<!-- FINAL LOGO -->

</body>
</html>