<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index(): string
    {
        return view('header').view('about').view('footer');
    }
}
