<?php
require_once 'model/model.php';
class User extends Model {
    var $table = 'users';
    public function get_all() {
        return $this->select($this->table);
    }
}

?>