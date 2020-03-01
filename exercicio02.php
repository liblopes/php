<?php

echo '<h1>Exercicio 2</h1>
		<form action="./exercicio02.php" method="post">
			<input type="number" name="raio" placeholder="raio" required="">
			<br/>
			<input type="submit" value="OK">
		</form>';

$pi = 3.14159;
$r = $_POST['raio'];
$a = $r*$r*$pi;


echo ("A area da circunferencia é de {$a}");




?>
