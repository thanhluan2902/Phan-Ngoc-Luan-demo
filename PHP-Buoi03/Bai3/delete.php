<?php
    session_start();

    // session_destroy();
    $MSP = $_GET['msp'];
    unset($_SESSION['cart'][$MSP]);
    header('location:cart.php');
?>