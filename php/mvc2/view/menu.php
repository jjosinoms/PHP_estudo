<nav class="navbar navbar-default menu-principal">
     <div class="container">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">ACADEMIA</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
      <ul class="nav navbar-nav">
        <li class="active2"><a href="controller.php">Home <span class="sr-only">(current)</span></a></li>
        
        <li><a href="controller.php?acao=meu-cadastro">Meu Cadastro</a></li>
        <li><a href="controller.php?acao=meu-plano">Plano Contratado</a></li>
		<li><a href="controller.php?acao=horario-tabela">Horário</a></li>
		<li><a href="controller.php?acao=logoff">Sair</a></li>
     
          </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </div>
</nav>         


    <?php 
	if(isset($msg)){
		echo '<div class="alert alert-warning container">';
		echo $msg;
		echo '</div>'; 
	};	
	?>
