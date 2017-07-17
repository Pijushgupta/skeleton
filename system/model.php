<?php

class model {
    
    function __construct() {
       
    }
    
    //This gonna load the model file.
    public function get($model_name){
        if($model_name!=null){
            require 'models/'.$mdoel_name.'.php';    
        }
    }
    
}
