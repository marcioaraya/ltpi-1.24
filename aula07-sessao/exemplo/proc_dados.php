<?php
session_start();

$v_usuario = $_GET["nome"];
$v_idade = $_GET["idade"];

$_SESSION["c_usuario"] = $v_usuario;
$_SESSION["c_idade"] = $v_idade;


echo '<html><body>';
echo 'Ola! '.$v_usuario;
echo '<br>';

echo 'Sua idade:'.$v_idade;
echo '<br><br>';
echo '<a href="le_sessao.php">Ler dados gravados nas variáveis de sessão</a>';
echo '</body></html>';

?>
