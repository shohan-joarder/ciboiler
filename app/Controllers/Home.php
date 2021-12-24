<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
        // service('auth');
    }
    public function index()
    {
        return redirect()->to(base_url('login'));
        // return view('welcome_message');
    }
}
