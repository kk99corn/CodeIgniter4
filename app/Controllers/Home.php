<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
    }

    public function index()
    {
        phpinfo();
        // return view('welcome_message');
    }

    public function page(): string
    {
        log_message('error', __CLASS__ . ' > ' . __FUNCTION__ . '(' . __LINE__ . ') > ' . 'abc');
        return '1111111111111112111111';
    }
}
