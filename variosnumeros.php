<!DOCTYPE html>
<html>
    <form action="variosnumeros.php" method="post">

        <h1> Numeros entre 100 e 200 , digite 0 quando quiser ver a resposta.</h1>

        <input type="number" name="n" placeholder="Digite numero aqui" required="">

        <input type="submit" value= "OK">

        <br><br>
    </form>			
</html>           

<?php
    //informa ao php que iremos utilizar comandos que acessam a sessao
    session_start();

    //verifica se a variavel de sessao com o nome acumulado ainda nao existe, se nao existir entao cria e inicia com 0;
    if (!isset($_SESSION['acumulado'])) {
        $_SESSION['acumulado'] = 0;
    }


    //iisset serve pra verificar se o objeto com nome n existe
    if(isset($_POST['n'])){
       
        $numero = $_POST['n'];

        //pega o valor que esta guardado na sessao do usuario (com o nome de acumulado) e joga na variavel #acumulado
        $acumulado = $_SESSION['acumulado'];


        //se o valor digitado pelo usuario estiver entre 100 e 200 entao soma um na var acumulado
        if ($numero>=100 && $numero<=200) {
            $acumulado = $acumulado+1;

            //grava o valor acumulado na sessao do usuario
            $_SESSION['acumulado'] = $acumulado;
        }


        //se o usuario digitar 0 entao imprime o valor e zera a variavel da sessao
        if ($numero==0) {
            echo "A quantidade de numeros digitados entre 100 a 200 é : {$acumulado}";

            //zera o valor na sessao, pois o usuario pode querer comecar de novo
            $_SESSION['acumulado'] = 0;
        }        

    }
?>
