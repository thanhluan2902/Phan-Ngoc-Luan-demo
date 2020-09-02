<?php
    include '../validate/sql.php';

    $data = $_POST;
    $update = update('users', $data);

    // header('location: users.php');
    // setcookie('msg',"Update thành công",time() + 2);
    
?>