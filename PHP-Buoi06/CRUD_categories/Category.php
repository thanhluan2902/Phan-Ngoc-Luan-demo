<?php
    include_once '../validate/model.php';
    class Category extends Model {

        var $table = 'categories';
        function get_all() {
            return $this->select($this->table);
        }

        function create() {
            $data = $_POST;
            return $this->insert($this->table, $data);
        }

        function edit() {
            $data = $_POST;
            return $this->update($this->table, $data);
        }

        function detail_category() {
            return $this->detail($this->table);
        }

        function delete_category() {
            $id_delete = $_GET['id'];
            return $this->delete($this->table, $id_delete);
        }
    }
?>