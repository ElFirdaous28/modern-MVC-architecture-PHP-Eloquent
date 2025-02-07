<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Auth;
use App\Core\Session;
use App\Core\Security;
// use App\Core\Session;

use App\Models\User;

class AuthController extends Controller
{

    public function registerPage()
    {
        $this->view('Auth/register');
    }

    // methode to handle register
    public function handleRegister()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['csrf_token']) && Security::validateCSRFToken($_POST['csrf_token'])) {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            // Check if the email already exists
            if (User::where('email', $email)->exists()) {
                Session::set('register_error', 'This email is already registered!');
                header("Location: " . $_SERVER['HTTP_REFERER']);
                exit;
            }

            $role = (User::count() === 0) ? 'admin' : 'user';
            $user = User::create([
                'name' => $name,
                'email' => $email,
                'password' => $password,
                'role' => $role
            ]);

            Auth::setLoginSessions($user);
            Auth::userRedirect($user->role);
        } else {
            Session::set('register_error', 'Invalid request.');
            header('Location: /register');
            exit;
        }
    }

    public function loginPage()
    {
        $this->view('Auth/login');
    }

    // methode to handle login
    public function handleLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['csrf_token']) && Security::validateCSRFToken($_POST['csrf_token'])) {
            $email = trim($_POST['email']);
            $password = $_POST['password'];

            Auth::login($email, $password);
        }
    }
}
