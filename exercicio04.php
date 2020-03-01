<?php

echo '<h1>Exercicio 4</h1>
		<form action="./exercicio04.php" method="post">
			<input type="number" name="a" placeholder="nota 1" required="">
			<input type="number" name="b" placeholder="nota 2" required="">
			<br/>
			<input type="submit" value="OK">
		</form>';

$a = $_POST['a'];
$b = $_POST['b'];
$media = ($a*0.35 + $b*0.75)/2;


echo ("A media e: {$media}");




?>
