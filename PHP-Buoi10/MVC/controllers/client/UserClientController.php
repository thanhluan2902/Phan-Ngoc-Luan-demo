<?php
require_once 'model/User.php';
require_once 'controllers/Controller.php';
class UserAdminController extends Controller {
    protected $model;
    function __construct() {
        $this->model = new User();
    }

    public function index() {
        $users = $this->model->select();

        // require_once "views/User/index.php";
        $this->view('admin/layouts/master.php' ,
        [
            'page' => 'admin/User/homeUser',
            'users' => $users
        ]);
    }

    public function create() {
        $this->view('admin/layouts/master.php' , ['page' => 'admin/User/addUser']);
    }

    // hàm xử lí tạo mới
    public function store($data) {
        $inset_table = $this->model->insert($data);

        $this->redirect('index.php?mod=admin&c=user&act=index');

    }

    // hàm xem chi tiết
    public function show($id) {
        $detail_table =$this->model->detail($id);

        $this->view('admin/layouts/master.php' , ['page' => 'admin/User/detailUser','detail_table' => $detail_table]);
    }

    // hàm hàm trả về dữ liệu bản ghi và giao diện chỉnh sủa
    public function edit($id) {
        $edit_tb = $this->model->show_edit($id);

        $this->view('admin/layouts/master.php' , ['page' => 'admin/User/editUser','edit_tb' => $edit_tb]);
    }

    // hàm xử lí cập nhật
    public function update($id,$data) {
        $update_table = $this->model->update($id,$data);

        $this->redirect('index.php?mod=admin&c=user&act=index');
    }

    // hàm xử lí xóa
    public function delete($id) {
        $delete = $this->model->delete($id);

        $this->redirect('index.php?mod=admin&c=user&act=index');
    }


    // hàm xử lí cập nhật lại bản ghi vừa xóa
    public function restore() {}
}
?>