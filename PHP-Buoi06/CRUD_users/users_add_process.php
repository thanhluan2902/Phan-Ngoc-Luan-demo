<?php
    include '../validate/sql.php';

    $data = $_POST;
    $insert = insert('users' , $data);

    header('location: users.php');

?>