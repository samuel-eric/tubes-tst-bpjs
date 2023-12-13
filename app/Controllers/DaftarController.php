<?php

namespace App\Controllers;

class DaftarController extends BaseController
{
    public function index(): string
    {
        return view('header').view('daftar').view('footer');
    }
}
