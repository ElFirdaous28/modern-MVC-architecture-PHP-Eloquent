<?php

require_once '../vendor/autoload.php';
require_once '../config/routes.php';
require_once '../bootstrap.php';

use App\Models\User;
$requestMethod = $_SERVER['REQUEST_METHOD'];
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Dispatch the route
$router->dispatch($requestMethod, $requestUri);

User::create([
    'name' => 'John Doe',
    'email' => 'example@example.com',
    'password' => password_hash('secret', PASSWORD_DEFAULT),
]);
$users = User::all();
foreach ($users as $user) {
    echo $user->name . "<br>";
}
