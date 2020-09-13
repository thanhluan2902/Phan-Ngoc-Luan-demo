<?php
require_once 'model/user.php';
class UserController {
    public function list() {
        $select_user = new User();
        $users = $select_user->get_all();

        require_once "views/User/list.php";
        
        // echo "<pre>";
        // var_dump($users);
        // echo "</pre>";
        // die();
    }
}
?>