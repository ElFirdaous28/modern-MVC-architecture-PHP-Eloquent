<?php

namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller
{
    public function welcome()
    {
        $this->view('welcome', ['title' => 'Welcome Page', 'message' => 'Hello, Framework!']);
    }

    public function adminHome()
    {
        $this->view('Admin/AdminHome');
    }
    public function userHome()
    {
        $this->view('User/UserHome');
    }
}
