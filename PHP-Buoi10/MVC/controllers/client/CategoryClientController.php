<?php
require_once 'model/Category.php';
require_once "controllers/Client/ClientController.php";
class CategoryClientController extends ClientController {
    protected $model;
    function __construct() {
        $this->model = new Category();
    }

    public function index() {

        $categories = $this->model->select();

        $this->view('Client/layouts/master.php' ,
        [
            'page' => 'Client/Category/homeCategory',
            'categories' => $categories
        ]);
    }

    // hàm xem chi tiết
    public function show($id) {
        $detail_table = $this->model->detail($id);

        $this->view('Client/layouts/master.php' , 
        [
            'page' => 'Client/Category/detailCategory',
            'detail_table' => $detail_table
        ]);
    }

    // hàm xử lí cập nhật lại bản ghi vừa xóa
    public function restore() {}
    }
?>