<?php

namespace App\Controllers;

class Sign extends BaseController
{

    public function index(): string
    {
        helper(['form', 'url']);

        if (!$this->validate([])) {
            return view('sign/Signup', [
                'validation' => $this->validator,
            ]);
        }

        return view('sign/Success');
    }

    public function test(): string
    {

        return "test page";
    }
}
