<?php
    include 'connect.php';

    $id_delete =$_GET['id'];
    $conn = connect();
    
    $query = "DELETE FROM categories where id = " . $id_delete;

    $result = $conn->query($query);

    if($result) {
        header('location: categories.php');
    } else {
        echo "Message error : delete fail!";
    }
?>