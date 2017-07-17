<?php

class view {
    
    function __construct(){ 
        
    }
    
    //This gonna load the view
   public function render($view_name=null){
       if($view_name!=null){
            require 'views/'.$view_name.'.php';
       }
      
    }
    
}

