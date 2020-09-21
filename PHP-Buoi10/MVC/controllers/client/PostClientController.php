<?php
require_once 'model/Post.php';
require_once 'controllers/Controller.php';

class PostAdminController extends Controller {

    protected $model;
    function __construct() {
        $this->model = new Post();
    }

    public function index() {
        $posts = $this->model->select();

        // require_once "views/Post/index.php";
        $this->view('admin/layouts/master.php' ,
        [
            'page' => 'admin/Post/homePost',
            'posts' => $posts
        ]);
    }

    public function create() {
        $this->view('admin/layouts/master.php' , ['page' => 'admin/Post/addPost']);
    }

    public function store($data) {
        $posts = $this->model->insert($data);

        $this->redirect('index.php?mod=admin&c=post&act=index');
    }

    public function show($id) {
        $posts = $this->model->detail($id);

        $this->view('admin/layouts/master.php' , ['page' => 'admin/Post/detailPost','posts' => $posts]);
    }

    public function edit($id) {
        $post = $this->model->show_edit($id);
        $this->view('admin/layouts/master.php' , ['page' => 'admin/Post/editPost','post' => $post]);
    }

    public function update($id , $data) {
        $post = $this->model->update($id , $data);

        $this->redirect('index.php?mod=admin&c=post&act=index');
    }

    public function delete($id) {
        $post = $this->model->delete($id);

        $this->redirect('index.php?mod=admin&c=post&act=index');
    }

}
?>