<?php
    session_start();

    $tl = array(
        'title' => $_POST['title'],
        'file_name' => $_POST['file_name'],
    );

    if(isset($_POST['submit'])) {
        $target_dir = "khoDL/";
        $target_file = $target_dir . basename($_FILES["file_name"]["name"]);
    
        if(move_uploaded_file($_FILES["file_name"]["tmp_name"],$target_file)) {
            setcookie('msg',"upload file thành công", time() + 5);
            $_SESSION['documents'][] = $tl;
        } else {
            setcookie('msg',"sorry! upload file fail!!!!!!", time() + 5);
        }
    }
    
    header('Location:document.php'); 
?>