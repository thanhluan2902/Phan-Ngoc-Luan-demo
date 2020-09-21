<?php
require_once 'model/Category.php';
require_once "controllers/admin/AdminController.php";
class CategoryAdminController extends AdminController {
    protected $model;
    function __construct() {
        $this->model = new Category();
    }

    public function index() {

        $categories = $this->model->select();

        $this->view('admin/layouts/master.php' ,
        [
            'page' => 'admin/Category/homeCategory',
            'categories' => $categories
        ]);
    }

    public function create() {
        $this->view('admin/layouts/master.php' , 
        [
            'page' => 'admin/Category/addCategory'
        ]);
    }

    // hàm xử lí tạo mới
    public function store($data) {
        $file_name = $this->upload_file('images', 'thumbnail');
        $data['data']['thumbnail'] = $file_name;
        $data['data']['slug'] = $this->toSlug($data['data']['name']);
        
        $inset_table = $this->model->insert($data['data']);
        $this->redirect('index.php?mod=admin&c=category&act=index');

    }

    // hàm xem chi tiết
    public function show($id) {
        $detail_table = $this->model->detail($id);

        $this->view('admin/layouts/master.php' , 
        [
            'page' => 'admin/Category/detailCategory',
            'detail_table' => $detail_table
        ]);
    }

    // hàm hàm trả về dữ liệu bản ghi và giao diện chỉnh sủa
    public function edit($id) {
        $edit_tb = $this->model->show_edit($id);

        $this->view('admin/layouts/master.php' , 
        [
            'page' => 'admin/Category/editCategory',
            'edit_tb' => $edit_tb
        ]);
    }

    // hàm xử lí cập nhật
    public function update($id,$data) {
        $update_table = $this->model->update($id,$data);

        $this->redirect('index.php?mod=admin&c=category&act=index');
    }

    // hàm xử lí xóa
    public function delete($id) {
        $detail_table = $this->model->delete($id);

        $this->redirect('index.php?mod=admin&c=category&act=index');
    }


    // hàm xử lí cập nhật lại bản ghi vừa xóa
    public function restore() {}
    }
?>