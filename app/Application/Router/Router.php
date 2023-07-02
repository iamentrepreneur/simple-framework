<?php

namespace App\Application\Router;

use App\Controllers\PagesController;

class Router implements RouterInterface
{
    public function handle(array $routes): void
    {
        $uri = $_SERVER['REQUEST_URI'];

        $key = array_search($uri, $routes);

        print_r($key);

        foreach ($routes as $route) {
            if($route['uri'] == $uri) {
                $controller = new $route['controller']();
                $method = $route['method'];
                $controller->$method();
            }
        }
    }
}