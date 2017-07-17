<?php


class help extends skeleton{

    function __construct() {
        parent::__construct();
        
    }
    
    public function example(){
        $this->view->render("abc");
    }
    
   
}