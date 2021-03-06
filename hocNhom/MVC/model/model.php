<?php
    include_once 'connection.php';
class Model {
    protected $connection;
    protected $table;
    function __construct() {
        $conn = new Connection();
        $this->connection = $conn->connect();
    }

    public function select() {
        
        $query = "SELECT * FROM $this->table where 1";
        // echo $query;die();

        $result = $this->connection->query($query);

        $data = array();

        while($row = $result->fetch_assoc()){
            $data[] = $row;
        }

        return $data;
    }


    public function insert($data) {

        $string_1 = "";
        $string_2 = "";
        $i = 0;

        // ko hiểu!!!!
        $data = $_POST;

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
    public function show_edit($id) {
        $query = "SELECT * FROM $this->table where id = " . $id;
        // echo $query;die();

        $result = $this->connection->query($query);
    
        $status = $result->fetch_assoc();
        return $status;
    }
    //==================================================
    public function update($id, $data ) {
        $string_1 = "";
        $i = 0;

        $query = "UPDATE  $this->table SET ";
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

    public function delete($id) {

        $query = "DELETE FROM $this->table where id = " . $id;
        
        $result = $this->connection->query($query);
        if($result) {
            setcookie('msg',"Xóa thành công",time() + 2);
        } else {
            setcookie('msg',"Xóa không thành công",time() + 2);
        }
        return $result;
    }


//==================================DETAIL=======================================================
public function detail($id) {
        // $conn = connect();
        $conn = new connection();
        $connection = $conn->connect();
        
        // $id =$_GET['id'];

        $query = "SELECT * FROM $this->table where id = " . $id;

        // echo $query;
        // die();
        
        $result = $this->connection->query($query);

        $data = $result->fetch_assoc();

        return $data;
    }
}

?>