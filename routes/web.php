<?php
// Routing for services
use core\Route;
use app\controllers\UserController;
// ------ Web Routes -------- //
Route::get('/', function (){
    return 'Hello World';
});
Route::match(['get', 'post'], '/register', [UserController::class, 'register']);
