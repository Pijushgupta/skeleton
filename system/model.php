<?php

class model {
    
    function __construct() {
       
    }
    
    public function get($model_name){
        
        if($model_name!=null){
            require 'models/'.$mdoel_name.'.php';    
        }
    }
    
}
