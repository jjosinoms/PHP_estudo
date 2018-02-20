<?php

	include "conexao.php";
	include "funcoes-banco.php";
    include "topo.php";
	include "menu.php";
	
?>
<div class="container" id="conteudo">
<h1> Listagem de Professores</h1>

<table>
    <tr>
	    <th>ID</th>
		<th>MATRICULA</th>
		<th>AREA</th>
		<th>NOME</th>
		<th>ENDEREÇO</th>
		<th>CEP</th>
		<th>TELEFONE</th>
        <th></th>
        <th></th>
	</tr>
	
<?php
    
	
	$lista = listaprofessor();						
	while($fetch = mysql_fetch_row($lista)){
		echo "<tr>";							
		echo "<td>".$fetch[0]."</td>";					// FETCH -> registros em posições 0, 1 ,2 ...
		echo "<td>".$fetch[1]."</td>";
		echo "<td>".$fetch[2]."</td>";
		echo "<td>".$fetch[3]."</td>";
		echo "<td>".$fetch[4]."</td>";
		echo "<td>".$fetch[5]."</td>";
		echo "<td>".$fetch[6]."</td>";
		echo '<td><a href="edita-professor.php?id='.$fetch[0].'">Editar</a></td>';
		echo '<td><a href="excluir-professor.php?id='.$fetch[0].'">Excluir</a></td>';
		echo "</tr>";
	}
	
?>
</table>
</div>