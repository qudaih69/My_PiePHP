<?php

namespace Core;

class Router {

    private static $routes;    
    
    public static function connect($url, $route) {
        self::$routes[$url] = $route;
    }
    
    public static function get ($url) {
        
        $lastChar = strlen($url) - 1;
        
        if( $lastChar > 1 && $url[$lastChar] == '/'){
            $url = substr($url, 0, - 1);
        }
        
        if(isset(self::$routes[$url])) {
            return self::$routes[$url];
        } else {
            return ["controller" => "Error", "action" => "error"];
        }
    }
}