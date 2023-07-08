<?php

namespace App\Services;

use App\Application\Request\Request;
use App\Application\Router\Redirect;
use App\Models\User;

class UserService
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
}