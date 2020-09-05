<?php

    // include '../validate/sql.php';
    // $data = $_POST;
    // $update = update('categories',$data);


    include_once 'Category.php';

    $update_category = new Category();

    $update = $update_category->edit();
    header('location: categories.php');
    setcookie('msg',"Update thành công",time() + 2);
?>