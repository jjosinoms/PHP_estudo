<?php include("topo.php"); ?>
<?php  require_once("produto.php") ?>
<!-- INICIO CONTEUDO -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Lista Produtos</h2>

<form method="GET" >
<table class="table table-striped">

  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Marca</th>
      <th scope="col">Preço</th>
      <th scope="col">Validade</th>
      <th scope="col">Categoria</th>
    </tr>
  </thead>
  <tbody>
    <tr>
<?php

  // DELETAR DA TABELA
/*
$sql = "DELETE FROM produto WHERE id=1";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
*/

// CONEXAO COM A TABELA PRODUTO E PASSANDO OS DADOS ATRAVES DA VARIAVEL "row" DENTRO DO WHILE

$query = "SELECT * FROM produto";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
while ($row = mysqli_fetch_assoc($result)) {

echo "<tr>";
echo "<td>" . $row['nome'] . "</td>";
echo "<td>" . $row['marca'] . "</td>";
echo "<td>" . $row['preco'] . "</td>";
echo "<td>" . $row['validade'] . "</td>";
echo "<td>" . $row['categoria'] . "</td>";
echo "</tr>";

}
?>
    </tr>

  </tbody>
</table>
</form>
			</div>
		</div>
	</div>

