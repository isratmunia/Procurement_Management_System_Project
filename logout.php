<?php
    ini_set('session.gc_maxlifetime', 300);
    session_start();

    unset($_SESSION['username']);
    header('location:index.php');
?>