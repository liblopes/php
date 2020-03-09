<!DOCTYPE html>

<html>
<form action="./diasemana.php" method="post">

    <select name="operacao">
        <option> Somar </option>
        <option> Subtrair </option>
        <option> Multiplicar </option>
        <option> Dividir </option>
    </select>
    <br><br>
			<input type="number" name="numero1" placeholder="primeiro numero" required="">
			<input type="number" name="numero2" placeholder="segundo numero" required="">
			<br/>
			<input type="submit" value="OK">
		</form>

</html>

<?php

$numero1 = $_REQUEST['numero1'];
$numero2 = $_REQUEST['numero2'];
$operacao = $_REQUEST['operacao'];
echo $numero1 . $numero2 . $operacao; 
        switch($operacao){

            case 'Somar':
            $soma = $numero1 + $numero2;

            echo $soma;
            break;

            case 'Subtrair'






        }


?>
