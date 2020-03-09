<!DOCTYPE html>

<html>
<form action="./exercicio.menu.php" method="post">

    <h1> Menu operações </h1>

    <input type="number" name="numero1" placeholder="numero 1" required="">
			<input type="number" name="numero2" placeholder="numero 2" required="">
			<br/>
            <br/>

    <select name="operacao">
        <option> Somar </option>
        <option> Subtrair </option>
        <option> Multiplicar </option>
        <option> Dividir </option>
    </select>
    <br><br>

    <input type="submit" value="OK">
    <br><br>
			
		</form>

</html>

<?php

$numero1 = $_REQUEST['numero1'];
$numero2 = $_REQUEST['numero2'];
$operacao = $_REQUEST['operacao'];



        switch($operacao){

            case 'Somar';
            $soma = $numero1 + $numero2;

            echo "Soma = $soma";
        break;

            case 'Subtrair';
            $subtrair = $numero1 - $numero2;

            echo "Subtração = $subtrair";
        break;

            case 'Multiplicar';
            $multiplicar = $numero2 * $numero1;

            echo "Multiplicação = $multiplicar";
        break;

            case 'Dividir';
            $dividir = $numero1 / $numero2;

            echo "Divisão = $dividir";
        break;

        }


?>
