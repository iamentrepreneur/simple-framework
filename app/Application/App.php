<?php

namespace App\Application;

use App\Application\Auth\Auth;
use App\Application\Config\Config;
use App\Application\Router\Route;
use App\Application\Router\Router;
use App\Application\Views\View;
use App\Exceptions\ComponentNotFoundException;
use App\Exceptions\ViewNotFoundException;

class App
{
    public function run(): void
    {
        try {
            $this->handle();
        } catch (ViewNotFoundException|ComponentNotFoundException|\PDOException $e) {
            View::exception($e);
        }
    }

    /**
     * @throws ViewNotFoundException
     */
    private function handle(): void
    {
        Config::init();
        require_once __DIR__ . "/../../routes/actions.php";
        require_once __DIR__ . "/../../routes/pages.php";
        $router = new Router();
        Auth::init();
        $router->handle(Route::list());
    }
}