<?php

//include '../model/UserBean.php';
//include '../service/User.php';


include './model/UserBean.php';
include './service/User.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserCreationController
 *
 * @author ravi
 */
class UserCreationController {

    //put your code here

    public function invoke() {
        $param = new UserBean();
        $user = new User();
        
        $param->setUser_fname($_POST['user_fname']);
        $param->setUser_lname($_POST['user_lname']);
        $param->setUser_level($_POST['user_level']);
        $param->setUser_email($_POST['user_email']);
        $param->setUser_password($_POST['user_password']);
  
        
        $flag = $user->setUser($param);
        if($flag){
            $msg = "<div class=\"alert alert-success\" role=\"alert\">New user created successfully</div>";
        }else{
             $msg = "<div class=\"alert alert-danger\" role=\"alert\">Error in user creation</div>";
        }
        
        include './view/userCreation.php';
        
    }

}
