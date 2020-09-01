<?php
    // include 'connect.php';

    // $data = $_POST;
    // $id = $data['id'];
    // $conn = connect();
    
    // $query = "UPDATE categories SET name = '".$data['name']."' , description = '".$data['description']."' where id = " . $id;

    // echo $query;
    // die();

    // $status = $conn->query($query);

    // // var_dump($status);

    // if($status) {
    //     header('location: categories.php');
    // } else {
    //     echo "update fail!";
    // }

    include '../validate/sql.php';
    $data = $_POST;
    $update = update('categories',$data);

    header('location: categories.php');

?>