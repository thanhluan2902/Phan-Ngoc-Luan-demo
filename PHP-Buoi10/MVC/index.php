<?php
    $mod = $_GET['mod'];
    $act = $_GET['act'];
    $params = isset($_GET['id']) ? [$_GET['id']]:[];

    $class = ucfirst($mod) . 'Controller';

    $path = "controllers/" . $class . ".php";
    require_once $path;

    $controller_obj = new $class();
    $data = $_POST;
    $params[] = $data;

    call_user_func_array([$controller_obj,$act],$params);

?>