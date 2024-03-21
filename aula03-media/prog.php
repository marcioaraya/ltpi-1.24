<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // obtém valores do formulário
        $n1 = $_GET["nota1"];
        $n2 = $_GET["nota2"];
        $usuario = $_GET["usuario"];
        // calcular a média
        $media = ($n1 + $n2)/2;

        // exibe nome, média e situação

        echo "<p>Aluno: $usuario</p>";
        echo "<p>Média: $media</p>";

        if ($media >= 6){
            $situacao = "Aprovado";
        } else {
            $situacao = "Reprovado";
        }

        echo "<p>Situação: $situacao </p>";
        
    ?>
</body>
</html>