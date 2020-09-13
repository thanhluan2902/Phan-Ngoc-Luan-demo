<?php
require_once 'model/model.php';
class Category extends Model {
    public function __construct() {
        parent:: __construct();
        $this->table = 'categories';
    }
}
?>