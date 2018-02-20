<?php 
	require_once("Cliente.php"); 
	require_once("config.php"); 
	require_once("conection.php");

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	session_start();
	if (isset($_POST) && count($_POST)){
	/*
	$c1 = new Cliente;
	$c1 -> nome = $_POST['nome']; 
	$c1 -> cpf = $_POST['cpf'];
	$c1 -> conta = $_POST['conta'];
	$c1 -> agencia = $_POST['agencia'];
	$c1 -> saldo = $_POST['saldo'];

	echo "Nome: " .$c1 -> nome . "<br>";
	echo "CPF: " .$c1 -> cpf . "<br>";
	echo "Agência: " .$c1 -> agencia . "<br>";
	echo "Conta: " .$c1 -> conta ."<br>";
	echo "Saldo: R$ " .$c1 -> saldo . "<br>";
	//echo $c1 -> saldo();
	*/

	
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$agencia = $_POST['agencia'];
	$conta = $_POST['conta'];
	$saldo = $_POST['saldo'];
	//var_dump($_POST);

	$sql = "INSERT INTO clientes (nome, cpf, agencia, conta, saldo) VALUES ('$nome','$cpf','$agencia','$conta','$saldo')";

	if($conn -> query($sql) ==  TRUE){
	echo "Criado com sucesso";
	}else{
	echo "Erro" . $sql . "<br>" . $conn->error;
	}

}else{
	echo "Campos vazios!";
}
?>

<form method="post">
	<input type="text" name="nome" placeholder="Nome">
	<input type="text" name="cpf" placeholder="CPF">
	<input type="text" name="agencia" placeholder="agencia">
	<input type="text" name="conta" placeholder="conta">
	<input type="text" name="saldo" placeholder="saldo">

	<button type="submit" >Enviar	</button>
</form>

<!--LISTAR DADOS DO BANCO DE DADOS   -->
<?php
	
$sql = $conn->query("Select * From clientes");

if($sql){ // If $sql is True
	echo "<table >
        		<tr>
        			<td>Nome</td> 
        			<td>CPF</td> 
        			<td>Agencia</td> 
        			<td>Conta</td> 
        			<td>Saldo</td> 
        		</tr>";
    while($exibe = $sql->fetch_assoc()){
        echo "<br>
           		<tr >
        			<td>" .$exibe["nome"] . "</td> 
        			<td>" .$exibe["cpf"] . "</td> 
        			<td>" .$exibe["agencia"] . "</td> 
        			<td>" .$exibe["conta"] . "</td> 
        			<td>" .$exibe["saldo"] . "</td> 
        		</tr>
        	</table>";

        }echo "<hr>";
}

?>
 

<form method="post" action="foto.php">
	<input type="file" name="foto">
	<input type="submit" name="enviando_foto">
</form>


</html>