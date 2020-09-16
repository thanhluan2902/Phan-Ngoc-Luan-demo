<?php
require_once 'controllers/BaseController.php';
require_once 'model/user.php';
class AuthAdminController extends Controller {
    public function login() {
    // giao diện
    $this->view('admin/auth/login.php');
    }

    public function checkLogin() {
        //logic
        $username = $_POST['username'];
        $password = $_POST['password'];

        $userModel = new User();
        $user = $userModel->getByName($username);

        // var_dump($user);die();

        if($user) {
            if($user['password'] == $password) {
                $_SESSION['login'] = true;
                echo "Đăng nhập thành công";
                header('location: index.php?mod=admin&c=category&act=index');
            } else {
                $_SESSION['login'] = false;
                echo "Sai mật khẩu";
            }
        } else {
            $_SESSION['login'] = false;
            // echo "Đăng nhập lỗi";
        }
    }


}

?>