<?php
require_once 'model/model.php';
class Post extends Model {
    var $table = 'posts';
    public function get_all() {
        return $this->select($this->table);
    }
}

?>