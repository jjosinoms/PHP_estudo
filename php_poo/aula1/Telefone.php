<?php

class Telefone{

	var $digito;
	var $gancho;
	var $numero = [] ;

	function ligar(){

		$gancho = false;
		echo "<form method='post'>";
		echo "Digite o seu numero e aguarde...<br><br>";
		echo "<button name='1'> 1 </button> <button name='2'> 2 </button> <button name='3'> 3 </button><br>";
		echo "<button name='4'> 4 </button> <button name='5'> 5 </button> <button name='6'> 6 </button><br>";
		echo "<button name='7'> 7 </button> <button name='8'> 8 </button> <button name='9'> 9 </button><br>";
		echo "<button> * </button> <button name='0'> 0 </button> <button># </button><br>";
		echo "</form>";

		$numero = ['n1'=>2, 'n2' =>3];
		//var_dump($numero);
		foreach ($numero as $conteudo){
    		echo("<br>".$conteudo."<br>");
}

	}

	function desligar(){

		$gancho = true;
		echo "tu tu tu tu tu ....";

	}

	function digitar(){

	}
}




?>