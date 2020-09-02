<?php
    // include 'connect.php';

    // $id_delete =$_GET['id'];
    // $conn = connect();
    
    // $query = "DELETE FROM categories where id = " . $id_delete;

    // echo $query;die();
    // $result = $conn->query($query);

    // if($result) {
    //     header('location: categories.php');
    //     setcookie('msg',"Xóa thành công",time() + 2);
    // } else {
    //     header('location: categories.php');
    //     setcookie('msg',"Xóa không thành công",time() + 2);
    // }

    include '../validate/sql.php';

    $delete = delete('categories', $_GET['id']);
?>