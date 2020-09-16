<?php
    // echo "Đây là trang login";
    session_start();

    $db_username = "luan";
    $db_password = "123456";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $_SESSION['login'] = $_POST;

    if($username = $db_username && $password == $db_password) {
        $_SESSION['login'] = true;

        echo "Đăng nhập thành công";
        header('location: home.php');
    } else {
        header('location: login_form.php');
    }
?>