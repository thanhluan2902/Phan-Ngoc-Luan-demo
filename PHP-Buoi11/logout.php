<?php
    session_start();

    $_SESSION['login'] = false;
    // unset($_SESSION['login']);

    header('location: login_form.php');
?>