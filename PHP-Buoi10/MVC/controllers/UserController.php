<?php
require_once 'model/user.php';
require_once 'controllers/BaseController.php';
class UserController extends Controller {
    public function list() {
        $model = new User();
        $users = $model->get_all();

        // require_once "views/User/list.php";
        $this->view('User/list.php' , ['users' => $users]);
    }

    public function create() {
        $this->view('User/add_process.php' , []);
    }

    // hàm xử lí tạo mới
    public function store($data) {
        $insert = new User();
        $inset_table = $insert->insert_table($data);

        // header('location:?mod=category&act=list');
        $this->redirect('index.php?mod=user&act=list');

    }

    // hàm xem chi tiết
    public function show($id) {
        $detail = new User();
        $detail_table =$detail->detail_table($id);

        $this->view('User/detail.php' , ['detail_table' => $detail_table]);
    }

    // hàm hàm trả về dữ liệu bản ghi và giao diện chỉnh sủa
    public function edit($id) {
        $edit = new User();
        $edit_tb = $edit->edit_table($id);

        $this->view('User/edit_process.php' , ['edit_tb' => $edit_tb]);
    }

    // hàm xử lí cập nhật
    public function update($id,$data) {
        $update = new User();
        $update_table = $update->update_table($id,$data);

        $this->redirect('index.php?mod=user&act=list');
    }

    // hàm xử lí xóa
    public function delete($id) {
        $delete = new User();
        $delete->delete_table($id);

        $this->redirect('index.php?mod=user&act=list');
    }


    // hàm xử lí cập nhật lại bản ghi vừa xóa
    public function restore() {}
}
?>