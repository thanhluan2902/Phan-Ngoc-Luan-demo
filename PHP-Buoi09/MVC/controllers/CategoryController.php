<?php
require_once 'controllers/BaseController.php';
require_once 'model/Category.php';
class CategoryController extends Controller {
    public function list() {
        $select = new Category();
        $categories = $select->get_all();

        // require_once "views/Category/list.php";

        $this->view('category/list.php' , 
            ['categories' => $categories]
        );

    }

    public function create() {
        require_once "views/Category/add_process.php";
    }

    // hàm xử lí tạo mới
    public function store($data) {
        $insert = new Category();
        $inset_table = $insert->insert_table($data);

        header('location:?mod=category&act=list');
    }

    // hàm xem chi tiết
    public function show($id) {
        $detail = new Category();
        $detail_table =$detail->detail_table($id);

        require_once "views/Category/detail.php";
    }

    // hàm hàm trả về dữ liệu bản ghi và giao diện chỉnh sủa
    public function edit($id) {
        $edit = new Category();
        $edit_tb = $edit->edit_table($id);
        require_once "views/Category/edit_process.php";
    }

    // hàm xử lí cập nhật
    public function update($id,$data) {
        $update = new Category();
        $update_table = $update->update_table($id,$data);

        // header('location:?mod=category&act=list');
    }

    // hàm xử lí xóa
    public function delete($id) {
        $delete = new Category();
        $delete->delete_table($id);
    }

    // hàm xử lí cập nhật lại bản ghi vừa xóa
    public function restore() {}

}

?>