<?php
// auth file
namespace Core;

use App\Models\User;

class Auth
{
    public static function login($email, $password)
    {
        $user = User::where('email', $email)->first();

        if ($user && password_verify($password, $user->password)) {
            $_SESSION['user_id'] = $user->id;
            return true;
        }
        return false;
    }

    public static function user()
    {
        return isset($_SESSION['user_id']) ? User::find($_SESSION['user_id']) : null;
    }

    public static function logout()
    {
        unset($_SESSION['user_id']);
        session_destroy();
    }
}
