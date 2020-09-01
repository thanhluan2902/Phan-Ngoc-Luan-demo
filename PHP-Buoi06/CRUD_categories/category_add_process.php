<?php

    // include 'connect.php';
    // $conn = connect();
    // $data = $_POST;

    // $query = "INSERT INTO categories (name, description) VALUES ('".$data['name']."','".$data['description']."')";

    // // echo $query;
    // // die();

    // $status = $conn->query($query);
    

    // if($status) {
    //     header("location: categories.php");
    // } else {
    //     echo "insert fail!";
    // }
    
    include '../validate/sql.php';
    $data = $_POST;
    $insert = insert('categories', $data);
    header('location: categories.php');
?>