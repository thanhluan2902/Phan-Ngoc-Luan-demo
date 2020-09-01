<?php
    include 'data.php';
    session_start();

    $code = $_GET['id'];
    if(isset($_SESSION['cart'][$code])) {
        $_SESSION['cart'][$code]['quanlity']++;
    } else {
        $sps = $sp[$code];

        $sps['quanlity'] = 1;

        $_SESSION['cart'][$code] = $sps;
    };

    header('location:cart.php');
?>