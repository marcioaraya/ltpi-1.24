<?php
# IMPORTANTE: deve aparecer no INÍCIO do programa sempre
# cria ou recupera sessão de usuário
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Criar Variáveis de Sessão </h1>
    <?php
        $_SESSION["nome"] = "Marcio";
        $_SESSION["dt_acesso"] = time();
    ?>
</body>
</html>