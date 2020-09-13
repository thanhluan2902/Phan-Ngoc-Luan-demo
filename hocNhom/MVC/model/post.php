<?php
require_once 'model/model.php';
class Post extends Model {
    public function __construct() {
        parent:: __construct();
        $this->table = 'posts';
    }
}

?>