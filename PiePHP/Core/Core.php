<?php

namespace Core;

class Core {
    
    public function run() {
        
        require_once 'routes.php';
        
        if(strlen(BASE_URI) == strlen($_SERVER['REQUEST_URI']) - 1) {
            $url = '/';
        } else 
        {
            $url =str_replace(BASE_URI, '', $_SERVER['REQUEST_URI']);
        }
        
        $routes = Router::get($url);
        
        if ($routes['controller'] === "") {
            $class = '\\Core\\Controller';
        } else {
            $class = implode(['\\Controller\\', $routes['controller'], 'Controller']);
        }
        if (!class_exists($class)) {
            $routes = ["controller" => "Error", "action" => "error"];
            $class = implode(['\\Controller\\', $routes['controller'], 'Controller']);
        }
        $method = implode([$routes['action'], 'Action']);
        $controller = new $class;
        if(method_exists($class, $method)) {
            $controller->$method();
        } else {
            $controller->indexAction();
        }   
    }
}