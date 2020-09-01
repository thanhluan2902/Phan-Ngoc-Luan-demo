<?php
    session_start();
    // echo "<pre>";
    //     var_dump($_SESSION['sv']);
    // echo "</pre>";

    foreach($_SESSION['sv'] as $key => $value) {
        if($_GET['id'] == $key) {
            echo 'mã sinh viên : ' . $value['code'] . "<br>";
            echo 'Họ và tên : '.$value['name']."<br>";
            echo 'Số điện thoại : '.$value['sdt']."<br>";
            echo 'Email : '.$value['email']."<br>";
            echo 'Gioi tính : '.$value['gt']."<br>";
            echo 'Địa chỉ : '.$value['address'];
        }
    }
?>