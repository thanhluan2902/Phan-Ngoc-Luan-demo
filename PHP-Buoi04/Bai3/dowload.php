<?php
    session_start();
    $dowload = $_GET['id'];

    if(isset($_SESSION['documents'][$dowload])) {
        $fpath = "demo";
        $fopen = fopen($fpath,"rb");
        header("Content-Type:application/octet-stream");
        header("Content-Length:".filesize($fpath));
        header("Content-Disposition:attachment; filename=".$fpath);
        $fread = fpassthru($fopen);
        fclose($fopen);
    } else {
        setcookie('msg',"file rỗng",time() + 5);
    }

    // header('Location:document.php');
?>