<!DOCTYPE html>
<html>
    
<form action="vetor_20.php" method="post">
    <div align="center">
    <h4> Criar um algoritmo com uma matriz 5x5 e imprima: toda a matriz,
a matriz gerada só com números ímpares e outra só com números
pares </h4>
    
    </div>
</form>

</html>
<?php


$matriz [0][0] = 2;
$matriz [0][1] = 6;
$matriz [0][2] = 1;
$matriz [0][3] = 7;
$matriz [0][4] = 3;

$matriz [1][0] = 9;
$matriz [1][1] = 4;
$matriz [1][2] = 2;
$matriz [1][3] = 8;
$matriz [1][4] = 3;

$matriz [2][0] = 4;
$matriz [2][1] = 7;
$matriz [2][2] = 2;
$matriz [2][3] = 1;
$matriz [2][4] = 3;

$matriz [3][0] = 9;
$matriz [3][1] = 6;
$matriz [3][2] = 2;
$matriz [3][3] = 4;
$matriz [3][4] = 3;

$matriz [4][0] = 1;
$matriz [4][1] = 4;
$matriz [4][2] = 8;
$matriz [4][3] = 5;
$matriz [4][4] = 3;

$matriz_par[0][0]=null;
$matriz_impar[0][0]=null;

echo "O numeros da matriz sao: <br>";
for($linha=0; $linha<5; $linha++) {
    for($coluna=0; $coluna<5; $coluna++){
        echo $matriz[$linha][$coluna]."&nbsp; &nbsp; &nbsp;";

        if ($matriz[$linha][$coluna]%2==0) {
            $matriz_par[$linha][$coluna]=$matriz[$linha][$coluna]."&nbsp;";
            $matriz_impar[$linha][$coluna]="&nbsp; &nbsp;";
        } else {
            $matriz_par[$linha][$coluna]="&nbsp; &nbsp;";
            $matriz_impar[$linha][$coluna]=$matriz[$linha][$coluna]."&nbsp;";
        }

    }
    echo"<br>";
}
    echo"<br>";
    echo"Matriz com numeros pares: <br>";
    for($linha=0; $linha<5; $linha++) {
        for($coluna=0; $coluna<5; $coluna++){
            echo $matriz_par[$linha][$coluna]."&nbsp; &nbsp;";
        }
        echo"<br>";
    }

    echo"<br>";
    echo"Matriz com numeros impares: <br>";
    for($linha=0; $linha<5; $linha++) {
        for($coluna=0; $coluna<5; $coluna++){
            echo $matriz_impar[$linha][$coluna]."&nbsp; &nbsp;";
        }
        echo"<br>";
    }

?>
