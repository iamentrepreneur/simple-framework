<?php

namespace App\Controllers;

use App\Application\Views\View;
use App\Exceptions\ViewNotFoundException;

class PagesController
{
    /**
     * @throws ViewNotFoundException
     */
    public function home(): void
    {
        View::show('pages/home');
    }

    /**
     * @throws ViewNotFoundException
     */
    public function about(): void
    {
        View::show('pages/about');
    }

    /**
     * @throws ViewNotFoundException
     */
    public function contacts(): void
    {
        View::show('pages/contacts');
    }

    /**
     * @throws ViewNotFoundException
     */
    public function default(): void
    {
        View::show('pages/default');
    }
}