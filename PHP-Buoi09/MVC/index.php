<?php
    $mod = $_GET['mod'];
    $act = $_GET['act'];
    $params = isset($_GET['id']) ? [$_GET['id']]:[];

    // var_dump($id);
    // require_once 'controllers/CategoryController.php';
    // $controller_obj = new CategoryController();
    // $controller_obj->list();

    $class = ucfirst($mod) . 'Controller';

    // require_once 'controllers/PostController.php';
    $path = "controllers/" . $class . ".php";
    require_once $path;

    // $controller_obj = new PostController();
    $controller_obj = new $class();
    $data = $_POST;
    $params[] = $data;
    // $controller_obj->$act();
    call_user_func_array([$controller_obj,$act],$params);
    
    // require_once 'controllers/UserController.php';
    // $controller_obj = new UserController();
    // $controller_obj->list();
?>