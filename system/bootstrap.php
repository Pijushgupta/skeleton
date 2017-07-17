<?php

class bootstrap {

    function __construct() {

        /*
         * filtering raw input. Using foreach to substract the arguments of method from 
         * raw url[]. While url[0] is the name of controller/class and url[1] is the name
         * of method 
         */

        $url = rtrim($_GET['url'], '/');
        $url = explode('/', $url);
        $counter = 0;
        $indexer = 0;
        $args = null;
        foreach ($url as $index) {
            if ($counter > 1) {
                $args[$indexer] = $index;
                $indexer++;
            }
            $counter++;
        }

        /*
         * Checking if any controller request has been made through the url[0] or not. if not
         * then the default controller will be excuted.
         * 
         */

        if (isset($url[0])) {
            
            $file = 'controllers/' . $url[0] . '.php';
            if (file_exists($file)) {
                require $file;
                $app = new $url[0]();
                if (isset($url[1])) {
                    if (method_exists($app, $url[1])) {
                        $app->{$url[1]}($args);
                    } else {
                        error::ErrorMethodNotFound("No such Method found");
                    }
                } else {
                    if (method_exists($app, 'index')) {
                        $app->index();
                    }
                }
            } else {
                echo "no such controller";
            }
            
        } else {
            echo "Default controller";
        }
    }

}
