<?php

namespace App\Controllers;

use App\Core\Controller;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $this->view('welcome');
    }
}
