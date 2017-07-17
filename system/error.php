<?php

class error {
    function __construct() {
        
    }
    
    public function ErrorMethodNotFound($argument=null){
        if($argument!=null){
            echo $argument;
        }else{
            echo "Unknown Error!";
        }
    }
}
