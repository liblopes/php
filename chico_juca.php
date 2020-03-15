<!DOCTYPE html>
<html>
    
<form action="chico_juca.php" method="post">
    <div align="center">
    <h4> Chico tem 1,50m e cresce 2 centímetros por ano, <br>
    enquanto Juca tem 1,10m e cresce 3 centímetros por ano. <br>
    Construir um algoritmos que calcule e imprima quantos anos <br>
    serão necessários para que Juca seja maior que Chico </h4>


    <input type="submit" value= "Resposta">
    
    </div>
</form>

</html>

<?php

    $altura_chico = 150;
    $altura_juca = 110;
    $anos=0;

    while ($altura_juca <= $altura_chico){

        $altura_chico = $altura_chico + 2;
        $altura_juca = $altura_juca + 3;
        $anos = $anos + 1;
    }

    if ($anos > 0){

    echo "Serão necessários {$anos} para que Juca seja maior que Chico";
    }



?>
