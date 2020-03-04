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


    if($numero <= 18)
        $clima = "O clima e frio";

    elseif($numero >= 19 && $numero <= 23)
        $clima = "O clima e agradavel";

    elseif($numero >= 24 && $numero <= 35)
        $clima = "O clima e quente";
    
    else
        $clima = "Muito quente"
        
    echo $clima;

    }
    

?>
