<?php

$var_array = array();
$x = 3;
$y = 5;
$var_array[0]= $x;
$var_array[1]= $y;

echo ("O valor original de x e: {$x}");
echo ("<br>");
echo ("O valor original de y  e: {$y}");
echo ("<br>");
echo ("<br>");

$x = $var_array[1];
$y = $var_array[0];

echo ("O valor de x agora e: {$x}");
echo ("<br>");
echo ("O valor de y agora e: {$y}");
?>
