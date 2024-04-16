<?php
if (!isset($_COOKIE["usuario"])) {
    header('location:login.php');
    /*
    echo '<p>É necessário fazer o login para acessar o sistema</p>';
    echo '<a href="login.php">Ir para login</a>';
    */

}

?>