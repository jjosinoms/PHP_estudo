<?php 

	//$conteudo = file_get_contents('/home/jjosinoms/Documentos/arquivo.txt');
	$url = "http://jonasjms.pythonanywhere.com/";
	$conteudo = file_get_contents($url);
	if($conteudo){
		echo $conteudo;
		file_put_contents("/home/jjosinoms/Documentos/g1.html", $conteudo);

	}else{
		echo "Erro ao abrir o arquivo!";
	}

	

?>