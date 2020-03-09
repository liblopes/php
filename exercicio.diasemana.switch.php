<!DOCTYPE html>
<html>

<form action="diasemana.php" method="post">

    <h1> Dia da semana </h1>

    <input type="number" name="dia" placeholder="Digite aqui" required="">

    <input type="submit" value= "OK">

    <br><br>

    </form>			

</html>

<?php

    $dia = $_REQUEST['dia'];
    

    switch($dia){

        case '1';
        echo "Domingo";
    break;

        case '2';
        echo "Segunda feira";
    break;

        case '3';
        echo "Terça feira";
    break;
        case '4';
        echo "Quarta feira";
    break;
        case '5';
        echo "Quinta feira";
    break;
        case '6';
        echo "Sexta feira";
    break;

    }

?>
