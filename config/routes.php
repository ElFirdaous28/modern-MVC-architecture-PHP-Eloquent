<?php

use App\Core\Router;
use App\Controllers\WelcomeController;

$router = new Router();

// Add a "Welcome" route
$router->addRoute('GET', '/', [WelcomeController::class, 'welcome']);
