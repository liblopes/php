<!Doctype html>
<html>
    <form method="post" action="index.php">
        <h1> Contato</h1>

        <label for="numero"> Numero</label>
        <input type="number" name="numero"/><br><br>

        <input type="submit" value="Enviar"/>
    </form>

</html>

<?php

    if(isset($_POST['numero'])){
        $numero = $_POST['numero'];
        echo $numero;


    if($numero %5 == 0)
        $resultado = "E MULTIPLO DE 5";

    else
        $resultado = "Nao e multiplo de 5";
        
    echo $resultado;

    }
    

?>
