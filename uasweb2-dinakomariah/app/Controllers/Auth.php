<?php

namespace App\Controllers;

class Auth extends BaseController
{


    public function login(): string
    {
        return view('login');
    }
}
