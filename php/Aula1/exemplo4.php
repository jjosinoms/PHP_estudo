<?php
	$titulo = "Exemplo 4";
	$media = 0;
	if (isset($_GET['calcular'])){
		
		$nota1 = $_GET['nota1'];
		$nota2 = $_GET['nota2'];
		$media = ($nota1 + $nota2)/2; }
		

?>


<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title><?php echo $titulo; ?></title>
</head>
<body>
<h1> Calcular Média </h1>
<form method="get" action="exemplo4.php">
	<label> Nota 1 </label>
    <input type="text" name="nota1" size="5" /> <br />
    <label> Nota 2 </label>
    <input type="text" name="nota2" size="5" /> <br />
    <input type="submit" name="calcular" value="calcular" />
</form>
    <p> Resultado: <?php echo $media; ?></p>
</body>
</html>