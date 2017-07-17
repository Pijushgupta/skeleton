<?php

class view {
    
    function __construct(){ 
        
    }
    
   public function render($view_name=null){
       if($view_name!=null){
            require 'views/'.$view_name.'.php';
       }
      
    }
    
}

