<?php

class DB {

    var $servername = "localhost";
    var $username = "root";
    var $password = "123";
    var $dbname = "db_ecommerce";

    public function getConnection() {
        $conn = new mysqli($this->servername, $this->username, $this->password,$this->dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }else{
            echo "Connected successfully";
           return $conn;
        } 
        
    }

}

// Create connection
// Check connection


?>