
Crie um algoritmo que leia dois valores (x e y) representando um
intervalo. Em seguida, leia um novo valor (z) e verifique se z pertence
ao intervalo [x, y].

<!Doctype html>
<html>
    <form method="post" action="exercicio.intervalo.php">
        <h1> Intervalo xy</h1>

        <label for="numero"> x</label>
        <input type="number" name="x"/><br><br>

        <label for="numero"> y</label>
        <input type="number" name="y"/><br><br>

        <label for="numero"> z</label>
        <input type="number" name="z"/><br><br>

        <input type="submit" value="Enviar"/>
    </form>

</html>

<?php

    if(isset($_POST['x']) && isset($_POST['y']) && isset($_POST['z'])){
        $x = $_POST['x'];
        $y = $_POST['y'];
        $z = $_POST['z'];


    if($z > $x && $z < $y || $z < $x && $z > $y)
        $intervalo = "Z pertence ao intervalo xy";

        else 
        $intervalo = "Z nao pertence ao intervalo xy";
    
    echo $intervalo;

    }
    

?>
