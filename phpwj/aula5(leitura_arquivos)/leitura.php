<?php 
	
	$nome = "/home/jjosinoms/Documentos/arquivo.txt";
	if (file_exists($nome)){
		echo "<p>Arquivo EXISTE: $nome </p>";
		$f = fopen($nome, 'r');
		if ($f){
			$conteudo = fread($f, filesize($nome) );
			echo "<p>  Conteúdo do arquivo: </p>";
			echo $conteudo;
			fclose($f);
		}
	}else{
		echo "<p> Arquivo NÃO EXISTE";
	}

?>