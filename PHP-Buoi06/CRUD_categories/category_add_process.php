<?php
    
    // include '../validate/sql.php';
    // $data = $_POST;
    // $insert = insert('categories', $data);
    // header('location: categories.php');
    // setcookie('msg',"Thêm mới thành công",time() + 2);


    include_once 'Category.php';
    $insert_category = new Category();

    $insert = $insert_category->create();

?>