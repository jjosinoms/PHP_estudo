<?php
    include "topo.php";
	include "menu.php";
?>
<div class="container id="conteudo">
<h1> Listagem de Contatos</h1>

<table>
    <tr>
	    <th>ID</th>
		<th>NOME</th>
		<th>TELEFONE</th>
		<th>E-MAIL</th>
	</tr>
	
<?php
    include "conexao.php";
	
	$query = "SELECT * from contato";
	$result = mysql_query($query);
	while($fetch = mysql_fetch_row($result)){
		echo "<tr>";
		echo "<td>".$fetch[0]."</td>";
		echo "<td>".$fetch[1]."</td>";
		echo "<td>".$fetch[2]."</td>";
		echo "<td>".$fetch[3]."</td>";
		echo "</tr>";
	}
	
?>
</table>
</div>