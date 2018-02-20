<?php
	require_once("topo.php");
	require_once("connection.php");
	require_once("mercado.php");

$query = "SELECT * FROM produto";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$row = mysqli_fetch_assoc($result);

?>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<h2>Nome: <?php $row[1]; ?> </h2>

		</div>
	</div>
</div>