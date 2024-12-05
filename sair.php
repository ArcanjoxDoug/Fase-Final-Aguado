<?php
    session_start();
    unset($_SESSION['senha']);
    unset($_SESSION['nome']);
    header('Location: index.php');
?>