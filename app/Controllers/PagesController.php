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
        View::show('pages/home', [
            'title' => 'Home'
        ]);
    }

    /**
     * @throws ViewNotFoundException
     */
    public function about(): void
    {
        View::show('pages/about', [
            'title' => 'About'
        ]);
    }

    /**
     * @throws ViewNotFoundException
     */
    public function contacts(): void
    {
        View::show('pages/contacts', [
            'title' => 'Contacts'
        ]);
    }

    public function login(): void
    {
        View::show('pages/login', [
            'title' => 'Login'
        ]);
    }

    public function register(): void
    {
        View::show('pages/register', [
            'title' => 'Register'
        ]);
    }
}