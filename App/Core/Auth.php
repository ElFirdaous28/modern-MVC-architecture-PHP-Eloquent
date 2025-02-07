<?php

namespace App\Core;

use App\Core\View;
use App\Models\User;
use App\Core\Session;

class Auth
{
    public static function login($email, $password)
    {
        $user = User::where('email', $email)->first();

        if ($user) {
            if (password_verify($password, $user->password)) {
                return $user;
            } else {
                Session::set('login_password_error', 'Wrong password!');
            }
        } else {
            Session::set('login_email_error', 'This email does not exist!');
        }
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit;
    }

    public static function setLoginSessions($user)
    {
        Session::set('user_logged_in_id', $user->id);
        Session::set('user_logged_in_name', $user->name);
        Session::set('user_logged_in_email', $user->email);
        Session::set('user_logged_in_role', $user->role ?? 'user');
    }

    public static function userRedirect($role)
    {
        if ($role === 'admin') {
            header('Location: /admin/home');
        } else {
            header('Location: /user/home');
        }
        exit;
    }

    public static function logout()
    {
        session_unset('user_logged_in_id');
        session_unset('user_logged_in_name');
        session_unset('user_logged_in_email');
        session_unset('user_logged_in_role');

        session_destroy();
    }
}
