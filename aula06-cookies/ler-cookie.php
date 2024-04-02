<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ler Cookie</title>
</head>
<body>
    <h1>Ler Cookie</h1>
    <?php
    // set the default timezone to use.
        date_default_timezone_set('America/Sao_Paulo');
        echo "<p>Valor do cookie: ".$_COOKIE["aulaPHP"]."</p>";
        echo "<p>Valor do cookie: ".$_COOKIE["dt_acesso"]."</p>";

        echo "<p>Valor do cookie: ".date('d-m-Y h:i:s A',$_COOKIE["dt_acesso"])."</p>";
        
    ?>
    
</body>
</html>