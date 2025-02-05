<?php

require_once '../vendor/autoload.php';
require_once '../config/routes.php';

$requestMethod = $_SERVER['REQUEST_METHOD'];
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Dispatch the route
$router->dispatch($requestMethod, $requestUri);