<?php
// exercicio (b)
echo 'exercicio (b)<br>';

$x[0][0] = 15;
$x[0][1] = 6;
$x[1][0] = 2;
$x[1][1] = 5;

foreach($x as $v){
    foreach($v as $z ){
        echo $z . "<br>";
    }

     //print_r($v);
     //echo '<hr>';
    //echo $v . "<br>";
}