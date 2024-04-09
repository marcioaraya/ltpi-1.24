<?php
session_start();

if (isset($_SESSION["c_usuario"])) {
    $usuario = $_SESSION["c_usuario"];
} 
if (isset($_SESSION["c_idade"])) {
    $idade = $_SESSION["c_idade"];
}


echo '<!DOCTYPE html>
      <html>
      <head>
	     <title>Exemplo Leitura de variáveis de sessão</title>
		 <meta charset=\'utf-8\'>
      <body>';
echo '<h1> Lendo dados gravados nas variáveis de sessão </h1>';
if (isset($usuario)) {
    echo 'Olá! '.$usuario;
    echo '<br>';
    echo 'Sua idade:'.$idade;
    echo '<p><a href="limpa_sessao.php">Apagar variáveis de sessão</a></p>';
} else {
    echo "<p>Não foram localizados variáveis de sessão</p>";
    echo '<p><a href="index.html">Ir para formulário.</a></p>';
}

echo '</body></html>';

?>
