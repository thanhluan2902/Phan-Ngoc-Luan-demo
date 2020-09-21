<?php

    class Connection {
        var $servername;
        var $username;
        var $password;
        var $dbname;

        function __construct() {
            $this->servername = 'localhost';
            $this->username = 'root';
            $this->password = '';
            $this->dbname = 'db_project';
        }

        function connect() {
            // $servername = "localhost";
            // $username = "root";
            // $password = "";
            // $dbname = "db_php_25";
    
            $conn = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
    
            if($conn->connect_errno) {
                echo "fail" .  $conn->connect_error;
                exit(); 
            }
    
            return $conn;
        }
    }

?>