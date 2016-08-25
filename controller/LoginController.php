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
 * Description of LoginController
 *
 * @author ravi
 */
class LoginController {
    //put your code here
    
    
    
    
    
    public function invoke(){
        
        
        if(isset($_POST['login_button'])){
        
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        
        
        $userbean = new UserBean();
        $userbean->setUser_email($user_email);
        $userbean->setUser_password($user_password);
        
        //input validation on server side
        
        
        
        
        $user = new User();
        
        $msg = $user->getLogin($userbean);
        
        //echo 'msg:'.$msg;
        
        if($msg == 'pass'){
            session_start();
            $_SESSION['login_user_email'] = 'abcd';
            include './view/userCreation.php';
        }else{
             include './view/login.php';
        }
        
        }
    }
    
    
}
