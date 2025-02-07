<?php

use App\Core\Router;
use App\Controllers\WelcomeController;
use App\Controllers\AuthController;

$router = new Router();

// Add a "Welcome" route
$router->addRoute('GET', '/', [WelcomeController::class, 'welcome']);
$router->addRoute('GET', '/login', [AuthController::class, 'loginPage']);
$router->addRoute('GET', '/register', [AuthController::class, 'registerPage']);
$router->addRoute('POST', '/handleRegister', [AuthController::class, 'handleRegister']);
$router->addRoute('POST', '/handleLogin', [AuthController::class, 'handleLogin']);
