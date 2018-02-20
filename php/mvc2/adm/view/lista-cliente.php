<?php
	include "topo.php";
	include "menu.php";
?>

<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h1>Clientes</h1>
			<a href="controller.php?acao=cliente-cadastrar" class="btn btn-primary">Novo + </a>
		</div>
			<table class="table">
			<?php	
			echo '<tr>';
			foreach($colunas as $coluna){
				echo '<th>'.$coluna.'</th>';
				
			}
			echo '</tr>';
			?>
			
			<?php
				
				while($fetch = mysql_fetch_row($dados)){
					
					echo '<tr>';
						echo '<td>'.$fetch[0].'</td>';
						echo '<td>'.$fetch[1].'</td>';
						echo '<td>'.$fetch[2].'</td>';
						echo '<td>'.$fetch[3].'</td>';
						echo '<td>'.$fetch[4].'</td>';
						echo '<td>'.$fetch[5].'</td>';
						
					echo '</tr>';
				}
					?>
					
			</table>
		</div>
	</div>
					
					
		