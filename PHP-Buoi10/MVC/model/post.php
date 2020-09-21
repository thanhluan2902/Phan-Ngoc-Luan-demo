<?php
require_once 'model/Model.php';
class Post extends Model {
    var $table;
    public function __construct() {
        $this->table = "posts";
        parent::__construct();
    }
}

?>