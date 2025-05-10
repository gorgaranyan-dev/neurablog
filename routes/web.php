<?php

use App\Core\Router;
use App\Http\Controllers\AuthController;

$router = new Router();

$router->get( '/login', [ AuthController::class, 'login' ] );

$router->dispatch();
