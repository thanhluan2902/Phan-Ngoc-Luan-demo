<?php
    session_start();
    // define('URL' , 'http://thanhluan.zent/PHP-Buoi10/MVC/public/' . $_GET['mod'] . '/');
    define('URL' , 'http://localhost/PHP-Buoi10/MVC/public/' . $_GET['mod'] . '/');

    //=====================================================================================
    class App {
        private $mod = "admin";
        private $act = "index";
        private $c = "home";
        private $params = [];
        
        public function __construct() {


            if(isset($_GET['mod'])) {
                $this->mod = $_GET['mod'];
            }
            if(isset($_GET['act'])) {
                $this->act = $_GET['act'];
            }
            if(isset($_GET['c'])) {
                $this->c = $_GET['c'];
            }

            if(isset($_GET['slug'])) {
                $this->params[] = $_GET['slug'];
            }

            if(isset($_GET['id'])) {
                $this->params[] = $_GET['id'];
            }
            $data['data'] = $_POST;
            $data['files'] = $_FILES;

            $this->params['data'] = $data;
        }

        public function action() {
            $class = ucfirst($this->c) . ucfirst($this->mod) . 'Controller';
            $path = "controllers/" . $this->mod . "/" . $class . ".php";

           
            if(!file_exists($path)) {
                return false;
            }

            require_once $path;

            $controller_obj = new $class();
            call_user_func_array([$controller_obj,$this->act],$this->params);
        }

    }
    $app = new App();
    $app->action();

?>