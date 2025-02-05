<?php

namespace Core;

class Security
{
    public static function generateCSRFToken()
    {
        // Check if a token exists already, if not, create one
        if (empty($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32)); // Create a random token
        }
        return $_SESSION['csrf_token']; // Return the token for embedding in forms
    }

    public static function validateCSRFToken($token)
    {
        // Compare submitted token with the session token
        return isset($_SESSION['csrf_token']) && $_SESSION['csrf_token'] === $token;
    }
}
