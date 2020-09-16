<?php
    define('URL','http://thanhluan.zent/hocNhom/MVC/public/');

    $mod = $_GET['mod'];
    $act = isset($_GET['act']) ? $_GET['act']:'index';
    $params = [];
    $id = isset($_GET['id']) ? $_GET['id']:[];

    $params[] = $id;

    $class = ucfirst($mod) . 'Controller';

    $path = "controllers/" . $class . ".php";
    require_once $path;

    $controller_obj = new $class();
    $data = $_POST;
    $params[] = $data;

    call_user_func_array([$controller_obj,$act] , $params);

?>