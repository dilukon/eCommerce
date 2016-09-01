<?php

//$url = 'default';
//
//$url = $_SERVER['REQUEST_URI'];
//
//$url = rtrim($url,'.php');
//
//$url = ltrim($url, '/eCommerce/');
//
//$url= rtrim($url,'/');

$url= $_GET['url'];

$url= rtrim($url,'/');



$url = explode('/',$url);
        
print_r ($url);

require 'Controllers/' . $url[0] . '.php';

$controller = new $url[0];



if (isset($url[2])) {
            $controller->{$url[1]}($url[2]);
        } else {
            if (isset($url[1])) {
                $controller->{$url[1]}();
            }
        }

    
    

    

//include './view/userCreation.php';
//include './view/login.php';
?>
