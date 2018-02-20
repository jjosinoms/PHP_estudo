<?php
	include "topo.php"; 
	include "menu.php";

?>
<div class="container" id="conteudo">
<h1> Listagem de Clientes</h1>

<table>
    <tr>
	    <th>ID</th>
		<th>CPF</th>
		<th>NOME</th>
		<th>ENDEREÇO</th>
		<th>TELEFONE</th>
		<th>E-MAIL</th>
		<th></th>
		<th></th>
	</tr>
	
<?php
    
	
	while($fetch = mysql_fetch_row($lista)){
		echo "<tr>";
		echo "<td>".$fetch[0]."</td>";
		echo "<td>".$fetch[1]."</td>";
		echo "<td>".$fetch[2]."</td>";
		echo "<td>".$fetch[3]."</td>";
		echo "<td>".$fetch[4]."</td>";
		echo "<td>".$fetch[5]."</td>";
		echo '<td><a href="controller.php?acao=edita-cliente&id='.$fetch[0].'">Editar</a></td>';
		echo '<td><a href="controller.php?acao=excluir-cliente&id='.$fetch[0].'">Excluir</a></td>';
		echo "</tr>";
	}
	
?>
</table>
</div>

<?php 

	include "rodape.php";

 ?>