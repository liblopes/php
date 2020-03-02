<?php

echo '<h1>Exercicio 1</h1>
		<form action="./exercicio01.php" method="post">
			<input type="number" name="numero1" placeholder="primeiro numero" required="">
			<input type="number" name="numero2" placeholder="segundo numero" required="">
			<br/>
			<input type="submit" value="OK">
		</form>';

$a = $_POST['numero1'];
$b = $_POST['numero2'];
$x = $a+$b;

echo ("A soma de {$a} e {$b} é: {$x}");

?>

