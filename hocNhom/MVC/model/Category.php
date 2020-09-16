<?php
require_once 'model/model.php';
class Category extends Model {
    var $table;
    public function __construct() {
        parent:: __construct();
        $this->table = 'categories';
    }
}
?>