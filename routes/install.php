<?php

use App\Core\Router;
use App\Http\Controllers\InstallController;

$router = new Router();

$router->get('/', [InstallController::class, 'redirectInstall']);
$router->get('/install', [InstallController::class, 'showForm']);
$router->post('/install', [InstallController::class, 'install']);

$router->dispatch();
