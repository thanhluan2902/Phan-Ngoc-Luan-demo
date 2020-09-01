<?php
    // include 'connect.php';
    // $conn = connect();
    
    // $id_detail =$_GET['id'];

    // $query = "SELECT * FROM categories where id = " . $id_detail;

    // $result = $conn->query($query);

    // $categories = array();

    // while($row = $result->fetch_assoc()) {
    //     $categories[] = $row;
    // }

    // foreach($categories as $value) {
    //     echo $value['id'];
    //     echo $value['name'];
    //     echo $value['parent_id'];
    //     echo $value['thumbnail'];
    //     echo $value['slug'];
    //     echo $value['description'];
    //     echo $value['created_at'];
    // }
    echo '<h2> Chi tiết </h4>';
    include '../validate/sql.php';
    $id_detail =$_GET['id'];

    $detail = detail_category('categories',$id_detail);
    // header('location: categories.php');
?>