<?php
require_once 'model/Category.php';
require_once 'controllers/Controller.php';

class HomeClientController extends Controller {

    protected $model;
    function __construct() {
        $this->model = new Category();
    }

    public function index() {
        $home = $this->model->select();

        $this->view('client/layouts/master.php' ,
        [
            'page' => 'client/include/home',
            'home' => $home
        ]);
    }


    public function show($id) {
        $posts = $this->model->detail($id);

        $this->view('admin/layouts/master.php' , ['page' => 'admin/Post/detailPost','posts' => $posts]);
    }


}
?>