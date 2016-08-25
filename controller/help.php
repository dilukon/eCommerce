<?php

class Help{

    function __construct() {
//        /arent::__construct();
        echo 'We are inside help<br>';
    }
    
    public function other($arg = false) {
        echo 'We are inside other<br/>';
        echo 'Optional:'.$arg;
        
        //require 'models/help_model.php';
        
    }

}
