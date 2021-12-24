<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function __construct()
    {
    //    filter('auth');
    }

    public function index()
    {
        return view("dashboard");
    }
}
