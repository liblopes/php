<!DOCTYPE html>
<html>

<form action="tabuada.php" method="post">

    <h1> Tabuada </h1>

    <input type="number" name="numero" placeholder="Digite aqui" required="">

    <input type="submit" value= "OK">

    <br><br>

    </form>			

</html>

<?php

if(isset($_POST['numero'])){
    $numero = $_POST['numero'];
}
if(isset($_POST['i'])){
     $i = $_POST['i'];
}
for($i=0; $i<=10; $i++){

    $tabuada = $numero*$i;
   

    echo "{$numero} x {$i} = {$tabuada} <br>";
    

}

?>
