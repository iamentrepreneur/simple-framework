<?php

namespace App\Application\Views;

use App\Application\Config\Config;
use App\Exceptions\ViewNotFoundException;

class View implements ViewInterface
{

    /**
     * @throws ViewNotFoundException
     */
    public static function show(string $view): void
    {
        $path = __DIR__ . "/../../../views/$view.view.php";
        if (!file_exists($path)) {
            throw new ViewNotFoundException("View ($view) not found");
        }
        include $path;
    }

    public static function exception(\Exception $e): void
    {
        extract([
            'message' => $e->getMessage(),
            'trace' => $e->getTraceAsString(),
        ]);


        $path = __DIR__ . "/../../../views/" . Config::get('app.exception_view') . ".view.php";

        if (!file_exists($path)) {
            echo "<pre>";
            echo $e->getMessage();
            echo "<hr>";
            echo $e->getTraceAsString();
            echo "</pre>";
            return;
        }

        include $path;
    }
}