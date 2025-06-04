<?php

use App\Http\Controllers\InstallController;
use App\Core\Http\Router;

$router = new Router();

$router->get('/*', [InstallController::class, 'redirectInstall']);
$router->get('/install', [InstallController::class, 'showForm']);
$router->post('/install', [InstallController::class, 'install']);

$router->dispatch();
