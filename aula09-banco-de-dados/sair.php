<?php
    setcookie("usuario", "", time()-100);
    header('location:login.php');

?>