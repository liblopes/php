<!Doctype html>
<html>
    <form method="post" action="multiplo5.php">
        <h1> Multiplo 5</h1>

        <label for="numero"> Numero</label>
        <input type="number" name="numero"/><br><br>

        <input type="submit" value="Enviar"/>
        <br><br>
    </form>

</html>

<?php

    if(isset($_POST['numero'])){
        $numero = $_POST['numero'];
      

    if($numero %5 == 0)
        $resultado = "E multiplo de 5";

    else
        $resultado = "Nao e multiplo de 5";
        
    echo $resultado;

    }
    

?>

    }
    

?>
