<?php

class error {
    function __construct() {
        
    }
    
    public function error_handler($argument=null){
        if($argument!=null){
            echo $argument;
        }else{
            echo "Unknown Error!";
        }
    }
}
