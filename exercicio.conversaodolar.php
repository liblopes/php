<!DOCTYPE html>
<html>

	<h1> Conversao dólar </h1>
		<form action="./exercicio.dolar.php" method="post">
			<input type="number" name="dolar" placeholder="Digite o valor em dolar" required="">
			<br><br>
			<input type="submit" value="OK">
			<br><br>
		</form>

		</html>
<?php

$dolar = $_POST['dolar'];

$conversao = $dolar*4.30;

echo ("O valor em reais é: {$conversao}");

?>
