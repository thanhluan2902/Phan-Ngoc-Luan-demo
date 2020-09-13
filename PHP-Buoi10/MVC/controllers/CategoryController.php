<?php
require_once 'model/Category.php';
require_once 'controllers/BaseController.php';

class CategoryController extends Controller {

    protected $model;
    function __construct() {
        $model = new Category();
    }

    public function list() {
        // nhớ viết lại!
        $select = new Category();
        $categories = $select->get_all();
        // $this->model->get_all();

        // tương đương require_one
        $this->view('Category/list.php' , ['categories' => $categories]);
    }

    public function create() {
        $this->view('Category/add_process.php' , []);
    }

    // hàm xử lí tạo mới
    public function store($data) {
        $insert = new Category();
        $inset_table = $insert->insert_table($data);

        // header('location:?mod=category&act=list');
        $this->redirect('index.php?mod=category&act=list');

    }

    // hàm xem chi tiết
    public function show($id) {
        $detail = new Category();
        $detail_table =$detail->detail_table($id);

        $this->view('Category/detail.php' , ['detail_table' => $detail_table]);
    }

    // hàm hàm trả về dữ liệu bản ghi và giao diện chỉnh sủa
    public function edit($id) {
        $edit = new Category();
        $edit_tb = $edit->edit_table($id);

        $this->view('Category/edit_process.php' , ['edit_tb' => $edit_tb]);
    }

    // hàm xử lí cập nhật
    public function update($id,$data) {
        $update = new Category();
        $update_table = $update->update_table($id,$data);

        $this->redirect('index.php?mod=category&act=list');
    }

    // hàm xử lí xóa
    public function delete($id) {
        $delete = new Category();
        $delete->delete_table($id);

        $this->redirect('index.php?mod=category&act=list');
    }


    // hàm xử lí cập nhật lại bản ghi vừa xóa
    public function restore() {}

}

?>