<?php
$dt_acesso = time();  // duração de 24 horas a partir da criação
setcookie("aulaPHP", "quarta", $dt_acesso + 3600*24);
setcookie("dt_acesso", $dt_acesso, $dt_acesso + 3600*24);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cria Cookie</title>
</head>
<body>
    <h1>Cria cookie</h1>
    <?php
    $i = 0;
     while ($i<100){
        echo "<p>asdfasdf asdfasdf asdfasdf asdf adsfa asdf aasdf asdf</p>";
        $i++; // $i = $i + 1;
     }
      setcookie("outroCookie", "vai dar certo?");
    ?>
    
</body>
</html>