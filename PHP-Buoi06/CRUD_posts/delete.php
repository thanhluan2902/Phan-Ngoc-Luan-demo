<?php
    include '../validate/sql.php';

    $delete = delete('posts', $_GET['id']);

    // echo $delete;

    // header('location: posts.php');
    // setcookie('msg',"Xóa thành công",time() + 2);
?>