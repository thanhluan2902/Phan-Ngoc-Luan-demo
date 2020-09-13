<?php

    class Connection {
        var $servername;
        var $username;
        var $password;
        var $dbname;

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
    }

?>