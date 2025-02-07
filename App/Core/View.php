<?php

namespace App\Core;

class View
{
    public static function render($view, $data = [])
    {
        extract($data);

        ob_start();
        require_once "../App/Views/$view.php";
        $templateContent = ob_get_clean();
        $templateContent = str_replace('@csrf', '<input type="hidden" name="csrf_token" value="' . Security::generateCSRFToken() . '">', $templateContent);

        echo $templateContent;
    }
}
