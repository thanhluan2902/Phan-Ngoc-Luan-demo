<?php
    include '../validate/sql.php';

    $data = $_POST;
    $update = update('posts', $data);

    // header('location: posts.php');
    // setcookie('msg',"Update thành công",time() + 2);

?>