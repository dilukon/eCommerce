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
}