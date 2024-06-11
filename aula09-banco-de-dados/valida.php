<?php
include './inc/conectabd.php';

$email = $_POST["email"];
$senha = $_POST["senha"];

// consultar 
// https://github.com/marcioaraya/ltpi-1.22/blob/main/aula11-banco-dados/index.php
// e adaptar para buscar usuário e senha da tabela tb_usuarios do banco 'usuarios'

try {

    $sql = 'select nome from tb_usuarios where email = :email and senha = :senha';

    $statement = $pdo->prepare($sql);
    $statement->bindParam(':email', $email);
    $statement->bindParam(':senha', $senha);
    $statement->execute();
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    # print_r($row);
    if ($statement->rowCount()>0) {
        setcookie("usuario", $row["nome"]);
        setcookie("ts_login", time());
        header('Location: principal.php');
    } else {
      echo "<p>Usuário/Senha inválidos</p>";
      echo "<p>Tente novamente</p>";
      echo "<p><a href='login.php'>Ir para tela de login</a></p>";
    }
} catch(PDOException $e) {
  echo 'Erro: ' . $e->getMessage();
}


?>