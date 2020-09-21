<?php
require_once 'model/Post.php';
require_once 'model/Category.php';
require_once 'controllers/Controller.php';

class PostAdminController extends Controller {

    protected $model;
    function __construct() {
        $this->model = new Post();
    }

    public function index() {
        $posts = $this->model->select();

        $this->view('admin/layouts/master.php' ,
        [
            'page' => 'admin/Post/homePost',
            'posts' => $posts
        ]);
    }

    public function create()
    {
        $modelCate = new Category();
        $categories = $modelCate->select();

        $this->view('admin/layouts/master.php' , 
        [
        'page' => 'admin/Post/addPost',
        'categories' => $categories
        ]);
    }

    public function store($data) {
        $file_name = $this->upload_file('images', 'thumbnail');
        $data['data']['thumbnail'] = $file_name;
        
        $data['data']['slug'] = $this->toSlug($data['data']['title']);
        $data['data']['user_id'] = $_SESSION['auth']['id'];
        $posts = $this->model->insert($data['data']);

        // var_dump($data['data']['slug']);    
        // var_dump($data['data']['user_id']);
        // die();
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
        $file_name = $this->upload_file('images', 'thumbnail');
        $data['data']['thumbnail'] = $file_name;
        
        $data['data']['slug'] = $this->toSlug($data['data']['title']);
        $data['data']['user_id'] = $_SESSION['auth']['id'];

        $post = $this->model->update($id , $data);

        $this->redirect('index.php?mod=admin&c=post&act=index');
    }

    public function delete($id) {
        $post = $this->model->delete($id);

        $this->redirect('index.php?mod=admin&c=post&act=index');
    }

}
?>