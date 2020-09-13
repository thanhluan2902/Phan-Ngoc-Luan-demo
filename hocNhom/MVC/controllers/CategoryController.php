<?php
require_once 'model/Category.php';
require_once 'controllers/BaseController.php';

class CategoryController extends Controller {

    protected $model;
    function __construct() {
        $this->model = $this->model('Category');
    }

    public function list() {
        $categories = $this->model->select();

        // tương đương require_one
        $this->view('Category/list.php' , ['categories' => $categories]);
    }

    public function create() {
        $this->view('Category/add_process.php' , []);
    }

    // hàm xử lí tạo mới
    public function store($data) {
        $inset_table = $this->model->insert($data);

        $this->redirect('index.php?mod=category&act=list');

    }

    // hàm xem chi tiết
    public function show($id) {
        $detail_table = $this->model->detail($id);

        $this->view('Category/detail.php' , ['detail_table' => $detail_table]);
    }

    // hàm hàm trả về dữ liệu bản ghi và giao diện chỉnh sủa
    public function edit($id) {
        $edit_tb = $this->model->show_edit($id);

        $this->view('Category/edit_process.php' , ['edit_tb' => $edit_tb]);
    }

    // hàm xử lí cập nhật
    public function update($id,$data) {
        $update_table = $this->model->update($id,$data);

        $this->redirect('index.php?mod=category&act=list');
    }

    // hàm xử lí xóa
    public function delete($id) {
        $this->model->delete($id);

        $this->redirect('index.php?mod=category&act=list');
    }


    // hàm xử lí cập nhật lại bản ghi vừa xóa
    public function restore() {}

}

?>