<?php
class Controller {
    public function view($path , $data = []) {
        extract($data);
        require_once "views/" . $path;
    }

    public function redirect($path) {
        header("location: $path");
        // header('location:?mod=category&act=list');
    }
}
?>