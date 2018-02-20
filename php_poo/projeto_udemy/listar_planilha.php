 
<!-- INICIO PAGINA RESTRITA   -->
<?php 
if(!isset($verificacao)){
    exit;
}
?>
  <!-- INICIO SCRIPT -->
  <script type="text/javascript">
    $( document ).ready(function() {


  });
  </script>
  <!-- FINAL SCRIPT -->

<!-- INICIO LISTAGEM -->
<div class="container">
  <div class="row">
      <div class="col-md-3">
        <?php  echo "<h3> Olá ". $_SESSION['emailSession'] ."</h3>  <hr>"; ?>
      </div>
  </div>
  <div class="row">
    <div class="col-md-12">

      <?php

  //INICIO DA LISTAGEM    

        $query = "SELECT * FROM planilha WHERE id = id";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        

echo "<form method='get' action='index.php?pagina=excluir'>";
echo "<table class='table table-striped'>";
echo "   <thead>";
echo "       <tr>";
echo "         <th>id</th>";
echo "         <th>Nome</th>";
echo "         <th>Valor</th>";
echo "         <th>Vencimento</th>";
echo "         <th>Situação</th>";
echo "         <th>#</th>";
echo "       </tr>";
echo "     </thead>";
echo "<tbody>";

        while ($row = mysqli_fetch_assoc($result)){

echo "      <tr>";
echo "        <td name='id' id='id'>".$row['id'] ." </td>";
echo "        <td>".$row['nome'] ." </td>";
echo "        <td>R$ ".$row['valor'] ."</td>";
echo "        <td>Data ".$row['vencimento'] ."</td>";
echo "        <td>".$row['situacao'] ."</td>";
echo "        <td>"."<button type='submit' class='btn btn-danger'>  Deletar </button></td>";
echo "        <td></td>";
echo "      </tr>";
         // foreach ($row as $i => $value) {  
            // echo $i." ".$value."<br>";}
      }
echo "      </tbody>";
echo "      </table>";
echo "      </form>";
      ?>
    </div>
  </div>
</div>
<!-- FINAL LISTAGEM -->

<!-- INICIO EXCLUIR ITEM -->
<?php


$query = "SELECT * FROM planilha WHERE id = id";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$sql = "DELETE FROM planilha WHERE id = 27";



?>

<!-- FINAL EXCLUIR ITEM -->