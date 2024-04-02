<?php
//Exemplo de passagem de variável por valor (default = padrão)
//fonte: Pablo Dall’Oglio
function Incrementa($variavel, $valor){
    $variavel += $valor;
    echo "<p>dentro de Incrementa: $variavel </p>";

    return $variavel;
}

$a = 10;
echo '<br>retorno da função Incrementa: '. Incrementa($a, 20);
echo '<br>'.$a;
?>
