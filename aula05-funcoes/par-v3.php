<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>função para verificar se número é par</h1>
    <?php
        function par($n){
            if ($n % 2 ==0) {
                return true;
            } else {
                return false;
            }
        }

        for($i=0; $i < 20; $i++){
            # usando operador ternário
            $cor = par($i)?"blue":"red";
            $resposta = par($i)?"Sim":"Não";
            echo "<p style=\"color:$cor\"> $i é par? $resposta </p>";


        }


    ?>
</body>
</html>