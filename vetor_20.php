<!DOCTYPE html>
<html>
    
<form action="vetor_20.php" method="post">
    <div align="center">
    <h4> Criar um vetor com 20 elementos inteiros. Imprimir o maior e o
menor, sem ordenar, o percentual de números pare e média dos
elementos do vetor </h4>
    
    </div>
</form>

</html>

<?php

$inteiros [0]=1;
$inteiros [1]=5;
$inteiros [2]=7;
$inteiros [3]=8;
$inteiros [4]=10;
$inteiros [5]=16;
$inteiros [6]=12;
$inteiros [7]=155;
$inteiros [8]=124;
$inteiros [9]=22;

$inteiros [10]=2;
$inteiros [11]=45;
$inteiros [12]=4;
$inteiros [13]=7;
$inteiros [14]=9;
$inteiros [15]=15;
$inteiros [16]=154;
$inteiros [17]=33;
$inteiros [18]=22;
$inteiros [19]=12;

$maior=0;
$menor=$inteiros [0];
$soma=0;
$media=0;
$qtd_pares=0;
$percentual_pares=0;

for($i=0; $i<20; $i++) {

    if($inteiros[$i] > $maior){
        $maior = $inteiros[$i];
    }

    if($inteiros[$i] < $menor){
        $menor = $inteiros[$i];
    }

    $soma = $soma + $inteiros[$i];

    if($inteiros[$i]%2 == 0){
        $qtd_pares++;
    }
}
    $media = $soma/20;
    $percentual_pares = $qtd_pares/20*100;

    echo "Os numeros são: ".$inteiros[0].",".$inteiros[1].",".$inteiros[2].",".$inteiros[3].",".$inteiros[4].",".$inteiros[5].",".$inteiros[6].","
    .$inteiros[7].",".$inteiros[8].",".$inteiros[9].",".$inteiros[10].",".$inteiros[11].",".$inteiros[12].",".$inteiros[13].",".$inteiros[14].",".$inteiros[15].",".$inteiros[16].",".$inteiros[17].",".$inteiros[18].",".$inteiros[19];
    
    echo "<br>";

    echo "O maior numero é: {$maior}<br>";
    echo "O menor numero é: {$menor}<br>";
    echo "A soma é: {$soma}<br>";
    echo "Percentual de numeros pares é: {$percentual_pares}<br>";
    echo "Média dos elementos do vetor: {$media}";


?>
