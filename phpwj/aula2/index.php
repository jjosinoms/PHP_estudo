<?php include 'base.php';?>
<?php include 'topo.php';?>
<?php include 'script.php';?>
<?php include 'calculo.php';?>

<body>
	<div id="index-banner" class="parallax-container">
    	<div class="section no-pad-bot">
      		<div class="container">
        		<br><br>
        		<h1 class="header center teal-text text-lighten-2">Minha Calculadora</h1>
        		<div class="row center">
        			<form method="post">
						<div class="input-field col s6">
							<input type="number" name="n1" placeholder="Campo 1"> 
						</div>
						<div class="input-field col s6">
							<input type="number" name="n2" placeholder="Campo 2"> 
						</div>
						<div class="input-field col s12">
							<button type="submit" name="op" value="soma" class="btn">Soma</button>
							<button type="submit" name="op" value="sub" class="btn amber lighten-1">Subtração</button>
							<button type="submit" name="op" value="multi" class="btn blue lighten-1">Multiplicação</button>
							<button type="submit" name="op" value="div" class="btn pink accent-3">Divisão</button>
							<br><br>
							<a href="#">Resultado: <?php echo $res; ?> </a>
						</div>
					</form>
        		</div>
        
  			</div>
  		</div>
    </div>
</body>
<?php include 'footer.php';?>