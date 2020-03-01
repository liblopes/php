<?php

echo '<h1>Exercicio 3</h1>
		<form action="./exercicio03.php" method="post">
			<input type="number" name="a" placeholder="valor a" required="">
			<input type="number" name="b" placeholder="valor b" required="">
			<br/>
			<input type="submit" value="OK">
		</form>';

$a = $_POST['a'];
$b = $_POST['b'];
$prod = $a*$b;


echo ("O produto e: {$prod}");




?>
