<?php include "topo.php" ?>
<?php include "menu.php" ?>
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h1> MEU PLANO</h1>
			</div>
			
				<table class="table">
					<tr>
						<th>Modalidade</th>
						<th>Preço</th>
					</tr>
						<?php
						$total = 0;
							while($fetch = mysql_fetch_row($dados)){
								echo '<tr>';
									echo '<td>'.$fetch[1].'</td>';
									echo '<td>R$ '.number_format($fetch[3], 2, ',','.').'</td>';
								echo '</tr>';
								$total = $total + $fetch[3];
							}
						?>

					<tr>
						<td><b>Total</b></td>
						<td><b> R$ <?php echo number_format($total, 2, ',','.'); ?>	</b></td>
					</tr>
				</table>
			
	
		</div>
	</div>


<?php include "rodape.php" ?>