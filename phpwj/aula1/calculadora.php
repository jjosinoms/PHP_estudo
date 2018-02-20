		<?php
			$res = 0;
			if(count($_POST) && isset($_POST["op"])){
				switch( $_POST["op"]){

					case "soma":
						$res = $_POST["n1"] + $_POST["n2"];
						break;
					case "sub":
						$res = $_POST["n1"] - $_POST["n2"];
						break;						
					case "multi":
						$res = $_POST["n1"] * $_POST["n2"];
						break;
					case "div":
						$res = $_POST["n1"] / $_POST["n2"];
						break;
				}

			}

		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title></title>
		<meta charset="UTF-8">
			<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		  <!-- Compiled and minified CSS -->
		  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

		  <!-- Compiled and minified JavaScript -->
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

		</head>
		<body>
		<script type="text/javascript">
			$(document).ready(function(){

				$("h1").css({"color":"green"});
			});
		</script>
		<div class="container">
			<div class="row">
				<div class="col s8">
					<h4 class="header">Minha Calculadora</h4>
					<div class="card horizontal">
						<div class="card-image">
							
						</div>
						<div class="card-stacked">
							
						</div>
						<div class="row">
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

		</div>
		</body>
		</html>