<?php

//include '../model/UserBean.php';
include './service/db.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserService
 *
 * @author ravi
 */
class User {
    //put your code here

    /**
     * New user creation 
     * @param type $param
     */
    public function setUser($param) {
        $flag = false;
//        $param = new UserBean();

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

    public function getLogin($param) {
//        $param = new UserBean();
        
        $str = "";
        
//        echo 'this is getLogin function<br>';
//        echo 'username:' . $param->getUser_email();
//        echo '<br>password:' . $param->getUser_password();

        //get user from the database;
        // Create connection
        
        $dB = new DB();
        $conn =  $dB->getConnection();
        // Check connection
        $sql = "SELECT * FROM tbl_user WHERE user_email = '$param->user_email' AND user_password = '$param->user_password'";
        
        //echo '<br>'.$sql;
        
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
//            while ($row = $result->fetch_assoc()) {
//                echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
//            }
//           
            $str="pass";
            
        } else {
            $str = "invalid username or password";
        }
        $conn->close();
        
        
        return $str;
        
    }

}
