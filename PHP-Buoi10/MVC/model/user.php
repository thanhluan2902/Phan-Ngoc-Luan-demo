<?php
require_once 'model/Model.php';
class User extends Model {
    var $table;
    public function __construct() {
        $this->table = "users";
        parent::__construct();
    }
}

?>