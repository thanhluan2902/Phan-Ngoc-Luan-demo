<?php
require_once 'controllers/Controller.php';
require_once 'model/User.php';
class AuthAdminController extends Controller {
    public function login() {
    // giao diện
    $this->view('admin/auth/login.php');
    }

    public function checkLogin() {
        //logic
        $username = $_POST['username'];
        $password = $_POST['password'];

        // echo $password;die();
        $userModel = new User();
        $user = $userModel->getUserByName($username);

        // var_dump($user);die();

        if($user) {
            if($user['password'] == $password) {
                $_SESSION['login'] = true;
                $_SESSION['auth'] = $user;
                header('location: index.php?mod=admin&c=user&act=index');
            } else {
                $_SESSION['login'] = false;
                echo "Sai mật khẩu";
            }
        } else {
            $_SESSION['login'] = false;
            // echo "Đăng nhập lỗi";
        }
    }

    public function logout() {
        if($_SESSION['login'] == true) {
            unset($_SESSION['login']);
            header('location: index.php?mod=admin&c=auth&act=login');
        }      
    }
}

?>