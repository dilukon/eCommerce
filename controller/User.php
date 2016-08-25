<?php

class User {

    function __construct() {
        
    }

    function newUserCreation() {

        require 'view/UserCreationView.php';
    }

    function setUser() {
        echo 'This is set User';
        
        require_once 'view/UserCreationView.php';

        require 'model/UserModel.php';
        require 'beans/UserBean.php';
        $userModel = new UserModel();
//        
        $userBean = new UserBean();
//        echo $_POST['username'];
        $userBean->setUser_fname($_POST['username']);
        
        $userModel->setUser($userBean);
    }

}
