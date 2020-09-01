<?php
    include '../validate/sql.php';

    $data = $_GET['id'];
    $delete = delete('users', $data);

    header('location: users.php');
?>