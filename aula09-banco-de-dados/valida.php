<?php
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

// consultar 
// https://github.com/marcioaraya/ltpi-1.22/blob/main/aula11-banco-dados/index.php
// e adaptar para buscar usuário e senha da tabela tb_usuarios do banco 'usuarios'

// substituir 'marcio' e '123' pelos valores lidos do banco de dados
// outra sugestão é verificar a quantidade de linhas que o select vai retornar
// se não voltar nenhuma linha é porque o usuário e a senha informados não existem
// na tabela tb_usuarios
if ($usuario === "marcio"&& $senha == "123") {
    setcookie("usuario", $usuario);
    header('location:principal.php');
} else {
    echo "<p>Usuário e/ou senha inválidos</p>";
    echo "<a href=\"login.php\">Fazer login</a>";
}

?>