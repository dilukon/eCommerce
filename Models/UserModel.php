<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class UserModel {

    function __construct() {
        
    }

    public function setUser($param) {
        $flag = false;
//        $param = new UserBean();
        require 'Models/db.php';
        $dB = new DB();

        $conn = $dB->getConnection();


        $sql = "INSERT INTO tbl_user
            (user_level,
        user_fname,
        user_lname,
        user_email,
        user_password)
VALUES ('$param->user_level',
             '$param->user_fname',
             '$param->user_lname',
             '$param->user_email',
             '$param->user_password');";

        if ($conn->query($sql) === TRUE) {
            $flag = TRUE;
//            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();

        return $flag;
    }

    public function doLogin($param) {
        
        $flag = FALSE;
        
//        $param = new UserBean();
        echo 'this is do Login';
        require 'Models/db.php';
        $dB = new DB();
        echo 'email:' . $param->getUser_email();
        echo 'password:' . $param->getUser_password();


        $conn = $dB->getConnection();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM tbl_user WHERE user_password = '".$param->user_password."' AND user_email = '".$param->user_email."'";
        echo '<br>'.$sql;
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "PASS";
            $flag = TRUE;
            // output data of each row
//            while ($row = $result->fetch_assoc()) {
//                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["firstname"] . " " . $row["lastname"] . "</td></tr>";
//            }
//            echo "</table>";
        } else {
            echo "FAIL";
        }
        $conn->close();
        return $flag;
        
    }

}
