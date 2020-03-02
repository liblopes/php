<?php

echo '<h1>Exercicio conversao</h1>
		<form action="./exercicio.dolar.php" method="post">
			<input type="number" name="dolar" placeholder="Digite o valor em dolar" required="">
			
			<br/>
			<input type="submit" value="OK">
		</form>';

$dolar = $_POST['dolar'];
$conversao = $dolar*4.30;

echo ("O valor em reais é: {$conversao}");

?>
