<?php

namespace App\Controllers\Info;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
}
