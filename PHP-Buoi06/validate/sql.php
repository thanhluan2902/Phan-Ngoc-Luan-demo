<?php
    require 'connect.php';

    function select($table) {
        $conn = connect();
        $query = "SELECT * FROM $table where 1";
        // echo $query;
        // die();

        $result = $conn->query($query);

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

        $conn = connect();
        $status = $conn->query($query);
    
        return $status;

    }

    function update($table , $data) {
        $id = $data['id'];
        $conn = connect();
        
    //===================================================
        $string_1 = "";
        // $string_2 = "";
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
        $status = $conn->query($query);
        return $status;
    }

    function delete($table, $id_delete) {

        $conn = connect();
    
        // $id_delete = $_GET['id']; 
        $query = "DELETE FROM $table where id = " . $id_delete;
        
        // echo $query;
        // die();
        $result = $conn->query($query); 
    }


//==================================DETAIL=======================================================
    function detail_category($table,$id_detail) {
        $conn = connect();
        
        // $id_detail =$_GET['id'];

        $query = "SELECT * FROM $table where id = " . $id_detail;

        // echo $query;
        // die();
        $result = $conn->query($query);

        $data_detail = array();

        while($row = $result->fetch_assoc()) {
            $data_detail[] = $row;
        }
        // echo "<pre>";
        //     print_r($data_detail);
        // echo "</pre>";
        //die();

        foreach($data_detail as $value) {
            echo "<h3>". "Id : " . $value['id'] . "</h3>";
            echo "<h3>". "Name : " . $value['name'] . "</h3>";
            echo "<h3>". "Thumbnail : " . $value['thumbnail'] . "</h3>";
            echo "<h3>". "Slug : " . $value['slug'] . "</h3>";
            echo "<h3>". "Description : " . $value['description'] . "</h3>";
            echo "<h3>". "Created_at : " . $value['created_at'] . "</h3>";
        }
        
    }

    //=====================================================================================
    
    function detail_posts($table,$id_detail) {
        $conn = connect();
        
        // $id_detail =$_GET['id'];

        $query = "SELECT * FROM $table where id = " . $id_detail;

        // echo $query;
        // die();
        $result = $conn->query($query);

        $data_detail = array();

        while($row = $result->fetch_assoc()) {
            $data_detail[] = $row;
        }
        // echo "<pre>";
        //     print_r($data_detail);
        // echo "</pre>";
        //die();

        foreach($data_detail as $value) {
            echo "<h3>". "Id : " . $value['id'] . "</h3>";
            echo "<h3>". "Title : " . $value['title'] . "</h3>";
            echo "<h3>". "Thumbnail : " . $value['thumbnail'] . "</h3>";
            echo "<h3>". "Content : " . $value['content'] . "</h3>";
            echo "<h3>". "View_count : " . $value['view_count'] . "</h3>";
            echo "<h3>". "Category_id : " . $value['category_id'] . "</h3>";
            echo "<h3>". "Description : " . $value['description'] . "</h3>";
            echo "<h3>". "Created_at : " . $value['created_at'] . "</h3>";
        }
        
    }

    //=======================================================
    function detail_users($table,$id_detail) {
        $conn = connect();
        
        // $id_detail =$_GET['id'];

        $query = "SELECT * FROM $table where id = " . $id_detail;

        // echo $query;
        // die();
        $result = $conn->query($query);

        $data_detail = array();

        while($row = $result->fetch_assoc()) {
            $data_detail[] = $row;
        }
        // echo "<pre>";
        //     print_r($data_detail);
        // echo "</pre>";
        //die();

        foreach($data_detail as $value) {
            echo "<h3>". "Id : " . $value['id'] . "</h3>";
            echo "<h3>". "Name : " . $value['name'] . "</h3>";
            echo "<h3>". "Email : " . $value['email'] . "</h3>";
            echo "<h3>". "Password : " . $value['password'] . "</h3>";
            echo "<h3>". "Slug : " . $value['avatar'] . "</h3>";
            echo "<h3>". "Created_at : " . $value['created_at'] . "</h3>";
        }
        
    }
?>