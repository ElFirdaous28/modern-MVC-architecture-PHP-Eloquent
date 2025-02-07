<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\User;

class AuthController extends Controller
{

    public function registerPage()
    {
        $this->view('Auth/register');
    }

    // methode to hansle register
    public function handleRegister()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Create user
            User::create([
                'name' => $name,
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT),
            ]);

            echo 'Registration successful!';
        } else {
            die('Invalid request.');
        }
    }

    public function loginPage()
    {
        $this->view('Auth/login');
    }
    public function handleLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = trim($_POST['email']);
            $password = $_POST['password'];

            $user = User::where('email', $email)->first();

            if (!$user) {
                die('User not found.');
            }

            if (!password_verify($password, $user->password)) {
                die('Invalid credentials.');
            }

            $_SESSION['user_loged_in_id'] = $user->id;
            $_SESSION['user_loged_in_name'] = $user->name;
            $_SESSION['user_loged_in_email'] = $user->email;

            echo 'Login successful!';
        }
    }
}
