<?php
require_once 'controllers/Controller.php';
class AdminController extends Controller {
    function __construct() {
        if($_SESSION['login'] != true) {
            header('location: index.php?mod=admin&c=auth&act=login');
        }
    }
}
?>