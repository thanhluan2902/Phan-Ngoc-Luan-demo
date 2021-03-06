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
        
        $query = "SELECT * FROM " . $this->table;

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
        // echo $query;die();

        $status = $this->connection->query($query);
        if($status) {
            setcookie('msg',"Thêm mới thành công",time() + 2);
        } else {
            setcookie('msg',"Thêm mới không thành công",time() + 2);
        }
        return $status;

    }

    //==================================================
    function show_edit($id) {
        $query = "SELECT * FROM $this->table where id = " . $id;

        // echo $query;die();

        $result = $this->connection->query($query);
    
        $status = $result->fetch_assoc();
        return $status;
    }
    //==================================================



    function update($id , $data) {
        $string_1 = "";
        $i = 0;

        $query = "UPDATE  $this->table SET ";
        $query_1 = " where id = " . $id;

        foreach($data['data'] as $column => $value){
            $string_1 .= $column . " = " ."'". $value ."'";
            $i++;

            if($i == 0) {
                $value = $id;
            }
            if($i != count($data['data'])) {
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
    function detail($id) {
        $query = "SELECT * FROM " . $this->table . " where id = " . $id;

        // echo $query;
        // die();
        
        $result = $this->connection->query($query);

        $data = $result->fetch_assoc();

        return $data;
    }

    
    public function getUserByName($email) {
        $query = "SELECT * FROM users where email=" . "'" .  $email . "'";
        
        $result = $this->connection->query($query);
        $user = $result->fetch_assoc();
        return $user;
    }

    /*
    *Hàm tìm kiếm có điều kiện đưa ra 1 bản ghi
    *@params array $data
    */
    function first($data) {
        $string_1 = "";
        $i = 0;
        // $data = $_POST;
        $query = "SELECT * FROM  $this->table WHERE ";
        foreach($data as $column => $value){
            $string_1 .= $column . " = " ."'". $value ."'";
            $i++;

            if($i != count($data)) {
                $string_1 .= " AND ";
            } 
        }

        $query = $query . $string_1;

        $result = $this->connection->query($query);
        return $result->fetch_assoc();
    }

    /*
    *Hàm tìm kiếm có điều kiện
    *@params array $data
    *@return array
    */
    public function findWhere($data)
    {
        $string_1 = "";
        $i = 0;
        $query = "SELECT * FROM  $this->table WHERE ";
        foreach($data['data'] as $column => $value){
            $string_1 .= $column . " = " ."'". $value ."'";
            $i++;

            if($i != count($data['data'])) {
                $string_1 .= " AND ";
            }
        }

        $query = $query . $string_1;
        // echo $query;die();
        $result = $this->connection->query($query);
        $data['data'] = array();

        while($row = $result->fetch_assoc()){
            $data[] = $row;
        }

        return $data;
    }
}

?>