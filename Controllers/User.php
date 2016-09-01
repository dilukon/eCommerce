<?php

//require_once '../Views/User/UserCreate.php';

class User {

    function __construct() {
        
    }

//    function newUserCreation() {
//
//        
//    }
//    
//    

    function setUser() {
        echo 'This is set User';

        require 'Models/UserModel.php';
        require 'beans/UserBean.php';

        $userModel = new UserModel();
        $userBean = new UserBean();

        $userBean->setUser_level($_POST['userlevel']);
        $userBean->setUser_fname($_POST['userfname']);
        $userBean->setUser_lname($_POST['userlname']);
        $userBean->setUser_email($_POST['useremail']);
        $userBean->setUser_password($_POST['userpassword']);





        $userModel->setUser($userBean);
    }

    
    function loadDoLoginUser(){
         require 'Views/User/UserLogin.php';
    }
            
    function doLoginUser() {
        echo 'this is doLoginUser->controller';
        require 'Models/UserModel.php';
        require 'beans/UserBean.php';

        $userModel = new UserModel();
        $userBean = new UserBean();

        $userBean->setUser_email($_POST['useremail']);
        $userBean->setUser_password($_POST['userpassword']);
        $asd = $userModel->doLogin($userBean);
        if($asd){
            echo '<br>:Login success';
            require 'Views/User/UserLogin.php';
        }else{
            $msg = "Login Fail Please Retry";
            require 'Views/User/UserLogin.php';
            
        }
        
    }

//
//    function setUser() {
//        echo 'This is set User';
//        
//        require_once 'view/UserCreationView.php';
//
//        require 'model/UserModel.php';
//        require 'beans/UserBean.php';
//        $userModel = new UserModel();
////        
//        $userBean = new UserBean();
////        echo $_POST['username'];
//        $userBean->setUser_fname($_POST['username']);
//        
//        $userModel->setUser($userBean);
//    }
}
