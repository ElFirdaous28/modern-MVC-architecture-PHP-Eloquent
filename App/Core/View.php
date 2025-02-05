<?php

namespace App\Core;

class View
{
    public static function render($view, $data = [])
    {
        extract($data);
        require_once "../App/Views/$view.php";
    }
}