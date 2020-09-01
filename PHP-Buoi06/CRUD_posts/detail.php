<?php
    include '../validate/sql.php';

    $id_detail = $_GET['id'];

    $detail = detail_posts('posts', $id_detail);

?>