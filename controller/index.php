<?php

class index {

    function __construct() {
        echo 'we are in index';
    }

    public function other($arg=false){
        echo 'we are in other';
        echo 'optional'.$arg;
    }
}