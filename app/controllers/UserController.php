<?php

namespace app\controllers;

use vendor\core\Application;
use vendor\core\Controller;
use vendor\core\Request;

class UserController extends Controller
{
    public function register(Request $request)
    {
        if($request->method() === 'post') {
            var_dump('post');
        }
        $this->view('auth.register', ['id' => 'tatar']);
//        Application::$app->router->renderView('auth/register');
    }
}
