<?php
session_start();
include './controller/UserCreationController.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$userCreationController = new UserCreationController();
$userCreationController->invoke();

?>