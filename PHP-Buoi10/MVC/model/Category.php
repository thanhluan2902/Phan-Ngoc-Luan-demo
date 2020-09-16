<?php
require_once 'model/model.php';
class Category extends Model {
    var $table = 'categories';

    public function get_all() {
        return $this->select($this->table);
    }

    public function insert_table($data) {
        return $this->insert($this->table,$data);
    }

    public function detail_table($id) {
        return $this->detail($this->table,$id);
    }

    public function delete_table($id) {
        return $this->delete($this->table,$id);
    }

    public function edit_table($id) {
        return $this->show_edit($this->table , $id);
    }
    public function update_table($id,$data) {
        return $this->update($this->table, $data , $id);
    }
}

?>