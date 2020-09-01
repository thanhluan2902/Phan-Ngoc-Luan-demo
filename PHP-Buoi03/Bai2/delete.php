<?php

    session_start();

    // session_destroy();
    foreach($_SESSION['sv'] as $key => $value) {
        if($_GET['id'] == $key) {
            unset($_SESSION['sv'][$key]);
        }
    }
    setcookie('msg','Xóa thành công' , time() + 10);

    header('Location:list.php');
?>