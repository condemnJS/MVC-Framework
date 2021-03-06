<?php
// Routing for services
use core\Route;
use app\controllers\UserController;
use app\controllers\HomeController;
// ------ Web Routes -------- //
Route::get('/', [HomeController::class, 'index']);
Route::match(['get', 'post'], '/register', [UserController::class, 'register']);
