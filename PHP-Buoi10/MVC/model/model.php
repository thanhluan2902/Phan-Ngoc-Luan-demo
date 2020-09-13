<?php
    include_once 'connection.php';
class Model {

    var $connection;
    var $table;
    function __construct() {
        $conn = new Connection();
        $this->connection = $conn->connect();
    }

    function select() {
        
        $query = "SELECT * FROM $this->table where 1";

        $result = $this->connection->query($query);

        $data = array();

        while($row = $result->fetch_assoc()){
            $data[] = $row;
        }

        return $data;
    }


    function insert($data) {

        $string_1 = "";
        $string_2 = "";
        $i = 0;

        $query = "INSERT INTO $this->table ";

        foreach($data as $column => $value){
            $string_1 .= $column;
            $i++;

            if($i != count($data)) {
                $string_1 .= ",";
            }

            $string_2 .= "'" . $value . "'";
            if($i != count($data)) {
                $string_2 .= ",";
            }
        }

        $string = '(' . $string_1 .')' . ' VALUES ' . '(' . $string_2 .')';

        $query .= $string;

        // echo $query;
        // die();

        $status = $this->connection->query($query);
        if($status) {
            setcookie('msg',"Thêm mới thành công",time() + 2);
        } else {
            setcookie('msg',"Thêm mới không thành công",time() + 2);
        }
        return $status;

    }

    //==================================================
    function show_edit($table , $id) {
        $query = "SELECT * FROM $table where id = " . $id;
    
        $result = $this->connection->query($query);
    
        $status = $result->fetch_assoc();
        return $status;
    }
    //==================================================
    function update($table , $data , $id) {
        $string_1 = "";
        $i = 0;

        $query = "UPDATE  $table SET ";
        $query_1 = " where id = $id";

        foreach($data as $column => $value){
            $string_1 .= $column . " = " ."'". $value ."'";
            $i++;

            if($i == 0) {
                $value = $id;
            }
            if($i != count($data)) {
                $string_1 .= " , ";
            } 
        }
        
        $query = $query . $string_1 . $query_1;

        // echo $query;
        // die();

    //=============================================================
        $status = $this->connection->query($query);
        if($status) {
            setcookie('msg',"Update thành công",time() + 2);
        } else {
            setcookie('msg',"Update không thành công",time() + 2);
        }
        return $status;
    }

    public function delete($table, $id) {

        $query = "DELETE FROM $table where id = " . $id;
        
        $result = $this->connection->query($query);
        if($result) {
            setcookie('msg',"Xóa thành công",time() + 2);
        } else {
            setcookie('msg',"Xóa không thành công",time() + 2);
        }
        return $result;
    }


//==================================DETAIL=======================================================
    function detail($table,$id) {
        // $conn = connect();
        $conn = new connection();
        $connection = $conn->connect();
        
        // $id =$_GET['id'];

        $query = "SELECT * FROM $table where id = " . $id;

        // echo $query;
        // die();
        
        $result = $this->connection->query($query);

        $data = $result->fetch_assoc();

        return $data;
    }
}

?>