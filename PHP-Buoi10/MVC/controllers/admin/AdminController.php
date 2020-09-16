<?php
class AdminController {
    function __construct() {
        if($_SESSION['login'] != true) {
            header('location: index.php?mod=admin&c=auth&act=login');
        }
    }
}
?>