<?php

namespace App\Controllers;

use App\Application\Helpers\Random;
use App\Application\Request\Request;
use App\Application\Router\Redirect;
use App\Models\User;

class UserController
{
    public function register(Request $request): void
    {
        $user = new User();
        $user->setName($request->post('name'));
        $user->setLastname($request->post('lastname'));
        $user->setEmail($request->post('email'));
        $user->setUserPassword($request->post('password'));
        $user->store();
        Redirect::to('/register');
    }

    public function login(Request $request): void
    {
        $user = (new User())->find('email', $request->post('email'));
        if ($user) {
            if (password_verify($request->post('password'), $user['userPassword'])) {
                dd(Random::str(10));
            } else {
                dd('incorrect password');
            }
        } else {
            dd('user not found');
        }
    }
}