<?php

$p1 = ["nome"=>"Beatriz", "idade"=>6];
$p2 = ["nome"=>"Carlos", "idade"=>5];
 
$alunos = [ $p1, $p2];
/*
Nome: Beatriz
Idade: 6 anos

Nome: Carlos
Idade: 5 anos


echo "<p>Nome: ".$p1["nome"]."</p>";
echo "<p>Idade: ".$p1["idade"]."</p>";
echo "<br>";
echo "<p>Nome: ".$p2["nome"]."</p>";
echo "<p>Idade: ".$p2["idade"]."</p>";
*/
// --------------------------------------------
echo '<hr>';
$p3 =  ["nome"=>"Murilo", "idade"=>7];
$p4 =  ["nome"=>"Gustavo", "idade"=>6];
 
$alunos = [ $p1, $p2, $p3, $p4];

echo '<table border="1">';
echo '<tr><th>Nome</th><th>Idade</th></tr>';
foreach($alunos as $al){
    echo "<tr>";
    echo "<td>".$al["nome"]."</td>";
    echo "<td>".$al["idade"]."</td>";
    echo "</tr>";
}
echo '</table>';




