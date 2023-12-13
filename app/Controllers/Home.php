<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        if(session()->has('nama_user')) {
            return view('headerAfterLogin').view('homepage').view('footer');
        } else {
            return view('headerBeforeLogin').view('homepage').view('footer');
        }
    }
}
