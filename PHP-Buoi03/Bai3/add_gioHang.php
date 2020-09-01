<?php
    include 'data.php';
    session_start();

    $MSP = $_GET['msp'];

    if(isset($_SESSION['cart'][$MSP])) {
        $_SESSION['cart'][$MSP]['soLuong']++;
    } else {
        $data = $datas[$MSP];

        $data['soLuong'] = 1;

        $_SESSION['cart'][$MSP] = $data;
    };

    header('location:cart.php');
?>