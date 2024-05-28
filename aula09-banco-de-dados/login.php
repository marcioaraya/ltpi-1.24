<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="valida.php" method="POST">
        <label for="id_usuario">Usuário</label>
        <input type="text" name="usuario" id="id_usuario">
        <br>
        <label for="id_senha">Senha</label>
        <input type="password" name="senha" id="id_senha">
        <br>
        <input type="submit" value="Entrar">
    </form>
    
</body>
</html>