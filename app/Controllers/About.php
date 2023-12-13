<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index(): string
    {
        if(session()->has('nama_user')) {
            return view('headerAfterLogin').view('about').view('footer');
        } else {
            return view('headerBeforeLogin').view('about').view('footer');
        }
    }
}
