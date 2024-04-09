<?php
session_start();

# unset destrói a variável
unset($_SESSION["c_usuario"]);
unset($_SESSION["c_idade"]);

echo '<html><body>';
echo '<p>Variáveis de sessão foram apagados.</p>';
echo '<a href="le_sessao.php">Ler dados gravados nas variáveis de sessão</a>';

echo '</body></html>';

?>
