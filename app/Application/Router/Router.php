<?php

namespace App\Application\Router;

use App\Application\Views\View;
use App\Exceptions\ViewNotFoundException;

class Router implements RouterInterface
{
    /**
     * @throws ViewNotFoundException
     */
    public function handle(array $routes): void
    {
        $uri = $_SERVER['REQUEST_URI'];

        $only_routes = [];
        foreach ($routes as $ru) {
            $only_routes[] = $ru['uri'];
        }

        if (array_search($uri, $only_routes)) {
            foreach ($routes as $route) {
                if($route['uri'] == $uri) {
                    $controller = new $route['controller']();
                    $method = $route['method'];
                    $controller->$method();
                }
            }
        } else {
            View::show("pages" . $uri);
        }
    }
}