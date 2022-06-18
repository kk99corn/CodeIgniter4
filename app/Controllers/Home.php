<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function page(): string
    {
        return '111111111111111111111';
    }
}
