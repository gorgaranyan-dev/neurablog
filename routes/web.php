<?php

use App\Core\Router;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

$router = new Router();

$router->get( '/login', [ AuthController::class, 'loginView' ] );
$router->post('/login', [ AuthController::class, 'login' ] );

$router->get('/dashboard', [ AdminController::class, 'dashboard' ] );
$router->get('/admin/posts/add-new', [ AdminController::class, 'addNewPostView' ] );

$router->dispatch();
