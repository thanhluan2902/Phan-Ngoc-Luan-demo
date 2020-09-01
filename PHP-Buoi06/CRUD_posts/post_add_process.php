<?php
    include '../validate/sql.php';

    $data = $_POST;
    $insert = insert('posts',$data);

    header('location: posts.php');

?>