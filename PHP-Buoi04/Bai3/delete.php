<?php
    session_start();
    setcookie('msg',"Xóa thành công!",time() + 5);
    $id = $_GET['id'];

    if(isset($_SESSION['documents'][$id])) {
        unset($_SESSION['documents'][$id]);
    }

    header('Location:document.php');
?>