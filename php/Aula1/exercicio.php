<?php
	$titulo = "Exercício";
	$resultadocomissao = 0;
	if (isset($_GET['calcular'])){
		
		$totalvendas = $_GET['totalvendas'];
		$comissao = $_GET['comissao'];
		$resultadocomissao = ($totalvendas * $comissao); }
		
		
		if ($resultadocomissao>=10000) {
			$resultadocomissao; 
			$cor="#00f";
	} else {
			$resultadocomissao ; 
			$cor="#f00";
	}
		

?>


<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title><?php echo $titulo; ?></title>
</head>
<body>
<h1> Calcular Média </h1>
<form method="get" action="exercicio.php">
	<label> Total de Vendas </label>
    <input type="text" name="totalvendas" size="5" /> <br />
    <label> Comissão </label>
    <input type="text" name="comissao" size="5" /> <br />
    <input type="submit" name="calcular" value="calcular" />
</form>
    <p style="color: <?php echo $cor; ?>">Resultado: <?php echo $resultadocomissao; ?></p>
</body>
</html>

