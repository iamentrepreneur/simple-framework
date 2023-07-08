<?php

namespace App\Controllers;

use App\Application\Auth\Auth;
use App\Application\Helpers\Random;
use App\Application\Request\Request;
use App\Application\Router\Redirect;
use App\Models\User;
use App\Services\UserService;

class UserController
{
    private UserService $service;

    public function __construct()
    {
        $this->service = new UserService();
    }

    public function register(Request $request): void
    {
        $this->service->register($request);
    }

    public function login(Request $request): void
    {
        $user = (new User())->find('email', $request->post('email'));

        if ($user) {
            if (password_verify($request->post('password'), $user->getUserPassword())) {
                $token = Random::str(50);
                $user->update([Auth::getTokenColumn() => $token, 'name' => 'Илья']);
                setcookie(Auth::getTokenColumn(), $token);
                Redirect::to('/login');
            } else {
                dd('incorrect password');
            }
        } else {
            dd('user not found');
        }
    }

    public function logout(): void
    {
        unset($_COOKIE[Auth::getTokenColumn()]);
        setcookie(Auth::getTokenColumn(), NULL);
        Redirect::to('/login');
    }
}