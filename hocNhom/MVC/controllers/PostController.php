<?php
require_once 'model/post.php';
require_once 'controllers/BaseController.php';

class PostController extends Controller {
    protected $model;
    function __construct() {
        $this->model = $this->model('Post');
    }

    public function list() {

        // $posts = $this->model->get_all();

        // require_once "views/Post/list.php";
        $this->view('layouts/master.php' , ['page' => 'post/test']);
    }

    public function create() {
        $this->view('Post/add_process.php' , []);
    }

    public function store($data) {
        $model = new Post();
        $posts = $model->insert_table($data);

        $this->redirect('index.php?mod=post&act=list');
    }

    public function show($id) {
        $model = new Post();
        $posts = $model->detail_table($id);

        $this->view('Post/detail.php' , ['posts' => $posts]);
    }

    public function edit($id) {
        $model = new Post();
        $post = $model->edit_table($id);
        $this->view('Post/edit_process.php' , ['post' => $post]);
    }

    public function update($id , $data) {
        $model = new Post();
        $post = $model->update_table($id , $data);

        $this->redirect('index.php?mod=post&act=list');
    }

    public function delete($id) {
        $model = new Post();
        $post = $model->delete_table($id);

        $this->redirect('index.php?mod=post&act=list');
    }

}
?>