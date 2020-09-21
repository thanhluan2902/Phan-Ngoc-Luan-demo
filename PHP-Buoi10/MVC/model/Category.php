<?php
require_once 'model/Model.php';
class Category extends Model {
    var $table;
    public function __construct() {
        $this->table = "categories";
        parent::__construct();
    }
}

?>