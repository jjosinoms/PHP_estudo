<?php

Class Produto{

	var $id;
	var $nome;
	var $marca;
	var $preco;
	var $validade;
	var $categoria;

	function delete(){
		"DELETE FROM produto WHERE id = ('$id')";
	}


}

?>