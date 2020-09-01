<?php
    session_start();
    $code = $_GET['id'];

    if(isset($_SESSION['cart'][$code])){
        if($_SESSION['cart'][$code]['quanlity'] == 1) {
            unset($_SESSION['cart'][$code]);
        } else if($_SESSION['cart'][$code]['quanlity'] > 1) {
            $_SESSION['cart'][$code]['quanlity']--;
        }
    }
    header('location:cart.php');
?>