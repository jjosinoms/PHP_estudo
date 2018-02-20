<?php
	$nota1 = 50;
	$nota2 = 80;
	$titulo = "Exemplo 3";
	$texto =($nota1 + $nota2)/2;
	$situacao ="";
	if ($texto>=50) {
			$situacao ="Aprovado"; 
			$cor="#00f";
	} else {
			$situacao="Reprovado"; 
			$cor="#f00";
	}
		

?>


<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title><?php echo $titulo; ?></title>
<script> 
	alert("<?php echo $situacao ?>");
</script>
</head>

<body>
<p style="color: #00f;">
<?php echo $texto; ?>
<p style="color: <?php echo $cor; ?>"><?php echo $situacao; ?></p>
</body>
</html>