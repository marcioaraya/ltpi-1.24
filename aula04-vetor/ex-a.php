<?php
echo 'exercicio (a)<br>';

$x[0][0] = 15;
$x[0][1] = 6;
$x[1][0] = 2;
$x[1][1] = 5;

foreach($x as $v){
    echo '<hr>';
     print_r($v);
     echo $v . "<br>";
     
}