<?php
    session_start();
    unset($_SESSION['username']);
    echo $_SESSION['username'];
    header("Location: ../view/login.php");
?>