<?php
    session_start();
    
    $mod = $_GET['mod'];  //admin, client
    $act = $_GET['act']; 

    $c = $_GET['c']; //controller
    $params = isset($_GET['id']) ? [$_GET['id']]:[];

    $class = ucfirst($c) . ucfirst($mod) . 'Controller';
    // $class = ucfirst($mod) . 'Controller';

    $path = "controllers/" . $mod . "/" . $class . ".php";
    // $path = "controllers/" . $class . ".php";

    require_once $path;

    $controller_obj = new $class();
    $data = $_POST;
    $params[] = $data;

    call_user_func_array([$controller_obj,$act],$params);

?>