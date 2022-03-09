<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('template/header');
        echo view('home');
        echo view('template/footer');
    }
    public function page($page='home'){
        echo view('template/header');
        echo view($page);
        echo view('template/footer');
    }
}
