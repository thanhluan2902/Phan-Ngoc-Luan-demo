<?php
    include_once '../validate/connection.php';
class Model {

    var $connection;
    function __construct() {
        $conn = new Connection();
        
        $this->connection = $conn->connect();
    }

    function select($table) {
        // $conn = connect();
        
        // $conn = new Connection();
        
        // $connection = $conn->connect(); // vì connect() có return tại $conn -> phải tạo biến để gán cho $conn
        
        $query = "SELECT * FROM $table where 1";
        // echo $query;
        // die();

        $result = $this->connection->query($query);

        $data = array();

        while($row = $result->fetch_assoc()){
            $data[] = $row;
        }

        return $data;
    }


    function insert($table,$data) {

        $string_1 = "";
        $string_2 = "";
        $i = 0;

        $query = "INSERT INTO $table ";

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
        //test
        // echo $query;
        // die();

        // $conn = connect();

        // $conn = new Connection();
        
        // $connection = $conn->connect();

        $status = $this->connection->query($query);
        if($status) {
            header("location: $table.php");
            setcookie('msg',"Thêm mới thành công",time() + 2);
        } else {
            header("location: $table.php");
            setcookie('msg',"Thêm mới không thành công",time() + 2);
        }
        return $status;

    }

    function update($table , $data) {
        $id = $data['id'];
        // $conn = connect();
        // $conn = new connection();
        // $connection = $conn->connect();
        
    //===================================================
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
        
        // echo $string_1; die();
        $query = $query . $string_1 . $query_1;

        // echo $query;
        // die();
    //=============================================================
        $status = $this->connection->query($query);
        if($status) {
            header("location: $table.php");
            setcookie('msg',"Update thành công",time() + 2);
        } else {
            header("location: $table.php");
            setcookie('msg',"Update không thành công",time() + 2);
        }
        return $status;
    }

    function delete($table, $id_delete) {

        // $conn = connect();
        // $conn = new connection();
        // $connection = $conn->connect();
    
        // $id_delete = $_GET['id']; 
        $query = "DELETE FROM $table where id = " . $id_delete;
        
        // echo $query;
        // die();

        $result = $this->connection->query($query);
        if($result) {
            header("location: $table.php");
            setcookie('msg',"Xóa thành công",time() + 2);
        } else {
            header("location: $table.php");
            setcookie('msg',"Xóa không thành công",time() + 2);
        }
        // setcookie('msg',"Xóa thành công",time() + 5);
        return $result;
    }


//==================================DETAIL=======================================================
    function detail($table) {
        // $conn = connect();
        $conn = new connection();
        $connection = $conn->connect();
        
        $id =$_GET['id'];

        $query = "SELECT * FROM $table where id = " . $id;

        // echo $query;
        // die();
        
        $result = $this->connection->query($query);

        $data = $result->fetch_assoc();

        return $data;
    }
}

?>