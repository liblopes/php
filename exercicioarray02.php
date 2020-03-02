<?php
// prompt abre a caixinha de texto sobre a tela, diferentemente do input que cria uma caixa na pagina
//document.write cria um objeto dentro do html com o valor que foi digitado no prompt 

$nome= "<script> var nome= prompt ('Insira o nome');document.write(nome)  </script>";

$telefone = "<script> var telefone = prompt('Insira o telefone'); document.write(telefone)</script>";

$endereco = "<script> var rua = prompt('Insira o rua'); document.write(rua)</script>";


$dados= array();
$dados[0]=$nome;
$dados[1]=$endereco;
$dados[2]=$telefone;


echo "Sr{a) <b>".$dados[0]."</b> residente e domiciliada na <b> rua "
.$dados[1]."</b> portadora do telefone: <b>" .$dados[2]."</b>";
?>
