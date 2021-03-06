<?php

namespace app\controllers;

use core\Application;
use core\Controller;
use core\Request;
use app\models\User;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $user = new User();
        if($request->isPost()) {
            $user->loadData($request->all());
            if($user->validate()) {
//                $user->save();
                Application::$app->session->setFlash('success', 'Thanks for registering');
                Application::$app->response->redirect('/');
            }
            return $this->view('auth.register', compact('user'));
        }
        return $this->view('auth.register', compact('user'));
    }
}
