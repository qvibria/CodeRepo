<?php

class Bootstrap{
    private $routes;
    
    function __construct() {
        $root = realpath($_SERVER["DOCUMENT_ROOT"]);
        $json = file_get_contents("$root/core/config/route.json");
        $this->setRoutes(json_decode($json));
    }
    
    function getRoutes() {
        return $this->routes;
    }

    function setRoutes($routes) {
        $this->routes = $routes;
    }

    
    public function route($url){
        $url = parse_url($url);
        return $url['path'];
    }
    
    
}
