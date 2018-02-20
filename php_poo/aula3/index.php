<?php include("topo.php"); ?>
<!-- INICIO CONTEUDO -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Lista Mercados</h2>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Região</th>
      <th scope="col">Bairro</th>
      <th scope="col">Endereço</th>
    </tr>
  </thead>
  <tbody>
    <tr>
<?php

// CONEXAO COM A TABELA MERCADO E PASSANDO OS DADOS ATRAVES DA VARIAVEL "row" DENTRO DO WHILE
$query = "SELECT * FROM mercado";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));


while ($row = mysqli_fetch_assoc($result)) {

echo "<tr>";
echo "<td>" . $row['nome'] . "</td>";
echo "<td>" . $row['regiao'] . "</td>";
echo "<td>" . $row['bairro'] . "</td>";
echo "<td>" . $row['endereco'] . "</td>";
echo "</tr>";

}
?>
    </tr>

  </tbody>
</table>
			</div>
		</div>
	</div>

