<?php

use App\Core\Router;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

$router = new Router();

$router->get( '/login', [ AuthController::class, 'loginView' ] );
$router->get('/dashboard', [ AdminController::class, 'dashboard' ] );
$router->post('/login', [ AuthController::class, 'login' ] );

$router->dispatch();
