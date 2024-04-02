<?php
//fonte: Pablo Dall’Oglio
// passagem de parâmetro por referência
// observe o caracter ‘&’ antes do nome do parâmetro
function Incrementa(&$variavel, $valor){
    $variavel += $valor;
}

$a = 10;
Incrementa($a, 20);
echo $a;
?>
