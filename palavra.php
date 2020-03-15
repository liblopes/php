<!DOCTYPE html>
<html>

<form action="string.php" method="post">

    <h1> Palavra </h1>

    <h3> Digite sua palavra: </h3>
    <input type="text" name="palavra" placeholder="Digite aqui" required="">

    <input type="submit" value= "OK">

    <br><br>

    </form>			

</html>
<?php


if(isset($_POST['palavra'])){
    $palavra = $_POST['palavra'];
    $saida = $palavra;


    for($i=0; $i<5; $i++){
        echo "{$saida} ";

        $saida = $saida. " ".$palavra;
        echo "<br>";
    }

}
?>
