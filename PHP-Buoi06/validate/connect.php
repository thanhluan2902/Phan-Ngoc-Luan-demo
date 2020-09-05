<?php
    function connect() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db_php_25";

        $conn = new mysqli($servername,$username,$password,$dbname);

        if($conn->connect_errno) {
            echo "fail" .  $conn->connect_error;
            exit(); 
        }

        return $conn;
    }
?>